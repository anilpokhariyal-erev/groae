<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificationCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $verificationCode;
    public $name;

    /**
     * Create a new message instance.
     */
    public function __construct($verificationCode, $name)
    {
        $this->verificationCode = $verificationCode;
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verify Your Email Address for GroAE'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Set the header and body content for the template
        $headerText = "Welcome To GroAE!";
        $bodyText = "Hi {$this->name},<br><br>";
        $bodyText .= "Thank you for joining Groae! We are thrilled to<br>";
        $bodyText .= "have you with us. To Complete your registration,<br>";
        $bodyText .= "please verify your email address by clicking the <br>";
        $bodyText .= "button below:<br><br>";
        $bodyText .= "<a href='{$this->verificationCode}'><button style=\"background-color: #304a6f; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;\">Verify My Email</button></a><br>";
        $bodyText .= "If you did not create an account, no action is<br>";
        $bodyText .= "required, and you can safely ignore this email<br>";
        $bodyText .= "Need help ? Feel free to contact us anytime.<br>";
        $bodyText .= "<b>Regards</b>,<br>";
        $bodyText .= "<b>Team GroAE</b>";

        return new Content(
            view: 'frontend.email.email_template', // Ensure this points to your template
            with: [
                'headerText' => $headerText,
                'bodyText' => $bodyText,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
