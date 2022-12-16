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
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="" method="post" class="mt-5 border">
                    <div class="card-header">
                        <p class="text-success"><?= $success ?? '' ?></p>
                        <h4> INPUT FORM</h4>
                    </div>
                    <div class="card-body">
                        <label for="nameId" class="form-label">Name</label>
                        <input type="text" class="form-control mb-2" name="name" placeholder="Enter your name.."
                            id="nameId" value="<?= $name ?? '' ?>">
                        <p class="text-danger"><?= $error['nameError'] ?? '' ?></p>
                        <label for="emailId" class="form-label">Email</label>
                        <input type="text" class="form-control mb-2" name="email" placeholder="Enter your email.."
                            id="emailId" value="<?= $email ?? '' ?>">
                        <p class="text-danger"><?= $error['emailError'] ?? '' ?></p>
                        <label for="phoneId" class="form-label">Number</label>
                        <input type="number" class="form-control mb-2" name="phone"
                            placeholder="Enter your phone number.." id="phoneId" value="<?= $phone ?? '' ?>">
                        <p class="text-danger"><?= $error['phoneError'] ?? '' ?></p>
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>