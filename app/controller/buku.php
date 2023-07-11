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

        $this->setTitle("Buku");
        $this->setDescription("Omedeto");
        $this->setAuthor("Seme Framework");
        $this->setKeyword("Seme Framework");

        $this->putThemeContent("buku/home", $data); //Data View
        $this->putThemeContent('buku/home_modal', $data); //modal
        $this->putJsContent("buku/buku_bottom", $data); //Javasekrip
        $this->loadLayout('col-1', $data);
        $this->render();
    }
    public function tambah()
    {
        
    }

    public function read()
    {
        $data = $this->book->getbuku();

        $response = array(
            'data' => $data
        );
        echo json_encode($response);
    }
}
