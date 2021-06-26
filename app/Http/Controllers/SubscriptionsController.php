<?php

namespace App\Http\Controllers;
use App\Plan;
use App\User;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {
          // get the plan after submitting the form
          $plan = Plan::findOrFail($request->plan);

          $usuario = User::find(auth()->id());
            
            $usuario->update(["tip_usu" => $plan->name]);
            if($plan->name== "VIP"){
              
              $usuario->update(["num_h" => 50]);
            }
              elseif($plan->name== "Premium"){
              $usuario->update(["num_h" => 15]);
              }
              else{
              $usuario->update(["num_h" => 3]);
              }
          
            
// subscribe the user
          $request->user()->newSubscription($plan->name,     $plan->braintree_plan)->create($request->payment_method_nonce);
// redirect to home after a successful subscription
          return redirect('home');
    }
}
