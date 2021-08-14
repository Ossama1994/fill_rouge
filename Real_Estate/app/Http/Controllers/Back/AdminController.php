<?php


namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Models\{ User, Proprety, PropretyType, City };
use App\Models\Enquiry;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    { 
        $users = User::all()->count();    
        $propreties = Proprety::all()->count();    
        $propretytype = PropretyType::all()->count(); 
        $cities = City::all()->count();    
        return view('back.dashboard',compact('users','propreties','propretytype','cities'));
    }
    public function city()
    { 
        $cities = City::all();   
        return view('back.cities',compact('cities'));
    }

    public function proprety()
    { 
    
        $propreties = Proprety::with('user','PropretyType')->get();   
        return view('back.proprety',compact('propreties'));
    }
    
    public function edit($id)
    { 
        $cities = City::where('id',$id)->first();   
        return view('back.editcity',compact('cities'));
    }
    public function update(Request $request,$id)
    { 
        $cities = City::find($id);
        $cities->update($request->all());
        return redirect()->route('city');
    }
    public function delete($id)
    { 
        $cities = City::find($id);
        $cities->delete();
        return back();
    }
    public function create(Request $request)
    { 
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return back()->with('message','has been added successfully');
        
    }
    public function editproprety($id)
    { 
        $proprety = Proprety::where('id',$id)->first();   
        return view('back.editproprety',compact('proprety')); 
    }

    public function updateproprety(Request $request,$id)
    { 
        $proprety = Proprety::find($id);
        $proprety->update($request->all());
        return redirect()->route('propreties');  
    }

    public function deleteproprety($id)
    { 
        $proprety = Proprety::find($id);
        $proprety->delete();
        return back();  
    }
    public function createproprety(Request $request)
    { 
        $proprety = new Proprety();
        $proprety->user_id = auth()->id();
        $proprety->title = $request->title;
        $proprety->slug = $request->slug;
        $proprety->Purpose = $request->Purpose;
        $proprety->bedrooms = $request->bedrooms;
        $proprety->bathrooms = $request->bathrooms;
        $proprety->area = $request->area;
        $proprety->sale_price = $request->sale_price;
        $proprety->rent_price = $request->rent_price;
        $proprety->description = $request->description;
        $proprety->adress = $request->adress;
        $proprety->proprety_image = $request->proprety_image;
        $proprety->status = $request->status;
        $proprety->proprety_type_id = $request->proprety_type_id;
        $proprety->save();
        return back();  
    }
    public function inquiries()
    { 
        $enquiries = Enquiry::with('proprety')->get();
        return view('back.inquiries',compact('enquiries')); 
    }
    public function deleteenquiry($id)
    { 
        $enquiry = Enquiry::find($id);
        $enquiry->delete();
        return back();
    }
}
