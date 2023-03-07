<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function headerPortion()
    {
        $this->load->view('include/header');
        $this->load->view('include/navbar');
        $this->load->view('include/slider_banner');
    }

    public function footerPortion(){
        $this->load->view('include/footer');
    }

    public function index()
    {
        $this->headerPortion();
        $this->load->view('home');
        $this->footerPortion();
    }
}
