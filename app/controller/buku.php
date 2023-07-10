<?php
class Buku extends JI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTheme("front");
        $this->load("d_buku_model", "book");
    }
    public function index()
    {
        $data = array();
        $data['sess'] = $this->getKey();
        if (!isset($data['sess']->user->id)) {
            redir(base_url('login'));
            return;
        }
        $data['book'] = $this->book->getbuku();

        $this->setTitle("Buku");
        $this->setDescription("Omedeto");
        $this->setAuthor("Seme Framework");
        $this->setKeyword("Seme Framework");

        $this->putThemeContent("buku/home", $data); //Data View
        $this->putThemeContent('buku/home_modal', $data); //modal
        $this->putThemeContent("buku/home_bottom", $data); //Javasekrip
        $this->loadLayout('col-1', $data);
        $this->render();
    }
    public function tambah()
    {
        $di = array();
        $di['kode_buku'] = $this->input->post("kd");
        $di['judul'] = $this->input->post("jdl");
        $di['deskripsi'] = $this->input->post("dks");
        $di['penulis'] = $this->input->post("pnl");
        $di['penerbit'] = $this->input->post("pnt");
        $di['jenis_buku'] = $this->input->post("jns");
        $di['jumlah'] = $this->input->post("jmh");
        $di['harga'] = $this->input->post("hrg");

        $res = $this->book->set($di);
        if ($res) {
            echo "<script>alert('berhasil ditambahkan')</script>";
        } else {
            echo "<script>alert('Gagal ditambahkan')</script>";
        }
    }
}
