<?php
class perpus_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    public function saveBuku($data){
        $this->db->query("INSERT INTO masterbuku(judul,pengarang,tahun) values(?,?,?)",array($data['judul'],$data['pengarang'],$data['tahun']));
    }

    public function getAllBuku(){
        $query = $this->db->query("SELECT * FROM masterbuku;");
        return $query->result_array();
    }

    public function getBuku($id)
    {
        $query = $this->db->query("SELECT * FROM masterbuku where id=?;",array($id));
        return $query->row();
    }

    public function updateBuku($data)
    {
        $this->db->query("update masterbuku set judul=?,pengarang=?,tahun=?where id=?",array($data['judul'],$data['pengarang'],$data['tahun'],$data['id']));
    }

    public function deleteBuku($id)
    {
        $this->db->query("delete from masterbuku where id=?;",array($id));
    }
}
?>