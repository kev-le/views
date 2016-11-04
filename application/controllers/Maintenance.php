<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends Application
{

    public function index() {
        $role = $this->session->userdata('userrole');
        $msg = "<p>";

        if($role == "admin")
            $msg .= "You have the right access, just cant do anything yet..";
        else if($role == "user")
            $msg .= "You are not authorized to access this page. Go away";
        else
            $msg .= "Atleast become a user first.....";

        $msg .= "</p>";
        
        $this->data['content'] = $msg;

        $this->render();
    }
}
