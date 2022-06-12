<?php
    class Model_data extends CI_Model{

    //    read data
        public function data_dosen(){
           $query = $this->db->get('tb_dosen');
           return $query->result();
       } 

       public function data_mahasiswa(){
            $query = $this->db->get('tb_mahasiswa');
            return $query->result();
        }

        // create data dose
        public function add_data_dosen($nama,$niy,$keahlian,$email){
            $data = array(
                'nama' => $nama,
                'niy' => $niy,
                'keahlian' => $keahlian,
                'email' => $email,
            );
            $this->db->insert('tb_dosen',$data);
        }

        // create data mahasiswa
        public function add_data_mahasiswa($nama,$nim,$semester,$email){
            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'semester' => $semester,
                'email' => $email,
            );
            $this->db->insert('tb_mahasiswa',$data);
        }

        //delete data dosesn
        public function delete_dosen($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_dosen');
        }

        //delete data mahasiswa
        public function delete_mahasiswa($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_mahasiswa');
        }


        //edit data dosen
        public function get_dosen_id($id){
            $query = $this->db->get_where('tb_dosen', array('id' => $id));
            return $query;
        }

        // edit data mahasiswa
        public function get_mahasiswa_id($id){
            $query = $this->db->get_where('tb_mahasiswa', array('id' => $id));
            return $query;
        }

        
        //update data dosen
        public function update_data_dosen($id,$nama,$niy,$keahlian,$email){
            $data = array(
                'nama' => $nama,
                'niy' => $niy,
                'keahlian' => $keahlian,
                'email' => $email
            );
            $this->db->where('id',$id);
            $this->db->update('tb_dosen',$data);
        }
        //update data mahasiswa
        public function update_data_mahasiswa($id,$nama,$nim,$semester,$email){
            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'semester' => $semester,
                'email' => $email
            );
            $this->db->where('id',$id);
            $this->db->update('tb_mahasiswa',$data);
        }
    }
?>