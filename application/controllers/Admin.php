<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('KodeModel');
        $this->load->model('PeminjamanModel');
        $this->load->model('ScanModel');
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
        $kode = $this->KodeModel;
        $validation = $this->form_validation;
        $validation->set_rules($kode->rules());

        if ($validation->run()) {
            $kode->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['kode'] = $this->db->query('select * from kode')->result();
        $this->load->view('admin/kode', $data);
    }

    public function editKode($id = null)
    {
        $kode = $this->KodeModel;
        $validation = $this->form_validation;
        $validation->set_rules($kode->rules());

        if ($validation->run()) {
            $kode->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editKode/' . $kode->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["kode"] = $kode->getById($id);
        if (!$data["kode"]) show_404();
        $this->load->view("admin/editKode", $data);
    }

    public function detailKode($id = null)
    {
        $kode = $this->KodeModel;
        $validation = $this->form_validation;
        $validation->set_rules($kode->rules());

        $data["kode"] = $kode->getById($id);
        if (!$data["kode"]) show_404();
        $this->load->view("admin/detailKode", $data);
    }

    public function deleteKode($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->KodeModel->delete($id)) {
            redirect(site_url('admin/kode'));
        }
    }
}
