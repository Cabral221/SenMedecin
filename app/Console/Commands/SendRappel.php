<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Jobs\SendRappelSms;
use Illuminate\Console\Command;
use App\Services\Appointment\Appointment;

class SendRappel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:rappel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoie un sms de rappel au patient le jour du RV';

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
     * @return void
     */
    public function handle()
    {
        // recuperer l'ensemble des patient qui doivent recevoir un rappel 
        $appointments = Appointment::whereDate('date', Carbon::today())
                                    ->where('passed', false)
                                    ->get();
        
        // Parcourir les patients et les notifier par smms
        foreach($appointments as $appointment) {
            SendRappelSms::dispatch($appointment)->onQueue('sms');
        }
    }
}
