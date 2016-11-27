<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:03
 */
class Home extends CI_Controller
{
    public function index(){
        $this->load->view('layout/header_view');
        $this->load->view('home_view');
        $this->load->view('layout/footer_view');
    }

    public function test()
    {
        $this->load->view('layout/header_view');
        $this->load->view('test_view');
        $this->load->view('layout/footer_view');
    }
}