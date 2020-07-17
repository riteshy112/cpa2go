<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('api_model');
    }
    public function index(){
        $packages = $this->api_model->getsingle_list('packages','status','active');
        $packages_data['message'] = '';
        $packages_data['status'] = 'true';
        $packages_data['details'] = $packages;
        echo json_encode($packages_data);
        exit;	
    }

    public function packageDetails(){
        $id = $this->input->post('id');
        $packages = $this->api_model->getsinglerow('packages','id',$id);
        $packages_data['message'] = '';
        $packages_data['status'] = 'true';
        $packages_data['details'] = $packages;
        echo json_encode($packages_data);
        exit;	
    }

    public function packagePurchase(){
        $data['user_id'] = $this->input->post('user_id');
        $data['plan_id'] = $this->input->post('plan_id');
        $data['plan_start_date'] = date('Y-m-d H:i:s');
        $data['plan_end_date'] = date('Y-m-d H:i:s', strtotime('+1 month', strtotime($data['plan_start_date'])));
        $response=$this->api_model->insert_data('user_plan_history',$data);
        $packages_data['message'] = '';
        $packages_data['status'] = 'true';
        $packages_data['details'] = (object)array();
        echo json_encode($packages_data);
        exit;
    }
}