<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;
class AppController extends Controller
{
    public function index() {
        return view('index');
    }

    public function inscription(Request $request) {
        $request->validate([
            'email' => 'required|unique:inscriptions',
            'nom' => 'required',
            'prenom' => 'required'
        ]);
        
        Inscription::create($request->except('token'));

        return redirect('/')->with('message','Félicitations vous vous êtes correctement inscrits .');
        
    }
}
