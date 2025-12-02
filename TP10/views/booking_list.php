<?php 
require_once 'views/template/header.php';
?>

<h2 class="page-title">Daftar Booking Treatment</h2>
<a href="index.php?entity=booking&action=add">Add Booking</a>

<table class="w-full border mt-3">
    <tr>
        <th>Pasien</th>
        <th>Dokter</th>
        <th>Treatment</th>
        <th>Tanggal</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($bookingList as $b): ?>
        <tr>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($b['nama_pasien']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($b['nama_dokter']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($b['nama_treatment']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($b['tanggal_booking']); ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=booking&action=edit&id=<?php echo $b['id_booking']; ?>">Edit</a> |
                <a href="index.php?entity=booking&action=delete&id=<?php echo $b['id_booking']; ?>"
                    onclick="return confirm('Hapus booking?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php 
require_once 'views/template/footer.php';
?>
