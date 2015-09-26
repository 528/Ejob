<?php

class admn extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('mod_admin');
        $this->load->model('mod_login');
    }

    function index() {
        if (!common::is_logged_in()) {
            redirect('login');
        }
        $this->load->library('grid');
        $gridObj = new grid();
        $gridColumn = array("ID", "User Name", "Password", "Email");
        $gridColumnModel = array(
            array("name" => "id",
                "index" => "id",
                "width" => 90,
                "sortable" => true,
                "align" => "center",
                "editable" => false
            ),
            array("name" => "user_id",
                "index" => "user_id",
                "width" => 150,
                "sortable" => true,
                "align" => "center",
                "editable" => false
            ),
            array("name" => "password",
                "index" => "password",
                "width" => 150,
                "sortable" => true,
                "align" => "center",
                "editable" => false
            ),
            array("name" => "email",
                "index" => "email",
                "width" => 200,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
        );
        $gridObj->setGridOptions("Admin Info", 880, 250, "date", "desc", $gridColumn, $gridColumnModel, site_url('admn/load_admin'), true);
        $data['grid_data'] = $gridObj->getGrid();
        $data['msg'] = $this->session->flashdata('msg');
        $data['dir'] = 'admn';
        $data['page'] = 'admn_lising';
        $this->load->view('main', $data);
    }

    function load_admin() {
        $this->mod_admin->get_adminGrid();
    }

    function add_admin() {
        if (!common::is_logged_in()) {
            redirect('login');
        }
        if ($_POST['save']) {
            $data['num'] = $this->mod_admin->get_admin_info();
            if ($this->form_validation->run('valid_admin')) {
                if ($data['num'] == 0) {
                    $this->mod_admin->add_admin();
                    $this->session->set_flashdata('msg', "<div class='success'>Content Added Successfully</div>");
                    redirect('admn');
                } else {
                    $data['msgs'] = 'User Exist,Change Username';
                }
            }
        }
        if ($data['msg'] == '') {
            $data['msg'] = $this->session->flashdata('msg');
        }
        $data['dir'] = 'admn';
        $data['page'] = 'add_admn';
        $data['page_title'] = "ADD User";
        $data['action'] = 'admn/add_admin';
        $this->load->view('main', $data);
    }

    function edit_admin($cid='') {
        if (!common::is_logged_in()) {
            redirect('login');
        }
        if ($cid == '') {
            redirect('admn');
        }
        $data['error'] = "";
        $data['num'] = $this->mod_admin->get_admin_info();
        if ($_POST['save']) {
            if ($this->form_validation->run('valid_admin') && $data['num'] == 0) {
                $data = array(
                    'user_id' => $_POST['user_name'],
                    'password' => $_POST['password'],
                    'email' => $_POST['email']
                );

                $this->db->update('admin', $data, array('id' => $cid));
                $data['new'] = $_POST['user_name'];
                $data['current'] = $this->session->userdata('user_id');
                $this->session->set_userdata('user_id', $data['new']);
                $this->session->set_flashdata('msg', "<div class='success'>Content Changed Successfully</div>");
                redirect('admn');
            } else {
                $this->session->set_flashdata('msg', "<div class='error'>User Exist,choose another name</div>");
                redirect('admn');
            }
        }
        $data = sql::row('admin', 'id=' . $cid);
        $data['error'] = $err ? $err : '';
        $data['dir'] = 'admn';
        $data['action'] = 'admn/edit_admin/' . $cid;
        $data['page'] = 'add_admn';
        $data['page_title'] = "Edit";
        $this->load->view('main', $data);
    }

    function delete_admin($cid='') {
        if (!common::is_logged_in()) {
            redirect('login');
        }
        if ($cid == '') {
            redirect('admn');
        }
        sql::delete('admin', 'id=' . $cid);
        $this->session->set_flashdata('msg', "<div class='success'>Admin Deleted Successfully</div>");
        redirect('admn');
    }

}

?>
