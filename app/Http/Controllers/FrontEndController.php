<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Sentinel;
use Redirect;
use App\Models\ProductSetting;

class FrontEndController extends Controller
{
    /*
     * $user_activation set to false makes the user activation via user registered email
     * and set to true makes user activated while creation
     */
    private $user_activation = true;
    
    Public function index(){

        return view('main');
        //return view('index');
    }

    Public function contactus(){

        return view('contactus');
    } 

    public function getLogin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }
        // Show the login page
        return view('login');
    }

    /**
     * Account sign in form processing.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function myaccount(){

        return view('user_dashbord');
        return view('my-account');


    }
    public function userDashboard(){

       if(Sentinel::getUser()->inRole('admin')) {
            return Redirect::to('admin');
       }

        return view('user_dashbord');

    }
    public function getLogout()
    {
        if (Sentinel::check()) {
            Sentinel::logout();
        }
        // Redirect to the users page
        return redirect('login')->with('success', 'You have successfully logged out!');
    }
    public function postLogin(Request $request)
    {
        try {
            // Try to log the user in
            if ($user = Sentinel::authenticate($request->only(['email', 'password']), $request->get('remember-me', 0))) {

                return Redirect::to('user-dashboard')->with('success', 'Logged in');
            }
            return redirect('login')->with('error', 'Email or password is incorrect.');

        
        } catch (UserNotFoundException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_found'));
        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (UserSuspendedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_suspended'));
        } catch (UserBannedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_banned'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return redirect('login')->with('error', 'Email or password is incorrect.');
    }

    public function register_user(Request $request){
        $email = '';
        if($request->has('email')){
            $email = $request->get('email');
        }
        return view('register',compact('email'));
    }

    public function register_post(Request $request){

        $activate = $this->user_activation; //make it false if you don't want to activate user automatically it is declared above as global variable

        
        try {

            $user = Sentinel::register($request->only(['first_name', 'last_name', 'email', 'password']), $activate);

            //add user to 'User' group
            $role = Sentinel::findRoleByName($request->get('role'));
            $role->users()->attach($user);

            $user = \App\Models\User::find($user->id);
            if($request->has('title')){
                $user->title = $request->get('title');
            }
            if($request->has('phone')){
                $user->phone = $request->get('phone');
            }
            if($request->has('address')){
                $user->delivery_address = $request->get('address');
            }
            if($request->has('postal')){
                $user->postal = $request->get('postal');
            }
            if($request->has('city')){
                $user->city = $request->get('city');
            }
            if($request->has('billing_address')){
                $user->billing_address = $request->get('billing_address');
            }
            if($request->has('billing_postal')){
                $user->billing_postal = $request->get('billing_postal');
            }
            if($request->has('billing_city')){
                $user->billing_city = $request->get('billing_city');
            }
            if($request->has('service_id')){
                $user->service_id = $request->get('service_id');
            }
            if($request->has('social_reason')){
                $user->social_reason = $request->get('social_reason');
            }
            $user->save();

            // Send the activation code through email
            // Mail::send('emails.register', $data, function ($m) use ($user) {
            //     $m->from($address = 'admin@ebigwin.com', $name = 'EBIGWIN');
            //     // $m->from('admin@ebigwin.com');
            //     $m->to($user->email, $user->first_name . ' ' . $user->last_name);
            //     $m->subject('Welcome ' . $user->first_name);
            // });

            //Redirect to login page
            //Sentinel::login($user, false);
            // Redirect to the home page with success menu
            return Redirect::to("/")->with('success', 'L\'inscription a été effectuée avec succès');
            //return View::make('user_account')->with('success', Lang::get('auth/message.signup.success'));

        } catch (\Throwable $e) {
            if (strpos($e->getMessage(), 'users_email_unique') !== false) {
                return back()->with('error', 'user already exist, use different email');
            }
            
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors('something went wrong.');
    }

    

    public function fichiers_faq(){




        return view('fichiers-faq');

    }

    public function command_plan(){

        $prices = ProductSetting::where('type',1)->get();
        return view('show_commande',compact('prices'));

    }
    public function memory_report(){

        $prices = ProductSetting::where('type',2)->get();
        return view('commande-memoire-rapport',compact('prices'));
    }

    public function booklet(){
        $prices = ProductSetting::where('type',3)->get();
        return view('commande-prochure-livret',compact('prices'));
        
    }

    public function attach(){
        $prices = ProductSetting::where('type',4)->get();
        return view('commande-affiche',compact('prices'));
   }

    public function plans_life(){
        $prices = ProductSetting::where('type',4)->get();
        return view('commande-dossier-plan',compact('prices'));
   }

    public function user_dashbord()
    
    {


        return view('user_dashbord');
    }

    public function panier(){



        return view('panier');
    }

    
}