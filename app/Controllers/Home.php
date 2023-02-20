<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function db()
    {
        $db = \Config\Database::connect();
        return $db;
    }

    public function index()
    {
       $mst_sekolah = $this->db()->query("SELECT * FROM mst_sekolah")->getResult();
    //    dd($mst_sekolah);
    //    echo json_encode($mst_sekolah);
        return view('index', $mst_sekolah);
    }
}
