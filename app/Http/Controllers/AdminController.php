<?php

namespace App\Http\Controllers;

use App\Models\Consignment;
use App\Models\Parameter;
use App\Models\Reservation;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //
    public function login_page()
    {
        return view('admin.add.chauffeur');
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
    public function Consignations()
    {
        $consignations=  Consignment::all();
        return view('admin.consignations',compact('consignations'));
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


    public function do_update_reservation(Request $request,$id)
    {
        $validator = $request->validate([
            'service' => 'required|string|max:255',
            'route' => 'required',
            'phone_numbre' => 'required',
            'distance' => 'required',
            'house_location' => 'required',
            'school_location' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        if (!$validator) {
            return back()->withErrors($validator)->withInput();
        }
        $reservation = Reservation::find($id);
        $reservation->status = $request->status;
        $reservation->price = $request->price;
        $reservation->service = $request->service;
        $reservation->route = $request->route;
        $reservation->save();
        return redirect()->route('admin.reservations');

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

    public function traiter_reservation($id)
    {
        $reservation = Reservation::find($id);
        return view('admin.update.reservations',compact('reservation'));
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




    /////chauffeur
    // Affichage de la liste des chauffeurs
    public function chauffeur()
    {
        $users = User::where('role', 'driver')->get();
        return view('admin.chauffeur', compact('users'));
    }

    /////parent
    // Affichage de la liste des parents
    public function parent()
    {
        $users = User::where('role', 'parent')->get();
        return view('admin.parent', compact('users'));
    }

// Affichage de la page de création de chauffeur
    public function createChauffeur()
    {
        return view('admin.add.chauffeur');
    }

// Ajout d'un nouveau chauffeur
    public function storeChauffeur(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|',
            'voiture' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'voiture' => $request->voiture,
            'role' => 'driver',
        ]);

        return redirect()->route('admin.chauffeur')->with('success', 'Chauffeur ajouté avec succès!');
    }

// Modification d'un chauffeur
    // Affichage de la page de modification du chauffeur
    public function editChauffeur($id)
    {
        $chauffeur = User::findOrFail($id);
        return view('admin.update.chauffeur', compact('chauffeur'));
    }

// Mise à jour du chauffeur
    public function updateChauffeur(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'voiture' => 'required|string|max:255',
        ]);

        $chauffeur = User::findOrFail($id);
        $chauffeur->update([
            'name' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'voiture' => $request->voiture,
        ]);

        return redirect()->route('admin.chauffeur')->with('success', 'Chauffeur modifié avec succès!');
    }


// Suppression d'un chauffeur
    public function deleteChauffeur($id)
    {
        $chauffeur = User::findOrFail($id);
        $chauffeur->delete();
        return redirect()->route('admin.chauffeur')->with('success', 'Chauffeur supprimé avec succès!');
    }

    ///



}
