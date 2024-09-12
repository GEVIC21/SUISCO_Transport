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
          $subscription = Reservation::create(
              [
                  'service' => $request->service,
                  'house_location' => $request->home_address,
                  'school_location' => $request->school_address,
                  'route' => $request->trajectory,
                  'phone_numbre' => $request->phone_number,
                  ]
          );
        Flashy::message(__('Reservation enrégistrée avec sussès') . ' ' . __('Nous vous contacterons le plutôt possible.'));
        return redirect()->back();
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




