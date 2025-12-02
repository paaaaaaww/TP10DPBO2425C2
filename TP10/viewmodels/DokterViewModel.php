<?php
require_once 'models/Dokter.php'; // inisialisasi model Dokter

// kelas DokterViewModel untuk mengelola interaksi antara model Dokter dan view
class DokterViewModel
{
    private $dokter;

    // konstruktor untuk inisialisasi model Dokter
    public function __construct()
    {
        $this->dokter = new Dokter();
    }

    // mengambil semua data dokter
    public function getDokterList()
    {
        return $this->dokter->getAll();
    }

    // mengambil data dokter berdasarkan id_dokter
    public function getDokterById($id)
    {
        return $this->dokter->getById($id);
    }

    // menambahkan data dokter baru
    public function addDokter($nama, $spesialis)
    {
        return $this->dokter->create($nama, $spesialis);
    }

    // memperbarui data dokter berdasarkan id_dokter
    public function updateDokter($id, $nama, $spesialis)
    {
        return $this->dokter->update($id, $nama, $spesialis);
    }

    // menghapus data dokter berdasarkan id_dokter
    public function deleteDokter($id)
    {
        return $this->dokter->delete($id);
    }
}
