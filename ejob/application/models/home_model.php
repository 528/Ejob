<?php

class home_model extends Model {

    function home_model() {
        parent::Model();
    }

    function get_category_info() {
        $current_category = $_POST['cat_name'];
        $sql = "select count(*) as num from user where user_id='$current_category'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['num'];
    }

    function register_user() {
        $sql = "insert into user set
                name={$this->db->escape($_POST['name'])},
                birthdate={$this->db->escape($_POST['birthdate'])},
                username={$this->db->escape($_POST['username'])},
                password={$this->db->escape($_POST['password'])},
                user_type={$this->db->escape($_POST['user_type'])},
                sex={$this->db->escape($_POST['sex'])},
                marital_status={$this->db->escape($_POST['marital'])},
                nationality={$this->db->escape($_POST['nationality'])},
                religion={$this->db->escape($_POST['religion'])},
                present_address={$this->db->escape($_POST['present'])},
                permanent_address={$this->db->escape($_POST['permanent'])},
                phone={$this->db->escape($_POST['phone'])},
                email={$this->db->escape($_POST['email'])},
                picture='insert image'";
        return $this->db->query($sql);
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

    function get_recent_first() {
        $query = $this->db->query("select * from advertise where cat_id = 1 order by add_id DESC LIMIT 0,1");
        $result = $query->result_array();
        return $result;
    }

    function get_recent_second() {
        $query = $this->db->query("select * from advertise where cat_id = 2 order by add_id DESC LIMIT 0,1");
        $result = $query->result_array();
        return $result;
    }

    function get_recent_third() {
        $query = $this->db->query("select * from advertise where cat_id = 3 order by add_id DESC LIMIT 0,1");
        $result = $query->result_array();
        return $result;
    }

    function get_recent_fourth() {
        $query = $this->db->query("select * from advertise where cat_id = 4 order by add_id DESC LIMIT 0,1");
        $result = $query->result_array();
        return $result;
    }

    function job_detail($id='') {
        $query = $this->db->query("SELECT * FROM advertise WHERE add_id= '$id' AND status='1'");
        $result = $query->result_array();
        return $result;
    }

    function contact_detail($id) {
        $query = $this->db->query("SELECT * FROM user WHERE id='$id' AND status='1'");
        $result = $query->result_array();
        return $result;
    }

    function get_category_name($id) {
        $query = $this->db->query("SELECT * FROM category WHERE cat_id='$id' AND status='1'");
        $result = $query->result_array();
        return $result;
    }

    function publish_navi() {
        $sql = "SELECT count( advertise.add_id ) AS Number, category.cat_name,advertise.cat_id FROM advertise, category
                WHERE category.cat_id = advertise.cat_id AND advertise.status = 1 GROUP BY advertise.cat_id";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function category_nav_link($id='') {
        $sql = "SELECT * FROM advertise WHERE cat_id ='$id' AND STATUS =1 ORDER BY add_id ASC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function message_count($id) {
        $sql = "SELECT count(add_id) as number FROM advertise WHERE cat_id ='$id'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['number'];
    }

    public function get_all($per_pg, $offset, $id) {
        $this->db->order_by('add_id', 'desc');
        $query = $this->db->get_where('advertise', array('cat_id' => $id));
        return $query->result_array();
    }

    function get_cat_name($id=''){
        $sql = "SELECT * FROM category WHERE cat_id='$id' AND status='1'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['cat_name'];
    }


}

?>
