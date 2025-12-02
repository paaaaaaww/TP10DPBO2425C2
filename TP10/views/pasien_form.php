<?php 
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($pasien) ? 'Edit Pasien' : 'Add Pasien'; ?></h2>

<form action="index.php?entity=pasien&action=<?php echo isset($pasien) ? 'update&id=' . $pasien['id_pasien'] : 'save'; ?>" 
      method="POST" class="space-y-4">

    <div>
        <label>Nama:</label>
        <input type="text" name="nama" required class="border p-2 w-full"
            value="<?php echo isset($pasien) ? htmlspecialchars($pasien['nama']) : '' ?>">
    </div>

    <div>
        <label>No HP:</label>
        <input type="text" name="no_hp" required class="border p-2 w-full"
            value="<?php echo isset($pasien) ? htmlspecialchars($pasien['no_hp']) : '' ?>">
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>

</form>

<?php 
require_once 'views/template/footer.php';
?>
