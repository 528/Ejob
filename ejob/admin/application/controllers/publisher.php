<?php

class publisher extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('mod_publisher');
    }

    function index() {
        $this->load->library('grid');
        $gridObj = new grid();
        $gridColumn = array("Name","Birthdate", "Username", "Present Address", "Phone", "Email", "Status");
        $gridColumnModel = array(
            array("name" => "name",
                "index" => "name",
                "width" => 60,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "birthdate",
                "index" => "birthdate",
                "width" => 90,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "username",
                "index" => "username",
                "width" => 90,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),

            array("name" => "present_address",
                "index" => "present_address",
                "width" => 60,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "phone",
                "index" => "phone",
                "width" => 60,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "email",
                "index" => "email",
                "width" => 90,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "status",
                "index" => "status",
                "width" => 60,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            )
        );
        $gridObj->setGridOptions("Member List", 880, 250, "id", "asc", $gridColumn, $gridColumnModel, site_url('publisher/get_publisher_list'), true);
        $data['grid_data'] = $gridObj->getGrid();
        $data['msg'] = $this->session->flashdata('msg');
        $data['upload_success_msg'] = $this->session->flashdata('upload_success_msg');
        $data['dir'] = 'publisher';
        $data['page'] = 'publisher_listing';
        $this->load->view('main', $data);
    }

    function get_publisher_list() {
        $this->mod_publisher->get_member_form_list();
    }
    function get_publisher_list_1() {
        $this->mod_publisher->get_advertise_form_list_1();
    }
    function activate_publisher($cid='') {

        if ($cid == '') {
            redirect('publisher');
        }
        $data = array(
            'status' => "1"
        );
        $this->db->update('user', $data, array('id' => $cid));
        $this->session->set_flashdata('msg', "Activated Successfully");
        redirect('publisher');
    }

    function deactivate_publisher($cid='') {
        if ($cid == '') {
            redirect('publisher');
        }
        $data = array(
            'status' => "0",
        );
        $this->db->update('user', $data, array('id' => $cid));
        $this->session->set_flashdata('msg', "DeActivated Successfully");
        redirect('publisher');
    }

    function delete_member($cid='') {
        if ($cid == '') {
            redirect('publisher');
        }


        sql::delete('member', 'id=' . $cid);
        $this->session->set_flashdata('msg', "Deleted Successfully");
        redirect('publisher');
    }

}

?>
