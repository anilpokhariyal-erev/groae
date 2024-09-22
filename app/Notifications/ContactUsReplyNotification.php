<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ContactUsReplyNotification extends Notification
{

    public $first_name;

    public $message;

    /**
     * Create a new notification instance.
     */
    public function __construct($first_name, $message)
    {
        $this->first_name = $first_name;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->subject('Response to your inquiry from Groae')
            ->greeting('Dear '.$this->first_name.',')
            ->line($this->message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
