<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class enviaOportunidade extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to($this->email[0]);
        return $this->markdown('emails.oportunidade',['resumo'=>$this->email[1],'entendendo'=>$this->email[2],'posicao'=>$this->email[3],'estimativas'=>$this->email[4]]);
    }
}
