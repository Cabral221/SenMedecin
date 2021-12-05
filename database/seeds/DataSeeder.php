<?php

use App\Models\Pev;
use App\Models\Vat;
use App\Models\Info;
use App\Models\TypeAppointment;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Info::create([
            'address' => 'Siege social no 1234, Dakar Sénégal',
            'phone' => '+33 824 29 10',
            'email' => 'contact@axxunjurel.com',
        ]);

        TypeAppointment::create(['libele' => 'CPN']);
        TypeAppointment::create(['libele' => 'Suivis']);
        TypeAppointment::create(['libele' => 'Accouchement']);
        TypeAppointment::create(['libele' => 'Vaccinal']);

        
        // VAT : CPN
        Vat::insert([
            ['vaccin' => 'VAT 1', 'period_month' => 0],
            ['vaccin' => 'VAT 2', 'period_month' => 1],
            ['vaccin' => 'VAT 3', 'period_month' => 7],
            ['vaccin' => 'VAT 4', 'period_month' => 19],
            ['vaccin' => 'VAT 5', 'period_month' => 31],
        ]);

        // PEV : Vaccinal
        Pev::insert([
            ['vaccin' => 'BCG + Hépatite B1', 'period_month' => 0],
            ['vaccin' => 'Hépatite B2', 'period_month' => 1],
            ['vaccin' => '1ère injection de pentaxim (DTCP Hib)', 'period_month' => 2],
            ['vaccin' => '2ème injection de pentaxim (DTCP Hib)', 'period_month' => 3],
            ['vaccin' => '3ème injection de pentaxim (DTCP Hib)', 'period_month' => 4],
            ['vaccin' => 'Hépatite B3', 'period_month' => 8],
            ['vaccin' => 'ROR 1', 'period_month' => 9],
            ['vaccin' => 'Fièvre jaune', 'period_month' => 12],
            ['vaccin' => 'ROR 2', 'period_month' => 15],
            ['vaccin' => 'Pentaxim 1er rappel (DTCP Hib)', 'period_month' => 16],
            ['vaccin' => 'Avaxim 1 (Hépatite A)', 'period_month' => 18],
            ['vaccin' => 'Meningo A + C - Tymphim vi - Pneumo 23', 'period_month' => 24],
            ['vaccin' => 'ROR - Meningo A + C - Tymphim vi', 'period_month' => 60],
            ['vaccin' => 'Tétraxim', 'period_month' => 72],
            ['vaccin' => 'Meningo A + C - Tymphim vi', 'period_month' => 96],
            ['vaccin' => 'Tétraxim - Meningo A + C - Tymphim vi', 'period_month' => 132],
            ['vaccin' => 'Tétraxim', 'period_month' => 192],
        ]);
    }
}
