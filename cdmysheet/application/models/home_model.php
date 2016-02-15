<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
	 
	 function get_user_details($username)
     {
          $sql = "select * from tbl_usrs,myinformationpersonal  where username = '" . $username . "' and  tbl_usrs.empid = myinformationpersonal.empid limit 1";
        
		   $query = $this->db->query("$sql");
		  
           $result = $query->result_array();
		  
		   
		   
		  
		  return $result[0];

		  
	}
	
	
}
?>