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
                                                //NUMERO DE :
              $usuario->update(["num_h" => 50]); //herederos
              $usuario->update(["num_t" => 25]); // txt editable
              $usuario->update(["num_i" => 20]); // imagenes
              $usuario->update(["num_f" => 15]); // files
              $usuario->update(["num_a" => 20]); // audio
              $usuario->update(["num_v" => 5]); // video (3min) 

            }
              elseif($plan->name== "Premium"){
              $usuario->update(["num_h" => 15]);
              $usuario->update(["num_t" => 15]); // txt editable
              $usuario->update(["num_i" => 10]);
              $usuario->update(["num_f" => 5]);
              $usuario->update(["num_a" => 8]);
              }
              else{
              $usuario->update(["num_h" => 3]);
              $usuario->update(["num_t" => 5]); // txt editable
              }
          
            
// subscribe the user
          $request->user()->newSubscription($plan->name,     $plan->braintree_plan)->create($request->payment_method_nonce);
// redirect to home after a successful subscription
          return redirect('home');
    }
}
