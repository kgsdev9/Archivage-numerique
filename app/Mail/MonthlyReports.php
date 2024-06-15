<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MonthlyReports extends Mailable
{
    use Queueable, SerializesModels;

    public $dossiers;

    public function __construct($dossiers)
    {
        $this->dossiers = $dossiers;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.monthly-reports')
        ->subject('Rapports mensuels des dossiers')
        ->attach(public_path('monthly-reports.pdf'))
        ->attach(public_path('monthly-reports.xlsx'));
    }

}
