<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class RequestProcessDocumentNotification extends Notification
{

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
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
        $user = $notifiable;

        return (new MailMessage)->subject('Request Detail and Documents')
            ->greeting('Dear '.$user->name.',')
            ->line('To proceed with your registration, we require additional details and specific documents. Please submit your detail below.')
            ->action('Submit Your Detail', url('/submit-your-detail'));
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
