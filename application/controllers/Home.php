<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_data');
    }

    // view data
    public function index(){
        $data = array(
            'judul1' => 'Data Dosen',
            'judul2' => 'Data Mahasiswa',
            'data_dosen' => $this->model_data->data_dosen(),
            'data_mahasiswa' => $this->model_data->data_mahasiswa(),
        );
        $this->load->view('view_home', $data);
    }

    // add data dosen
    public function add_data_dosen(){
        $this->load->view('view_add_dosen');
    }

    // add data mahasiswa
    public function add_data_mahasiswa(){
        $this->load->view('view_add_mahasiswa');
    }

    // menyimpan data inputan dari add data dosen
    public function save_data_dosen(){
        $nama = $this->input->post('nama');
        $niy = $this->input->post('niy');
        $keahlian = $this->input->post('keahlian');
        $email = $this->input->post('email');
        $this->model_data->add_data_dosen($nama,$niy,$keahlian,$email);
        redirect('home');
    } 

    // menyimpan data inputan add data mahasiswa
    public function save_data_mahasiswa(){
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $semester = $this->input->post('semester');
        $email = $this->input->post('email');
        $this->model_data->add_data_mahasiswa($nama,$nim,$semester,$email);
        redirect('home');
    } 



    // menghapus data dosen
    public function delete_dosen($id){
        // $id=$this->uri->segment(3);
        $this->model_data->delete_dosen($id);
        redirect('home');
    }

    // menhapus data mahasiswa
    public function delete_mahasiswa($id){
        // $id=$this->uri->segment(3);
        $this->model_data->delete_mahasiswa($id);
        redirect('home');
    }

    // mengedit data dosen
    public function edit_dosen(){
        $id = $this->uri->segment(3);
        $result = $this->model_data->get_dosen_id($id);
            if($result->num_rows()>0){
                $i = $result->row_array();
                $data = array(
                    'id' => $i['id'],
                    'nama'=>$i['nama'],
                    'niy'=>$i['niy'],
                    'keahlian'=>$i['keahlian'],
                    'email'=>$i['email']
                );
                $this->load->view('view_edit_dosen',$data);
            }else{
                echo "Data Tidak ditemukan";
            }
    }

    // mengedit data mahasiswa
    public function edit_mahasiswa(){
        $id = $this->uri->segment(3);
        $result = $this->model_data->get_mahasiswa_id($id);
            if($result->num_rows()>0){
                $i = $result->row_array();
                $data = array(
                    'id' => $i['id'],
                    'nama'=>$i['nama'],
                    'nim'=>$i['nim'],
                    'semester'=>$i['semester'],
                    'email'=>$i['email']
                );
                $this->load->view('view_edit_mahasiswa',$data);
            }else{
                echo "Data Tidak ditemukan";
            }
    }
 



    // update data dosen
    public function update_data_dosen(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $niy = $this->input->post('niy');
        $keahlian = $this->input->post('keahlian');
        $email = $this->input->post('email');
        $this->model_data->update_data_dosen($id,$nama,$niy,$keahlian,$email);
        redirect('home');
    }

    // update data mahasiswa
    public function update_data_mahasiswa(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $semester = $this->input->post('semester');
        $email = $this->input->post('email');
        $this->model_data->update_data_mahasiswa($id,$nama,$nim,$semester,$email);
        redirect('home');
    }
}
?>