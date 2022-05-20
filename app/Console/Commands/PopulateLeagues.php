<?php

namespace App\Console\Commands;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;

class PopulateLeagues extends Command
{
    protected $signature = 'populate:leagues';

    public function handle()
    {
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->get('https://www.dota2.com/webapi/IDOTA2League/GetLeagueInfoList/v001');

        } catch (GuzzleException $exception) {

        }

    }
}
