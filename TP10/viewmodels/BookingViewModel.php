<?php
require_once 'models/Booking.php'; // inisialisasi model Booking
require_once 'models/Pasien.php'; // inisialisasi model Pasien
require_once 'models/Dokter.php'; // inisialisasi model Dokter
require_once 'models/Treatment.php'; // inisialisasi model Treatment

// kelas BookingViewModel untuk mengelola interaksi antara model dan view
class BookingViewModel
{
    private $booking;
    private $pasien;
    private $dokter;
    private $treatment;

    // konstruktor untuk inisialisasi model
    public function __construct()
    {
        $this->booking = new Booking();
        $this->pasien = new Pasien();
        $this->dokter = new Dokter();
        $this->treatment = new Treatment();
    }

    // mengambil semua data booking dengan detail pasien, dokter, dan treatment
    public function getBookingList()
    {
        return $this->booking->getAll();
    }

    // mengambil data booking berdasarkan id_booking
    public function getBookingById($id)
    {
        return $this->booking->getById($id);
    }

    // mengambil semua data pasien
    public function getPasiens()
    {
        return $this->pasien->getAll();
    }

    // mengambil semua data dokter
    public function getDokters()
    {
        return $this->dokter->getAll();
    }

    // mengambil semua data treatment
    public function getTreatments()
    {
        return $this->treatment->getAll();
    }

    // menambahkan data booking baru
    public function addBooking($id_pasien, $id_dokter, $id_treatment, $tanggal_booking)
    {
        return $this->booking->create($id_pasien, $id_dokter, $id_treatment, $tanggal_booking);
    }

    // memperbarui data booking berdasarkan id_booking
    public function updateBooking($id, $id_pasien, $id_dokter, $id_treatment, $tanggal_booking)
    {
        return $this->booking->update($id, $id_pasien, $id_dokter, $id_treatment, $tanggal_booking);
    }

    // menghapus data booking berdasarkan id_booking
    public function deleteBooking($id)
    {
        return $this->booking->delete($id);
    }
}
