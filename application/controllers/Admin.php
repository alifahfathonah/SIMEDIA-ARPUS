<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
        $this->load->view('admin/overview');
    }

    public function overview()
    {
        $this->load->view('admin/overview');
    }

    public function smartbook()
    {
        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/smartbook_yanzin', $data);
    }

    public function scan()
    {
        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/scan_yanzin', $data);
    }

    public function peminjaman()
    {
        $this->load->view('admin/peminjaman_arsip');
    }

    public function kode()
    {
        $data['kode'] = $this->db->query('select * from kode')->result();
        $this->load->view('admin/kode', $data);
    }
}
