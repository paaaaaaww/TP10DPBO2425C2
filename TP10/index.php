<?php
// inisialisasi viewmodel
require_once 'viewmodels/PasienViewModel.php';
require_once 'viewmodels/DokterViewModel.php';
require_once 'viewmodels/TreatmentViewModel.php';
require_once 'viewmodels/BookingViewModel.php';


$entity = isset($_GET['entity']) ? $_GET['entity'] : 'pasien';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Routing berdasarkan entity dan action
if ($entity === 'pasien') {
    $vm = new PasienViewModel(); // inisialisasi ViewModel Pasien

    // Routing berdasarkan action
    switch ($action) {
        case 'list':
            $pasienList = $vm->getPasienList();
            require 'views/pasien_list.php';
            break;

        case 'add':
            require 'views/pasien_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $pasien = $vm->getPasienById($id);
            require 'views/pasien_form.php';
            break;

        case 'save':
            // Fix: pakai nama dan no_hp sesuai field DB
            $vm->addPasien($_POST['nama'], $_POST['no_hp']);
            header("Location: index.php?entity=pasien&action=list");
            break;

        case 'update':
            $id = $_GET['id'];
            // Fix: pakai nama dan no_hp sesuai field DB
            $vm->updatePasien($id, $_POST['nama'], $_POST['no_hp']);
            header("Location: index.php?entity=pasien&action=list");
            break;

        case 'delete':
            $vm->deletePasien($_GET['id']);
            header("Location: index.php?entity=pasien&action=list");
            break;

        default:
            echo "Invalid action.";
    }



// Routing untuk entity dokter
} elseif ($entity === 'dokter') {
    $vm = new DokterViewModel(); // inisialisasi ViewModel Dokter

    // Routing berdasarkan action
    switch ($action) {
        case 'list':
            $dokterList = $vm->getDokterList();
            require 'views/dokter_list.php';
            break;

        case 'add':
            require 'views/dokter_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $dokter = $vm->getDokterById($id);
            require 'views/dokter_form.php';
            break;

        case 'save':
            $vm->addDokter($_POST['nama'], $_POST['spesialis']);
            header("Location: index.php?entity=dokter&action=list");
            break;

        case 'update':
            $vm->updateDokter($_GET['id'], $_POST['nama'], $_POST['spesialis']);
            header("Location: index.php?entity=dokter&action=list");
            break;

        case 'delete':
            $vm->deleteDokter($_GET['id']);
            header("Location: index.php?entity=dokter&action=list");
            break;

        default:
            echo "Invalid action.";
    }

// Routing untuk entity treatment
} elseif ($entity === 'treatment') {
    $vm = new TreatmentViewModel(); // inisialisasi ViewModel Treatment

    // Routing berdasarkan action
    switch ($action) {
        case 'list':
            $treatmentList = $vm->getTreatmentList();
            require 'views/treatment_list.php';
            break;

        case 'add':
            require 'views/treatment_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $treatment = $vm->getTreatmentById($id);
            require 'views/treatment_form.php';
            break;

        case 'save':
            $vm->addTreatment($_POST['nama_treatment'], $_POST['harga']);
            header("Location: index.php?entity=treatment&action=list");
            break;

        case 'update':
            $vm->updateTreatment($_GET['id'], $_POST['nama_treatment'], $_POST['harga']);
            header("Location: index.php?entity=treatment&action=list");
            break;

        case 'delete':
            $vm->deleteTreatment($_GET['id']);
            header("Location: index.php?entity=treatment&action=list");
            break;

        default:
            echo "Invalid action.";
    }

// Routing untuk entity booking
} elseif ($entity === 'booking') {
    $vm = new BookingViewModel(); // inisialisasi ViewModel Booking

    // Routing berdasarkan action
    switch ($action) {
        case 'list':
            $bookingList = $vm->getBookingList();
            require 'views/booking_list.php';
            break;

        case 'add':
            // Variabel harus sesuai nama di form
            $pasiens = $vm->getPasiens();
            $dokters = $vm->getDokters();
            $treatments = $vm->getTreatments();
            require 'views/booking_form.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            $booking = $vm->getBookingById($id);
            $pasiens = $vm->getPasiens();
            $dokters = $vm->getDokters();
            $treatments = $vm->getTreatments();
            require 'views/booking_form.php';
            break;

        case 'save':
            $vm->addBooking(
                $_POST['id_pasien'],
                $_POST['id_dokter'],
                $_POST['id_treatment'],
                $_POST['tanggal_booking'] // ganti sesuai input form
            );
            header("Location: index.php?entity=booking&action=list");
            break;

        case 'update':
            $vm->updateBooking(
                $_GET['id'],
                $_POST['id_pasien'],
                $_POST['id_dokter'],
                $_POST['id_treatment'],
                $_POST['tanggal_booking'] // ganti sesuai input form
            );
            header("Location: index.php?entity=booking&action=list");
            break;

        case 'delete':
            $vm->deleteBooking($_GET['id']);
            header("Location: index.php?entity=booking&action=list");
            break;

        default:
            echo "Invalid action.";
    }

// Routing untuk entity tidak valid
} else {
    echo "Invalid entity.";
}
?>
