<?php

namespace App\Http\Controllers;
use App\Models\{ User, Proprety, PropretyType, Cities, Enquiry };
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PagesController extends Controller
{
    //
    public function index()
    {
        $propreties = Proprety::all();
        return view('front.home',compact('propreties'));
    }

    public function home()
    {
        $proprety = Proprety::all();
        return view('front.index',compact('proprety'));
    }

    public function buy()

    {
        return view('');
    }

    public function about()
    {
        return view('');
    }

    public function featurs()
    {
        return view('');
    }
    
    public function proprety()
    {
        $propreties = Proprety::where('status','=','published')->get();
        return view('front.proprety',compact('propreties'));
    }
    public function singleproprety($id)
    {
        $proprety= Proprety::with('user','PropretyType')->where('id', $id)
               ->first();
        return view('front.singleproprety',compact('proprety'));
    }
    public function agents()
    {
        return view('front.agents');
    }
    public function Enquiries(Request $request)
    {
        $enquiry= new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->message = $request->message;
        $enquiry->proprety_id = $request->proprety_id;
        $enquiry->save();
        return back();
        // return view('front.agents');
    }


}
