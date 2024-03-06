<!-- guest_list.php -->
<h2>Guest List</h2>
<ul>
    <?php foreach ($guests as $guest): ?>
        <li><?= $guest['name'] ?> - <?= $guest['email'] ?></li>
    <?php endforeach; ?>
</ul>
