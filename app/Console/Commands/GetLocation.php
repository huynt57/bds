<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetLocation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:location';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        //https://maps.googleapis.com/maps/api/geocode/json?address=H%C3%A0%20N%E1%BB%99i&key=AIzaSyC5_oqCsJvZdLWEadt934vSKipvwhIDFNY

        $provinces = \DB::table('district')->whereNull('lat')->whereNull('lng')->get();

        foreach ($provinces as $province) {
            $address = $province->name;
            $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=AIzaSyC5_oqCsJvZdLWEadt934vSKipvwhIDFNY';


            $json = file_get_contents($url);

            $data = json_decode($json, true);

            $results = $data['results'];
            if(isset($results[0])) {
                $lat = $results[0]['geometry']['location']['lat'];
                $lng = $results[0]['geometry']['location']['lng'];

                \DB::table('district')->where('districtid', $province->districtid)->update([
                    'lat' => $lat,
                    'lng' => $lng
                ]);
            }


        }

    }
}
