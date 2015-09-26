<?php

class publisher extends Controller {

    private $dir = 'publisher';

    function publisher() {
        parent::Controller();
        $this->load->model('publish_model');
    }

    function index() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['option'] = $this->publish_model->get_category_option($id);
        $data['first_job'] = $this->publish_model->get_recent_first($id);
        $data['second_job'] = $this->publish_model->get_recent_second($id);
        $data['third_job'] = $this->publish_model->get_recent_third($id);
        $data['fourth_job'] = $this->publish_model->get_recent_fourth($id);
        $data['dir'] = $this->dir;
        $data['page'] = 'index';
        $this->load->view('login_main_publish', $data);
    }

    function account_settings() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['dir'] = $this->dir;
        $data['page'] = 'account';
        $this->load->view('login_main_publish', $data);
    }

    function myAdvertise() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');

        $data['base'] = $this->config->item('base_url');
        $data['title'] = 'Message form';
        $this->load->model("publish_model");

        $total = $this->publish_model->message_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);

        $this->load->library('pagination');
        $config['base_url'] = $data['base'] . '/index.php/publisher/myAdvertise/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['query'] = $this->publish_model->get_all($per_pg, $offset);
        $data['option'] = $this->publish_model->get_category_option();
        $data['dir'] = $this->dir;
        $data['page'] = 'my_advertise';
        $this->load->view('login_main_publish', $data);
    }

    public function insert_advertise() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');

        $data['msg'] = "";
        if (isset($_POST['submit_pub'])) {
            $data = array(
                'user_id' => $id,
                'cat_id' => $_POST['category'],
                'company_name' => $_POST['company_name'],
                'description' => $_POST['description'],
                'publish_date' => $_POST['publish_date'],
                'dead_line' => $_POST['dead_line'],
                'url' => $_POST['url'],
                'image' => 'no_image'
            );
            $this->db->insert('advertise', $data);
            $data['msg'] = "<div class='information'>Successfully Published.</div>";
            redirect('publisher/myAdvertise');
        }
        $data['dir'] = $this->dir;
        $data['page'] = 'my_advertise';
        $this->load->view('login_main_publish', $data);
    }

    function applicants(){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['query'] = $this->publish_model->get_all($per_pg, $offset);
        $data['option'] = $this->publish_model->get_category_option();
        $data['qu'] = $this->publish_model->get_my_applicants($id);
        $data['uid'] = $id;
        $data['dir'] = $this->dir;
        $data['page'] = 'applicants';
        $this->load->view('login_main_publish', $data);
    }

    function applicants_detail($add_id=''){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['option'] = $this->publish_model->get_category_option();
        $data['qu'] = $this->publish_model->get_my_applicants_detail($add_id);
        $data['uid'] = $id;
        $data['dir'] = $this->dir;
        $data['page'] = 'applicants_detail';
        $this->load->view('login_main_publish', $data);
    }

    function view_profile($id=''){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['option'] = $this->publish_model->get_category_option();
        $data['qu'] = $this->publish_model->view_profile($id);
        $data['uid'] = $id;
        $data['dir'] = $this->dir;
        $data['page'] = 'view_profile';
        $this->load->view('login_main_publish', $data);
    }

    function applicantion_detail($add_id=''){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['option'] = $this->publish_model->get_category_option();
        $data['qu'] = $this->publish_model->applicantion_detail($add_id);
        $data['uid'] = $id;
        $data['dir'] = $this->dir;
        $data['page'] = 'applicantion_detail';
        $this->load->view('login_main_publish', $data);
    }

    function send_message($id=''){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $publisher_id = $this->session->userdata('id');
        $user_id = $id;
        if (isset($_POST['submit_send'])) {
            $data = array(
                'user_id' => $user_id,
                'publisher_id' => $publisher_id,
                'job_title' => $_POST['job_title'],
                'msg_body' => $_POST['body'],
                'send_date' => $_POST['send_date']
            );
            $this->db->insert('user_inbox', $data);
            $data['msg'] = "<div class='information'>Message Sent !.</div>";
            redirect('publisher/applicants');
        }
        $data['option'] = $this->publish_model->get_category_option();
        $data['action'] = 'publisher/send_message/'.$id;
        $data['dir'] = $this->dir;
        $data['page'] = 'send_message';
        $this->load->view('login_main_publish', $data);
    }

    function my_inbox(){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['message'] = $this->publish_model->get_all_message($id);
        $data['option'] = $this->publish_model->get_category_option();
        $data['uid'] = $this->session->userdata('id');
        $data['dir'] = 'publisher';
        $data['page'] = 'my_inbox';
        $data['action'] = '';
        $this->load->view('login_main_publish', $data);
    }

    function view_sender($sender_id=''){
       $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['contact_detail'] = $this->publish_model->view_semder_detail($sender_id);
        $data['option'] = $this->publish_model->get_category_option();
        $data['uid'] = $this->session->userdata('id');
        $data['dir'] = 'publisher';
        $data['page'] = 'view_sender';
        $data['action'] = '';
        $this->load->view('login_main_publish', $data);
    }

    function reply($user_id=''){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $pub_id = $this->session->userdata('id');
        if (isset($_POST['submit_send'])) {
            $data = array(
                'user_id' => $user_id,
                'publisher_id' => $pub_id,
                'job_title' => $_POST['job_title'],
                'msg_body' => $_POST['body'],
                'send_date' => $_POST['send_date']
            );
            $this->db->insert('user_inbox', $data);
            $data['msg'] = "<div class='information'>Message Sent !.</div>";
            redirect('publisher/my_inbox');
        }
        $data['option'] = $this->publish_model->get_category_option();
        $data['uid'] = $this->session->userdata('id');
        $data['dir'] = 'publisher';
        $data['page'] = 'reply';
        $data['action'] = 'publisher/reply/'.$user_id;
        $this->load->view('login_main_publish', $data);
    }
    


    function do_logout() {
        $this->session->sess_destroy();
        redirect('home');
    }

}
