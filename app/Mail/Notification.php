<?php

namespace App\Mail;
use App\Models\Segmento;
use App\Models\dashboard;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Mail\NombreMailable;
use App\Models\Cliente;
use Illuminate\Support\Facades\Mail;

class Notification extends Mailable
{

    public $precio ;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
        global $precio; // Declarar la variable global
       
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notification',
        );
    }

    /**
     * Get the message content definition.
     */
     public function content(): Content
    {   
      
            return new Content(
                view: 'mailWel',
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

   

    public function enviarCorreo($correo,$id)
    {
       
        $mailable = new Notification();
        $mailable ->view('mailWel');
        Mail::to($correo)->send($mailable);
        $cliente=Cliente::findorfail($id);
        $cliente->sendCorreo='1';
        $cliente->save();
        return redirect()->route('clientes.index');
        //$rutaArchivo = public_path('EXAM.pdf');

        // $mailable2 = new Notification();
        // $mailable2->attach($rutaArchivo, [
        //     'as' => 'EXAM.pdf',
        //     'mime' => 'application/pdf',
        // ]);

        // Mail::to('t023300220@unitru.edu.pe')
        //  ->send($mailable2);

        // Resto del código o redirección después de enviar el correo...
    }

    public function build()
    {
        //return $this->view('mailWel');
    }
}
