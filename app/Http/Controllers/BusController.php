<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateConsignmentRequest;
use App\Http\Requests\CreateSubscriptionRequest;
use App\Models\Consignment;
use App\Models\Parameter;
use App\Models\Reservation;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\SubscriptionHistory;
use MercurySeries\Flashy\Flashy;

class BusController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $mutual_price = Parameter::whereLabel(Parameter::BUS_MUTUAL_PRICE)->first()->value;
        $standard_price = Parameter::whereLabel(Parameter::BUS_STANDARD_PRICE)->first()->value;
        $premium_price = Parameter::whereLabel(Parameter::BUS_PREMIUM_PRICE)->first()->value;
        $schools = School::all();

        return view('index', compact('mutual_price', 'standard_price', 'premium_price','schools'));
    }

    public function submitForm(Request $request)
    {
        // Valider les données si nécessaire
        $validated = $request->validate([
            'service_evaluation' => 'required|string',
            'school_address_evaluation' => 'required|string',
            'departure_address_evaluation' => 'nullable|string',
            'arrive_address_evaluation' => 'nullable|string',
            'distance_address_evaluation' => 'nullable|string',
            'trajectory' => 'required|string',
            'phoneInput' => 'required|string',

        ]);
        //  dd($validated);

        // Traitez les données comme vous le souhaitez
        // Exemple : enregistrer les données dans la base de données, envoyer un email, etc.

         // Rechercher le nom de l'école à partir de l'adresse
        $school = School::where('location', $request->school_address_evaluation)->first();

        if ($school) {
            $schoolName = $school->name;
        } else {
            // Si l'école n'est pas trouvée, vous pouvez gérer cette situation ici
            // Par exemple, retourner une erreur ou une valeur par défaut
            $schoolName = 'Nom de l\'école inconnu'; // ou bien gérer cela autrement
        }

        // Redirection ou réponse après traitement
        $subscription = Reservation::create(
            [
                'service' => $request->service_evaluation,
               'phone_numbre' => $request->phoneInput,
                 'house_location' => $request->departure_address_evaluation,
                'school_location' => $schoolName,
                'route' => $request->trajectory,
                ]
        );
      //Flashy::message(__('Reservation enrégistrer avec sussès') . ' ' . __('Nous vous contacterons le plutôt possible.'));
        return redirect()->back()->with('success', 'Reservation enrégistrée avec sussès. Nous vous contacterons le plutôt possible.');
    }



    public function store_subscription(Request $request)
    {
        
       /* $validator = $this->validate($request, [
            'service' => 'required',
            'house_location' => 'required',
            'school_location' => 'required',
            'trajectory' => 'required',
            'phone_numbre' => 'required',
        ]
            , [
                'service.required' => 'Ce champ est obligatoire',
                'phone_numbre.required' => 'Ce champ est obligatoire',
            ]
        );


        if (!$validator) {
            Flashy::warning($validator->messages());
            return back()->withErrors($validator)->withInput();
        }*/

        $school = School::where('location', $request->school_address)->first();

        if ($school) {
            $schoolName = $school->name;
        } else {
            // Si l'école n'est pas trouvée, vous pouvez gérer cette situation ici
            // Par exemple, retourner une erreur ou une valeur par défaut
            $schoolName = 'Nom de l\'école inconnu'; // ou bien gérer cela autrement
        }

          $subscription = Reservation::create(
              [
                  'service' => $request->service,
                  'house_location' => $request->home_address,
                  'school_location' => $schoolName,
                  'route' => $request->trajectory,
                  'phone_numbre' => $request->phone_number,
                  ]
          );
       // Flashy::message(__('Reservation enrégistrée avec sussès') . ' ' . __('Nous vous contacterons le plutôt possible.'));
        return redirect()->back()->with('success', 'Reservation enrégistrée avec sussès. Nous vous contacterons le plutôt possible.');

    }

    public function store_consignment(Request $request)
    {
        Consignment::create(
            [
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'seats_number' => $request->seats_number,
                'children_number' => $request->children_number

            ]
        );
        Flashy::message(__('Consignation enrégistrée avec sussès') . ' ' . __('Nous vous contacterons le plutôt possible.'));
        return redirect()->back();
     }
    }




