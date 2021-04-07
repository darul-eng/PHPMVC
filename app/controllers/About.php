<?php

class About extends Controller
{
    public function index($nama = 'Darul', $pekerjaan = 'Gamer')
    {
        $data = [
            'nama' => $nama,
            'pekerjaan' => $pekerjaan
        ];
        $data['title'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['title'] = 'My Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
