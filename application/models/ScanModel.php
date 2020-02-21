<?php defined('BASEPATH') or exit('No direct script access allowed');

class ScanModel extends CI_Model
{
    private $_table = "smartbook";

    public $id;
    public $kode;
    public $nama;
    public $uraian;
    public $tanggal;
    public $sk;
    public $jenis;
    public $kota;
    public $jumlah;
    public $petugas;
    public $datask;
    public $datadukung;
    public $dus;
    public $urut;

    public function rules()
    {
        return [
            [
                'field' => 'kode',
                'label' => 'Kode',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'urut',
                'label' => 'No Urut',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kode = $post["kode"];
        $this->nama = $post["nama"];
        $this->uraian = $post["uraian"];
        $this->tanggal = $post["tanggal"];
        $this->sk = $post["sk"];
        $this->jenis = $post["jenis"];
        $this->kota = $post["kota"];
        $this->jumlah = $post["jumlah"];
        $this->petugas = $post["petugas"];
        $this->datask = $this->_uploaddatask();
        $this->datadukung = $this->_uploaddatadukung();
        $this->dus = $post["dus"];
        $this->urut = $post["urut"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kode = $post["kode"];
        $this->nama = $post["nama"];
        $this->uraian = $post["uraian"];
        $this->tanggal = $post["tanggal"];
        $this->sk = $post["sk"];
        $this->jenis = $post["jenis"];
        $this->kota = $post["kota"];
        $this->jumlah = $post["jumlah"];
        $this->petugas = $post["petugas"];
        if (!empty($_FILES["datask"]["name"])) {
            $this->datask = $this->_uploaddatask();
        } else {
            $this->datask = $post["old_data"];
        }
        if (!empty($_FILES["datadukung"]["name"])) {
            $this->datadukung = $this->_uploaddatadukung();
        } else {
            $this->datadukung = $post["old_data"];
        }
        $this->dus = $post["dus"];
        $this->urut = $post["urut"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deletedatask($id);
        $this->_deletedatadukung($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function _uploaddatask()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datask')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/uploadScan/' . $this->id, 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
    }

    public function _uploaddatadukung()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('datadukung')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/uploadScan/' . $this->id, 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
    }

    public function _deletedatask($id)
    {
        $scan = $this->getById($id);
        if ($scan->datask != "default.pdf") {
            $filename = explode(".", $scan->datask)[0];
            $filename2 = explode(".", $scan->datadukung)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename.*"));
            return array_map('unlink', glob(FCPATH . "upload/data/$filename2.*"));
        }
    }

    public function _deletedatadukung($id)
    {
        $scan = $this->getById($id);
        if ($scan->datadukung != "default.pdf") {
            $filename2 = explode(".", $scan->datadukung)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename2.*"));
        }
    }
}
