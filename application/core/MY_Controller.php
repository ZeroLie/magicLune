<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller{

    public function show($menu){
        // incluir o cabeçalho
        $html = $this->load->view('common/head', null, true);
        $html .= $this->load->view('common/nav', null, true);

        // incluir o conteúdo
        //$html .= '<div class="container">';
        $html .= $menu;
        //$html .= '</div>';

        // incluir o rodapé
        $html .= $this->load->view('common/script', null, true);
        $html .= $this->load->view('common/footer', null, true);
        echo $html;
    }

}