<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    //
    function home()
    {
        return view('pages.index');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        return view('pages.contact');
    }
    function store(Request $request)
    {
        $name = $request->first_name; #.' '. $request->last_name;
        # dd($name);
        return redirect()->route('thankyou', ['name' => $name]);
    }
    function thankyou($name)
    {
        return view('pages.thankyou')->with(compact('name'));
    }
}
