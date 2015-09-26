<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class publish_model extends Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all($per_pg, $offset) {
        $this->db->order_by('add_id', 'desc');
        $query = $this->db->get('advertise', $per_pg, $offset);
        return $query->result();
    }

    function get_category_name($cat_id='') {
        $sql = "select cat_name from category where cat_id='$cat_id'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['cat_name'];
    }

    public function message_count() {
        return $this->db->count_all('advertise');
    }

    function get_category_option($sid='') {
        $query = $this->db->query("select * from category where status='1'");
        $result = $query->result_array();
        foreach ($result as $val) {
            if ($val[cat_id] == $sid) {
                $opt.="<option value='$val[cat_id]' selected='selected'>$val[cat_name]</option>";
            } else {
                $opt.="<option value='$val[cat_id]'>$val[cat_name]</option>";
            }
        }
        return $opt;
    }

    function get_recent_first($id='') {
        $query = $this->db->query("SELECT * FROM advertise WHERE user_id='$id' AND status='1' ORDER BY add_id DESC LIMIT 0 , 1");
        $result = $query->result_array();
        return $result;
    }

    function get_recent_second($id='') {
        $query = $this->db->query("SELECT * FROM advertise WHERE user_id='$id' AND status='1' ORDER BY add_id DESC LIMIT 1 , 1");
        $result = $query->result_array();
        return $result;
    }

    function get_recent_third($id='') {
        $query = $this->db->query("SELECT * FROM advertise WHERE user_id='$id' AND status='1' ORDER BY add_id DESC LIMIT 2 , 1");
        $result = $query->result_array();
        return $result;
    }

    function get_recent_fourth($id='') {
        $query = $this->db->query("SELECT * FROM advertise WHERE user_id='$id' AND status='1' ORDER BY add_id DESC LIMIT  3 , 1");
        $result = $query->result_array();
        return $result;
    }

    function get_my_applicants($id='') {
        $sql = "SELECT * FROM application WHERE publisher_id='$id' ORDER BY id DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function get_my_company_name($add_id='') {
        $sql = "select company_name from advertise where add_id='$add_id'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['company_name'];
    }

    function get_publish_date($add_id) {
        $sql = "select publish_date from advertise where add_id='$add_id'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['publish_date'];
    }

    function count_applicants($uid='', $add_id='') {
        $sql = "SELECT count( id ) AS number FROM application WHERE add_id ='$add_id' AND publisher_id ='$uid'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['number'];
    }

    function get_my_applicants_detail($add_id=''){
        $sql = "SELECT * FROM application WHERE add_id='$add_id'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function get_applicant_name($id=''){
        $sql = "select * from user where id='$id'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['name'];
    }

    function view_profile($id=''){
        $sql = "select * from user where id='$id'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    function applicantion_detail($add_id){
        $sql = "select * from advertise where add_id='$add_id'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
     function get_all_message($id=''){
        $sql = "SELECT * FROM publisher_inbox WHERE publisher_id ='$id' ORDER BY id DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function get_sender($id=''){
        $sql = "SELECT * FROM user where id='$id'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['name'];
    }

    function view_semder_detail($id=''){
         $sql = "SELECT * FROM user WHERE id ='$id'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

}

?>