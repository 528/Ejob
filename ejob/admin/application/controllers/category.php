<?php
class category extends Controller {
    function __construct() {
        parent::Controller();
        $this->load->model('mod_category');
        $this->load->model('mod_login');
    }

    function index() {
        if (!common::is_logged_in()) {
            redirect('login');
        }
        $this->load->library('grid');
        $gridObj = new grid();
        $gridColumn = array("Category Name","Description", "Status");
        $gridColumnModel = array(
            array("name" => "cat_name",
                "index" => "cat_name",
                "width" => 100,
                "sortable" => true,
                "align" => "center",
                "editable" => false
            ),
            array("name" => "description",
                "index" => "description",
                "width" => 250,
                "sortable" => true,
                "align" => "center",
                "editable" => false
            ),
            array("name" => "status",
                "index" => "status",
                "width" => 100,
                "sortable" => true,
                "align" => "center",
                "editable" => false
            ),
        );
        $gridObj->setGridOptions("Category Settings", 880, 250, "date", "desc", $gridColumn, $gridColumnModel, site_url('category/load_category'), true);
        $data['grid_data'] = $gridObj->getGrid();
        $data['msg'] = $this->session->flashdata('msg');
        $data['dir'] = 'category';
        $data['page'] = 'category_listing';
        $this->load->view('main', $data);
    }

    function load_category() {
        $this->mod_category->get_categoryGrid(); 
    }

    function add_category() {
        if ($_POST['save']) {
            if ($this->form_validation->run('valid_category')) {
                $this->mod_category->add_category();
                $this->session->set_flashdata('msg', "<div class='success'>Category Added Successfully</div>");
                redirect('category');
            } else {
            }
        }
        if ($data['msg'] == '') {
            $data['msg'] = $this->session->flashdata('msg');
        }
        $data['dir'] = 'category';
        $data['page'] = 'add_category';
        $data['page_title'] = "ADD Category";
        $data['action'] = 'category/add_category';
        $this->load->view('main', $data);
    }

    function edit_category($cid='') {
        if ($cid == '') {
            redirect('category');
        }
        $data['error'] = "";
        if ($_POST['save']) {
            if ($this->form_validation->run('valid_category')) {

                $data = array(
                    'cat_name' => $_POST['category_name'],
                    'description' => $_POST['cat_description']
                );                
                $this->db->update('category', $data, array('cat_id' => $cid));
                $this->session->set_flashdata('msg', "<div class='success'>Category Changed Successfully</div>");
                redirect('category');
            }
        }
        $data = sql::row('category','cat_id=' . $cid);
        $data['error'] = $err ? $err : '';
        $data['dir'] = 'category';
        $data['action'] = 'category/edit_category/' . $cid;
        $data['page'] = 'add_category'; //Don't Change
        $data['page_title'] = "Edit";
        $this->load->view('main', $data);
    }

    function edit_admin($cid='') {
        if ($cid == '') {
            redirect('admn');
        }
        $data['error'] = "";
        $data['num'] = $this->mod_site->get_admin_info();
        if ($_POST['save']) {
            if ($this->form_validation->run('valid_admin') && $data['num'] == 0) {
                $data = array(
                    'user_id' => $_POST['user_name'],
                    'password' => $_POST['password'],
                    'email' => $_POST['email']
                );

                $this->db->update('user', $data, array('id' => $cid));
                $data['new'] = $_POST['user_name'];
                $data['current'] = $this->session->userdata('user_id');

                // if ($data['current'] == $data['new']) {
                $this->session->set_userdata('user_id', $data['new']);
                // }
                $this->session->set_flashdata('msg', "<div class='success'>Content Changed Successfully</div>");
                redirect('admn');
            } else {
                $this->session->set_flashdata('msg', "<div class='error'>User Exist,choose another name</div>");
                redirect('admn'); //<div class='success'>$msg</div>
            }
        }
        $data = sql::row('user', 'id=' . $cid);
        $data['error'] = $err ? $err : '';
        $data['dir'] = 'admn';
        $data['action'] = 'admn/edit_admin/' . $cid;
        $data['page'] = 'add_admn'; //Don't Change
        $data['page_title'] = "Edit";
        $this->load->view('main', $data);
    }

    function enable_category($cid='') {

        if ($cid == '') {
            redirect('category');
        }
        $data = array(
            'status' => "1"
        );
        $this->db->update('category', $data, array('cat_id' => $cid));
        $this->session->set_flashdata('msg', "<div class='success'>Enabled Successfully</div>");
        redirect('category');
    }

    function disable_category($cid='') {
        if ($cid == '') {
            redirect('category');
        }
        $data = array(
            'status' => "0",
        );
        $this->db->update('category', $data, array('cat_id' => $cid));
        $this->session->set_flashdata('msg',"<div class='success'>Disabled Successfully</div>");
        redirect('category');
    }

    function delete_category($cid='') {
        if ($cid == '') {
            redirect('category');
        }


        sql::delete('category', 'cat_id=' . $cid);
        $this->session->set_flashdata('msg', "<div class='success'>Deleted Successfully</div>");
        redirect('category');
    }


    //End Category Setting
}

?>
