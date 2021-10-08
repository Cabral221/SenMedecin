<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Notifications\SendSms;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\Appointment\Appointment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendPrerappelSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 3;

    private $appointment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $patient = $this->appointment->patient;
        $patient->notify(new SendSms($this->appointment));
    }
}
