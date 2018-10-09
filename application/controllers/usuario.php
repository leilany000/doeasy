<?php
class Usuario extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuario_model","usuario");
		
	}
	
	public function autenticar(){
		$login = $_POST["usuario"]; 
		$senha = $_POST["senha"];
		$usuario = $this->usuario->recuperarPorLoginESenha($login, $senha);
		

		if ($usuario != null){
			$this->session->set_userdata("usuario", $usuario);
			redirect("perfil_ong");

		} else {
			$this->session->set_flashdata( "msg", "Dados inválidos");
			redirect("usuario/login");

		}


		#$recaptchaResponse = $this->input->post('g-recaptcha-response');
	    #$secret = '6Lcgy3AUAAAAAE8UyQaNsmjU7EEO17k_DRSflhmq';
	    #$url = 'https://www.google.com/recaptcha/api/siteverify';
	    #$data1 = array('secret' => $secret, 'response' => $recaptchaResponse);
	    #$ch = curl_init();
	    #curl_setopt($ch, CURLOPT_URL, $url);
	    #curl_setopt($ch, CURLOPT_POST, true);
	    #curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    #curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
	    #curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    #curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	    #$response = curl_exec($ch);
	    #curl_close($ch);
	    #$status = json_decode($response, true);
	    #if ($status['success']) {
	    #  echo "O usuário ".$nome. " não é uma máquina. :)";
	  #}else{
	   #   echo "O usuário ".$nome. " é uma máquina. :(";
	  #}
		$ce = $data['g-recaptcha-response'];
		$ci = '6Lcgy3AUAAAAAE8UyQaNsmjU7EEO17k_DRSflhmq';
		$url = 'https://www.google.com/recaptcha/api/siteverify';

		$dados_captcha = array(
			'secret' 	=> $ci,
			'response'	=> $ce
		);

		// Excluindo Coluna g-recaptcha-responde do Array de dados para Inserir os dados no Banco

		unset($data['g-recaptcha-response']);

		// Abrindo canal Curl

		$ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dados_captcha);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $resposta = curl_exec($ch);
        curl_close($ch);

        $status = json_decode($resposta, true);

      	if ($status['success']) 
        {
        	$this->session->set_flashdata('info',"O usuário ".$data['nome']." foi cadastrado no sistema");
        	$this->usuario->insert($data);	
        	redirect('');
        }
        else
        {
        	$this->session->set_flashdata('info',"O usuário ".$data['nome']." é um robô");
        	redirect('');	
        }

		print_r($data);
	}


	public function cadastro(){
                $this->load->view('usuarioP/cadastro_usuario.php');      
                
        }
	public function Novo(){
        	$dados = $this->input->post();
		    //$this->load->model("Usuario_model", "usuario");
            $this->usuario->Novo($dados);

				 if ($dados){
        	$this->session->set_flashdata('msg2', "Dados cadastrados com sucesso");
		redirect("usuario/usuarioP/cadastro");
        }
         
        }

        #public function __construct(){
                #parent::__construct();

                #if (! $this->session->has_userdata("usuario")){
                    #redirect("usuario/login");
        #}
    #}


		public function login(){
			$this->load->view("usuarioP/login");
	}
	
		public function logoff(){
			$this->session->unset_userdata("usuario");
			redirect("usuario/usuarioP/login");
		}

		public function Usuario(){
			$usuario = $post-["usuario"];
			redirect("usuario/usuarioP/login");
		}

   public function restricao(){
       /* Escreva o código da sua função de acesso negado */
    $this->load->view('header');
    $this->load->view('nav');
    $this->load->view('acessonegado');
    $this->load->view('footer');
    }
    
}
