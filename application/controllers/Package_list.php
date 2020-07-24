<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_list extends CI_Controller {

	function __construct() {

        //ini_set('display_errors', 1);
        parent::__construct();

        $this->load->model('front_model');
        $user = $this->session->userdata('user_front');
        if($this->session->userdata('user_front') == FALSE OR $user->user_role != 4) redirect(base_url('login'));
    }
    public function index(){

    	$user_deta = $this->session->userdata('user_front');
        $data['packages']= $this->front_model->getlist('packages');
        $current_year = date("Y");
    	$year_arr = array();
    	for($i=0; $i<=10; $i++){
    		$year_arr[] = $current_year+$i;
    	}
    	$data['year_list'] = $year_arr;
	    $this->load->view('header');
		$this->load->view('package_front',$data);
		$this->load->view('footer');
			
    }


}
