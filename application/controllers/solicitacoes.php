<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class solicitacoes extends CI_Controller {

	public function index() {
        $this->load->view('header.php');
        $this->load->view('nav.php');
        $this->load->view('solicitacoes.php');
        $this->load->view('footer.php');
    }
}