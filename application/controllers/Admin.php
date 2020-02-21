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
        $this->load->model('SmartbookModel');
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
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        if ($validation->run()) {
            $smartbook->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/smartbook_yanzin', $data);
    }

    public function editSmartbook($id = null)
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        if ($validation->run()) {
            $smartbook->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editSmartbook/' . $smartbook->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["smartbook"] = $smartbook->getById($id);
        if (!$data["smartbook"]) show_404();
        $this->load->view("admin/editSmartbook", $data);
    }

    public function detailSmartbook($id = null)
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        $data["smartbook"] = $smartbook->getById($id);
        if (!$data["smartbook"]) show_404();
        $this->load->view("admin/detailSmartbook", $data);
    }

    public function deleteSmartbook($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->SmartbookModel->delete($id)) {
            redirect(site_url('admin/smartbook'));
        }
    }

    public function scan()
    {
        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/scan_yanzin', $data);
    }

    public function uploadScan($id = null)
    {
        $scan = $this->ScanModel;
        $validation = $this->form_validation;
        $validation->set_rules($scan->rules());

        if ($validation->run()) {
            $scan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["scan"] = $scan->getById($id);
        if (!$data["scan"]) show_404();
        $this->load->view("admin/uploadScan", $data);
    }

    public function detailScan()
    {
        $scan = $this->ScanModel;
        $validation = $this->form_validation;
        $validation->set_rules($scan->rules());

        if ($validation->run()) {
            $scan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/scan_yanzin', $data);
    }

    public function editScan()
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
