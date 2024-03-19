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
        // $userID = Auth::user();

        $data = $request->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'address' => 'required',
                'phoneNumber' => 'required'

            ]
        );
        // $data['userID'] = $userID;
        $newClient = new Client;
        $data = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required'
        ]);
        
        $newClient = new Client;
        $newClient->firstName = $data['firstName'];
        $newClient->lastName = $data['lastName'];
        $newClient->address = $data['address'];
        $newClient->phoneNumber = $data['phoneNumber'];
        $newClient->UserID=1;
        $newClient->save();
        

        // $newClient = Client::create($data);
        return redirect(route('dashboard'));
    }
}
