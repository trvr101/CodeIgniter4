<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{
    private $main;
    public function __construct()
    {
        $this->main = new \App\Models\MainModel();
    }

    public function add()
    {
        return view('add');
    }
    public function vhon()
    {
        return view('vhon');
    }
    public function save()
    {
        $data = [
            'student_id' => $this->request->getPost('student_id'),
            'fullname' => $this->request->getPost('fullname'),
            'yr_level' => $this->request->getPost('yr_level'),
            'section' => $this->request->getPost('section')
        ];
        $this->main->insert($data);
    }
    public function index()
    {
        // $main = new MainModel();
        $data['user'] = $this->main->findAll();
        return view('main', $data);
    }
}