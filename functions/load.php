<?php
class load {
	//This is used to set a cookie for the robot to use in the CookieJar to authentic with the TickSpot service.
	//The cookie will be stored in the functions directory as 'cookie.txt'. This function has to be called before contacting the
	//TickSpot service to ensure that the cookie is valid to use so that the robot can make any modifications to the account that are requested. 
	//This should not be called multiple times during a single function as it is not required and
	//only needs to authentic once with the service.
	public function TickSpotAuth(){
		$data = 'user_login='.EMAIL.'&user_password='.PASSWORD.'&remember%5Bpassword%5D=1&remember%5Bpassword%5D=&login.x=74&login.y=25';
		$ch = curl_init();
		//To get in there and set a cookie
		curl_setopt($ch, CURLOPT_URL, 'https://'.COMPANY.'.tickspot.com/login');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt'); 
		curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt'); 
		//To look & act normal
		curl_setopt($ch, CURLOPT_USERAGENT, USERAGENT);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
		//Receives the respose from the server
		$output = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
	}
	
	//This is used to make POST requests to the tickspot service. It requires a file that will be stored in the functions directory as 'cookie.txt' in order to work. 
	public function postToTickSpot($url, $data, $referer){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt'); 
		curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt'); 
		//To look & act normal
		curl_setopt($ch, CURLOPT_USERAGENT, USERAGENT);
		curl_setopt($ch, CURLOPT_REFERER, $referer);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
		//Receives the respose from the server
		$output = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		return $output;
	}
	
	//This is used to make GET requests to the tickspot service. It requires a file that will be stored in the functions directory as 'cookie.txt' in order to work.
	//Some calls are made over the current API which do not need a cookie file, 	//however, the tickspot class uses 	
	public function talkToTickSpot($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt'); 
		curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt'); 
		//To look & act normal
		curl_setopt($ch, CURLOPT_USERAGENT, USERAGENT);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
		//Receives the respose from the server
		$output = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		return $output;
	}
}
?>