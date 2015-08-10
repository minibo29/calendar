<?php

class Roles_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }
    
    public $add_rules  = array (
                    'add' =>    array (
                            'name' => array(
                                'field' => 'task',
                                'label' => 'Задача',
                                'rules' => 'trim|required|xss_clean'
                            ),array(
                                'field' => 'performance',
                                'label' => 'План виконання',
                                'rules' => 'trim|required|xss_clean'
                            ),array (
                                'field' => 'deadline',
                                'label' => 'Термін виконання',
                                'rules' => 'trim|required|xss_clean'
                            ),array (
                                'field' => 'priority',
                                'label' => 'Пріоритет',
                                'rules' => 'trim|required|xss_clean'
                            )
                    ),
                    'auth' =>   array (
                            array(
                                'field' => 'mail',
                                'label' => 'пошта',
                                'rules' => 'trim|required|valid_email|min_length[6]|xss_clean'
                            ),array (
                                'field' => 'password',
                                'label' => 'пароль',
                                'rules' => 'trim|required|min_length[6]|max_length[12]|md5'
                            )
                    ),

                    'send' =>   array (
                            array(
                                'field' => 'text',
                                'label' => 'текст',
                                'rules' => 'required|xss_clean|max_length[2000]'
                            )
                    )
            );
}