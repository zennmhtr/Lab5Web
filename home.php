<?php

$database = new Database();
$data = $database->x("data_pemain");

?>

<div class="main">
    <table>
        <tr>
            <th>NO</th>
            <th>NAME PLAYER</th>
            <th>CLUB</th>
            <th>NATIONALITY</th>
            <th>ACTION</th>
        </tr>
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td> <?= $row['id']; ?></td>
                <td> <?= $row['nama_pemain']; ?></td>
                <td> <?= $row['club']; ?></td>
                <td> <?= $row['nama_negara']; ?></td>
                <td>
                    <a href="update?id=<?= $row['id']; ?>">Update</a>
                    <a href="delete?id=<?= $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="tambah" href="add">Add</a>
</div>