<?php  
	/**
	* 
	*/
	class LoginController extends BaseController
	{
		public function loginConnect(){
			if(Session::get('user','error')=='error'){
				return Redirect::to('/login');
			}
			else return "Admin";

		}


		public function ShowLogin(){
			if(Session::get('user','error')=='error'){
				return View::make('login');
			}

		}

//		public function Logout(){
			
			
//		}

		
		public function register(){
			$newUser = new User();
			$newUser->username = Input::get('username');
			$newUser->password = Hash::make(Input::get('password'));
			$newUser->name = Input::get('name'); 
			$newUser->status = Input::get('status');
			$newUser->save();
			return 'ok';
		}


		public function login(){

			$usernameInput = Input::get('username');
			$passwordInput = Input::get('password');

			$usertry =  array ('username' => $usernameInput,
								'password'=> $passwordInput);
			echo Auth::attempt($usertry);
			if (Auth::attempt($usertry))return Redirect::to('/');
			else return Redirect::to('/login');

			/*if(Session::get('user','error')=='error'){
				
				$login = Input::all();
				$userTemp = UserORM::where('username','=',$data['username'])->where('password','=',$data['password'])->get();
				if(count($userTemp)!=0){
					echo "login complete";
					if (Auth::attempt($usertry))return View::make('index');
					else return View::make('login');
				}
				else{
					echo "Error: username or password <a href='login.php'>";
				}
			}*/
		}
		
}