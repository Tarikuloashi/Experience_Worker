<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class loginController extends Controller
{
    public function login(){
    	return view ('authentications.login');
    }

    public function postLogin(Request $request){
      
 
    	try {
            
            $rememberMe=false;
            if(isset($request->remember_me))
                $rememberMe=true;

            if(Sentinel::authenticate($request->all(),$rememberMe)){
                $slug=Sentinel::getUser()->roles()->first()->slug;

                if($slug=='admin')
                    return redirect('/adminHome');
                elseif($slug=='engineer')
                    return redirect('/engineerHome');
            }else{
                return redirect()->back()->with(['error'=>'No User Available']);
            }

        }catch (ThrottlingException $e) {
              $delay = $e->getDelay();

              return redirect()->back()->with(['error' => "You are Banned for $delay seconds."]);
            
        }catch( NotActivatedException $e){
              return redirect()->back()->with(['error' => "Your account are not Activated."]);
            
        }
        
        //dd($request->all());
    	

    	// return Sentinel::check();
    	//return redirect('/login');
        
    }

    public function logout(){
    	Sentinel::logout();
    	return redirect('/login');

    }
}
