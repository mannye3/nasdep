<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Incubator;
use App\Models\Pool;
use App\Models\Upool;
use App\Models\Company;
use App\Models\Country;
use App\Models\State;
use App\Models\Industry;
use App\Models\Sector;
use App\Models\Enterprise;
use App\Models\Investor;
use App\Models\Analyst;

class EnterpriseController extends Controller
{
    public function __construct()
    {


        $this->middleware('checkRole');
        $this->middleware('auth');
    }




    public function dashboard()
    {
        return view('enterprise.dashboard');
    }


    public function profile()
    {
        return view('enterprise.profile');
    }


    public function profileEdit(Request $request)
    {
       $user = Auth::user();


       if($request['avatar'] !=""){

        $fileExt = $request->avatar->getClientOriginalExtension();
        $email = $user->email.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
        $avatarName = config('app.url').'/images/'.$email;


        $request->avatar->move(public_path('images'),$avatarName);

        $user->avatar = $avatarName;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->company = $request['company'];
        $user->gender = $request['gender'];
        $user->location = $request['location'];



        $user->save();
        }


        if($request['avatar'] ==""){



            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->company = $request['company'];
            $user->gender = $request['gender'];
            $user->location = $request['location'];



            $user->save();
            }



        return redirect()->back()->with('password_success', 'Password Updated');
    }










    public function profilePassword(Request $request)
    {
       $user = Auth::user();


       if($request['password'] !=""){
           if(!(Hash::check($request['password'], Auth::user()->password))){
               return redirect()->back()->with('error', 'Your current Password does not match');
           }

           if(strcmp($request['password'], $request['new_password']) == 0){
               return redirect()->back()->with('error', 'New password cannot be the same as current password');
           }

           $validation = $request->validate([
               'password' => 'required',
               'new_password' => 'required|string|min:6|confirmed'
           ]);

           $user->password = bcrypt($request['new_password']);
           $user->save();

           return redirect()->back()->with('password_success', 'Password Updated');
       }

       return back();
    }






    public function profilePicture(Request $request){

        $user = Auth::user();

        $fileExt = $request->avatar->getClientOriginalExtension();
        $email = $user->email.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
        $avatarName = config('app.url').'/images/'.$email;


        $request->avatar->move(public_path('images'),$avatarName);

        $user->avatar = $avatarName;

        $user->save();

        return back()->with('success','You have successfully upload image.');

    }




    // public function storeImage(Request $request)
    // {
    //     // return $request;
    //     $package = Package::find($request->package_id);

    //     $imageArray = [];

    //     $fileExt = $request->image->getClientOriginalExtension();
    //     $name = str_slug($request->name).'_'.str_slug($request->country).'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
    //     $imageName = config('app.url').'/packages/'.$name;

    //     array_push($imageArray, $imageName);

    //     $packageImage = implode(",",$imageArray);

    //     if($package->image != null){
    //         $packageImage .= ','.$package->image;
    //     }

    //     $package->update([
    //         'image' => $packageImage
    //     ]);

    //     $request->image->move(public_path('packages'),$imageName);
    //     return redirect()->back()->with( ['package_id' => $package->id]);
    // }




    public function analysts()
    {
        $analysts = Analyst::all();

        return view('enterprise.analysts', compact('analysts'));

    }



    public function investors()
    {
        $investors = Investor::all();

        return view('enterprise.investors', compact('investors'));

    }


    public function incubators()
    {
        $incubators = Incubator::all();

        return view('enterprise.incubators', compact('incubators'));
    }


    public function pools()
    {
        $pools = Pool::all();

        return view('enterprise.pools', compact('pools'));
    }



    public function upools()
    {
        $upools = Upool::all();

        return view('enterprise.upools', compact('upools'));
    }

}
