<?php

class user extends CI_Controller
{
    public function index()
    {
        echo "สวัสดี คุณท่านผู้มีอุปการะ";
    }

    public function  adduser()
    {
        $this->load->view('adduser');
    }

    //public function  saymyname($name ="norrasan", $sername ="sangun")
    //{
        //$name ="norrasan sangun";
        //echo "your name is".$name;
        //echo "your sername is".$sername;
    //}
}
