<?php
class Users extends CI_Controller {


    public function index()
	{
		$this->load->view('users/signin');
	}

    
    public function register() {
        $data['title'] = 'Register';

        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            // $this->load->view('templates/header');
            $this->load->view('users/signup', $data);
            // $this->load->view('templates/footer');
        } else {
            $enc_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            
            // Process POT request for token
		    $data['token'] = $this->Home_model->tokenRequest();

            $tkn=json_decode($data['token'])->data->access_token;

            $this->User_model->register($enc_password,$tkn);


            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
            redirect('users/login');
        }
    }

    public function login() {
        $data['title'] = 'Login';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // $this->load->view('templates/header');
            $this->load->view('users/signin', $data);
            // $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->login($email, $password);
           

            if ($user) {
                $user_data = array(
                    'user_id' => $user->id,
                    'email' => $email,
                    'token' =>$user->token,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                // redirect('users/dashboard');
                redirect('users/intialOnboard');

            } else {
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('users/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        redirect('users/login');
    }

    public function getEsims(){
                // Process GET request for eSIMs list with orders and statuses included
		$esims_list_response = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims?include=order%2Corder.status%2Corder.user&limit=2');
        echo $esims_list_response;

    }

    public function intialOnboard() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data = array();


        $this->load->view('users/initial_onboarding');
        
    }

    public function dashboard() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        // Process Cron Job for eSIMs list with orders and statuses included
		// $compatible_devices = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/compatible-devices');
        // $assocArray = json_decode($compatible_devices, true);
        // for ($count = 0; $count < sizeof($assocArray['data']); $count++)
        // {

        //    print_r($assocArray['data'][$count]['model']);
        //    {
        //     "model": "zangya_sprout",
        //     "os": "android",
        //     "brand": "bq",
        //     "name": "Aquaris X2"
        //    },

        // }

        // exit();

        // Process GET request for eSIMs list with orders and statuses included
		$data['esims_list_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims?include=order%2Corder.status%2Corder.user&limit=2');

		// Process GET request for eSIM package 
		$data['esim_package_list'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/packages');

        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');

        

        $this->template->set('title', 'Dashboard');
		$this->template->load('default_layout', 'contents' , 'users/dashboard', $data);
        
    }

    public function compatibleDevices(){
        $response = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/compatible-devices');
        echo $response;
    }

    public function onboarding() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        // Process GET request for eSIMs list with orders and statuses included
		$data['esims_list_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims?include=order%2Corder.status%2Corder.user&limit=2');

		// Process GET request for eSIM package 
		$data['esim_package_list'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/packages');


        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');

        $this->template->set('title', 'Dashboard');
		$this->template->load('default_layout', 'contents' , 'users/onboarding', $data);
        
    }

    public function get_access_token() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        // Process POT request for token
		$data['token'] = $this->Home_model->tokenRequest();

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));


        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');

        $this->template->set('title', 'OnBoarding');
        $this->template->load('default_layout', 'contents' , 'users/account-settings', $data);

        
        
    }


    public function notifications() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        // Process POT request for token
		$data['token'] = $this->Home_model->tokenRequest();

        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');

        
        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        $this->template->set('title', 'Notifications');
		$this->template->load('default_layout', 'contents' , 'users/notifications', $data);
        
    }

    public function topup() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $package_id = $this->input->post('package_id');
        $iccid = $this->input->post('iccid');
        $description = $this->input->post('description');

        // Process POT request for token
		$data['topup'] = $this->Home_model->topupRequest(
            $package_id,
            $iccid,
            $description
        );

        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');
        
        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        $this->template->set('title', 'Notifications');
		$this->template->load('default_layout', 'contents' , 'users/dashboard', $data);
        // echo json_encode($res);
        
    }

    public function update_account() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->template->set('title', 'OnBoarding');
            $this->template->load('default_layout', 'contents' , 'users/onboarding', $data);

        } else {

            // Process POT request for token
		    $data['token'] = $this->Home_model->tokenRequest();
            $token_data = json_decode($data['token']);
            $token =$token_data->data->access_token;

            if(is_null($data['user']->token)){

                $array_data= array (
                    "token" =>$token,
                    "contact"=>$this->input->post('contact'),
                    "country"=>$this->input->post('country'),
                );
    
                $data['userG'] = $this->User_model->update_account($this->session->userdata('user_id'),$array_data);

            }


            // Process GET request for eSIMs list with orders and statuses included
		    // $data['esims_list'] = $this->Home_model->getTokenRequest('https://sandbox-partners-api.airalo.com/v2/sims?include=order%2Corder.status%2Corder.user&limit=2',$data['user']->token);

            $this->template->set('title', 'OnBoarding');
            $this->template->load('default_layout', 'contents' , 'users/onboarding', $data);

        }


        
    }





    public function account() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');


		$this->template->set('title', 'Account');
		$this->template->load('default_layout', 'contents' , 'users/account-settings', $data);
 
    }

    public function esim_details($esim) {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');


		// Process GET request for specific eSIM details including order, order status, and user
		$data['esim_details_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/'.$esim.'?include=order%2Corder.status%2Corder.user');

        
        // $this->load->view('templates/header');
        $this->load->view('users/esim_details', $data);
        // $this->load->view('templates/footer');

        $data = array();
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'users/purchases', $data);
    }

    public function esim_usage($esim) {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

		// // Process GET request for eSIM usage
		$data['esim_usage_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/'.$esim.'/usage');


        // $this->load->view('templates/header');
        $this->load->view('users/esim_usage', $data);
        // $this->load->view('templates/footer');
    }

    public function esim_top_ups($esim) {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));



		// // Process GET request for eSIM topups
		$data['esim_topups_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/'.$esim.'/topups');


        // $this->load->view('templates/header');
        $this->load->view('users/esim_top_ups', $data);
        // $this->load->view('templates/footer');
    }

    public function instructions($esim) {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

        
		// Process GET request for eSIM topups
		$data['instructions'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/' . $esim . '/instructions');


        // $this->load->view('templates/header');
        $this->load->view('users/esim_top_ups', $data);
        // $this->load->view('templates/footer');
    }

    public function sim_order() {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');

		// Process GET request for eSIM topups
		// $data['instructions'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/' . $esim . '/instructions');
        // print_r($data['user']->token);
        $data['packages'] = $this->Home_model->getRequest("https://sandbox-partners-api.airalo.com/v2/packages");
        $data['global'] = $this->Home_model->getRequest("https://sandbox-partners-api.airalo.com/v2/packages?filter[type]=global");
        
        // implement local packages
        $data['local'] = $this->Home_model->getRequest("https://sandbox-partners-api.airalo.com/v2/packages?filter[type]=local");
		

        $this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'users/sim_order', $data);

    }

    public function get_country_sims($country) { 

        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');
        // implement country packages
        $data['country_packages'] = $this->Home_model->getRequest("https://sandbox-partners-api.airalo.com/v2/packages?filter[country]=".$country);
		

        $this->template->set('title', 'Country Packages');
		$this->template->load('default_layout', 'contents' , 'users/country_packages', $data);

    }

    public function get_region_sims($region) { 

        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data['region']=$region;
        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
        $data['balance'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/balance');
        // implement country packages
        $data['global'] = $this->Home_model->getRequest("https://sandbox-partners-api.airalo.com/v2/packages?filter[type]=global");

        $this->template->set('title', 'Country Packages');
		$this->template->load('default_layout', 'contents' , 'users/region_packages', $data);

    }


    public function submit_order() {

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

		$postParameter= array(
            "package_id" => $this->input->post('package_id'),
            "quantity" => $this->input->post('quantity'),
            "description"=> $this->input->post('description'),
            "type"=> $this->input->post('type')
        );

        $response = $this->Home_model->orderRequest("https://sandbox-partners-api.airalo.com/v2/orders",$data['user']->token,$postParameter);
        
        echo json_encode($response);


    }

    public function esim_package_history($sim) {
        if(!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));

		// // Process GET request for eSIM package history
		$data['esim_package_history_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/'.$esim.'/packages');

        // $this->load->view('templates/header');
        $this->load->view('users/esim_package_history', $data);
        // $this->load->view('templates/footer');
    }

    
}
?>