<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomerResetPasswordNotification extends Notification
{

    public $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->token = $token;
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

        return (new MailMessage)->subject('Reset Password Notification')
        ->line('You are receiving this email because we received a password reset request for your account.')
        ->action('Reset Password', url(config('app.url').route('customer.password.reset', $this->token, false)))
        ->line('If you did not request a password reset, no further action is required.');
    }
}
