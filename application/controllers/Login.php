<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        
        $this->load->view('v_login');
    }

    
    /**
        *  Método logar()
        *   efetua a verificação do usuário no Banco de Dados
        * 
        * 
        */
    public function logar()
    {
        // Recebe Usuário e Senha
        $usuario = $this->input->post("usuario");
        $senha   = md5($this->input->post("senha"));
        
        $sql = "SELECT * FROM usuarios WHERE Login = '$usuario'";
        
        $query = $this->db->query($sql);
        
        $user = $query->row_array(); 
        
        //Se o usuário e senha combinarem, então basta eu redirecionar para a url base, pois agora o usuário irá passa
        //pela verificação que checa se ele está logado.
        if ($usuario == $user['Login'] && $senha == $user['Senha'])
        {
            $this->session->set_userdata("logado", 1);
            $this->session->set_userdata('nome', $user['Nome']);
            redirect(base_url('indexCode.php/administrator'));
        } 
        else
        {
            //caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
            $dados['erro'] = "Usuário/Senha incorretos";
            $this->load->view("v_login", $dados);
        }
    }

    /*
        * Aqui eu destruo a variável logado na sessão e redireciono para a url base. Como esta variável não existe mais, o usuário
        * será direcionado novamente para a tela de login.
        */
    public function logout()
    {
        $this->session->unset_userdata("logado");
        redirect(base_url());
    }

}
