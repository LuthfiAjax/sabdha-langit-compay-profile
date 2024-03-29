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
    $data['blogs'] = $this->db->select('title_id, slug_id, deskripsi, header_image')->where('tampil', 1)->limit(3)->order_by('publish_date', 'DESC')->get('article')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/index');
    $this->load->view('hero/templates/footer');
  }

  public function blog()
  {
    $data['pages'] = 'blog';
    $data['blogs'] = $this->db->select('title_id, slug_id, deskripsi, header_image, publish_date')->where('tampil', 1)->order_by('publish_date', 'DESC')->get('article')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/blog');
    $this->load->view('hero/templates/footer');
  }

  // Layanan
  public function layanan()
  {
    $data['pages'] = 'layanan';
    $data['layanan'] = $this->db->select('*')->order_by('title_layanan', 'DESC')->get('layanan')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/layanan');
    $this->load->view('hero/templates/footer');
  }

  public function event_organizer()
  {
    $data['pages'] = 'layanan';
    $data['layanan'] = $this->db->select('*')->order_by('title_layanan', 'DESC')->get('layanan')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/layanan/event_organizer');
    $this->load->view('hero/templates/footer');
  }

  public function multimedia()
  {
    $data['pages'] = 'layanan';
    $data['layanan'] = $this->db->select('*')->order_by('title_layanan', 'DESC')->get('layanan')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/layanan/multimedia');
    $this->load->view('hero/templates/footer');
  }

  public function property_event()
  {
    $data['pages'] = 'layanan';
    $data['layanan'] = $this->db->select('*')->order_by('title_layanan', 'DESC')->get('layanan')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/layanan/property_event');
    $this->load->view('hero/templates/footer');
  }

  public function photography()
  {
    $data['pages'] = 'layanan';
    $data['layanan'] = $this->db->select('*')->order_by('title_layanan', 'DESC')->get('layanan')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/layanan/photography');
    $this->load->view('hero/templates/footer');
  }
  // Layanan End

  public function about()
  {
    $data['pages'] = 'about';
    $data['about'] = $this->db->get_where('about', ['id_about' => 1])->row();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/about');
    $this->load->view('hero/templates/footer');
  }

  public function single_blog($slug)
  {
    $data['pages'] = 'blog';
    $data['blog'] = $this->db->select('title_id, slug_id, body_text, header_image, publish_date')->where('slug_id', $slug)->get('article')->row();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/single_blog');
    $this->load->view('hero/templates/footer');
  }

  public function hubungi()
  {
    $data['pages'] = 'hubungi';
    $data['layanan'] = $this->db->select('*')->order_by('title_layanan', 'DESC')->get('layanan')->result_array();

    $this->load->view('hero/templates/header', $data);
    $this->load->view('hero/hubungi');
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