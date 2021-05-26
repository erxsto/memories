<?php

namespace App\Http\Controllers;
use App\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::get();
        return view('plans.index', compact('plans'));
    }
    public function show(Plan $plan)
    {
        return view('plans.show')->with(['plan' => $plan]);
    }
            
}