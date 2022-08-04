<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Adm extends MY_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->model('MagicLuneModel', 'lune');
    }

    public function index(){

        $data["dados"] = $this->lune->get_prod();
        $data["comentario"] = $this->lune->get_comentario();

        $html = $this->load->view("admin/Table", $data, true);
        $html .= $this->load->view("admin/table_comentario", $data, true);

        $this->show($html);
    }

    public function form_produto() {
        
        if($this->lune->salva_prod())
        {
            redirect(base_url("Adm/index"));
        }
        $data["categoria"] =  $this->lune->get_categoria();
        $html = $this->load->view("admin/form_produto", $data, true);

        $this->show($html);
    }

    public function edita_form_produto($id) {
        
        if($this->lune->edit_prod($id))
        {
            redirect(base_url("Adm/index"));
        }
        $this->lune->carrega($id);
        $data["categoria"] =  $this->lune->get_categoria();
        $html = $this->load->view("admin/form_produto", $data, true);

        $this->show($html);
    }

    public function remove_form_produto($id) {
        
        if($this->lune->remove_prod($id)){
            redirect(base_url("Adm/index"), "refresh");
        }
    }

    public function remove_comentario($id) {
        
        if($this->lune->remove_comentario($id)){
            redirect(base_url("Adm/index"), "refresh");
        }
    }

}