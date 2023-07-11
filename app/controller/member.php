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

        $this->putThemeContent("member/home", $data);
        $this->putJsContent("member/home_bottom", $data);
        $this->putThemeContent("member/home_modal", $data);
        $this->loadLayout('col-1', $data);
        $this->render();
    }

    public function read()
    {
        $data = $this->mem->get();

        $response = array(
            'data' => $data
        );
        echo json_encode($response);
    }

    public function hapus($id, $du)
    {
        $id = $_POST['id'];
        $deleteSuccess = $this->mem->del($id, $du);

        if ($deleteSuccess) {
            $response['success'] = true;
        } else {
            $response['success'] = false;
        }

        echo json_encode($response);
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
