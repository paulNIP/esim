<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    public function __construct() {
    parent::__construct();
		// Load the todo model to make it available 
		// to *all* of the controller's actions 
		$this->load->model('Home_model');
    }


	public function index()
	{
        // 1. Load the data:

		// 2. Make the data available to the view
        $data = array();
        // $data['todos'] = $all_homeinfo;

		// Process GET request for eSIMs list with orders and statuses included
		$data['esims_list_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims?include=order%2Corder.status%2Corder.user&limit=2');

		// Process GET request for specific eSIM details including order, order status, and user
		$data['esim_details_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/891000000000009106?include=order%2Corder.status%2Corder.user');

		// Process GET request for eSIM instructions
		$data['esim_instructions_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/893000000000011641/instructions');

		// $iccid = json_decode($esims_list_response, TRUE);
		// Process GET request for eSIM usage
		$data['esim_usage_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/123456789/usage');

		// Process GET request for eSIM topups
		$data['esim_topups_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/8910300000005271146/topups');

		// Process GET request for eSIM package history
		$data['esim_package_history_response'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/sims/893000000000037281/packages');

		// Process GET request for eSIM package 
		$data['esim_package_list'] = $this->Home_model->getRequest('https://sandbox-partners-api.airalo.com/v2/packages');



        
        // 3. Render the view and pass it the data:
        $this->load->view('home',$data);
	}
}
