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
        
        $customer_id = $user_deta->id;
        $cust_data = $this->front_model->getsinglerow('users','id',$customer_id);
       
        $no_of_question_count=$cust_data->no_of_question_count;

        $this->db->order_by("id", "desc");
        $this->db->where('user_id', $customer_id);
        $this->db->select('*');
        $this->db->from('user_plan_history');
        $query =  $this->db->get(); 
        $current_package = $query->row();  
        $current_date = date('Y-m-d H:i:s');
        $data['plan_end_date'] = $current_package->plan_end_date;
        $showBuy = 0;
        if($current_date > $current_package->plan_end_date){
            $showBuy = 1;
        }
       
        if($no_of_question_count == 0){
            $showBuy = 1;
        }
     
        $data['no_of_question_count'] = $no_of_question_count;
        $data['showBuy'] = $showBuy;
      
	    $this->load->view('header');
		$this->load->view('package_front',$data);
		$this->load->view('footer');
			
    }


}
