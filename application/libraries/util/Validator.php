<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Validator extends CI_Object{

    public function produto_valida(){
        $this->form_validation->set_rules('prod[nome]', 'Nome do produto', 'trim|required|min_length[4]|max_length[40]');
        $this->form_validation->set_rules('prod[texto]', 'Descrição do produto', 'trim|required|min_length[4]|max_length[150]');

        return $this->form_validation->run();
    }

    public function comentario_valida()
    {
        $this->form_validation->set_rules('comentario[nome]', 'Nome', 'trim|required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('comentario[texto]', 'Comentario', 'trim|required|min_length[4]|max_length[500]');

        return $this->form_validation->run();
    }
}
    