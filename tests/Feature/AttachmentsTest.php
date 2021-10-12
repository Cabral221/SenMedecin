<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\Attachment;
use Illuminate\Http\UploadedFile;
use Illuminate\Testing\TestResponse;

class AttachmentsTest extends TestCase
{
    public function tearDown() : void
    {
        parent::tearDown();
        $this->cleanDirectories();
    }

    /**
     * @param array<string> $attachment
     * @return string
     */
    private function getFileForAttachment(array $attachment) : string
    {
        return dirname(__DIR__) . '/fixtures/uploads/'.$attachment['name'];
    }

    /**
     * @param array<string, mixed> $data
     * @return TestResponse
     */
    private function callController(array $data = []) : TestResponse
    {
        $path = dirname(__DIR__) . '/fixtures/demo.png';
        $file = new UploadedFile($path,'demo.png','image/png',null,true);
        $post = Post::create(['title' => 'Demo','content' => 'Demo']);
        $defaults = [
            'attachable_type'  => Post::class,
            'attachable_id' => $post->id,
            'image' => $file
        ];
        return $this
        ->withHeaders([
            'X-Requested-With' => 'XMLHttpRequest',
        ])
        ->json('POST',route('attachments.store'),array_merge($defaults,$data));
    }

    public function testIncorrectDataAttachableType() : void
    {
        $response = $this->callController(['attachable_type' => 'POOOO']);
        $response->assertJsonStructure(['attachable_type']);
        $response->assertStatus(422);
    }

    public function testIncorrectDataAttachableId() : void
    {
        $response = $this->callController(['attachable_id' => 3]);
        $response->assertJsonStructure(['attachable_id']);
        $response->assertStatus(422);
    }

    public function testCorrectData() : void
    {
        $response = $this->callController();
        $attachment = $response->json();

        $this->assertFileExists($this->getFileForAttachment($attachment));
        $response->assertJsonStructure(['id','url']);
        $this->assertStringContainsString('/uploads', $attachment['url']);
        $response->assertStatus(201);
    }

    public function testDeleteAttachmentDeleteFile() : void
    {
        $response = $this->callController();
        $attachment = $response->json();
        $this->assertFileExists($this->getFileForAttachment($attachment));
        Attachment::find($attachment['id'])->delete();
        $this->assertFileDoesNotExist($this->getFileForAttachment($attachment));
    }

    public function testDeletePostDeleteAllAttachments() : void
    {
        $response = $this->callController();
        $attachment = $response->json();
        factory(Attachment::class,3)->create();
        $this->assertFileExists($this->getFileForAttachment($attachment));
        $this->assertEquals(4,Attachment::count());
        Post::first()->delete();
        $this->assertFileDoesNotExist($this->getFileForAttachment($attachment));
        $this->assertEquals(3,Attachment::count());
    }

    public function testChangePostContentAttachmentAreDeleted() : void
    {
        $response = $this->callController();
        $attachment = $response->json();
        factory(Attachment::class,3)->create();
        $this->assertFileExists($this->getFileForAttachment($attachment));
        $this->assertEquals(4,Attachment::count());
        $post = Post::first();
        $post->content = "<img src=\"#{$attachment['url']}\"/> bla bla bla ";
        $post->save();
        $this->assertEquals(4,Attachment::count());
        $post->content = "";
        $post->save();
        $this->assertEquals(3,Attachment::count());
        $this->assertFileDoesNotExist($this->getFileForAttachment($attachment));
    }

    public function testChangePostContentAttachmentAreDeletedIfImageChange() : void
    {
        $response = $this->callController();
        $attachment = $response->json();
        factory(Attachment::class,3)->create();
        $this->assertFileExists($this->getFileForAttachment($attachment));
        $this->assertEquals(4,Attachment::count());
        $post = Post::first();
        $post->content = "<img src=\"#{$attachment['url']}\"/> bla bla bla ";
        $post->save();
        $this->assertEquals(4,Attachment::count());
        $post->content = "<img src=\"azeaze/aeazeaze/azeaze.jpg\"/>";
        $post->save();
        $this->assertEquals(3,Attachment::count());
        $this->assertFileDoesNotExist($this->getFileForAttachment($attachment));
    }
}