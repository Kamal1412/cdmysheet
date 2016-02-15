<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myskillprofil extends CI_Model
{
     function __construct()
     {
          // Call the Model Constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_emp($usr, $pwd)
     {
          
		  $sql = "select * from tbl_usrs where username = '" . $usrs . "' and password = '" . $pwd . "' ";
		  $sql = "select * from emp_info                                                                ";
		  
		  $query = $this->db->query($sql);
		  return $query->num_rows();
          
     }
}?>