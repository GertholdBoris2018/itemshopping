<?php
class Requirements_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    function save($table, $data){
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    // update person by id
    function update($table, $data,$id,$field){
        $this->db->where($field, $id);
        $this->db->update($table, $data);
    }

    // delete person by id
    function delete($table,$id,$field,$id2='',$field2=''){
        $this->db->where($field, $id);
        if($field2!=''){
            $this->db->where($field2, $id2);
        }
        $this->db->delete($table);
    }

    // get all categories
    function get_total_requirements(){
        return $this->db
            ->select("ar.*, ac.email, ac.name")
            ->join("avs_customers as ac", "ar.owner = ac.UID", 'left')
            ->get("avs_requirements as ar")->result();
    }
    function get_requirement_by_id($id){
        return $this->db
            ->select("ac.*, ar.*")
            ->join("avs_customers as ac", "ar.owner = ac.UID", 'left')
            ->where("ar.id",$id)
            ->get("avs_requirements as ar")->result();
    }
    function edit_requirement($id,$data){
        $this->update(DB_PREFIX.'requirements',$data,$id,"id");
        return 1;
    }
    function add_requirement($data){
        return $this->save(DB_PREFIX.'requirements',$data);
    }
    function check_category_byname($title){
        return count($this->db->select("*")->where("title",$title)->get(DB_PREFIX.'category')->result());
    }
    function delete_category_byid($id){
        $this->delete(DB_PREFIX.'category',$id,'id');
        return 1;
    }
    function delete_requirement($id){
        $this->delete(DB_PREFIX.'requirements',$id,'id');
        return 1;
    }
}
?>
