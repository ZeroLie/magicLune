<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class MagicLuneModel extends CI_Model {

    function __construct() {
        $this->load->library('util/Validator');
    }

    private function table_body($v) {
        $html = '';
        foreach ($v as $produto) {
            $html .= '<tr>';
            $html .= '<td>'.$produto['id'].'</td>';
            $html .= '<td>'.$produto['nome'].'</td>';
            $html .= '<td>'.$produto['categoria'].'</td>';
            $html .= '<td>'.$produto['imagem'].'</td>';
            $html .= '<td>'.$produto['texto'].'</td>';
            $html .= '<td width="120px">'.$this->action_buttons($produto['id']).'</td>';
            $html .= '</tr>';
        }
        return $html;
    }

    public function salvar(){
        if(sizeof($_POST) == 0) return;

        if($this->validator->produto_valida()) {
            $data['nome'] = $this->input->post('nome');
            $data['categoria'] = $this->input->post('categoria');
            $data['imagem'] = $this->input->post('imagem');
            $data['texto'] = $this->input->post('texto');

            $this->load->library('util/Produto');
            $this->produtos->set($data);
        }
    }

    public function carregar($id) {
        $this->load->library('util/Produto');
        $_POST = $this->produtos->get_by_id($id);
    }

    public function atualizar($id) {
        if(sizeof($_POST) == 0) return;

        if($this->validator->produto_valida()) {
            $data['nome'] = $this->input->post('nome');
            $data['categoria'] = $this->input->post('descricao');
            $data['imagem'] = $this->input->post('imagem');
            $data['texto'] = $this->input->post('texto');

            $this->load->library('util/Produto');
            $status = $this->produtos->update($data, $id);
            if($status) redirect('lune');
        }
    }

    public function delete($id) {
        $this->load->library('util/Produto');
        $this->produtos->delete($id);
    }

    public function salva_prod() {
        if(sizeof($_POST) == 0) return;
        if($this->validator->produto_valida()){
            $data = $this->input->post('prod');

            $this->load->library('util/Produto');
            $id =  $this->produto->set($data);
            return $this->salva_imagem($id);
        }
    }

    public function salva_coment() {  
        if(sizeof($_POST) == 0) return;
        if($this->validator->produto_valida()){
            $data = $this->input->post('comentario');

            $this->load->library('util/Produto');
            $id =  $this->produto->set($data);
            return $this->salva_comentario($id);
        }
    }

    public function get_categoria() {
        $this->load->library('util/Produto');
        return $rs = $this->produto->get_categoria();
    }

    public function get_cat_prod() {
        $this->load->library('util/Produto');
        $rs = $this->get_categoria();

        foreach($rs as $row)
        {
            $row->prod = $this->produto->get_prod_by_cat($row->id);
        }

        return $rs;
    }

    public function get_prod() {
        $this->load->library('util/Produto');
        $rs = $this->produto->get_produto();

        foreach($rs as $row){
            $row->cat = $this->produto->get_cat_by_id($row->categoria);
        }

        return $rs;
    }

    public function get_comentario()
    {
        $this->load->library('util/Produto');
        return $rs = $this->produto->get_comentario();
    }

    public function carrega($id){
        $this->load->library('util/Produto');
        $_POST['prod'] = $this->produto->get_produto_by_id($id);
    }

    public function edit_prod($id){
        if(sizeof($_POST) == 0) return;
        $this->load->library('util/Produto');

        if($this->validator->produto_valida()) {
            $data = $this->input->post('prod');

            $this->produto->atualiza_prod($data, $id);
            return $this->salva_imagem($id);
        }
    }

    public function remove_prod($id) {
        $this->load->library('util/Produto');
        return $this->produto->remove_prod($id);
    }

    public function remove_comentario($id)
    {
        $this->load->library('util/Produto');
        return $this->produto->remove_comentario($id);
    }

    private function salva_imagem($id){    
        $config['upload_path']          = './assets/img';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 1024;
        $config['file_name']            = "Produto_$id";
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('imagem')) {
            // código de sucesso do upload
            $data = array('upload_data' => $this->upload->data());
            return true;
        }
        else {
            // falha de upload
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
    }

    public function salva_comentario()
    {
        if(sizeof($_POST) == 0) return;
        if($this->validator->comentario_valida()){
            $data = $this->input->post('comentario');

            $this->load->library('util/Produto');
            return $this->produto->salva_comentario($data);
        }
    }

    public function verifica_sugestao()
    {
        $this->load->library('util/Produto');
        $this->produto->verifica_sugestao();
    }

    public function get_recomendacao()
    {
        $this->load->library('util/Produto');
        return $this->produto->get_recomendacao();
    }
}