<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendRecu extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $pdf;
    public $contact=[];
    // public $arrContextOptions=array(
    //     "ssl"=>array(
    //         "verify_peer"=>false,
    //         "verify_peer_name"=>false,
    //     ),
    // );  
  
    public function __construct(Array $contact,$pdf)
    {
       $this->contact = $contact;
     $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        
        return $this->view('emails.sendRecu')
            ->attachData($this->pdf->output(), 'recu_payement.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
