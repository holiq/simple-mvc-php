<?php
require 'header.php';
?>
<div class="container mt-5">
    <h1>Users</h1>

    <table class="table">
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $u) { ?>
                <tr>
                    <td><?= $u['name'] ?></td>
                    <td><?= $u['email'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
require 'footer.php';
?>
