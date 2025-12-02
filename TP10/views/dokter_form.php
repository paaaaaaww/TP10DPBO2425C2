<?php 
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($dokter) ? 'Edit Dokter' : 'Add Dokter'; ?></h2>

<form action="index.php?entity=dokter&action=<?php echo isset($dokter) ? 'update&id=' . $dokter['id_dokter'] : 'save'; ?>"
      method="POST" class="space-y-4">

    <div>
        <label>Nama:</label>
        <input type="text" name="nama" required class="border p-2 w-full"
            value="<?php echo isset($dokter) ? htmlspecialchars($dokter['nama']) : '' ?>">
    </div>

    <div>
        <label>Spesialis:</label>
        <input type="text" name="spesialis" required class="border p-2 w-full"
            value="<?php echo isset($dokter) ? htmlspecialchars($dokter['spesialis']) : '' ?>">
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>

</form>

<?php 
require_once 'views/template/footer.php';
?>
