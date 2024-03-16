<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->view('emails.contact_form_submitted')
            ->with('name', $this->formData['name'])
            ->with('email', $this->formData['email'])
            ->with('phone', $this->formData['phone'])
            ->with('website', $this->formData['website'])
            ->with('messageContent', $this->formData['message']);
    }

}
