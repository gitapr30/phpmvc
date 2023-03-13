<?php
    class Siswa_model {

        private $table = 'siswa';
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }

        public function getALLSiswa(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getSiswaById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function tambahDataSiswa($data){
            $query = "INSERT INTO siswa 
                        VALUES
                        (null, :nama, :no_hp, :email, :jurusan)";
            $this->db->query($query);

            //binding
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('no_hp', $data['no_hp']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);
            //eksekusi binding
            $this->db->execute();

            //mengembalikan nilai angka
            return $this->db->rowCount();
        }

        public function hapusDataSiswa($id){
        $query = "DELETE FROM siswa WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    }
?>