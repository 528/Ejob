<?php

class home extends Controller {

    private $dir = 'home';

    function home() {
        parent::Controller();
        $this->load->model('home_model');
        $this->load->model('mod_login');
    }

    function index() {
        $data['dir'] = $this->dir;
        $data['page'] = 'index';
        $data['option'] = $this->home_model->get_category_option();
        $data['first_job'] = $this->home_model->get_recent_first();
        $data['second_job'] = $this->home_model->get_recent_second();
        $data['third_job'] = $this->home_model->get_recent_third();
        $data['fourth_job'] = $this->home_model->get_recent_fourth();
        $data['nav'] = $this->home_model->publish_navi();
        $this->load->view('main', $data);
    }

    function register() {
        $data['msg'] = "";
        if (isset($_POST['submit_reg'])) {
            if ($this->form_validation->run('valid_user_reg')) {
                $this->home_model->register_user();
                $data['msg'] = "<div class='information'>Successfully Registered !Login now.</div>";
            } else {
                $data['msg'] = "<div class='error'>Please fill in all the required fields and try to submit the form</div>";
            }
        }
        $data['nav'] = $this->home_model->publish_navi();
        $data['dir'] = 'register';
        $data['page'] = 'register';
        $data['action'] = 'home/register';
        $this->load->view('main', $data);
    }

    function login() {
        $data['msg1'] = "";
        if (isset($_POST['submit_login'])) {
            if ($this->form_validation->run('valid_user_login')) {
                if ($this->mod_login->is_valid_user()) {
                    $type = $this->mod_login->get_user_type();
                    if ($type == 1) {
                        redirect('user');
                    } else {
                        redirect('publisher');
                    }
                } else {
                    $data['msg1'] = "<div class='error'>Incorrect Username and Password</div>";
                }
            } else {
                $data['msg1'] = "<div class='error'>Invalid Username and Password</div>";
            }
        }
        $data['dir'] = 'register';
        $data['page'] = 'register';
        $data['action'] = 'home/login';
        $this->load->view('main', $data);
    }

    function job_detail($id='') {
        $data['job_detail'] = $this->home_model->job_detail($id);
        $data['contact_detail'] = $this->home_model->contact_detail($data['job_detail'][0]['user_id']);
        $data['category_name'] = $this->home_model->get_category_name($data['job_detail'][0]['cat_id']);
        $data['nav'] = $this->home_model->publish_navi();
        $data['dir'] = 'home';
        $data['page'] = 'job_detail';
        $data['action'] = '';
        $this->load->view('main', $data);
    }

    function category_navigation_link($id='') {
        $data['base'] = $this->config->item('base_url');
        $total = $this->home_model->message_count($id);
        $per_pg = 2;
        $offset = $this->uri->segment(4);
        $this->load->library('pagination');
        $config['base_url'] = $data['base'] . '/index.php/home/category_navigation_link/' . $id;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['nav'] = $this->home_model->publish_navi();
        $data['option'] = $this->home_model->get_category_option();
        $data['qu'] = $this->home_model->get_all($per_pg, $offset, $id);

        $data['dir'] = 'home';
        $data['page'] = 'category_navigation';
        $data['action'] = '';
        $this->load->view('main', $data);
    }

    function search_category() {
        if (isset($_POST['submit_search'])) {
            $cat_id = $_POST['category'];
            $data['qu'] = $this->home_model->get_all($per_pg, $offset, $cat_id);
        }
        $data['nav'] = $this->home_model->publish_navi();
        $data['option'] = $this->home_model->get_category_option();
        $data['dir'] = 'home';
        $data['page'] = 'search_category';
        $data['action'] = '';
        $this->load->view('main', $data);
    }

    function contact_us() {
        if (isset($_POST['send'])) {
            $sender = "mail@search24.com";
            $result = mail($sender, $_POST['subject'], $_POST['message'], "From: {$_POST['from']}\r\n");
            if ($result)
                $data['msg'] = "<div class='information'>Message Sent !</div>";
            else
                $data['msg'] = "<div class='error'>Error Sending Message !</div>";
        }
        $data['nav'] = $this->home_model->publish_navi();
        $data['dir'] = 'home';
        $data['page'] = 'contact_us';
        $data['action'] = '';
        $this->load->view('main', $data);
    }

}
