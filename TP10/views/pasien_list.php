<?php 
require_once 'views/template/header.php';
?>

<h2 class="page-title">Daftar Pasien</h2>
<a href="index.php?entity=pasien&action=add">Add Pasien</a>

<table class="w-full border mt-3">
    <tr>
        <th>Nama</th>
        <th>No HP</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($pasienList as $pasien): ?>
        <tr>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($pasien['nama']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($pasien['no_hp']); ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=pasien&action=edit&id=<?php echo $pasien['id_pasien']; ?>">Edit</a> |
                <a href="index.php?entity=pasien&action=delete&id=<?php echo $pasien['id_pasien']; ?>"
                    onclick="return confirm('Hapus pasien?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php 
require_once 'views/template/footer.php';
?>
