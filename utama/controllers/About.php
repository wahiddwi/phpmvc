<?php 

class About extends Controller {
    public function index($nama = 'Wahid', $pekerjaan = 'Web Developer', $umur = 25)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About Me';
        $this->view('layouts/header', $data);
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }

    public function page()
    {
        $data['title'] = 'Pages';
        $this->view('layouts/header', $data);
        $this->view('about/page');
        $this->view('layouts/footer');
    }
}