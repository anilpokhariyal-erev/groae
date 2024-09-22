<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class WrongPasswordNotification extends Notification
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
        $datetime = Carbon::now()->format('Y-m-d H:i:s');
        $user = $notifiable;

        return (new MailMessage)->subject('Failed login attempt')
            ->greeting('Dear '.$user->name.',')
            ->line('Someone tried to log in to your account using an incorrect password on '.$datetime.'.')
            ->line('If this was you, please ignore this email. Otherwise, please reset your password immediately to protect your account.');
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
