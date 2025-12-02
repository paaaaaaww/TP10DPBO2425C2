<?php
require_once "config/Database.php";

//  kelas Pasien untuk mengelola data pasien
class Pasien
{
    private $conn;
    private $table = "pasien";

    // konstruktor untuk inisialisasi koneksi database
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //  mengambil semua data pasien
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // mengambil data pasien berdasarkan id_pasien
    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_pasien = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // membuat data pasien baru
    public function create($nama, $no_hp)
    {
        $query = "INSERT INTO " . $this->table . " (nama, no_hp) VALUES (:nama, :no_hp)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':no_hp', $no_hp);
        return $stmt->execute();
    }

    // memperbarui data pasien berdasarkan id_pasien
    public function update($id, $nama, $no_hp)
    {
        $query = "UPDATE " . $this->table . " SET nama = :nama, no_hp = :no_hp WHERE id_pasien = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':no_hp', $no_hp);
        return $stmt->execute();
    }

    // menghapus data pasien berdasarkan id_pasien
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_pasien = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
