<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreAnnounceRequest;
use App\Http\Requests\UpdateAnnounceRequest;

class AnnounceController extends Controller
{
    public function index() {
        $data = new Announce();

        return view('Home', [
            "data" => $data->list()
        ]);
    }

    /**
     * Function show()
     * Condition => Recevoir id de 
     */
    public function show(Request $resquest, $id) {
        $result = Announce::findOrFail($id);
            
        return view("Announce", [
            "annonce" => $result
        ]);
    } 

    /**
     * Function create()
     */
     public function create(Request $request) {
        if($request->method() !== "POST") {
            echo "Vous n'avez pas accès à cette page";
        } 

       $request->validate([
           'title' => 'required',
           'description' => 'required',
           'type' => 'required'
       ]);

        Announce::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type
        ]);

        return redirect('/')->with('status', 'Votre annonce a été crée avec succès.');
     }
}
