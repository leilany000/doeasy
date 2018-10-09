<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Classe doação
<<<<<<< HEAD
//  outra modificação
=======
// outra classe
>>>>>>> 816eb1844a50e1e88b94419aa3aef4a55181c989
class doacao extends CI_Controller {

	public function index() {
        $this->load->view('header.php');
        $this->load->view('nav.php');
        $this->load->view('doacao.php');
        $this->load->view('footer.php');

        }

}
