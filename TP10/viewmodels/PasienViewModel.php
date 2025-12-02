<?php
require_once 'models/Pasien.php'; // inisialisasi model Pasien

// kelas PasienViewModel untuk mengelola interaksi antara model Pasien dan view
class PasienViewModel
{
    private $pasien;

    // konstruktor untuk inisialisasi model Pasien
    public function __construct()
    {
        $this->pasien = new Pasien();
    }

    // Ambil semua pasien
    public function getPasienList()
    {
        return $this->pasien->getAll();
    }

    // Ambil pasien berdasarkan ID
    public function getPasienById($id)
    {
        return $this->pasien->getById($id);
    }

    // Tambah pasien baru
    public function addPasien($nama, $no_hp)
    {
        return $this->pasien->create($nama, $no_hp);
    }

    // Update pasien
    public function updatePasien($id, $nama, $no_hp)
    {
        return $this->pasien->update($id, $nama, $no_hp);
    }

    // Hapus pasien
    public function deletePasien($id)
    {
        return $this->pasien->delete($id);
    }
}
