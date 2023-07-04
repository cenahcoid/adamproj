<?php
/**
 * Controller class for throw 404 response code
 *
 * @package SemeFramework
 * @since SemeFramework 1.0
 *
 * @codeCoverageIgnore
 */
class NotFound extends SENE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTheme('front');
    }
    public function index()
    {  
        $data = array();
        header("404 Kururing");
        $this->setTheme('front');
        $this->setTitle('404 Kururing');
        $this->loadLayout("notfound", $data);
        $this->render();
    }
}
