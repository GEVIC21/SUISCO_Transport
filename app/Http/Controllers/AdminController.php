<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Reservation;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;

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


}
