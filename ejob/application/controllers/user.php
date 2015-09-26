<?php

class user extends Controller {

    private $dir = 'user';

    function user() {
        parent::Controller();
        $this->load->model('user_model');
    }

    function index() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['dir'] = $this->dir;
        $data['page'] = 'index';
        $data['dir'] = $this->dir;
        $data['page'] = 'index';
        $data['option'] = $this->user_model->get_category_option();
        $data['first_job'] = $this->user_model->get_recent_first();
        $data['second_job'] = $this->user_model->get_recent_second();
        $data['third_job'] = $this->user_model->get_recent_third();
        $data['fourth_job'] = $this->user_model->get_recent_fourth();
        $data['nav'] = $this->user_model->publish_navi();
        $this->load->view('login_main', $data);
    }

    function category_navigation_link($id='') {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['base'] = $this->config->item('base_url');
        $total = $this->user_model->message_count($id);
        $per_pg = 2;
        $offset = $this->uri->segment(4);
        $this->load->library('pagination');
        $config['base_url'] = $data['base'] . '/index.php/user/category_navigation_link/' . $id;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['nav'] = $this->user_model->publish_navi();
        $data['option'] = $this->user_model->get_category_option();
        $data['qu'] = $this->user_model->get_all($per_pg, $offset, $id);

        $data['dir'] = 'user';
        $data['page'] = 'category_navigation';
        $data['action'] = '';
        $this->load->view('login_main', $data);
    }

    function job_detail($id='') {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['job_detail'] = $this->user_model->job_detail($id);
        $data['contact_detail'] = $this->user_model->contact_detail($data['job_detail'][0]['user_id']);
        $data['category_name'] = $this->user_model->get_category_name($data['job_detail'][0]['cat_id']);
        $data['nav'] = $this->user_model->publish_navi();
        $data['dir'] = 'user';
        $data['page'] = 'job_detail';
        $data['action'] = '';
        $this->load->view('login_main', $data);
    }

    function apply_job() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['msg'] = '';
        if (isset($_POST['submit_apply'])) {
            $data['add_id'] = $_POST['add_id'];
            $data['user_id'] = $_POST['publisher_id'];
            $data['cat_id'] = $_POST['cat_id'];
        }
        $data['job_detail'] = $this->user_model->job_detail($id);
        $data['contact_detail'] = $this->user_model->contact_detail($data['job_detail'][0]['user_id']);
        $data['category_name'] = $this->user_model->get_category_name($data['job_detail'][0]['cat_id']);
        $data['nav'] = $this->user_model->publish_navi();
        $data['dir'] = 'user';
        $data['page'] = 'apply_job';
        $this->load->view('login_main', $data);
    }

    function application_submission() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['msg'] = '';
        $id = $this->session->userdata('id');
        if (isset($_POST['submit_apply'])) {
            $add = $_POST['add_id'];
            $b = $this->user_model->is_Already_Alpplied($id, $add);
            if ($b) {
                $sql = "insert into application set
                add_id={$this->db->escape($_POST['add_id'])},
                user_id= $id,
                publisher_id={$this->db->escape($_POST['publisher_id'])},
                cat_id={$this->db->escape($_POST['cat_id'])},
                apply_date={$this->db->escape($_POST['apply_date'])},
                message={$this->db->escape($_POST['message'])}";
                if ($this->db->query($sql)) {
                    $data['nav'] = $this->user_model->publish_navi();
                    $data['msg1'] = "<div class='information'>Application Droppped Successfully </div>";
                }
            } else {
                $data['nav'] = $this->user_model->publish_navi();
                $data['msg1'] = "<div class='error'>You Already Applied on This Job</div>";
            }
        }
        $data['job_detail'] = $this->user_model->job_detail($id);
        $data['contact_detail'] = $this->user_model->contact_detail($data['job_detail'][0]['user_id']);
        $data['category_name'] = $this->user_model->get_category_name($data['job_detail'][0]['cat_id']);
        $data['nav'] = $this->user_model->publish_navi();
        $data['dir'] = 'user';
        $data['page'] = 'appl_submission';
        $this->load->view('login_main', $data);
    }

    function my_application() {

        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['nav'] = $this->user_model->publish_navi();
        $data['option'] = $this->user_model->get_category_option();
        $data['qu'] = $this->user_model->get_my_application($id);
        $data['uid'] = $id;

        $data['dir'] = 'user';
        $data['page'] = 'my_application';
        $data['action'] = '';
        $this->load->view('login_main', $data);
    }

    function my_job_detail($id='') {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $data['job_detail'] = $this->user_model->job_detail($id);
        $data['contact_detail'] = $this->user_model->contact_detail($data['job_detail'][0]['user_id']);
        $data['category_name'] = $this->user_model->get_category_name($data['job_detail'][0]['cat_id']);
        $data['nav'] = $this->user_model->publish_navi();
        $data['dir'] = 'user';
        $data['page'] = 'my_job_detail';
        $data['action'] = '';
        $this->load->view('login_main', $data);
    }

    function my_inbox() {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['job_detail'] = $this->user_model->job_detail($id);
        $data['contact_detail'] = $this->user_model->contact_detail($data['job_detail'][0]['user_id']);
        $data['category_name'] = $this->user_model->get_category_name($data['job_detail'][0]['cat_id']);
        $data['nav'] = $this->user_model->publish_navi();
        $data['message'] = $this->user_model->get_all_message($id);
        $data['uid'] = $this->session->userdata('id');
        $data['dir'] = 'user';
        $data['page'] = 'my_inbox';
        $data['action'] = '';
        $this->load->view('login_main', $data);
    }

    function view_sender($sender_id='') {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $id = $this->session->userdata('id');
        $data['nav'] = $this->user_model->publish_navi();
        $data['contact_detail'] = $this->user_model->view_semder_detail($sender_id);
        $data['uid'] = $this->session->userdata('id');
        $data['dir'] = 'user';
        $data['page'] = 'view_sender';
        $data['action'] = '';
        $this->load->view('login_main', $data);
    }

    function reply($pub_id='') {
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in)
            redirect('home');
        $user_id = $this->session->userdata('id');
        if (isset($_POST['submit_send'])) {
            $data = array(
                'user_id' => $user_id,
                'publisher_id' => $pub_id,
                'job_title' => $_POST['job_title'],
                'msg_body' => $_POST['body'],
                'send_date' => $_POST['send_date']
            );
            $this->db->insert('publisher_inbox', $data);
            $data['msg'] = "<div class='information'>Message Sent !.</div>";
            redirect('user/my_inbox');
        }
        $data['nav'] = $this->user_model->publish_navi();
        $data['uid'] = $this->session->userdata('id');
        $data['dir'] = 'user';
        $data['page'] = 'reply';
        $data['action'] = 'user/reply/' . $pub_id;
        $this->load->view('login_main', $data);
    }

    function contact_us() {

    }

    function do_logout() {
        $this->session->sess_destroy();
        redirect('home');
    }

}
