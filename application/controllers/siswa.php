<?php
class Siswa extends CI_Controller
{


    public function index()
    {

        $this->load->view('view-form-siswa');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama Siswa',
        'required', [
            'required' => 'Nama harus diisi'
        ]);

        $this->form_validation->set_rules('nis', 'NIS',
        'required|min_length[6]', [
            'required' => 'NIS harus diisi',
            'min_lenght' => 'NIS terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-siswa');
        } else{
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tgl_lahir'),
                'tempat' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama')
            
            ];

            $this->load->view('view-data-siswa', $data);
        }    
    }
    
}