<?php 
require_once 'views/template/header.php';
?>

<h2 class="page-title">Daftar Treatment</h2>
<a href="index.php?entity=treatment&action=add">Add Treatment</a>

<table class="w-full border mt-3">
    <tr>
        <th>Nama Treatment</th>
        <th>Harga</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($treatmentList as $t): ?>
        <tr>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($t['nama_treatment']); ?></td>
            <td class="border px-4 py-2">Rp <?php echo number_format($t['harga']); ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=treatment&action=edit&id=<?php echo $t['id_treatment']; ?>">Edit</a> |
                <a href="index.php?entity=treatment&action=delete&id=<?php echo $t['id_treatment']; ?>"
                    onclick="return confirm('Hapus treatment?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php 
require_once 'views/template/footer.php';
?>
