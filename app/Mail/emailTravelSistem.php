<?php

namespace App\Mail;

use App\Models\Budget;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class emailTravelSistem extends Mailable
{
    use Queueable, SerializesModels;

    private $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Budget $client)
    {
        $this->client = $client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Cotação do Site Travel Agency');
        $this->to(env('APP_EMAIL'), "Site Travel-Agency");
        $this->bcc('dflugann@gmail.com', 'Flavio Dflugann');

        return $this->markdown('mail.emailTravelSistem', [
            'client' => $this->client,
            'date_in' => date('d/m/Y', strtotime($this->client->checkout_in_date_budgets)),
            'date_out' => date('d/m/Y', strtotime($this->client->checkout_out_date_budgets))
        ]);
    }
}
