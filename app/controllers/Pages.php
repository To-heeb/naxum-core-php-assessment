<?php

class Pages extends Controller
{


    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome',
        ];

        $this->view('pages/index', $data);
    }


    public function task_one()
    {
        $data = ['title' => 'Task One'];

        $this->view('inc/header', $data);
        $this->view('pages/task_one', $data);
        $this->view('inc/footer', $data);
    }

    public function dashboard()
    {
        $data = ['title' => 'Dashboard'];

        $this->view('inc/header', $data);
        $this->view('pages/dashboard', $data);
        $this->view('inc/footer', $data);
    }

    public function about()
    {
        $data = ['title' => 'About Us'];

        $this->view('pages/about', $data);
    }
}
