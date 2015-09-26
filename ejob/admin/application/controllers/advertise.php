<?php

class advertise extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('mod_advertise');
    }

    function index() {
        $this->load->library('grid');
        $gridObj = new grid();
        $gridColumn = array("Company Name", "Description", "Dead Line", "URL", "Status");
        $gridColumnModel = array(
            array("name" => "company_name",
                "index" => "company_name",
                "width" => 90,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "description",
                "index" => "description",
                "width" => 60,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "dead_line",
                "index" => "dead_line",
                "width" => 60,
                "sortable" => true,
                "align" => "left",
                "editable" => false
            ),
            array("name" => "url",
                "index" => "url",
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
        $gridObj->setGridOptions("Advertise List", 880, 250, "add_id", "asc", $gridColumn, $gridColumnModel, site_url('publisher/get_publisher_list_1'), true);
        $data['grid_data'] = $gridObj->getGrid();
        //$data['a'] = $this->mod_advertise->get_my_applicants_detail();
//        print_r($data['a']);
//        exit();
        $data['msg'] = $this->session->flashdata('msg');
        $data['upload_success_msg'] = $this->session->flashdata('upload_success_msg');
        $data['dir'] = 'advertise';
        $data['page'] = 'advertise_listing';
        $this->load->view('main', $data);
    }

    function get_advertiser_list() {
        $this->mod_advertise->get_advertise_form_list_1();
    }

    function activate_advertise($cid='') {

        if ($cid == '') {
            redirect('advertise');
        }
        $data = array(
            'status' => "1"
        );
        $this->db->update('advertise', $data, array('add_id' => $cid));
        $this->session->set_flashdata('msg', "Activated Successfully");
        redirect('advertise');
    }

    function deactivate_advertise($cid='') {
        if ($cid == '') {
            redirect('advertise');
        }
        $data = array(
            'status' => "0",
        );
        $this->db->update('advertise', $data, array('add_id' => $cid));
        $this->session->set_flashdata('msg', "DeActivated Successfully");
        redirect('advertise');
    }

    function delete_member($cid='') {
        if ($cid == '') {
            redirect('advertise');
        }


        sql::delete('advertise', 'add_id=' . $cid);
        $this->session->set_flashdata('msg', "Deleted Successfully");
        redirect('advertise');
    }

}

?>
