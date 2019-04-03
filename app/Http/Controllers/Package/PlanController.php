<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Package\Plan;
class PlanController extends Controller
{
    public function rules()
    {
        return [
            'description' => 'required|string|max:255',
            'max_headsets' => 'required|number',
            'life_time' => 'required|string',
            'price' => 'price|number'
        ];
    }
    public function index(){
        $plans = Plan::all();
        return view('landingpage',compact('plans'));
    }
}
