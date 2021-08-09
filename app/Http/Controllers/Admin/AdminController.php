<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
use App\Models\UserRequest;

use DB;





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

        // $user_requests = UserRequest::all();

        // var_dump($user_requests);
        $users = User::where('authorized', 1)->where('type', 'external')->get();


         return view('admin.participants', compact('users'));

    }




    public function viewUser($id)
    {
        $user = User::where('id', $id)->first();
        $user_request = UserRequest::where('user_id', $id)->where('status', 'active')->get();
        // return $user_request;
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





            public function add_company()
            {

                $countries = Country::all();
                $states = State::all();
                $industries = Industry::all();

                return view('admin.add_company' , compact('countries', 'states', 'industries'));

            }





            public function createCompany(Request $request)
            {
                $company = new Company();

                $company->name = $request['name'];
                $company->number = $request['number'];
                $company->addr = $request['addr'];
                $company->ind_exp = $request['ind_exp'];
                $company->country_id = $request['country_id'];
                $company->state_id = $request['state_id'];
                $company->industry_id = $request['industry_id'];
                $company->type = $request['type'];
                $company->website = $request['website'];
                $company->about = $request['about'];
                $company->addr = $request['addr'];
                $company->doi = $request['doi'];

                $company->save();

                $company_id = $company->id;




                if($request['logo'] !=""){
                    $fileExt = $request->logo->getClientOriginalExtension();
                    $doi = $company->doi.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                    $logoName = config('app.url').'/images/'.$doi;
                    $request->logo->move(public_path('images'),$logoName);
                    $company->logo = $logoName;
                    $company->save();
                    }


                    if($request['analyst'] !=""){


                        $analyst = new Analyst();

                        $analyst->company_id = $company_id;

                        $analyst->save();

                    }


                    if($request['investor'] !=""){


                        $investor = new Investor();

                        $investor->company_id = $company_id;

                        $investor->save();

                    }




                    if($request['incubator'] !=""){


                        $incubator = new Incubator();

                        $incubator->company_id = $company_id;

                        $incubator->save();

                    }



               return back()->with('success', 'Company Added');



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







            public function analysts()
            {

                $analysts = Analyst::all();
                return view('admin.analysts', compact('analysts'));

            }


            public function viewAnalyst($id)
            {


                $company = Company::where('id', $id)->first();
                // $incubators = Incubator::whereIn('company_id', $company)->get();
                // $pools = Pool::whereIn('incubator_id', $incubators)->get();
                // $enterprises = Enterprise::whereIn('company_id', $company)->get();
                $countries = Country::all();
                $states = State::all();



                return view('admin.analyst' , compact('company', 'countries','states'));
            }





            public function changeAnalystStatus(Request $request, $id)
            {
                $analyst = Analyst::where('id', $id)->first();

                $analyst->suspended = $request['suspended'];

                $analyst->save();


            return back()->with('success', 'Analysts Status Updated');



            }





            public function deleteAnalyst($id)
            {
                $analyst = Analyst::where('id', $id)->first();
                $analyst->delete();

                return back()->with('success', 'Analysts Deleted');
            }




            public function sectors()
            {

                $sectors = Sector::all();
                $industries = Industry::all();
                return view('admin.sectors', compact('sectors','industries'));

            }






            public function editSector(Request $request, $id)
            {
                $sector = Sector::where('id', $id)->first();

                $sector->name = $request['name'];
                $sector->industry_id = $request['industry_id'];

                $sector->save();

                return back()->with('success', 'Sector Details Updated');


            }




            public function deleteSector($id)
            {
                $sector = Sector::where('id', $id)->first();
                $sector->delete();

                return back()->with('success', 'Sector Deleted');
            }






            public function industries()
            {


                $industry = Industry::all();
                return view('admin.industries', compact('industry'));

            }






            public function editIndustry(Request $request, $id)
            {
                $industries = Industry::where('id', $id)->first();

                $industries->name = $request['name'];
                $industries->desc = $request['desc'];

                $industries->save();

                return back()->with('success', 'Industry Details Updated');


            }




            public function deleteIndustry($id)
            {
                $industry = Industry::where('id', $id)->first();
                $industry->delete();

                return back()->with('success', 'Sector Deleted');
            }





            public function pools()
            {



                $pools =  Pool::with('incubator.company')->get();

                return view('admin.pools', compact('pools'));

            }




            public function viewPool($id)
            {


                $pool = Pool::where('id', $id)->first();
                $industries = Industry::all();
                $incubators = Incubator::all();
                $countries = Country::all();
                return view('admin.pool' , compact('pool', 'industries','incubators','countries'));
            }



            public function editPool(Request $request, $id)
            {
                $pool = Pool::where('id', $id)->first();

                $pool->name = $request['name'];
                $pool->profile = $request['profile'];
                $pool->growth_stage = $request['growth_stage'];
                $pool->exp = $request['exp'];
                $pool->regdate = $request['regdate'];
                $pool->data_available = $request['data_available'];
                $pool->countries = $request['countries'];
                $pool->incubator_id = $request['incubator_id'];
                $pool->industry_id = $request['industry_id'];

                $pool->save();




                if($request['logo'] !=""){
                    $fileExt = $request->logo->getClientOriginalExtension();
                    $regdate = $pool->regdate.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                    $logoName = config('app.url').'/images/'.$regdate;
                    $request->logo->move(public_path('images'),$logoName);
                    $pool->logo = $logoName;
                    $pool->save();
                    }


               return back()->with('success', 'Company Details Updated');



            }




            public function changePoolStatus(Request $request, $id)
            {
                $pool = Pool::where('id', $id)->first();

                $pool->suspended = $request['suspended'];

                $pool->save();


            return back()->with('success', 'Pool Status Updated');



            }




            public function deletePool($id)
            {
                $pool = Pool::where('id', $id)->first();
                $pool->delete();

                return back()->with('success', 'Investor Deleted');
            }





            public function upools()
            {



                $upools =  Upool::all();

                return view('admin.upools', compact('upools'));

            }




            public function viewUpool($id)
            {

                $message = Upool::find($id);
                $content = json_decode($message->registrant,TRUE);





                $upool = Upool::where('id', $id)->first();

                $industries = Industry::all();
                // $incubators = Incubator::all();
                $countries = Country::all();
                $states = State::all();


                return view('admin.upool' , compact('upool', 'industries', 'countries','states'));
            }



            public function editUpool(Request $request, $id)
            {
                $upool = Upool::where('id', $id)->first();

                $upool->name = $request['name'];
                $upool->profile = $request['profile'];
                $upool->growth_stage = $request['growth_stage'];
                $upool->exp = $request['exp'];
                $upool->number = $request['number'];
                $upool->toi = $request['toi'];
                $upool->tof = $request['tof'];
                $upool->ylaf = $request['ylaf'];
                $upool->ylaf_turnover = $request['ylaf_turnover'];
                $upool->amount = $request['amount'];
                $upool->country_id = $request['country_id'];
                $upool->state_id = $request['state_id'];
                $upool->industry_id = $request['industry_id'];

                $upool->save();




                if($request['logo'] !=""){
                    $fileExt = $request->logo->getClientOriginalExtension();
                    $regdate = $upool->regdate.'_'. date("Y-m-d").'_'.time().'.'.$fileExt;
                    $logoName = config('app.url').'/images/'.$regdate;
                    $request->logo->move(public_path('images'),$logoName);
                    $upool->logo = $logoName;
                    $upool->save();
                    }


               return back()->with('success', 'Company Details Updated');



            }





            public function deleteUpool($id)
            {
                $upool = Upool::where('id', $id)->first();
                $upool->delete();

                return back()->with('success', 'Investor Deleted');
            }




            public function requests()
            {



                // $user_requests =  UserRequest::all();


                $user_requests = USER::join('user_requests', 'users.id', '=', 'user_requests.user_id')
                ->select('users.fname', 'users.lname', 'user_requests.*')
                ->get();



                return view('admin.requests', compact('user_requests'));

            }



            public function changeRequestStatus(Request $request, $id)
            {
                $user_request = UserRequest::where('id', $id)->first();

                $user_request->status = $request['status'];

                $user_request->save();


            return back()->with('success', 'Request Status Updated');



            }






}


