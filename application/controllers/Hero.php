<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hero extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('hero/templates/header');
    $this->load->view('hero/index');
    $this->load->view('hero/templates/footer');
  }
}
