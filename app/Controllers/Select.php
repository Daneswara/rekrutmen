<?php

namespace App\Controllers;

class Select extends BaseController
{

    public function db()
    {
        $db = \Config\Database::connect();
        return $db;
    }

    public function prov(){  
        $data = $this->db()->query("SELECT * FROM provinsi")->getResult();
        return json_encode($data);
    }
    public function kab($id_prov){  
        $data = $this->db()->query("SELECT * FROM kabupaten WHERE id_prov = '$id_prov'")->getResult();
        return json_encode($data);
    }
    public function kec($id_kab){  
        $data = $this->db()->query("SELECT * FROM kecamatan WHERE id_kab = '$id_kab'")->getResult();
        return json_encode($data);
    }
    public function kel($id_kec){  
        $data = $this->db()->query("SELECT * FROM kelurahan WHERE id_kec = '$id_kec'")->getResult();
        return json_encode($data);
    }
    public function kawin(){  
        $data = $this->db()->query("SELECT * FROM mst_status_kawin")->getResult();
        return json_encode($data);
    }
    public function sekolah(){  
        $data = $this->db()->query("SELECT * FROM mst_sekolah")->getResult();
        return json_encode($data);
    }
    public function agama(){  
        $data = $this->db()->query("SELECT * FROM mst_agama")->getResult();
        return json_encode($data);
    }
    public function kelamin(){  
        $data = $this->db()->query("SELECT * FROM mst_kelamin")->getResult();
        return json_encode($data);
    }
    
}