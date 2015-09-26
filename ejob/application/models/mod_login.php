<?php
class mod_login extends Model {

    function mod_login() {
        parent::Model();
    }

    function is_valid_user() {
        $status = '1';
        $username = $_POST['username1'];
        $password = $_POST['password1'];
        $sql = "select * from user where username='$username' and password='$password' and status='$status'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $this->do_login($query->row_array());
            return true;
        } else {
            return false;
        }
    }

    function get_user_type() {
        $status = '1';
        $username = $_POST['username1'];
        $password = $_POST['password1'];
        $sql = "select * from user where username='$username' and password='$password' and status='$status'";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result['user_type'];
    }

    function do_login($data) {
        $this->session->set_userdata('id', $data['id']);
        $this->session->set_userdata('name', $data['name']);
        $this->session->set_userdata('username', $data['username']);
        $this->session->set_userdata('email', $data['email']);
        $this->session->set_userdata('logged_in', TRUE);
    }

    function do_logout() {
        $this->session->sess_destroy();
    }

}

?>
