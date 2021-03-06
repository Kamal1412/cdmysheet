<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('config');
          $this->load->helper('form');
          $this->load->helper('url');
	      $this->load->helper('html');
		  $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('login_model');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");
		  
		 

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");
		  

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login_view');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password, $domain);
					 
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
						 //load the model  
                           $this->load->model('login_model');  
                         //load the method of model  
                           $data =$this->login_model->get_user_details($username);
						   
		               
                         $sessiondata = array(
                              'username' => $data[0]['username'],
                              'empid' => $data[0]['empid'],
                              'loginuser' => TRUE
                         );
						  
	                     $this->session->set_userdata($sessiondata);
						  redirect("login/home");
						  
                    }
                   
               }
               else
               {
                    redirect('login/index');
					
               }
          }
     }
	 public function home(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('home_view');
	}
	
}

?>