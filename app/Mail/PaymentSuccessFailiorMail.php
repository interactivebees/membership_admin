<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessFailiorMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        if($this->info['order_status'] == 'Success'){
            return new Envelope(
                subject: 'Membership Success Mail',
                from: new Address('program@caho.in', 'Caho')
            );
        }else{
            return new Envelope(
                subject: 'Membership Failior Mail',
                from: new Address('program@caho.in', 'Caho')
            );
        }
        
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        if($this->info['order_status'] == 'Success'){
            return new Content(
                view: 'mail.membership.success',
            );
        }else{
            return new Content(
                view: 'mail.membership.failior',
            );
        }
        
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
