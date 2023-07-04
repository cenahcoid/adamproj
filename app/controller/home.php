<?php

class Home extends JI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTheme('front');
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

        $this->putThemeContent("dashboard/home", $data); //Data View
        $this->putThemeContent("dashboard/home_bottom", $data); //Javasekrip
        $this->loadLayout('col-1', $data);
        $this->render();
    }
}
