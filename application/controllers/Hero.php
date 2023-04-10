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
    $data['pages'] = 'beranda';
    $data['blogs'] = $this->db->select('title_id, slug_id, deskripsi, small_image')->where('tampil', 1)->limit(3)->order_by('publish_date', 'DESC')->get('article')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/index');
    $this->load->view('hero/templates/footer');
  }

  public function blog()
  {
    $data['pages'] = 'blog';
    $data['blogs'] = $this->db->select('title_id, slug_id, deskripsi, small_image, publish_date')->where('tampil', 1)->order_by('publish_date', 'DESC')->get('article')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/blog');
    $this->load->view('hero/templates/footer');
  }

  public function single_blog($slug)
  {
    $data['pages'] = 'blog';
    $data['blog'] = $this->db->select('title_id, slug_id, body_text, small_image, publish_date')->where('slug_id', $slug)->get('article')->row();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/single_blog');
    $this->load->view('hero/templates/footer');
  }

  public function message()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $tlp = $this->input->post('tlp');
    $message = $this->input->post('pesan');

    $data = array(
      'nama' => $nama,
      'email' => $email,
      'tlp' => $tlp,
      'message' => $message,
      'time' => time()
    );

    $this->db->insert('message', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan anda berhasil terkirim</div>');
    redirect(base_url('#contact'));
  }
}
