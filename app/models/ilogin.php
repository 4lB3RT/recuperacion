<?php

/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/17
 * Time: 16:08
 */
class ilogin extends imodel
{

    function login($data){

        $this->query("SELECT * FROM users WHERE email =:email and password =:pass" );
        $this->bind(":email",$data['email']);
        $this->bind(":pass",$data['pass']);
        $this->execute();
        $result = $this->resultset();
            if($result){
                return $result;
            }
        return false;
    }

}