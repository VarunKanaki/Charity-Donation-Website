<?php

	session_start();

date_default_timezone_set("Asia/Calcutta");

class Charity
{
		private $con;
		
		
		//database connectivity
		function __construct()
		{
			$this->con = new mysqli("localhost","root","","charity_donation");
		}
		
		
		//contact us page connectivity
		
		function set_contact_us($fname,$email,$message)
		{
			
			$current_date = date("Y-m-d");
			$current_time = date("H:i:s");
			
			if($stmt = $this->con->prepare("INSERT INTO `contact_us`( `full_name`, `email_id`, `message`, `date`, `time`) VALUES (?,?,?,?,?)"))
			{
				$stmt->bind_param("sssss",$fname,$email,$message,$current_date,$current_time);
			
			
			if($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		}


		//sign up page connectivity
		function set_sign_up($fname,$password,$mobile_no,$email,$gender,$address,$profile_photo)
		{
			$current_date = date("Y-m-d");
			$current_time = date("H:i:s A");
			
			if($stmt = $this->con->prepare("INSERT INTO `sign_up_page`( `full_name`, `password`, `mobile_number`, `email_id`, `gender`, `address`, `profile_photo`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?,?)"))
			{
				$stmt->bind_param("ssissssss",$fname,$password,$mobile_no,$email,$gender,$address,$profile_photo,$current_date,$current_time);
				
			
				if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		
		
		//volunteer connectivity
		function set_volunteer_details($fname,$email,$mobile_no,$gender,$age)
		{
			$current_date = date("Y-m-d");
			$current_time = date("H:i:s A");
			
			if($stmt = $this->con->prepare("INSERT INTO `volunteer_request`(`full_name`, `email_id`, `mobile_no`, `gender`, `age`, `date`, `time`) VALUES (?,?,?,?,?,?,?)"))
			{
				$stmt->bind_param("sssssss",$fname,$email,$mobile_no,$gender,$age,$current_date,$current_time);
				
			
				if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			
		}
		
		//donation form connectivity
	/*	function donation_details($first_name,$last_name,$email,$mobile,$state,$don_category,$amount,$payment_method,$paying_to)
		{
			$current_date = date("Y-m-d");
			$current_time = date("H:i:s A");
			
			if($stmt = $this->con->prepare("INSERT INTO `donation_form`( `first_name`, `last_name`, `email_id`, `mobile_no`, `state`, `don_category`, `amount`, `payment_method`, `paying_to`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?)"))
			{
				$stmt->bind_param("sssississss",$first_name,$last_name,$email,$mobile,$state,$don_category,$amount,$payment_method,$paying_to,$current_date,$current_time);
				
			
			if($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
			}
		
			
		}*/
		function set_donation_details($first_name,$last_name,$email,$mobile,$state,$don_category,$amount,$payment_method,$paying_to)
		{
			$current_date = date("Y-m-d");
			$current_time = date("H:i:s A");
			
			if($stmt= $this->con->prepare("INSERT INTO `donation_form`(`first_name`, `last_name`, `email_id`, `mobile_no`, `state`, `don_category`, `amount`, `payment_method`, `paying_to`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?)"))
			{
				$stmt->bind_param("sssississss",$first_name,$last_name,$email,$mobile,$state,$don_category,$amount,$payment_method,$paying_to,$current_date,$current_time);
			
				if($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}

			}
	}
		//fetching 	data from donation page
		function get_donation_details()
		{
			
			if($stmt = $this->con->prepare("SELECT `id`, `first_name`, `last_name`, `email_id`, `mobile_no`, `state`, `don_category`, `amount`, `payment_method`, `paying_to`, `date`, `time` FROM `donation_form`"))
			{
				$stmt->bind_result($res_id,$res_first_name,$res_last_name,$res_email,$res_mobile,$res_state,$res_don_category,$res_amount,$res_payment_method,$res_paying_to,$res_date,$res_time);
				
				if($stmt->execute())
				{
					
					$donation = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						$donation[$counter]['id']				= $res_id;
						$donation[$counter]['first_name']		= $res_first_name;
						$donation[$counter]['last_name']		= $res_last_name;
						$donation[$counter]['email']			= $res_email;
						$donation[$counter]['mobile']			= $res_mobile;
						$donation[$counter]['state']			= $res_state;
						$donation[$counter]['don_category']		= $res_don_category;
						$donation[$counter]['amount']			= $res_amount;
						$donation[$counter]['payment_method']	= $res_payment_method;
						$donation[$counter]['paying_to']		= $res_paying_to;
						$donation[$counter]['date']			= $res_date;
						$donation[$counter]['time']			= $res_time;
						
						$counter++;						
						
					}
					if(!empty($donation))
					{
						return $donation ;
					}
					else
					{
						return false ; 
					}
				}
			}
		
		}
		
		//fetching data from contact us page
		function get_contact_us()
		{
			
			if($stmt = $this->con->prepare("SELECT `id`, `full_name`, `email_id`, `message`, `date`, `time` FROM `contact_us` "))
			{
				$stmt->bind_result($res_id,$res_full_name,$res_email,$res_message,$res_date,$res_time);
				
				if($stmt->execute())
				{
					$cont = array();
					$counter= 0;
					
					while($stmt->fetch())
					{
						$cont[$counter]['id'] = $res_id; 
						$cont[$counter]['full_name'] = $res_full_name; 
						$cont[$counter]['email'] = $res_email; 
						$cont[$counter]['message'] = $res_message; 
						$cont[$counter]['date'] = $res_date; 
						$cont[$counter]['time'] = $res_time; 

						$counter++;
					}
					if(!empty($cont))
					{
						return $cont;
					}
					else
					{
						return false;
					}
					
					
				}
				
				
			}
			
		}
		
		
		//fetching data from sign up page
		function get_sign_up_details()
		{
			
				if($stmt = $this->con->prepare("SELECT `id`, `full_name`, `password`, `confirm_password`, `mobile_number`, `email_id`,`gender`, `address`, `profile_photo`, `date`, `time` FROM `sign_up_page` "))
				{
					$stmt->bind_result($res_id,$full_name,$res_password,$res_confirm_pass,$res_mobile,$res_email,$res_gender,$res_address,$res_photo,$res_date,$res_time);
					
					if($stmt->execute())
					{
						
						$sign = array();
						$counter = 0;
						
						while($stmt->fetch())
						{
							$sign[$counter]['id'] = $res_id;
							$sign[$counter]['id'] = $full_name;
							$sign[$counter]['id'] = $res_password;
							$sign[$counter]['id'] = $res_confirm_pass;
							$sign[$counter]['id'] = $res_mobile;
							$sign[$counter]['id'] = $res_email;
							$sign[$counter]['id'] = $res_gender;
							$sign[$counter]['id'] = $res_address;
							$sign[$counter]['id'] = $res_photo;
							$sign[$counter]['id'] = $res_date;
							$sign[$counter]['id'] = $res_time;
							
							$counter++;
						}
						
						if(!empty($sign))
						{
							return $sign;
						}
						else
						{
							return false;
						}
						
					}
					
					
				}
		}
		
		
		//fetching details from volunteer 
		function get_volunteer_request()
		{
			if($stmt = $this->con->prepare("SELECT `id`, `full_name`, `email_id`, `mobile_no`, `gender`, `age`, `date`, `time` FROM `volunteer_request` "))
			{
				$stmt->bind_result($res_id,$res_full_name,$res_email,$res_mobile,$res_gender,$res_age,$res_date,$res_time);
				
				if($stmt->execute())
				{
					$volunteer = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						
						$volunteer[$counter]['id'] = $res_id;
						$volunteer[$counter]['full_name'] = $res_full_name;
						$volunteer[$counter]['email_id'] = $res_email;
						$volunteer[$counter]['mobile'] = $res_mobile;
						$volunteer[$counter]['gender'] = $res_gender;
						$volunteer[$counter]['age'] = $res_age;
						$volunteer[$counter]['date'] = $res_date;
						$volunteer[$counter]['time'] = $res_time;
						
						$counter++;

						
					}
					
					if(!empty($volunteer))
					{
						return $volunteer;
					}
					else
					{
						return false;
					}
					
					
				}
			
			}
	
		 }
		 
		 
		 //Fetching data from volunteer list
		 function get_volunteer_list()
		{
			if($stmt = $this->con->prepare("SELECT `id`, `full_name`, `email_id`, `mobile_no`, `gender`, `age`, `date`, `time` FROM `volunteer_list` "))
			{
				$stmt->bind_result($res_id,$res_full_name,$res_email,$res_mobile,$res_gender,$res_age,$res_date,$res_time);
				
				if($stmt->execute())
				{
					$volunteer = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						
						$volunteer[$counter]['id'] = $res_id;
						$volunteer[$counter]['full_name'] = $res_full_name;
						$volunteer[$counter]['email_id'] = $res_email;
						$volunteer[$counter]['mobile'] = $res_mobile;
						$volunteer[$counter]['gender'] = $res_gender;
						$volunteer[$counter]['age'] = $res_age;
						$volunteer[$counter]['date'] = $res_date;
						$volunteer[$counter]['time'] = $res_time;
						
						$counter++;

						
					}
					
					if(!empty($volunteer))
					{
						return $volunteer;
					}
					else
					{
						return false;
					}
					
					
				}
			
			}
	
		 }
	
	
		
		
		
		//Volunteer Request Reject
		function volunteer_request_reject($rej_id)
		{
			if($stmt= $this->con->prepare("Delete from `volunteer_request` where `id`=?"))
			{
				$stmt->bind_param("i",$rej_id);
				
				if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
				
		}
		
		
		//Volunteer Request accept
		function volunteer_request_accept($accept_id)
		{
			if($stmt = $this->con->prepare("SELECT `id`, `full_name`, `email_id`, `mobile_no`, `gender`, `age`, `date`, `time` FROM `volunteer_request` WHERE `id`=?"))
			{
				$stmt->bind_param("i",$accept_id);
				$stmt->bind_result($res_id,$res_full_name,$res_email,$res_mobile,$res_gender,$res_age,$res_date,$res_time);
				
				if($stmt->execute())
				{
					$volunteer = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						
						$volunteer[$counter]['id'] = $res_id;
						$volunteer[$counter]['full_name'] = $res_full_name;
						$volunteer[$counter]['email_id'] = $res_email;
						$volunteer[$counter]['mobile'] = $res_mobile;
						$volunteer[$counter]['gender'] = $res_gender;
						$volunteer[$counter]['age'] = $res_age;
						$volunteer[$counter]['date'] = $res_date;
						$volunteer[$counter]['time'] = $res_time;
						
						$counter++;

						
					}
					
					if(!empty($volunteer))
					{
						if($stmt2 = $this->con->prepare("INSERT INTO `volunteer_list`(`id`, `full_name`, `email_id`, `mobile_no`, `gender`, `age`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?)"))
						{
							$counter = 0;
							$stmt2->bind_param("issisiss",$volunteer[$counter]['id'],$volunteer[$counter]['full_name'],$volunteer[$counter]['email_id'],$volunteer[$counter]['mobile'],$volunteer[$counter]['gender'],$volunteer[$counter]['age'],$volunteer[$counter]['date'],$volunteer[$counter]['time']  );
							if($stmt2->execute())
							{
								$obj= new Charity();
							$obj->volunteer_request_reject($accept_id);
							}
							else
							{
								return false;
							}
				
						}
					}
				
					else
					{
						return false;
					}
					
					
				}
			
			}
		}
		
		
		//Adding New Donation Type
		function don_type_list($res_title,$res_purpose,$res_founder,$res_event_img)
		{
				$current_date = date("Y-m-d");
				$current_time = date("H:i:s t");
			if($stmt= $this->con->prepare("INSERT INTO `donation_types_list`( `title`, `purpose`, `founder`, `don_type_img`, `date`, `time`) VALUES (?,?,?,?,?,?)"))
			{
				
				
				$stmt->bind_param("ssssss",$res_title,$res_purpose,$res_founder,$res_event_img,$current_date,$current_time);
				
				if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		
		
		
		
		//Fetching Donation type list
		function get_don_type_list()
		{
			if($stmt = $this->con->prepare("SELECT `id`, `title`, `purpose`, `founder`, `don_type_img`, `date`, `time` FROM `donation_types_list` "))
			{
				$stmt->bind_result($res_id,$res_title,$res_purpose,$res_founder,$res_don_type_img,$res_date,$res_time);
				
				if($stmt->execute())
				{
					$don_type = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						
						$don_type[$counter]['id'] = $res_id;
						$don_type[$counter]['title'] = $res_title;
						$don_type[$counter]['purpose'] = $res_purpose;
						$don_type[$counter]['founder'] = $res_founder;
						$don_type[$counter]['don_type_img'] = $res_don_type_img;
						$don_type[$counter]['date'] = $res_date;
						$don_type[$counter]['time'] = $res_time;
						
						$counter++;

						
					}
					
					if(!empty($don_type))
					{
						return $don_type;
					}
					else
					{
						return false;
					}
					
					
				}
			
			}
	
		 }
			
			
		//Adding new event 
		function add_new_event($res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img)
		{
			if($stmt= $this->con->prepare("INSERT INTO `event_list`( `event_name`, `start_date`, `end_date`, `venue`, `description`, `event_img`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?)"))
			{
				$current_date = date("Y-m-d");
				$current_time = date("H:i:s A");
				
				$stmt->bind_param("ssssssss",$res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img,$current_date,$current_time);
				if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		//Fetching from Event list
		function get_event_type_list()
		{
			if($stmt = $this->con->prepare("SELECT `id`, `event_name`, `start_date`, `end_date`, `venue`, `description`, `event_img`, `date`, `time` FROM `event_list` "))
			{
				$stmt->bind_result($res_id,$res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img,$res_date,$res_time);
				
				if($stmt->execute())
				{
					$event= array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						
						$event[$counter]['id'] = $res_id;
						$event[$counter]['event_name'] = $res_event_name;
						$event[$counter]['start_date'] = $res_start_date;
						$event[$counter]['end_date'] = $res_end_date;

						$event[$counter]['venue'] = $res_venue;
						$event[$counter]['description'] = $res_description;
						$event[$counter]['event_img'] = $res_event_img;
						$event[$counter]['date'] = $res_date;
						$event[$counter]['time'] = $res_time;
						
						$counter++;

						
					}
					
					if(!empty($event))
					{
						return $event;
					}
					else
					{
						return false;
					}
					
					
				}
			
			}
	
		 }
		
	
		//Delete Event 
		function del_event($del_id)
		{
				if($stmt= $this->con->prepare("DELETE FROM `event_list` WHERE `id`=?"))
			{
				$stmt->bind_param("i",$del_id);
				
				if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		
		//update event
		function update_event($res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img,$upd_id)
	{
		$current_date	=	date("Y-m-d");
		$current_time	=	date("H:i:s t");
		
		if($stmt = $this->con->prepare("UPDATE `event_list` SET `event_name`=?,`start_date`=?,`end_date`=?,`venue`=?,`description`=?,`event_img`=?,`date`=?,`time`=? WHERE `id`=?"))
		{
			$stmt->bind_param("ssssssssi",$res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img,$current_date,$current_time,$upd_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
			
		}
	}
	
	
	//Get Updated event
	function get_event_id($upd_id)
	{
		if($stmt = $this->con->prepare("SELECT `id`, `event_name`, `start_date`, `end_date`, `venue`, `description`, `event_img`, `date`, `time` FROM `event_list` WHERE `id`=?"))
		{
			$stmt->bind_param("i",$upd_id);
			
			$stmt->bind_result($res_id,$res_event_name,$res_start_date,$res_end_date,$res_venue,$res_description,$res_event_img,$res_date,$res_time);
			
			if($stmt->execute())
			{
				$event = array();
								
				if($stmt->fetch())
				{
						$event['id'] = $res_id;
						$event['event_name'] = $res_event_name;
						$event['start_date'] = $res_start_date;
						$event['end_date'] = $res_end_date;
						$event['venue'] = $res_venue;
						$event['description'] = $res_description;
						$event['event_img'] = $res_event_img;
						$event['date'] = $res_date;
						$event['time'] = $res_time;

				}
				
				if(!empty($event))
				{
					return $event;
				}
				else{
					return false;
				}
				
			}
			
		}
	}
		
		
	
	
	//set Fund Raising details
	
	function set_funds($email,$fund)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("INSERT INTO `fund_raise`( `email_id`, `fund_amount`, `date`, `time`) VALUES (?,?,?,?)") )
		{
			$stmt->bind_param("ssss",$email,$fund,$current_date,$current_time);
			
			if($stmt->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		
	}


		//get Fund Raising details
		
		function get_fund_details()
		{
			if($stmt = $this->con->prepare("SELECT `id`, `email_id`, `fund_amount`, `date`, `time` FROM `fund_raise` "))
			{
				$stmt->bind_result($res_id,$res_email,$res_fund,$res_date,$res_time);
				
				if($stmt->execute())
				{
					
					$funds = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						$funds[$counter]['id']				= $res_id;
						$funds[$counter]['email']			= $res_email;
						$funds[$counter]['fund_amount']			= $res_fund;
						$funds[$counter]['date']			= $res_date;
						$funds[$counter]['time']			= $res_time;
						
						$counter++;						
						
					}
					if(!empty($funds))
					{
						return $funds ;
					}
					else
					{
						return false ; 
					}
				}
			}
	}
		
		//Fund Total
		function get_fund_amount_total()
		{
			if($stmt = $this->con->prepare("SELECT sum(`fund_amount`) FROM `fund_raise`"))
			{
				$stmt->bind_result($total_fund);
				
				if($stmt->execute())
				{
					
					$funds = 0;
					
					if($stmt->fetch())
					{
						$funds = $total_fund;						
						
					}
					if(!empty($funds))
					{
						return $funds ;
					}
					else
					{
						return false ; 
					}
				}
			}
		}
		


	//Get User Login Passsword	
	function get_user_password($var_mobile_number)
	{
		if($stmt = $this->con->prepare("SELECT  `password` FROM `sign_up_page` WHERE `mobile_number`=?"))
		{
			$stmt->bind_param("s",$var_mobile_number);
			
			$stmt->bind_result($res_password);
			
			if($stmt->execute())
			{
				if($stmt->fetch())
				{
					return $res_password;
				}
				else
				{
					return false;
				}
			}
		}
	}
	
	//Get User Login Passsword	
	function get_user_name($var_mobile_number)
	{
		if($stmt = $this->con->prepare("SELECT `full_name` FROM `sign_up_page` WHERE `mobile_number`=?"))
		{
			$stmt->bind_param("s",$var_mobile_number);
			
			$stmt->bind_result($res_user_name);
			
			if($stmt->execute())
			{
				if($stmt->fetch())
				{
					return $res_user_name;
				}
				else
				{
					return false;
				}
			}
		}
	}
	function get_user_profile_photo($var_mobile_number)
	{
		if($stmt = $this->con->prepare("SELECT `profile_photo` FROM `sign_up_page` WHERE `mobile_number`=?"))
		{
			$stmt->bind_param("s",$var_mobile_number);
			
			$stmt->bind_result($res_user_profile_photo);
			
			if($stmt->execute())
			{
				if($stmt->fetch())
				{
					return $res_user_profile_photo;
				}
				else
				{
					return false;
				}
			}
		}
	}
	
		//get user dontion history
	function get_user_donation_history($user_mobile)
	{
		if($stmt = $this->con->prepare("SELECT `id`, `first_name`, `last_name`, `email_id`, `mobile_no`, `state`, `don_category`, `amount`, `payment_method`, `paying_to`, `date`, `time` FROM `donation_form` WHERE `mobile_no`=?"))
			{
				$stmt->bind_param("s",$user_mobile);
				$stmt->bind_result($res_id,$res_first_name,$res_last_name,$res_email,$res_mobile,$res_state,$res_don_category,$res_amount,$res_payment_method,$res_paying_to,$res_date,$res_time);
				
				if($stmt->execute())
				{
					
					$donation = array();
					$counter = 0;
					
					while($stmt->fetch())
					{
						$donation[$counter]['id']				= $res_id;
						$donation[$counter]['first_name']		= $res_first_name;
						$donation[$counter]['last_name']		= $res_last_name;
						$donation[$counter]['email']			= $res_email;
						$donation[$counter]['mobile']			= $res_mobile;
						$donation[$counter]['state']			= $res_state;
						$donation[$counter]['don_category']		= $res_don_category;
						$donation[$counter]['amount']			= $res_amount;
						$donation[$counter]['payment_method']	= $res_payment_method;
						$donation[$counter]['paying_to']		= $res_paying_to;
						$donation[$counter]['date']			= $res_date;
						$donation[$counter]['time']			= $res_time;
						
						$counter++;						
						
					}
					if(!empty($donation))
					{
						return $donation ;
					}
					else
					{
						return false ; 
					}
				}
			}
	}
	
}//class end 


?>
