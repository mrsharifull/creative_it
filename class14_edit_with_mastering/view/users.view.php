<?php
//Header
include('layout/header.view.php');
?>

<section class="users mt-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php

                if (isset($_GET['success'])) {
                    $success = base64_decode($_GET['success']);
                    printf('<div class="alert alert-success">%s</div>', $success);
                }
                ?>
                <div class="card users_table">
                    <div class="card-header">
                        <h4>Users</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            foreach ($data as $item) {
                            ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td>
                                    <img src="upload/profile/<?= $item['photo'] ?>" width="50" alt="">
                                </td>
                                <td><?= $item['fname'] ?></td>
                                <td><?= $item['lname'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= base64_encode($item['id']) ?>"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <a href="" class="btn btn-sm btn-success">View</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
//Footer
include('layout/footer.view.php');
?>