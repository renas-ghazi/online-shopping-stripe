<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Models\Charge;
class Payment extends Controller{
    public function index(){
        // check if user have a order or not`
        $user = Auth::guard('web')->check() ? Auth::guard('web')->user()->id : null;
        $chckOrder = Order::where('quantity','>',0)
        -> where('status' , 0)
        -> where('user_id' , $user)
        -> get();
        if (count($chckOrder) == 0) {
            return redirect()->route('home')->with('noOrder' , 'You have no order to pay');
        }
        return view('components.users.payment');
    }
    public function charge(Request $request){

        $totalPrice = 0;
        $userID = ( Auth::guard('web')->check() ) ? Auth::guard('web')->user() : null;
        $order = Order::with(['product'])->where('quantity','>',0)
        -> where('status' , 0)
        ->where('user_id' , $userID->id)
        ->get();
        foreach ($order as  $value) {
            $totalPrice += $value->product->price * $value->quantity;
        }
        // STRIPE PRICE LIMIT
        if ($totalPrice >= 999999) {
            return redirect()->back()->with('error' , 'The Price Is Too High');
        }

        // check if user have a card or not
        \Stripe\Stripe::setApiKey('stripe_api_sk_paste_here');

            $makeCustomer = \Stripe\Customer::create([
                'email' => $userID->email,
            ]);
            \Stripe\Customer::createSource(
                $makeCustomer['id'],
                ['source' => $request->stripeToken]
            );
            // check if stripe token is valid
            if ( $makeCustomer['id'] == null ) {
                return redirect()->back()->with('error' , 'Invalid Card');
            }

            // charges
            $charge = \Stripe\Charge::create([
                'amount' => $totalPrice * 100,
                'currency' => 'USD',
                'customer' => $makeCustomer['id'],
                'description' => 'Test payment from laravel app',
            ]);

        if ( $charge['status'] == 'failed') {
            return redirect()->back()->with('error' , 'Payment is failed');
        }
        elseif ( $charge['status'] == 'pending' ) {
            return redirect()->back()->with('error' , 'Payment is pending');
        }
        elseif ( $charge['status'] == 'canceled' ) {
            return redirect()->back()->with('error' , 'Payment is canceled');
        }
        elseif ( $charge['status'] == 'requires_action' ) {
            return redirect()->back()->with('error' , 'Payment is requires action');
        }
        elseif ( $charge['status'] == 'requires_payment_method' ) {
            return redirect()->back()->with('error' , 'Payment is requires payment method');
        }
        elseif ( $charge['status'] == 'requires_source' ) {
            return redirect()->back()->with('error' , 'Payment is requires source');
        }
        elseif ( $charge['status'] == 'requires_source_action' ) {
            return redirect()->back()->with('error' , 'Payment is requires source action');
        }
        elseif ( $charge['status'] == 'requires_confirmation' ) {
            return redirect()->back()->with('error' , 'Payment is requires confirmation');
        }
        elseif ( $charge['status'] == 'processing' ) {
            return redirect()->back()->with('error' , 'Payment is processing');
        }
        elseif ( $charge['status'] == 'requires_capture' ) {
            return redirect()->back()->with('error' , 'Payment is requires capture');
        }
        elseif ( $charge['status'] == 'unknown' ) {
            return redirect()->back()->with('error' , 'Payment is unknown');
        }
        elseif ( $charge['status'] == 'voided' ) {
            return redirect()->back()->with('error' , 'Payment is voided');
        }
        elseif ( $charge['status'] == 'incomplete' ) {
            return redirect()->back()->with('error' , 'Payment is incomplete');
        }
        elseif ( $charge['status'] == 'incomplete_expired' ) {
            return redirect()->back()->with('error' , 'Payment is incomplete expired');
        }
        elseif ( $charge['status'] == 'requires_source' ) {
            return redirect()->back()->with('error' , 'Payment is requires source');
        }
        // update status of order
        elseif ( $charge['status'] == 'succeeded') {
            // $saveToCharge = Charge::create([
            //     'user_id' => Auth::user()->id,
            //     'charge_id' => $charge->id,
            //     'order_id' => $order[0]->order_id,
            // ]);
            foreach ($order as  $value) {
                $value->status = 2;
                $value->save();
            }
            $invoice = Invoice::create([
                'user_id' => Auth::user()->id,
                'invoice_id' => mt_rand(11111,99999),
                'order_id' => $order[0]->order_id,
                'status' => 1
            ]);
            return redirect()->route('home')->with('successPayment' , 'Hello, '.Auth::user()->name.'. Thank you for order with [online shopping]. Your payment for
            '.$order[0]->order_id.' has been verified.');
        }
        else{
            return redirect()->back()->with('error' , 'Payment is failed');
        }

    }
}
