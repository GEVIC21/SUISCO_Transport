<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateConsignmentRequest;
use App\Http\Requests\CreateSubscriptionRequest;
use App\Models\Consignment;
use App\Models\Parameter;
use App\Models\School;
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


    public function store_subscription(CreateSubscriptionRequest $request)
    {
        $input = $request->all();
        dd($input);

      $subscription = Subscription::create($input);

        $input += ['subscription_id' => $subscription->id];
        SubscriptionHistory::create($input);

        Flashy::message(__('Subscription saved successfully.') . ' ' . __('We will contact you as soon as possible.'));
        return redirect()->back();

    }

    public function store_consignment(CreateConsignmentRequest $request)
    {
        $input = $request->all();

        Consignment::create($input);

        Flashy::message(__('Consignment saved successfully.') . ' ' . __('We will contact you as soon as possible.'));
        return redirect()->back();
    }
}
