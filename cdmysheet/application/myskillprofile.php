<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 */
 class Myskillprofile extends CI_Controller{
	 
	 function __construct(){
		 parent::__construct();
	 }
	 public function index(){
		 //Load our view to be displayed
		 //to the user
		 $this->load->helper('url');
		 $this->load->view('myskillprofile_view');
	 
	 }
	 public function process(){
		 //Load the model
		 $this->load->model('login model');
		 //Validate the user can login
		 $result = $this->login_model->validate();
		 //Now we verify the result
		 if(! $result){
			 // If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index();
		 }else{
			 
			 //If user did validate,
			 //Send them to memebers area
			 redirect('home');
			 
			 }
			
	 }
	 private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			redirect('myskillprofile');
		}
	}
	 
 }
 ?>