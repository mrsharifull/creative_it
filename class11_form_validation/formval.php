<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Input Form</title>
</head>

<body>
    <section class="form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 mx-auto">
                    <form action="" method="post" class="mt-5" enctype="multipart/form-data">
                        <div class="output">
                            <h5><?= $name ?? '' ?></h5>
                            <h5><?= $email ?? '' ?></h5>
                            <h5><?= $phone ?? '' ?></h5>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <p class="text-success"><?= $success ?? '' ?></p>
                                <h4> INPUT FORM</h4>
                            </div>
                            <div class="card-body">
                                <div class="mt-2">
                                    <label for="nameId" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name.."
                                        id="nameId" value="<?= $name ?? '' ?>">
                                    <p class="text-danger"><?= $error['nameError'] ?? '' ?></p>
                                </div>
                                <div class="mt-2">
                                    <label for="emailId" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter your email.." id="emailId" value="<?= $email ?? '' ?>">
                                    <p class="text-danger"><?= $error['emailError'] ?? '' ?></p>
                                </div>
                                <div class="mt-2">
                                    <label for="phoneId" class="form-label">Number</label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Enter your phone number.." id="phoneId"
                                        value="<?= $phone ?? '' ?>">
                                    <p class="text-danger"><?= $error['phoneError'] ?? '' ?></p>
                                </div>
                                <div class="mt-2">
                                    <label for="phoneId" class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photoId">
                                    <!-- <input type="file" class="form-control" name="photo[]" id="photoId" multiple> -->
                                </div>
                                <div class="mt-2">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>