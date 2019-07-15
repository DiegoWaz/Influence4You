<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Influencer;
use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()) {
            $user = User::where('id', $request->user()->id)->first();
            $user->authorizeRoles(['admin']);
        } else {
            return redirect('/home');
        }


        $influencers = Influencer::all();

        return view('influencer.index', compact('influencers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('influencer.create', compact('influencers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'sexe'=>'required',
            'title'=>'required',
        ]);

        $influencer = new Influencer([
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'title' => $request->get('title'),
            'localization' => $request->get('localization'),
            'languages' => $request->get('languages'),
            'birth' => $request->get('birth'),
            'sexe' => $request->get('city'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
            'youtube' => $request->get('youtube'),
            'website' => $request->get('website'),
            'photo' => $request->get('photo')
        ]);

        $influencer->save();

        return redirect('/influencer')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $influencer = Influencer::find($id);
        return view('influencer.edit', compact('influencer'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'sexe'=>'required',
            'title'=>'required',
        ]);
        
        $influencer = Influencer::find($id);
        $influencer->name = $request->get('name');
        $influencer->type = $request->get('type');
        $influencer->title = $request->get('title');
        $influencer->localization = $request->get('localization');
        $influencer->languages = $request->get('languages');
        $influencer->birth = $request->get('birth');
        $influencer->sexe = $request->get('city');
        $influencer->email = $request->get('email');
        $influencer->phone = $request->get('phone');
        $influencer->facebook = $request->get('facebook');
        $influencer->twitter = $request->get('twitter');
        $influencer->instagram = $request->get('instagram');
        $influencer->youtube = $request->get('youtube');
        $influencer->website = $request->get('website');
        $influencer->photo = $request->get('photo');
        $influencer->save();

        return redirect('/influencer')->with('success', 'Influencer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $influencer = Influencer::find($id);
        $influencer->delete();

        return redirect('/influencer')->with('success', 'influencer deleted!');
    }
}
