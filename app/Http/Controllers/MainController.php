<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
class MainController extends Controller
{
    // METODO HOME:
    public function home(){

        $persons = Person::orderby('created_at', 'DESC')->get();
      
        return view('pages.home', compact ('persons'));
    }

    // METODO SHOW:
    public function showPerson(Person $person){

        return view('pages.showPerson', compact('person'));
    }

    // METODO DELETE:
    public function deletePerson(Person $person){

        $person->delete();

        return redirect()->route('home');
    }

    // METODO CHE MI RITORNA IL FORM:
    public function createNewPerson(){
        return view('pages.createPerson');
    }

    // METODO PER RICEZIONE DATI FORM:
    public function personStore(Request $request){

        // validazione:
        // $data = $request->validate([
        //     'firstName' => 'required|string|max:32',
        //     'lastName' => 'required|string|max:32',
        //     'dateOfBirth'=> 'required|date',
        //     'height' => 'nullable|integer|min:0|max:200'
        // ]);
        $data = $request->all();

        $person = new Person();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

	    $person -> save();

	    return redirect() -> route('home');
    }
}

