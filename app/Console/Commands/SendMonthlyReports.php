<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Dossier;
use App\Mail\MonthlyReports;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMonthlyReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reports:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send monthly reports to administrators';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dossiers = Dossier::whereMonth('created_at', Carbon::now()->subMonth()->month) // Par exemple, pour le mois dernier
        ->get();

        $administrators = User::all();

         // Envoyer les emails aux administrateurs
         foreach ($administrators as $administrator) {
            Mail::to($administrator->email)->send(new MonthlyReports($dossiers));
        }

    }
}
