<?php

namespace App\Controllers;
class Admin extends BaseController
{
    public function db()
    {
        $db = \Config\Database::connect();
        return $db;
    }

    public function index()
    {
       $job = $this->db()->query("SELECT * FROM job")->getResult();
    //    dd($job);
    //    echo json_encode($job);die();
        $result  = array('job' => $job);
        return view('admin/index', $result);
    }
}
