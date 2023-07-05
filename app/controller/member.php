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
}
