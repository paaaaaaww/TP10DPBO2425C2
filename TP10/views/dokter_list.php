<?php 
require_once 'views/template/header.php';
?>

<h2 class="page-title">Daftar Dokter</h2>
<a href="index.php?entity=dokter&action=add">Add Dokter</a>

<table class="w-full border mt-3">
    <tr>
        <th>Nama</th>
        <th>Spesialis</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($dokterList as $dokter): ?>
        <tr>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($dokter['nama']); ?></td>
            <td class="border px-4 py-2"><?php echo htmlspecialchars($dokter['spesialis']); ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=dokter&action=edit&id=<?php echo $dokter['id_dokter']; ?>">Edit</a> |
                <a href="index.php?entity=dokter&action=delete&id=<?php echo $dokter['id_dokter']; ?>"
                    onclick="return confirm('Hapus dokter?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php 
require_once 'views/template/footer.php';
?>
