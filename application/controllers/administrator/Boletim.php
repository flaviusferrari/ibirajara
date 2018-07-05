<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Boletim extends MY_Controller {

    private $dados;

    public function __construct() {
        parent::__construct();

        $this->dados['css'] = 'administrator';
        $this->dados['js'] = 'painel/boletim';
        $this->dados['conteudo'] = 'painel/boletim';
        $this->dados['sidebar'] = 'boletim';

        // Carrega as Bibliotecas necessárias
        $this->load->library('form_validation');
        $this->load->library('tdate');

        // Carrega o Model
        $this->load->model('administrator_model');
    }

    // ---------------------------------------------------------

    /**
     * Metdo index()
     *   Verifica se o Usuário se logou, caso não tenha feito o login,
     *  encaminha para a página de logon
     */
    public function index() {
        // Exibe o painel
        $this->load->view('layout', $this->dados);
    }

    // ---------------------------------------------------------

    public function salvarBoletim() {
        // Efetua a validação dos dados
        $this->form_validation->set_rules('dtInicio', 'Data Inicio', 'required');
        $this->form_validation->set_rules('dtFim', 'Data Fim', 'required');
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('citacao', 'Citação', 'required');
        $this->form_validation->set_rules('texto', 'Texto', 'required');
        $this->form_validation->set_rules('livro', 'Livro', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout', $this->dados);
        } else {
            $this->administrator_model->salvar_boletim();

            $this->dados['conteudo'] = 'sucess';
            $this->dados['msn_content'] = 'Boletim salvo com sucesso!!!';
            $this->dados['msn_link'] = 'indexCode.php/administrator/boletim';

            $this->load->view('layout', $this->dados);
        }
    }

    // ---------------------------------------------------------

    /**
     * Método localizaBoletim()
     *   verifica os dados do Boletim que está sendo digitada
     * 
     * @return boolean
     */
    public function LocalizaBoletim() {
        $boletins = $this->administrator_model->localiza_boletim($this->input->post('termo'));


        foreach ($boletins as $boletim) {
            $data[] = array('value' => $boletim['titulo'], 'valor' => $boletim['id'],);
        }

        echo json_encode($data);
    }

    // ---------------------------------------------------------

    /**
     * MÉTODO EXIBE BOLETIM
     * 
     *  Exibe os dados do Boletim
     */
    public function exibeBoletim() {
        // Recebe o ID do Boletim
        $idBoletim = $this->uri->segment(4);

        $boletim = $this->administrator_model->buscaDadosBoletim($idBoletim);

        // Ajusta as datas do Boletim
        $boletim['dtInicio'] = date('d/m/Y', strtotime($boletim['dtInicio']));
        $boletim['dtFim'] = date('d/m/Y', strtotime($boletim['dtFim']));

        // Insere o arquivo a ser exibido
        $this->dados['conteudo'] = 'painel/boletim/boletim_exibe';

        // Mescla os arrays
        $dados = array_merge($this->dados, $boletim);

        // Exibe a página
        $this->load->view('layout', $dados);
    }

    // ---------------------------------------------------------

    /**
     *  Método atualizarBoletim()
     * 
     *   atualiza os dados do Boletim
     */
    public function atualizar() {
        $this->load->model('administrator/boletim_model', 'boletimModel');

        // Efetua a validação dos dados
        $this->form_validation->set_rules('dtInicio', 'Data Inicio', 'required');
        $this->form_validation->set_rules('dtFim', 'Data Fim', 'required');
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('citacao', 'Citação', 'required');
        $this->form_validation->set_rules('texto', 'Texto', 'required');
        $this->form_validation->set_rules('livro', 'Livro', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('layout', $this->dados);
        } else {
            $this->boletimModel->atualizar();

            $this->dados['conteudo'] = 'sucess';
            $this->dados['msn_content'] = 'Boletim atualizado com sucesso!!!';
            $this->dados['msn_link'] = 'indexCode.php/administrator/boletim/exibeBoletim/' . $this->input->post('idBoletim');

            $this->load->view('layout', $this->dados);
        }
    }

    // --------------------------------------------------------

    /**
     * MÉTODO LOCALIZAR
     * 
     *   Exibe um formulário para a procura dos útlimos boletins salvos
     */
    public function localizar() {
        if ($_POST) {
            $this->load->model('administrator/boletim_model', 'boletimModel');

            $dados['boletim'] = $this->boletimModel->localizaBoletim();

            $this->load->view('conteudo/painel/boletim/lista_boletim', $dados);
        } else {
            $this->dados['conteudo'] = 'painel/boletim/form_localizar';
            // Exibe a página
            $this->load->view('layout', $this->dados);
        }
    }

    // ------------------------------------------------------------

    /**
     * MÉTODO FORM ADICIONA BOLETIM
     * 
     *  Exibe o formulário para adicionar o Boletim
     */
    public function formAddBoletim() {
        // Localiza os dados do Boletim
        $dados['boletim'] = $this->administrator_model->buscaDadosBoletim($this->input->post('idBoletim'));

        $this->load->view('conteudo/painel/boletim/form_adiciona_boletim', $dados);
    }

}
