<?php
require_once "config/Database.php";

// kelas Dokter untuk mengelola data dokter
class Dokter
{
    private $conn;
    private $table = "dokter";

    // konstruktor untuk inisialisasi koneksi database
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // mengambil semua data dokter
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // mengambil data dokter berdasarkan id_dokter
    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_dokter = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // membuat data dokter baru
    public function create($nama, $spesialis)
    {
        $query = "INSERT INTO " . $this->table . " (nama, spesialis) VALUES (:nama, :spesialis)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':spesialis', $spesialis);
        return $stmt->execute();
    }

    // memperbarui data dokter berdasarkan id_dokter
    public function update($id, $nama, $spesialis)
    {
        $query = "UPDATE " . $this->table . " SET nama = :nama, spesialis = :spesialis WHERE id_dokter = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':spesialis', $spesialis);
        return $stmt->execute();
    }

    // menghapus data dokter berdasarkan id_dokter
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_dokter = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
