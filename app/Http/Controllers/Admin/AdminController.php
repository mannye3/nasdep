<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Incubator;
use App\Models\Pool;
use App\Models\Company;
use App\Models\Country;
use App\Models\State;
use App\Models\Industry;
use App\Models\Enterprise;
use App\Models\Investor;





class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function dashboard()
    {


        return view('admin.home');
    }



    public function participants()
    {

        $users = User::all();
        return view('admin.participants', compact('users'));

    }




    public function viewUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.participant' , compact('user'));
    }




    public function editUserPost(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->company = $request['company'];
        $user->gender = $request['gender'];
        $user->location = $request['location'];
        $user->member_type = $request['member_type'];

        $user->save();


        if($request['password'] !==""){


            $user->password = bcrypt($request['password']);
            $user->save();


        }

        if($request['avatar'] !=""){
            $fileExt = $request->avatar->getClientOriginalExtension();
            $email = $user->email.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
            $avatarName = config('app.url').'/images/'.$email;
            $request->avatar->move(public_path('images'),$avatarName);
            $user->avatar = $avatarName;
            $user->save();
            }


       return back()->with('success', 'User Details Updated');



    }




        public function statusUserPost(Request $request, $id)
        {
            $user = User::where('id', $id)->first();

            $user->user_status = $request['user_status'];

            $user->save();


        return back()->with('success', 'User Status Updated');



        }


        public function deleteUser($id)
        {
            $user = User::where('id', $id)->first();
            $user->delete();

            return back()->with('success', 'User Deleted');
        }



            public function incubators()
            {

                $incubators = Incubator::all();
                return view('admin.incubators', compact('incubators'));

            }




            public function viewIncubator($id)
            {


                $company = Company::where('id', $id)->first();
                $incubators = Incubator::whereIn('company_id', $company)->get();
                $pools = Pool::whereIn('incubator_id', $incubators)->get();
                $enterprises = Enterprise::whereIn('company_id', $company)->get();
                $countries = Country::all();
                $states = State::all();



                return view('admin.incubator' , compact('company', 'pools', 'enterprises', 'countries','states'));
            }



            public function editCompany(Request $request, $id)
            {
                $company = Company::where('id', $id)->first();

                $company->name = $request['name'];
                $company->number = $request['number'];
                $company->addr = $request['addr'];
                $company->ind_exp = $request['ind_exp'];
                $company->country_id = $request['country_id'];
                $company->state_id = $request['state_id'];
                $company->type = $request['type'];
                $company->website = $request['website'];
                $company->about = $request['about'];
                $company->doi = $request['doi'];

                $company->save();




                if($request['logo'] !=""){
                    $fileExt = $request->logo->getClientOriginalExtension();
                    $doi = $company->doi.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                    $logoName = config('app.url').'/images/'.$doi;
                    $request->logo->move(public_path('images'),$logoName);
                    $company->logo = $logoName;
                    $company->save();
                    }


               return back()->with('success', 'Company Details Updated');



            }




            public function investors()
            {

                $investors = Investor::all();
                return view('admin.investors', compact('investors'));

            }


            public function viewInvestor($id)
            {


                $company = Company::where('id', $id)->first();
                // $incubators = Incubator::whereIn('company_id', $company)->get();
                // $pools = Pool::whereIn('incubator_id', $incubators)->get();
                // $enterprises = Enterprise::whereIn('company_id', $company)->get();
                $countries = Country::all();
                $states = State::all();



                return view('admin.investor' , compact('company', 'countries','states'));
            }



            

            public function changeInvestorStatus(Request $request, $id)
            {
                $investor = Investor::where('id', $id)->first();

                $investor->suspended = $request['suspended'];

                $investor->save();


            return back()->with('success', 'Investor Status Updated');



            }





            public function deleteInvestor($id)
            {
                $investor = Investor::where('id', $id)->first();
                $investor->delete();

                return back()->with('success', 'Investor Deleted');
            }




}


