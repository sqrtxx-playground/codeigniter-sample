<?php

class Sample extends CI_Controller {

    public function index()
    {
        $this->load->view('sample_index');
    }

    public function hoge()
    {
        $this->load->view('sample_hoge');
    }

}