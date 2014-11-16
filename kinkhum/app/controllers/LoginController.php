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
			else return Redirect::to('/index');

		}


		public function ShowLogin(){
			if(Session::get('user','error')=='error'){
				return View::make('login');
			}

		}
		
		public function register(){
			$newUser = new User();

			$newUser->setUsername(Input::get('username'));
			$newUser->setPassword (Hash::make(Input::get('password')));
			$newUser->setName(Input::get('name')); 
			$newUser->setStatus(Input::get('status'));
			$newUser->save();
			return Redirect::to('/index');
		}


		public function login(){

			$usernameInput = Input::get('username');
			$passwordInput = Input::get('password');

			$usertry =  array ('username' => $usernameInput,
								'password'=> $passwordInput);
		
			if (Auth::attempt($usertry))return View::make('/index2');
			else return View::make('/login');

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