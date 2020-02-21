<?php defined('BASEPATH') or exit('No direct script access allowed');

class SmartbookModel extends CI_Model
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
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'uraian',
                'label' => 'Uraian',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'sk',
                'label' => 'SK',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'jenis',
                'label' => 'Jenis',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'kota',
                'label' => 'Kota',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'jumlah',
                'label' => 'Jumlah',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'petugas',
                'label' => 'Petugas',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
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
        $this->kode = $post["kode"];
        $this->nama = $post["nama"];
        $this->uraian = $post["uraian"];
        $this->tanggal = $post["tanggal"];
        $this->sk = $post["sk"];
        $this->jenis = $post["jenis"];
        $this->kota = $post["kota"];
        $this->jumlah = $post["jumlah"];
        $this->petugas = $post["petugas"];
        return $this->db->insert($this->_table, $this);
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
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
