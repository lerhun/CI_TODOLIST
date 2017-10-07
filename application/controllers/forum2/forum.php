<?php

class Forum extends CI_Controller
{
    public function index()
    {
        echo 'Index';
        echo '</br>';
        $this->manger();
    }

	public function accueil()
	{
		echo 'Bonjour le monde!';
	}
	
	public function bonjour()
    {
        echo 'Salut à tous !';
    }

    public function manger()
    {
        echo 'Bon appétit !';
    }
    
    public function bonjour2($pseudo = '')
    {
        echo 'Salut à toi : ' . $pseudo;
    }

    //  Cette page accepte deux variables $_GET facultatives
    public function manger2($plat = '', $boisson = '')
    {
        echo 'Voici votre menu : <br />';
        echo $plat . '<br />';
        echo $boisson . '<br />';
        echo 'Bon appétit !';
    }
	
}
