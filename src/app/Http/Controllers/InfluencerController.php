<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Influencer;
use App\Models\Category;
use Illuminate\Http\Request;
use \PDF;

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

        $influencer = Influencer::all();

        return view('influencers.index', [
            "influencers" => $influencer,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $allCategories = Category::all();
        $categories = $allCategories->pluck('name', 'id');
        $influencer = Influencer::all();

        return view('influencers.create', [
            "influencers" => compact('influencer'),
            "categories" => $categories
        ]);
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
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if(request()->file('photo')) {
            // change name of photo and upload
            $imageName = time().'.'.request()->file('photo')->getClientOriginalExtension();
            request()->file('photo')->move(public_path('photos'), $imageName);
        } else {
            $imageName = "";
        }

        $influencer = new Influencer([
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'title' => $request->get('title'),
            'localization' => $request->get('localization'),
            'languages' => $request->get('languages'),
            'birth' => $request->get('birth'),
            'sexe' => $request->get('sexe'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
            'youtube' => $request->get('youtube'),
            'website' => $request->get('website'),
            'photo' => $imageName
        ]);

        $influencer->save();
        
        $category = Category::find($request->get('category'));
        $influencer->categories()->attach($category);

        return redirect('/influencers')->with('success', 'Influencer saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $influencer = Influencer::find($id);

        return view('influencers.show', [
            "influencer" => $influencer,
        ]);
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
        $allCategories = Category::all();
        $categories = $allCategories->pluck('name', 'id');

        return view('influencers.edit', [
            "influencer" => $influencer,
            "categories" => $categories
        ]);  
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
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $influencer = Influencer::find($id);
        $influencer->name = $request->get('name');
        $influencer->type = $request->get('type');
        $influencer->title = $request->get('title');
        $influencer->localization = $request->get('localization');
        $influencer->languages = $request->get('languages');
        $influencer->birth = $request->get('birth');
        $influencer->sexe = $request->get('sexe');
        $influencer->email = $request->get('email');
        $influencer->phone = $request->get('phone');
        $influencer->facebook = $request->get('facebook');
        $influencer->twitter = $request->get('twitter');
        $influencer->instagram = $request->get('instagram');
        $influencer->youtube = $request->get('youtube');
        $influencer->website = $request->get('website');

        if($request->file('photo')) {
            $imageName = time().'.'.request()->file('photo')->getClientOriginalExtension();
            request()->file('photo')->move(public_path('photos'), $imageName);

            $influencer->photo = $imageName;
        }

        $influencer->save();

        $category = Category::find($request->get('category'));
        $influencer->categories()->attach($category);

        return redirect('/influencers')->with('success', 'Influencer updated!');
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

        return redirect('/influencers')->with('success', 'influencer deleted!');
    }

    public function export_pdf()
    {
      // Fetch all influencers from database
      $influencers = Influencer::all();

      // Send data to the view using loadView function of PDF facade
      $pdf = PDF::loadView('influencers.exportPDF', compact('influencers'));

      // If you want to store the generated pdf to the server then you can use the store function
      $pdf->save(storage_path().'_filename.pdf');

      // Finally, you can download the file using download function
      return $pdf->download('influencers.pdf');

    }
}
