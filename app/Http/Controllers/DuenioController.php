<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuenioController extends Controller
{
    public function index(){

{
    /*


    $client = new Client();

    $response = $client->request('GET', 'https://');

    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();

    // Puedes procesar la respuesta según tus necesidades
    return response($body, $statusCode)->header('Content-Type', 'application/json');
}

*/
    // Puedes procesar la respuesta según tus necesidades

}

        return view('Duenios');
    }

    public function create(){


        return view('DueniosCrear');


    }

    public function Store(Request $request){




    }




}
