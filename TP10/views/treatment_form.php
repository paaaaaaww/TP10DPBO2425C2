<?php 
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($treatment) ? 'Edit Treatment' : 'Add Treatment'; ?></h2>

<form action="index.php?entity=treatment&action=<?php echo isset($treatment) ? 'update&id=' . $treatment['id_treatment'] : 'save'; ?>" 
      method="POST" class="space-y-4">

    <div>
        <label>Nama Treatment:</label>
        <input type="text" name="nama_treatment" class="border p-2 w-full"
            value="<?php echo isset($treatment) ? htmlspecialchars($treatment['nama_treatment']) : '' ?>" required>
    </div>

    <div>
        <label>Harga:</label>
        <input type="number" name="harga" class="border p-2 w-full"
            value="<?php echo isset($treatment) ? htmlspecialchars($treatment['harga']) : '' ?>" required>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>

</form>

<?php 
require_once 'views/template/footer.php';
?>
