<?php 
class Produto extends CI_Object {

    public function get_by_id($id) {
        $cond['id'] = $id;
        $rs = $this->db->get_where('produtos', $cond);
        return $rs->row_array(); 
    }

    public function get_categoria() {
        return $this->db->get("categoria")->result();
    }

    public function set(Array $data) {
        if($this->db->insert('produtos', $data)) {
            return $this->db->insert_id();
        }else {
            return false;
        }
    }

    public function salva_comentario(Array $data)
    {
        if($this->db->insert('comentarios', $data)){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function atualiza_prod(Array $data, $id) {
        $cond['id'] = $id;
        return $this->db->update("produtos", $data, $cond);
    }

    public function remove_prod($id) {
        $cond["id"] = $id;
        return  $this->db->delete('produtos', $cond);
    }

    public function remove_comentario($id)
    {
        $cond["id"] = $id;
        return $this->db->delete("comentarios", $cond);
    }

    public function get_prod_by_cat($id) {
        $this->db->where("categoria", $id);
        $rs = $this->db->get("produtos")->result();
        return $rs;
    }

    public function get_produto() {
        return $this->db->get("produtos")->result();
    }

    public function get_comentario()
    {
        return $this->db->get("comentarios")->result(); 
    }

    public function get_cat_by_id($id) {
        $this->db->where("id", $id);
        return $this->db->get("categoria")->row();
    }

    public function get_produto_by_id($id) {
        $this->db->where("id", $id);
        return $this->db->get("produtos")->row_array();
    }

    public function update($data, $id) {
        $cond['id'] = $id;
        return $this->db->update('produtos', $data, $cond);
    }

    public function delete($id) {
        $cond = array('id' => $id);
        $this->db->delete('produtos', $cond);
    }

    public function verifica_sugestao()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->db->select("DATE(date) as date");
        $rst = $this->db->get("recomendacao")->row();
        if($rst->date < date('Y-m-d'))
        {
            $this->salva_num_aleatorio();
            
            $this->salva_recomendacao();
        }
    }

    private function  salva_num_aleatorio()
    {
        $rs = $this->db->get("produtos")->result();
        foreach($rs as $item)
        {
            $this->db->set("num_aleatorio", rand(1000,9999));

            $this->db->where("id", $item->id);
            $this->db->update("produtos");
        }
    }

    private function salva_recomendacao()
    {
        $this->db->order_by("num_aleatorio", "asc");
        $this->db->limit("5");
        $query = $this->db->get("produtos")->result();

        foreach($query as $row => $item)
        {
            $this->db->set("id_produto", $item->id);
            $this->db->set("date", "NOW()", false);

            $this->db->where("id", $row+1);
            $this->db->update("recomendacao");
        }
    }

    public function get_recomendacao()
    {
        $rs = $this->db->get("recomendacao")->result();
        foreach($rs as $item)
        {
            $this->db->select("id, nome");
            $item->prod = $this->db->get_where("produtos", "id = $item->id_produto")->row();
        }
        return $rs;
    }
} 