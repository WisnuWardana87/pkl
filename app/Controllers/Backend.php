<?php

namespace App\Controllers;

use App\Models\BackendModel;

class Backend extends BaseController
{
    public function index()
    {
        $pkl = new BackendModel();
        $pklData = $pkl->getData();

        return $this->response->setJSON($pklData);
    }

    public function tambahData()
    {
        $pkl = new BackendModel();
        $json = $this->request->getJSON();
        $data = get_object_vars($json);
        $affRows = $pkl->insertData($data);
        $msg = [];
        if ($affRows > 0) {
            $msg = [
                'status' => 'Ok',
                'message' => 'Data berhasil disimpan',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(201)
                ->setBody($msg);
        } else {
            $msg = [
                'status' => 'Error',
                'message' => 'Data gagal disimpan',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(500)
                ->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }

    public function show($id = null)
    {
        $pkl = new BackendModel();
        $pklData = $pkl->getDataById($id);

        return $this->response->setJSON($pklData);
    }

    public function update($id = null)
    {
        $pkl = new BackendModel();
        $json = $this->request->getJSON();
        $data = get_object_vars($json);
        $affRows = $pkl->updatePkl($id, $data);
        $msg = [];
        if ($affRows > 0) {
            $msg = [
                'status' => 'Ok',
                'message' => 'Data berhasil diupdate',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(201)
                ->setBody($msg);
        } else {
            $msg = [
                'status' => 'Error',
                'message' => 'Data gagal diupdate',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(500)
                ->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }

    public function delete($id = null)
    {
        $pkl = new BackendModel();
        $affRows = $pkl->deletePkl($id);
        $msg = [];
        if ($affRows > 0) {
            $msg = [
                'status' => 'Ok',
                'message' => 'Data berhasil dihapus',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(201)
                ->setBody($msg);
        } else {
            $msg = [
                'status' => 'Error',
                'message' => 'Data gagal dihapus',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(500)
                ->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }
}
