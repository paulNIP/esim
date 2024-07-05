<?php


class Purchases_model extends CI_Model
{

	public function getData($limit , $search , $ofset , $ordername , $ordertype ) {

		$query1 = $this->db->get('user_details');
		$total = $query1->num_rows();

		if(!empty($search))
			$this->db->like('username' , $search);

		$this->db->order_by($ordername , $ordertype);
		$this->db->limit($limit , $ofset);
		$query = $this->db->get('user_details');

		$totalRecord = $query->result_array();
		$filtered = $query->num_rows();


		return array("recordsTotal"=>$filtered,"recordsFiltered"=>$total,'data' => $totalRecord);
	}

}
