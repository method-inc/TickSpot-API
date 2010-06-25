<?php
class tickspot {
	//This will return the methods passed into the function that do not require further parateters than email and password.
	//It is a clear and easy way to return results from the api before pasing through any results
	//This documentation can be found here: http://tickspot.com/api/
	public function get($i){
		$recentPosts = 'https://'.COMPANY.'.tickspot.com/api/'.$i.'?email='.EMAIL.'&password='.PASSWORD;
		$rawdata = load::talkToTickSpot($recentPosts);
 	return $rawdata;
	}

	public function delete_all_projects(){
		//First authentic with TickSpot.com to ensure the application can login to your account
		$auth = load::TickSpotAuth();		
		//Use the API to return all of the current projects under your account
		$rawdata = tickspot::get('projects');
		$xml = new SimpleXMLElement($rawdata);
		foreach($xml->project as $project){
		//For each of the projects you have in the account, go ahead and delete them
				$deleteproject  = 'https://'.COMPANY.'.tickspot.com/projects/delete_project/'.$project->id;
				$dl = load::talkToTickSpot($deleteproject);
				echo 'Deleted Project - '.$project->name.'<br />';
			}
			echo 'Done Deleting Projects <br /> <hr /> ';
	}

	public function close_all_projects(){
		//First authentic with TickSpot.com to ensure the application can login to your account
		$auth = load::TickSpotAuth();		
		//Use the API to return all of the current projects under your account
		$projects = tickspot::get('projects');
		$xml = new SimpleXMLElement($projects);
		foreach($xml->project as $project){
			//For each of the projects you have in the account, go ahead and close them
			$closeproject  = 'https://'.COMPANY.'.tickspot.com/projects/close_project/'.$project->id;
			$cl = load::talkToTickSpot($closeproject); 				
			echo 'Closed Project - <strong>'.$project->name.'</strong><br />';
		}
	}

	public function open_all_projects(){
		//First authentic with TickSpot.com to ensure the application can login to your account
		$auth = load::TickSpotAuth();		
		//Use the API to return all of the current projects under your account
		$projects = tickspot::get('projects');
		$xml = new SimpleXMLElement($projects);
		foreach($xml->project as $project){
			//For each of the projects you have in the account, go ahead and open them
			$openproject  = 'https://'.COMPANY.'.tickspot.com/projects/open_project/'.$project->id;
			$cl = load::talkToTickSpot($openproject); 				
			echo 'Opened Project - <strong>'.$project->name.'</strong><br />';
		}
	}

}
?>