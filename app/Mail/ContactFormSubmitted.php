<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public ?string $phone;
    public string $messageContent;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $email
     * @param string|null $phone
     * @param string $messageContent
     */
    public function __construct($name, $email, $phone, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->messageContent = $messageContent;
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\Mail\Mailable
     */
    public function build()
    {
        return $this->subject('Nový email z formuláře - knomi.cz')
                    ->markdown('emails.contact-form');
    }
}
