<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Reservation;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Validator;


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

    public function do_update_user(Request $request,$id)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'confirmed',
        ]);

        if (!$validator) {
            return back()->withErrors($validator)->withInput();
        }
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->password)
        {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        Flashy::message(__('Utilisateur modifie avec sussès'));
        return redirect()->route('admin.utilisateurs');

    }

    public function update_school($id)
    {
        $school = School::find($id);
        return view('admin.update.ecoles',compact('school'));
    }
    public function update_utilisateur($id)
    {
        $user = User::find($id);
        return view('admin.update.utilisateurs',compact('user'));
    }

    public function update_parametre($id)
    {
        $school = School::find($id);
        $parametre= Parameter::find($id);
        return view('admin.update.parametres',compact('school','parametre'));
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
    public function do_update_parameter($id,Request $request)
    {

        $parameter = Parameter::find($id);
        $parameter->value = $request->value;
        $parameter->description = $request->description;
        $parameter->save();

        Flashy::message(__('Ecole modifiée avec sussès'));
        return redirect()->route('admin.parametres');
    }


    public function del_school($id)
    {
        $school =  School::find($id);
        $school->delete();
        Flashy::message(__('Ecole supprimée avec sussès'));
        return redirect()->back();
    }

    public function del_user($id)
    {
        $user =  User::find($id);
        $user->delete();
        Flashy::message(__('Utilisateur supprimée avec sussès'));
        return redirect()->back();
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the intended location
            return redirect()->route('admin.reservations');
        }

        // Authentication failed, redirect back with error
        return Redirect::back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }



}
