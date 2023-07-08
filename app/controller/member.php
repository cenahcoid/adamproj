<?php

class Member extends JI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTheme('front');
        $this->load("b_member_model", "mem");
    }
    public function index()
    {
        $data = array();
        $data['sess'] = $this->getKey();
        if (!isset($data['sess']->user->id)) {
            redir(base_url('login'));
            return;
        }

        $this->setTitle("Dashboard");
        $this->setDescription("Omedeto");
        $this->setAuthor("Seme Framework");
        $this->setKeyword("Seme Framework");

        $data['mem'] = $this->mem->get();

        $this->putThemeContent("member/home", $data);
        $this->putThemeContent("member/home_bottom", $data);
        $this->loadLayout('col-1', $data);
        $this->render();
    }
    public function tambah()
    {
        $di = array();
        $di['kode_member'] = $this->input->post("kd");
        $di['nama'] = $this->input->post("nm");
        $di['email'] = $this->input->post("ml");
        $di['alamat'] = $this->input->post("amt");

        $res = $this->mem->set($di);
        if ($res) {
            echo "<script>alert('berhasil ditambahkan')</script>";
            header('location: ' . base_url("member"));
        } else {
            echo "<script>alert('Gagal ditambahkan')</script>";
            header('location: ' . base_url("member"));
        }
    }
    public function hapus($id, $du)
    {
        $this->mem->del($id, $du);
        header('location: ' . base_url("member"));
    }
    public function edit($id, $du)
    {
        $du = array();
        $du['kode_member'] = $this->input->post("kod");
        $du['nama'] = $this->input->post("nam");
        $du['email'] = $this->input->post("eml");
        $du['alamat'] = $this->input->post("amat");
        $res = $this->mem->update($id, $du);
        if ($res) {
            echo "<script>alert('berhasil Di Edit')</script>";
            header('location: ' . base_url("member"));
        } else {
            echo "<script>alert('Gagal Di Edit')</script>";
            header('location: ' . base_url("member"));
        }
    }
}
