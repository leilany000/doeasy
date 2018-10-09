<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfil_ong extends CI_Controller {

	public function index() {
        $this->load->view('header.php');
        $this->load->view('nav.php');
        $this->load->view('perfil.php');
        $this->load->view('footer.php');
    }
}