<?php

namespace App\Http\Controllers;
use App\Models\Influencer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $influencers = Influencer::limit(6)->get();

        return view('home', [
            "influencers" => $influencers,
        ]);
    }
}
