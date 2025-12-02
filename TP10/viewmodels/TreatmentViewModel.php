<?php
require_once 'models/Treatment.php'; // inisialisasi model Treatment

// kelas TreatmentViewModel untuk mengelola interaksi antara model Treatment dan view
class TreatmentViewModel
{
    private $treatment;

    // konstruktor untuk inisialisasi model Treatment
    public function __construct()
    {
        $this->treatment = new Treatment();
    }

    // mengambil semua data treatment
    public function getTreatmentList()
    {
        return $this->treatment->getAll();
    }

    // mengambil data treatment berdasarkan id_treatment
    public function getTreatmentById($id)
    {
        return $this->treatment->getById($id);
    }

    // menambahkan data treatment baru
    public function addTreatment($nama_treatment, $harga)
    {
        return $this->treatment->create($nama_treatment, $harga);
    }

    // memperbarui data treatment berdasarkan id_treatment
    public function updateTreatment($id, $nama_treatment, $harga)
    {
        return $this->treatment->update($id, $nama_treatment, $harga);
    }

    // menghapus data treatment berdasarkan id_treatment
    public function deleteTreatment($id)
    {
        return $this->treatment->delete($id);
    }
}
