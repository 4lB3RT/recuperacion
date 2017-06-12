<?php

/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/17
 * Time: 16:04
 */
class login
{
    protected $_view;
    protected $_model;


    function __construct(){
        $this->_view=new iview('ilogin');
        $this->_model=new ilogin();

    }

    function index(){

    }

    function login(){
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];

        $data = array(
            'email' => $email,
            'pass' => $pass
        );

        $result= $this->_model->login($data);

        if($result){
            Session::set('user',$result);
            return header("Location: /mostrar");
        }

        return header("Location: /");
    }

}