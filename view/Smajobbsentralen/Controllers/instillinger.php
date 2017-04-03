<?php


class Instillinger{

    public function __construct($db){
        $this->db = $db;
    }

    public function getApningstider(){
        return $this->db->all("opningstider", [])->fetchAll();
    }

    public function getArbeidstyper(){
        return $this->db->all("kategorier", [])->fetchAll();
    }

    public function fjernArbeidstype($data){
        return $this->db->deleteWhere('kategorier', 'id', $data['_id']);
    }

    public function addArbeidstype($data){
        return $this->db->insert('kategorier',[
            [
                'name' => $data['_name'],
                'icon' => isset($data['icon']) ? $data['icon'] : "user";
            ]
        ]);
    }
}
