<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Reservation;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class AdminController extends Controller
{
    //
    public function login_page()
    {
        return view('sign-in');
    }

    public function reservations()
    {
        $reservations =  Reservation::all();
        return view('admin.reservations',compact('reservations'));
    }
    public function utilisateurs()
    {
        $users =  User::all();
        return view('admin.utilisateurs',compact('users'));
    }
    public function ecoles()
    {
         $schools=  School::all();
        return view('admin.ecoles',compact('schools'));
    }

    public function parametres()
    {
        $parameters=  Parameter::all();
        return view('admin.parametres',compact('parameters'));
    }

    public function ajouter_ecole()
    {
            return view('admin.add.ecoles');
    }

    public function ajouter_utilisateur()
    {
        return view('admin.add.utilisateurs');
    }

    public function add_school(Request $request)
    {
       /* $validator = $request->validate([
            'name' => 'required|string|max:255',
            'Acronym' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        dd('ok');

        if (!$validator) {
            return back()->withErrors($validator)->withInput();
        }*/

        School::create([
            'name' => $request->input('name'),
            'Acronym' => $request->input('email'),
            'location' => $request->input('password'),
        ]);
        Flashy::message(__('Ecole enrégistrée avec sussès'));
        return redirect()->route('admin.ecoles');
    }

    public function add_user(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
                'email.unique' => 'cette valeur a déjà été utilisée',
            ]
        );

        if (!$validator) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        Flashy::message(__('Utilisateur enrégistré avec sussès'));
        return redirect()->route('admin.utilisateurs');

    }

    public function update_school($id)
    {
        $school = School::find($id);
        return view('admin.update.ecoles',compact('school'));
    }

    public function do_update_school($id,Request $request)
    {

        $school = School::find($id);
        $school->name = $request->name;
        $school->Acronym = $request->accronym;
        $school->location = $request->location;
        $school->save();

        Flashy::message(__('Ecole modifiée avec sussès'));
        return redirect()->route('admin.ecoles');
    }


}
