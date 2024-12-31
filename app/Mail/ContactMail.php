<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $vcfContent;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public string $userName,
        public string $userEmail,
        public string $userPhone,
        public string $namaPerusahaan,
        public string $userJabatan,
        public string $isiSubjek,
        public string $url,
    ) {
        // create vcf file
        $vCardContent = "BEGIN:VCARD\n";
        $vCardContent .= "VERSION:3.0\n";
        $vCardContent .= "FN:{$userName}\n";
        $vCardContent .= "ORG:{$namaPerusahaan}\n";
        $vCardContent .= "TITLE:{$userJabatan}\n";
        $vCardContent .= "EMAIL:{$userEmail}\n";
        $vCardContent .= "TEL:{$userPhone}\n";
        $vCardContent .= 'END:VCARD';
        $this->vcfContent = $vCardContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->isiSubjek,
            replyTo: [
                new Address($this->userEmail, $this->userName),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact',
            // view: 'mail.contact2',
            with: [
                'userEmail' => $this->userEmail,
                'url' => $this->url,
                'userName' => $this->userName,
                'userPhone' => $this->userPhone,
                'namaPerusahaan' => $this->namaPerusahaan,
                'userJabatan' => $this->userJabatan,
                'isiSubjek' => $this->isiSubjek,
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
        return [
            Attachment::fromData(fn () => $this->vcfContent, 'contact.vcf')
                ->withMime('text/vcard'),
        ];
    }
}
