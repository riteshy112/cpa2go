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

    public function deductCount(){
        $user_id = $this->input->post('user_id');
        $userInfo=$this->api_model->getsinglerow('users','id',$user_id);
        $update_count = $userInfo['no_of_question_count'] - 1;

        $update_data = ['no_of_question_count'=>$update_count];
        $this->api_model->update('users','id',$user_id,$update_data);

        $user_data['message'] = '';
        $user_data['status'] = 'true';
        $user_data['details'] = $update_data;
        echo json_encode($user_data);
        exit;

    }

    public function userGetCount(){
        $user_id = $this->input->post('user_id');
        $userInfo=$this->api_model->getsinglerow('users','id',$user_id);
        $update_count = $userInfo['no_of_question_count'];
        $update_data = ['no_of_question_count'=>$update_count];
        $user_data['message'] = '';
        $user_data['status'] = 'true';
        $user_data['details'] = $update_data;
        echo json_encode($user_data);
        exit;
    }

    public function addPackage(){
        $user_id = $this->input->post('user_id');
        $planType=$this->input->post('plan_type');
        if($planType=='Gold'){
            $plusCount = 10;
        }elseif($planType=='Silver'){
            $plusCount = 5;
        }
        elseif($planType=='Bronze'){
            $plusCount = 3;
        }elseif($planType=='Single'){
            $plusCount = 1;
        }else{
            $plusCount = 0;
        }

        $userInfo=$this->api_model->getsinglerow('users','id',$user_id);
        $update_count = $userInfo['no_of_question_count'] + $plusCount;

        $update_data = ['no_of_question_count'=>$update_count];
        $this->api_model->update('users','id',$user_id,$update_data);

        $user_data['message'] = '';
        $user_data['status'] = 'true';
        $user_data['details'] = $update_data;
        echo json_encode($user_data);
        exit;
    }

    public function packagePurchase(){
        $data['user_id'] = $this->input->post('user_id');
        $data['plan_id'] = $this->input->post('plan_id');

        $packageInfo=$this->api_model->getsinglerow('packages','id',$data['plan_id']);
        $userInfo=$this->api_model->getsinglerow('users','id',$data['user_id']);
        $update_count = $userInfo['no_of_question_count'] + $packageInfo['no_of_questions'];
       
        $data['plan_start_date'] = date('Y-m-d H:i:s');
        $data['plan_end_date'] = date('Y-m-d H:i:s', strtotime('+1 month', strtotime($data['plan_start_date'])));
        $response=$this->api_model->insert_data('user_plan_history',$data);
        

        $update_data = ['no_of_question_count'=>$update_count];
        $this->api_model->update('users','id',$data['user_id'],$update_data);

        $packages_data['message'] = '';
        $packages_data['status'] = 'true';
        $packages_data['details'] = (object)array();
        echo json_encode($packages_data);
        exit;
    }
}