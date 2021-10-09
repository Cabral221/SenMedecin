<?php

namespace App\Console\Commands;

use App\Jobs\SendPrerappelSms;
use App\Services\Appointment\Appointment;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendPrerappel extends Command
{
    /**
    * The name and signature of the console command.
    *
    * @var string
    */
    protected $signature = 'send:prerappel';
    
    /**
    * The console command description.
    *
    * @var string
    */
    protected $description = 'Envoie un sms de rappel au patient deux jour avant le RV';
    
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
        // recuperer l'ensemble des patient qui doivent recevoir un rappel 48 avant
        $appointments = Appointment::whereDate('date', Carbon::today()->addDays(2))
                                    ->where('passed', false)
                                    ->get();
        
        // Parcourir les patients et les notifier par smms
        foreach($appointments as $appointment) {
            SendPrerappelSms::dispatch($appointment)->onQueue('sms');
        }

        return 0;
    }
}
