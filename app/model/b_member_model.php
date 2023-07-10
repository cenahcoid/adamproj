<?php
class B_Member_Model extends SENE_Model
{
    public $tbl = "b_member";
    public $tbl_as = "bm";

    public function __construct()
    {
        parent::__construct();
        $this->db->from($this->tbl, $this->tbl_as);
    }
    public function set($di)
    {
        return $this->db->insert($this->tbl,$di);
    }
    public function update($id,$du)
    {
        $this->db->where('id',$id);
        return $this->db->update($this->tbl,$du);
    }
    public function del($id,$du)
    {
        $this->db->where('id',$id);
        return $this->db->delete($this->tbl,$du);
    }
    public function get()
    {
        return $this->db->get();
    }
    public function getById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get_first();
    }
}
