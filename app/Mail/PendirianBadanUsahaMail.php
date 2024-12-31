<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PendirianBadanUsahaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public string $namaLengkap,
        public string $nomorTelepon,
        public string $namaPaket,
        public string $namaPerusahaan,
        public string $paketPendirian,
        // public string $isiSubjek = 'Pendirian Badan Usaha',
    )
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Sesorang tertarik dengan paket {$this->namaPaket}",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.pendirian-badan-usaha-mail',
            with: [
                'namaLengkap' => $this->namaLengkap,
                'nomorTelepon' => $this->nomorTelepon,
                'namaPaket' => $this->namaPaket,
                'namaPerusahaan' => $this->namaPerusahaan,
                'paketPendirian' => $this->paketPendirian,
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
