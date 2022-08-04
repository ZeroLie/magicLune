<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MagicLune extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('MagicLuneModel', 'lune');
        $this->lune->verifica_sugestao();
    }

    public function index() {
        $data["prod"] = $this->lune->get_recomendacao();
        $data["comentarios"] =  $this->lune->get_comentario();
        $html = $this->load->view('common/menu', $data, true);

        $this->show($html);
    }

    public function cardapio() {
        $data['cat_prod'] = $this->lune->get_cat_prod();
        $html = $this->load->view('common/card', $data, true);

        $this->show($html);
    }

    public function empresa() {
        $html = $this->load->view('common/sobre', null, true);

        $this->show($html);
    }

    public function contato() {
        if($this->lune->salva_comentario())
        {
            redirect(base_url("Adm/index"));
        }
        $html = $this->load->view('common/contato', null, true);
        
        $this->show($html);
    }

    public function form_comentario() {
        
        if($this->lune->salva_comentario())
        {
            redirect(base_url("magiclune/index"));
        }        
        
        $html = $this->load->view("admin/form_comentario", null, true);

        $this->show($html);
    }
}
