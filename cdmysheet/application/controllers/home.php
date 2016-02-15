<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 */
 class Home extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	public function index(){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');
		$this->load->view('home_view');
		//$this->load->view('myprofile_view');
		//$this->load->view('capexopex_view');
		//$this->load->view('myapproval_view');
		//$this->load->view('timesheetmanagement_view');
		//$this->load->view('myprojectassignation_view');
		//$this->load->view('currentassignation_view');
		//$this->load->view('myinformationpersonal_view');
		
		
		
		
	}
	public function process(){
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index();
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('home');
			
		}		
	}
	private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			redirect('home');
		}
	}
	public function myprofile(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('myprofile_view');
	}
	public function myexpectationexchange(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('myexpectationexchange_view');
	}
	public function common(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('common_view');
	}
	public function hr(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('hr_view');
	}
	public function delivery(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('delivery_view');
	}
	public function salesmarketing(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('salesmarketing_view');
	}
	public function other(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('other_view');
	}
	public function myhorizontal(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('myhorizontal_view');
	}
	public function myvertical(){
		// Load our view to be displayed
		// to the user
		
		
		$this->load->view('myvertical_view');
	}
	public function myworkplace(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('myworkplace_view');
	}
	public function others(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('others_view');
	}
	
	public function capexopex(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('capexopex_view');
	}
	
	public function myapproval(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('myapproval_view');
		}
	public function timesheetmanagement(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('timesheetmanagement_view');
	}
	public function myprojectassignation(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('myprojectassignation_view');
	}
	public function currentassignation(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('currentassignation_view');
	}
	
	public function deploymentallowance(){
		// Load our view to be displayed
		// to the user
		
		$this->load->view('deploymentallowance_view');
	}
	public function myinformationpersonal(){
		// Load our view to be displayed
		// to the user
		
		
		 
         //load the model  
         $this->load->model('login_model');  
         //load the method of model  
         $data['s']=$this->login_model->get_user_details($this->session->userdata('username'));
		 
		 
		 
		 $this->load->view('myinformationpersonal_view',$data);
		 
	}
	
}

?>