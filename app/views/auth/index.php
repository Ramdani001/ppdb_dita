
<h1>Data Siswa</h1>

<?php foreach ($data['person'] as $person) : ?>
    <ul>
        <li><?= $person['nrp'] ?></li>
        <li><?= $person['nama'] ?></li>
    </ul>
<?php endforeach; ?>

