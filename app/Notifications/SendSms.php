<?php

namespace App\Notifications;

use App\Services\Appointment\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class SendSms extends Notification
{
    use Queueable;

    private $appointment;
    
    /**
    * Create a new notification instance.
    *
    * @return void
    */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }
    
    /**
    * Get the notification's delivery channels.
    *
    * @param  mixed  $notifiable
    * @return array
    */
    public function via($notifiable)
    {
        return ['nexmo', 'database'];
    }
    
    /**
    * Get the mail representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return \Illuminate\Notifications\Messages\MailMessage
    */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }
    
    /**
    * Get the array representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return array
    */
    public function toArray($notifiable)
    {
        return [
            'patient_id' => $notifiable->id,
            'appointment' => $this->appointment->id,
            'type' => 'PRERAPPEL',
            'read' => true
        ];
    }

    /**
    * Get the array representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return array
    */
    public function toDatabase($notifiable)
    {
        return [
            'patient_id' => $notifiable->id,
            'appointment' => $this->appointment->id,
            'type' => 'PRERAPPEL',
            'read' => true
        ];
    }
    
    /**
    * Get the Nexmo / SMS representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return NexmoMessage
    */
    public function toNexmo($notifiable)
    {

        return (new NexmoMessage)
            ->content('Ceci est est message de test depuis axxunjurel.com');
    }
}
