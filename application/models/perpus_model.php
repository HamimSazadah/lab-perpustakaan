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
}
?>