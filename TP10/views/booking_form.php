<?php 
require_once 'views/template/header.php';
?>
<h2 class="text-xl mb-4"><?php echo isset($booking) ? 'Edit Booking' : 'Add Booking'; ?></h2>

<form action="index.php?entity=booking&action=<?php echo isset($booking) ? 'update&id=' . $booking['id_booking'] : 'save'; ?>" 
      method="POST" class="space-y-4">

    <div>
        <label>Pasien:</label>
        <select name="id_pasien" class="border p-2 w-full" required>
            <?php foreach ($pasiens as $p): ?>
                <option value="<?php echo $p['id_pasien']; ?>"
                    <?php echo (isset($booking) && $booking['id_pasien'] == $p['id_pasien']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($p['nama']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label>Dokter:</label>
        <select name="id_dokter" class="border p-2 w-full" required>
            <?php foreach ($dokters as $d): ?>
                <option value="<?php echo $d['id_dokter']; ?>"
                    <?php echo (isset($booking) && $booking['id_dokter'] == $d['id_dokter']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($d['nama']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label>Treatment:</label>
        <select name="id_treatment" class="border p-2 w-full" required>
            <?php foreach ($treatments as $t): ?>
                <option value="<?php echo $t['id_treatment']; ?>"
                    <?php echo (isset($booking) && $booking['id_treatment'] == $t['id_treatment']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($t['nama_treatment']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label>Tanggal Booking:</label>
        <input type="date" name="tanggal_booking" class="border p-2 w-full"
            value="<?php echo isset($booking) ? $booking['tanggal_booking'] : ''; ?>" required>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>

</form>


<?php 
require_once 'views/template/footer.php';
?>
