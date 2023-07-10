<?php

class M_perpus extends CI_Model
{
    //method yang dibuat di controller (buku.php)
    public function tampil_data()
    {
        //pemanggilan data yang berada di tabel tb_buku
        return $this->db->get('tb_buku');
    }
    //method yang dibuat di controller (buku.php)
    public function input_data($data)
    {
        //memasukan data inputan ke tabel tb_buku
        $this->db->insert('tb_buku', $data);
    }
    //method yang dibuat di controller (buku.php) untuk menghapus data
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        //menghapus data dari tabel tb_buku 
        $this->db->delete($table);
    }

    //method yang dibuat di controller (buku.php) untuk merubah data
    public function edit_data($where, $table)
    {
        //merubah data dari tabel tb_buku
        return $this->db->get_where($table, $where);
    }
    //method yang dibuat di controller (buku.php) untuk mengupdate data
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        //mengupdate data dari tabel tb_buku
        $this->db->update($table, $data);
    }

    //method yang dibuat di controller (buku.php) untuk menampilkan detail data
    public function detail_data($id = null)
    {
        $query = $this->db->get_where('tb_buku', array('id' => $id))->row();
        return $query;
    }

    public function get_count()
    {
        $sql = "SELECT COUNT(judul) as judul FROM tb_buku";
        $result = $this->db->query($sql);
        return $result->row()->judul;
    }
}
