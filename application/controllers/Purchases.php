<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchases extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{

		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'users/purchases', $data);

	}
	/**
	 * @method use to get data from get data method of welcome model
	 */
	public function getData() {
		if(isset($_GET['search']['value'])){
			$search = $_GET['search']['value'];
		}
		else{
			$search = '';
		}
		if(isset($_GET['length'])){
			$limit = $_GET['length'];
		}
		else{
			$limit = 10;
		}
		if(isset($_GET['start'])){
			$ofset = $_GET['start'];
		}
		else{
			$ofset = 0;
		}
		$orderType = $_GET['order'][0]['dir'];
		$nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];

		$records = $this->Purchases_model->getData($limit , $search ,  $ofset , $nameOrder , $orderType);
		$data = array();
		$i=0+$ofset;
		foreach ($records['data']  as $row)
		{
			if($row['status'] == 0){ $status =   ' <span class="btn btn-danger btn-sm tgl_change_post danger" data-status="1" id="post_'.$row['user_id'].'" data-id="'.$row['user_id'].'">Inactive</span>';}
			elseif($row['status'] == 1) { $status =  '<span class="btn btn-success btn-sm tgl_change_post" data-status="0" data-id="'.$row['user_id'].'" id="post_'.$row['user_id'].'">Active</span>';}

//            update_post_status('ci_ads' , $row['id']);
			$data[]= array(
				++$i,
				$row['username'],
				$row['first_name']. ' '. $row['last_name'],
				$row['gender'],
				$status,
			);
		}
		$records['data']=$data;
		echo json_encode($records);

	}


}