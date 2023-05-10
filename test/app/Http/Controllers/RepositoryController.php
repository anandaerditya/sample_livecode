<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function index ()
    {
        $headers = array(
            'Content-Type: application/json'
        );
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/repositories');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $exec = curl_exec($curl);

        dd($exec);
    }
}
