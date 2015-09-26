<?php

class member extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('mod_member');
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
        $gridObj->setGridOptions("Member List", 880, 250, "id", "asc", $gridColumn, $gridColumnModel, site_url('member/get_member_list'), true);
        $data['grid_data'] = $gridObj->getGrid();
        $data['msg'] = $this->session->flashdata('msg');
        $data['upload_success_msg'] = $this->session->flashdata('upload_success_msg');
        $data['dir'] = 'member';
        $data['page'] = 'member_form_listing';
        $this->load->view('main', $data);
    }

    function get_member_list() {
        $this->mod_member->get_member_form_list();
    }

    function activate_member($cid='') {

        if ($cid == '') {
            redirect('member');
        }
        $data = array(
            'status' => "1"
        );
        $this->db->update('user', $data, array('id' => $cid));
        $this->session->set_flashdata('msg', "Activated Successfully");
        redirect('member');
    }

    function deactivate_member($cid='') {
        if ($cid == '') {
            redirect('member');
        }
        $data = array(
            'status' => "0",
        );
        $this->db->update('user', $data, array('id' => $cid));
        $this->session->set_flashdata('msg', "DeActivated Successfully");
        redirect('member');
    }

    function delete_member($cid='') {
        if ($cid == '') {
            redirect('member');
        }


        sql::delete('member', 'id=' . $cid);
        $this->session->set_flashdata('msg', "Deleted Successfully");
        redirect('member');
    }

}

?>
