<?php
require_once "config/Database.php";

// kelas Booking untuk mengelola data booking_treatment
class Booking
{
    private $conn;
    private $table = "booking_treatment"; // nama tabel di database

    // konstruktor untuk inisialisasi koneksi database
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // mengambil semua data booking_treatment dengan join ke tabel pasien, dokter, dan treatment
    public function getAll()
    {
        // query SQL dengan join
        $query = "SELECT bt.*, 
                         p.nama AS nama_pasien,
                         d.nama AS nama_dokter,
                         t.nama_treatment AS nama_treatment,
                         t.harga AS harga
                  FROM " . $this->table . " bt
                  JOIN pasien p ON bt.id_pasien = p.id_pasien
                  JOIN dokter d ON bt.id_dokter = d.id_dokter
                  JOIN treatment t ON bt.id_treatment = t.id_treatment";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // mengambil data booking_treatment berdasarkan id_booking
    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_booking = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // membuat data booking_treatment baru
    public function create($id_pasien, $id_dokter, $id_treatment, $tanggal_booking)
    {
        $query = "INSERT INTO " . $this->table . " 
                  (id_pasien, id_dokter, id_treatment, tanggal_booking) 
                  VALUES (:id_pasien, :id_dokter, :id_treatment, :tanggal_booking)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pasien', $id_pasien);
        $stmt->bindParam(':id_dokter', $id_dokter);
        $stmt->bindParam(':id_treatment', $id_treatment);
        $stmt->bindParam(':tanggal_booking', $tanggal_booking);
        return $stmt->execute();
    }

    // memperbarui data booking_treatment berdasarkan id_booking
    public function update($id, $id_pasien, $id_dokter, $id_treatment, $tanggal_booking)
    {
        $query = "UPDATE " . $this->table . "
                  SET id_pasien = :id_pasien,
                      id_dokter = :id_dokter,
                      id_treatment = :id_treatment,
                      tanggal_booking = :tanggal
                  WHERE id_booking = :id";

                  // menyiapkan dan menjalankan query
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':id_pasien', $id_pasien);
        $stmt->bindParam(':id_dokter', $id_dokter);
        $stmt->bindParam(':id_treatment', $id_treatment);
        $stmt->bindParam(':tanggal', $tanggal_booking);
        return $stmt->execute();
    }

    // menghapus data booking_treatment berdasarkan id_booking
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_booking = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
