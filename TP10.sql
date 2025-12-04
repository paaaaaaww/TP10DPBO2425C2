
CREATE DATABASE skin_clinic;
USE skin_clinic;

CREATE TABLE pasien (
    id_pasien INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20) NOT NULL
);

CREATE TABLE dokter (
    id_dokter INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    spesialis VARCHAR(100) NOT NULL
);

CREATE TABLE treatment (
    id_treatment INT AUTO_INCREMENT PRIMARY KEY,
    nama_treatment VARCHAR(100) NOT NULL,
    harga INT NOT NULL
);

CREATE TABLE booking_treatment (
    id_booking INT AUTO_INCREMENT PRIMARY KEY,
    id_pasien INT NOT NULL,
    id_dokter INT NOT NULL,
    id_treatment INT NOT NULL,
    tanggal_booking DATE NOT NULL,

    FOREIGN KEY (id_pasien) REFERENCES pasien(id_pasien) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_dokter) REFERENCES dokter(id_dokter) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_treatment) REFERENCES treatment(id_treatment) 
        ON DELETE CASCADE ON UPDATE CASCADE
);

-- Pasien
INSERT INTO pasien (nama, no_hp) VALUES
('Nabilah Arlia', '081234567890'),
('Nisrina Safinatunnajah', '089876543210'),
('Fikri Rizkia', '082112233445');

-- Dokter
INSERT INTO dokter (nama, spesialis) VALUES
('dr. Fauzia Rahma Nisa', 'Spesialis Acne Treatment'),
('dr. Salsabil Fitri', 'Spesialis Anti-Aging'),
('dr. Vidya Syakira', 'Spesialis Laser & Brightening');

-- Treatment
INSERT INTO treatment (nama_treatment, harga) VALUES
('Glow Facial', 250000),
('Brightening Laser Treatment', 650000),
('Acne Deep Clean Facial', 300000),
('Anti-Aging Microcurrent Therapy', 450000);

-- Booking Treatment
INSERT INTO booking_treatment (id_pasien, id_dokter, id_treatment, tanggal_booking) VALUES
(1, 1, 3, '2025-02-10'),
(2, 2, 4, '2025-02-11'),
(3, 3, 2, '2025-02-11');
