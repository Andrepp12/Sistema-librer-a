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
use Illuminate\Support\Facades\Mail;
class Publicidad extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Publicidad',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'enviacorreo',
        );
    }
    public function enviaCorreoSegmento($correo, $archivo)
    {
        
    
        
        $mailable = new Publicidad();
        $mailable ->view('enviacorreo');
        Mail::to($correo)->send($mailable);

        $segmento = segmento::findorfail($archivo);


        if ($segmento) {
            // Accede a los atributos de la fila obtenida
            $dashboard = $segmento->idDasbhboard;
            // ...
        }
        $dashboardRuta = dashboard::findorfail($dashboard);
        $ruta =  $dashboardRuta->pdf;
        //dd($ruta);

        $rutaArchivo = public_path($ruta);
            
        $mailable2 = new Publicidad();
        $mailable2->attach($rutaArchivo);

        Mail::to($correo)
            ->send($mailable2);

            return redirect()->route('publicidad.index');
        
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
