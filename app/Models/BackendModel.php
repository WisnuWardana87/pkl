<?php

namespace App\Models;

use CodeIgniter\Model;

class BackendModel extends Model
{
    public function getData()
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_pkl')
            ->get();
        return $query->getResult();
    }


    public function insertData($data)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_pkl')
            ->ignore(true)
            ->insert($data);
        return $db->affectedRows();
    }

    public function getDataById($id)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_pkl')
            ->where('id', $id)
            ->get();
        return $query->getResult();
    }

    public function updatePkl($id, $data)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_pkl')
            ->where('id', $id)
            ->update($data);
        return $db->affectedRows();
    }

    public function deletePkl($id)
    {
        $db = \Config\Database::connect();


        $query = $db->table('tb_pkl')
            ->where('id', $id)
            ->delete();
        return $db->affectedRows();
    }
}
