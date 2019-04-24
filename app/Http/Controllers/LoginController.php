<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Exception;
use App\User;
use App\Languages;
use App\Countries;
use Log;
use Hash;
use Session;
use DB;
class LoginController extends Controller
{
   
    
    public function __construct(){
             
    }
    
	/**
    * Function To View the Signin Page
    */
  	public function signin(){
        if(Session('username')){
    	   return redirect('profile');
        }else{
            return view('login.signin');
        }
    }

    /**
    * Function To Check the Username is Exist
    */
    public function checkusername(Request $request){

    	$response =[];
    	try{
    		$validator = Validator::make($request->all(),[	           
	            'email' => 'required|string|max:255',	            
    		]);
    		if($validator->fails()) throw new Exception($validator->errors());
    		$user  = User::where('email', $request['email'])->orWhere('phone_number', $request['email'])->value('email');
    		session(['username' => $user]);
    		if($user){    			
	    		$response['status'] = true;
	    		$response['message']='Welcome';

    		}else{
    			$response['status'] = false;
    			$response['message'] = 'Email/Mobile Number cannot be recognized!';
    		}

    	}
    	catch (\Exception $e){
    		$this->exceptionLog($e);
    		$response['status'] = false;
    		$response['message'] = $e->getMessage();
    	}
    	return json_encode($response);       
    }

    /**
    * Function To Enter the Password To SigninPwd Page
    */
    public function signinpwd(){
        if(Session('user_loggedin')){
            return redirect('profile');
        }else{
    	   return view('login.signin_pwd');
        }
        
    }

    /**
    * Function To check the Username and Password exist
    */
    public function signinCreate(Request $request){
    	$response =[];
    	try{
    		$validator = Validator::make($request->all(), [
    			'password' => 'required',
    		]);
    		if($validator->fails()) throw new Exception($validator->errors());
    		$username =Session('username');
    		if($username){ 			
    			$user = User::where('email', $username)->whereOr('phone_number',$username)->first();
    		}
    		$checkPwd = Hash::check($request['password'], $user->password);
            session(['user_loggedin'=> $checkPwd]);
    		if($checkPwd){
    			$response['status'] =true;
    			$response['message'] ="Welcome";
    		}else{
    			$response['status'] =false;
    			$response['message'] ='Password Incorrect!';
    		}
    	}
    	catch(\Exception $e){
    		$this->exceptionLog($e);
    		$response['status'] =false;
    		$response['message'] =$e->getMessage();
    	}
    	return json_encode($response);
    }

    /**
    * Function To View the Signup Page
    */
    public function signup(){
        if(Session('username')){
            return redirect('profile');
        }else{
    	   return view('login.signup');
        }
    }

    /**
    * Function To Create the User From Signup Page
    */
    public function signupCreate(Request $request){
    	$response =[];
    	try{
    		$validator = Validator::make($request->all(),[
	    		'first_name' => 'required|string|max:255',
	            'last_name' => 'required|string|max:255',
	            'phone_number' => 'required|string|max:50',
	            'email' => 'required|string|email|max:255|unique:users',
	            'password' => 'required|string|min:6',
    		]);
    		if($validator->fails()) throw new Exception($validator->errors());

    		$user = User::create([
		            'first_name' => $request['first_name'],
		            'last_name' => $request['last_name'],
		            'phone_number' => $request['phone_number'],
		            'email' => $request['email'],
		            'password' => bcrypt($request['password']),
		            'promocode' =>  $request['promocode'],
		        ]);
    		if($user){    			
	    		$response['status'] = true;
	    		$response['message']='User Sign Up Successfully!';
    		}

    	}
    	catch (\Exception $e){
    		$this->exceptionLog($e);
    		$response['status'] = false;
    		$response['message'] =$e->getMessage();
    	}

    	return json_encode($response);
    }



    /**
    * Function To View the Profile Page
    */
    public function profile(){
        if(Session('username')){
            $username = Session::get('username');
            if($username){                
                $users =  User::where('email', $username)->orWhere('phone_number', $username)->first();
            }

            $countries = DB::table('countries')->get();
            $languages = DB::table('languages')->get();
            if($users->photo){
                $images = json_decode($users->photo);
                $profilePic = $images->path;
            }            
            return view('login.profile', ['users' => $users, 'profilePic'=> $profilePic, 'locations' => $countries, 'languages' => $languages]);
        }else{
           return redirect('/');
        }
    }

    public function saveUserProfile(Request $request){  

        $username = Session('username');
        if(Session('username')){
            $response = [];
            $file =[];         
            $inputVal =[];         
            try{
                if($request->inputs){
                    $inputs = json_decode($request->inputs);
                    if($inputs){
                        foreach($inputs as $k => $v){
                            $inputVal[$k] = $v;
                        }                        
                    }
                }
                if($inputVal['newPromocode']){
                     $promocode ='uber'. $inputVal['newPromocode'];                     
                }else{
                    $promocode = $inputVal['promocode'];
                }
                
                $user = \App\User::where('email', $username)->orWhere('phone_number', $username)->first();
                if($user->email){

                    if($request['files']){
                        if(isset($_FILES['files']['name'])){  
                            $target_dir = storage_path();                    
                            if(!file_exists($target_dir.'\uploads')){                     
                                mkdir($target_dir.'\uploads');                       
                            }
                            $file_path = '\uploads\\'.basename($_FILES["files"]["name"]);
                            $target_file = $target_dir .$file_path;                      
                            if(move_uploaded_file( $_FILES['files']['tmp_name'],  $target_file)){
                                $file['name'] = $_FILES['files']['name'];
                                $file['type'] = $_FILES['files']['type'];
                                $file['size'] = $_FILES['files']['size'];
                                $file['path'] = str_replace(base_path(),"..",$target_file);
                                $filePath = json_encode($file);
                            }
                            $result = User::where('id', $user->id)->update(
                                array(
                                    'language' => $inputVal['language'],
                                    'location' => $inputVal['location'],
                                    'promocode' => $promocode,
                                    'photo' => $filePath, 
                                    'updated_at' => date('Y-m-d H:i:s'), 
                                    )
                                );
                        }
                    }else{
                        $result = User::where('id', $user->id)->update(
                                    array(
                                        'language' => $inputVal['language'],
                                        'location' => $inputVal['location'],
                                        'promocode' => $promocode,
                                        'updated_at' => date('Y-m-d H:i:s'), 
                                        )
                                    );
                    }                 
                    if($result){
                        $response['status'] = true;
                        $response['message']='Profile Saved!'; 
                    }else{
                        $response['status'] = false;
                        $response['message']='Error Occured!'; 
                    }   
                }            
            }
            catch(\Exception $e){
                $this->exceptionLog($e);
                $response['status'] = false;
                $response['message'] =$e->getMessage();
            }
       }else{
         return redirect('/');
       }

       echo json_encode($response);
       exit;
    
    }



      // print_r($request->all()); 
      // print_r($request['inputs']);
      // foreach($request['inputs'] as $k => $v){
      //   echo "Key : " .$k . " Value : " .$v . " ----</br>";
      // }
      // // print_r();
      //  exit;
                    // $users->language = $request->language;
                    // $users->location = $request->location;
                    // $users->promocode = $request->newPromocode;;
                    // $users->photo = $photo;
                      // print_r($request->language);
                      //   print_r($request->location);
                      //   print_r($request->newPromocode);
                    // echo "Id:".$user->id . "Promo :" .$request->newPromocode ."Result : ";
                    // $result = $users->save();
            

    /**
    * Function To Logout the Page & Destroy Session
    */
    public function logout(){
        if(Session('username')){
            Session::flush();
            return redirect('/');
        }
    }

    /**
    * Function To See the Exceptional Log
    */
    public function exceptionLog($e){
    	Log::error("Exception Error Occurred.");
        Log::error('Error message : '.$e->getMessage());
        Log::error("Line No :" .$e->getLine());
        Log::error("File : " .$e->getFile());
    }
}
