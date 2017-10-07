<?php

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        //  « Décommenter » cette ligne pour charger le helper url
        //$this->load->helper('url');
    }
    
    public function index()
    {
        $this->accueil();
    }
    
    public function accueil()
    {
        //  On inclut la vue ./application/views/test/accueil.php
        $this->load->view('test/accueil');
    }
}
