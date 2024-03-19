<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index (){
        $clients= Client::all();
        return view('dashboard',["clients"=>$clients]);
    }
    public function store(Request $request)
    {
        $userID = 1;

        $data = $request->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'address' => 'required',
                'phoneNumber' => 'required'

            ]
        );
        $data['userID'] = $userID;
        $newClient = Client::create($data);
        return redirect(route('dashboard'));
    }
}
