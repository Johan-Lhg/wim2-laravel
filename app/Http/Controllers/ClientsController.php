<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
         $clients = [
         'Jean',
         'Marc',
         'Virginie',
         ];
         return view('clients.index', [
         'clients' => $clients
         ]);
    }

}
