<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordResetNotification extends Notification
{

    public $email;

    /**
     * Create a new notification instance.
     */
    public function __construct($email)
    {
        $this->email = $email;
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

        return (new MailMessage)->subject('Password Reset Request')
            ->line('User with email id "'.$this->email.'" has requested for reset password at '.$datetime.'.');
    }
}
