<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function register($enc_password,$tkn) {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $enc_password,
            'token'=>$tkn
        );

        return $this->db->insert('users', $data);
    }

    public function login($email, $password) {
        $this->db->where('email', $email);
        $result = $this->db->get('users');


        if($result->num_rows() == 1) {
            $user = $result->row();
            if(password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function get_user($user_id) {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->row();
    }

    
    function update_account($id,$data){
        
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        
    }
}
?>