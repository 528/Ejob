<?php

$config = array(
    'valid_login' => array(
        array('field' => 'user_name', 'label' => 'User Name', 'rules' => 'required'),
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required')
    ),
    'valid_change_password' => array(
        array('field' => 'old_password', 'label' => 'Old Password', 'rules' => 'required|callback_is_valid_user_password'),
        array('field' => 'new_password', 'label' => 'New Password', 'rules' => 'required'),
        array('field' => 'confirm_password', 'label' => 'Confirm Password', 'rules' => 'required|matches[new_password]')
    ),
    'valid_user' => array(
        array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'required'),
        array('field' => 'last_name', 'label' => 'Last Name', 'rules' => 'required'),
        array('field' => 'user_name', 'label' => 'User Name', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => ''),
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required'),
        array('field' => 'confirm_password', 'label' => 'Confirm Password', 'rules' => 'required|matches[password]')
    ),
    'valid_forgot_password' => array(
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email|callback_is_user'),
    ),
    'valid_type' => array(
        array('field' => 'type_name', 'label' => 'Type Name', 'rules' => 'required'),
        array('field' => 'type_for', 'label' => 'Type For', 'rules' => 'required')
    ),
    //added by forhad
    
    'valid_admin' => array(
        array('field' => 'user_name', 'label' => 'User Name', 'rules' => 'required'),
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required'),
        array('field' => 'email','label' => 'Email', 'rules' => 'required|valid_email')
    ),
    'add_main_category' => array(
        array('field' => 'category', 'label' => 'Title', 'rules' => 'required')
    ),
    'add_sub_category' => array(
         array('field' => 'category', 'label' => 'Title', 'rules' => 'required'),
        array('field' => 'subcategory', 'label' => 'Title', 'rules' => 'required')
    ),
    'valid_category'=> array(
        array('field'=>'category_name','label'=>'Category','rules'=>'required'),
        array('field'=>'cat_description','label'=>'Category Description','rules'=>'required')
    ),
    'valid_category_edit'=> array(
        array('field'=>'cat_name','label'=>'Category','rules'=>'required')
    ),
    'valid_sub_category_add'=> array(
        array('field'=>'category_name','label'=>'Sub Category','rules'=>'required'),
        array('field'=>'subcategory_name','label'=>'Category','rules'=>'required')
    ),
    'valid_sub_category_edit'=> array(
        array('field'=>'cat_name','label'=>'Select Category','rules'=>'required'),
        array('field'=>'sub_cat_name','label'=>'Sub Category','rules'=>'required')
    ),
    'valid_jobs'=>array(
        array('field'=>'job_title','label'=>'Job Title','rules'=>'required'),
        array('field'=>'job_desc','label'=>'Job Description','rules'=>'required')
    ),
    'valid_current_affair'=>array(
        array('field'=>'affair_title','label'=>'Current Affair Title','rules'=>'required'),
        array('field'=>'affair_desc','label'=>'Description','rules'=>'required')
    ),
    'valid_sub_cat_detail_add'=>array(
        array('field'=>'category_name','label'=>'Category','rules'=>'required'),
        array('field'=>'subcategory_name','label'=>'Sub Category','rules'=>'required'),
        array('field'=>'category_detail','label'=>'Sub Category Detail','rules'=>'required')
    ),
    'valid_model_test'=>array(
        array('field'=>'category','label'=>'Category','rules'=>'required'),
        array('field'=>'test_name','label'=>'Sub Category','rules'=>'required')
    ),
    'valid_model_test_edit'=>array(
       array('field'=>'category','label'=>'Category','rules'=>'required'),
        array('field'=>'test_name','label'=>'Sub Category','rules'=>'required')
    ),
    'valid_que_test'=>array(
        array('field'=>'category','label'=>'Category','rules'=>'required'),
        array('field'=>'test_name','label'=>'Sub Category','rules'=>'required'),
        array('field'=>'question','label'=>'Question','rules'=>'required'),
	array('field'=>'answer[0]','label'=>'Answer A','rules'=>'required'),
	array('field'=>'answer[1]','label'=>'Answer B','rules'=>'required'),
	array('field'=>'answer[2]','label'=>'Answer C','rules'=>'required'),
	array('field'=>'answer[3]','label'=>'Answer D','rules'=>'required'),
	array('field'=>'is_correct','label'=>'Is Correct','rules'=>'required')
    ),
    'valid_model_que_edit'=>array(
        array('field'=>'category','label'=>'Category','rules'=>'required'),
        array('field'=>'test_name','label'=>'Sub Category','rules'=>'required'),
        array('field'=>'question','label'=>'Question','rules'=>'required'),
	array('field'=>'answer[0]','label'=>'Answer A','rules'=>'required'),
	array('field'=>'answer[1]','label'=>'Answer B','rules'=>'required'),
	array('field'=>'answer[2]','label'=>'Answer C','rules'=>'required'),
	array('field'=>'answer[3]','label'=>'Answer D','rules'=>'required'),
	array('field'=>'is_correct','label'=>'Is Correct','rules'=>'required')
        ),
    'valid_tutorial'=>array(
        array('field'=>'category','label'=>'Category','rules'=>'required'),
        array('field'=>'cat','label'=>'Sub Category','rules'=>'required'),
        array('field'=>'tutorial_name','label'=>'Tutorial','rules'=>'required'),
        array('field'=>'top_description','label'=>'Description','rules'=>'required'),
        array('field'=>'flow_chart','label'=>'Flow Chart','rules'=>'required')
    )
    
    )
?>
