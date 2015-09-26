<?php
$config = array(
    'valid_user_reg' => array(
        array('field' => 'name', 'label' => 'Fullname', 'rules' => 'required'),
        array('field' => 'birthdate', 'label' => 'Birthdate', 'rules' => 'required'),
        array('field' => 'username', 'label' => 'Username', 'rules' => 'required'),
        array('field' => 'password', 'label' => 'password', 'rules' => 'required'),
        array('field' => 'sex', 'label' => 'Sex', 'rules' => 'required'),
        array('field' => 'marital', 'label' => 'Marital Status', 'rules' => 'required'),
        array('field' => 'nationality', 'label' => 'Nationality', 'rules' => 'required'),
        array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email')
    ),
    'valid_user_login' => array(
        array('field' => 'username1', 'label' => 'Username', 'rules' => 'required'),
        array('field' => 'password1', 'label' => 'password', 'rules' => 'required')
    ),
    'valid_application' => array(
        array('field' => 'apply_date', 'label' => 'Date', 'rules' => 'required'),
        array('field' => 'message', 'label' => 'Message', 'rules' => 'required')
    )
);
?>
