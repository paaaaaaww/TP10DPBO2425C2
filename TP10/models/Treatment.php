<?php
require_once "config/Database.php";

// kelas Treatment untuk mengelola data treatment
class Treatment
{
    private $conn;
    private $table = "treatment";

    // konstruktor untuk inisialisasi koneksi database
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // mengambil semua data treatment
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // mengambil data treatment berdasarkan id_treatment
    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_treatment = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // membuat data treatment baru
    public function create($nama_treatment, $harga)
    {
        $query = "INSERT INTO " . $this->table . " (nama_treatment, harga) VALUES (:nama_treatment, :harga)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_treatment', $nama_treatment);
        $stmt->bindParam(':harga', $harga);
        return $stmt->execute();
    }

    // memperbarui data treatment berdasarkan id_treatment
    public function update($id, $nama_treatment, $harga)
    {
        $query = "UPDATE " . $this->table . " SET nama_treatment = :nama_treatment, harga = :harga 
                  WHERE id_treatment = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama_treatment', $nama_treatment);
        $stmt->bindParam(':harga', $harga);
        return $stmt->execute();
    }

    // menghapus data treatment berdasarkan id_treatment
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_treatment = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
