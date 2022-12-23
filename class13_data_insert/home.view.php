<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <title>Input Form</title>
</head>

<body>
    <section class="form">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-6 mx-auto">
                    <?php
                    if (isset($success)) {
                        printf("<div class='alert alert-success'>%s</div>", $success);
                    }
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>SIGN UP</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mt-2">
                                    <label for="fnameId" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="fname"
                                        placeholder="Enter your first name.." id="fnameId">
                                    <?php
                                    if (isset($error['fnameError'])) {
                                        printf("<div class = 'text-info'>%s</div>", $error['fnameError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="lnameId" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lname"
                                        placeholder="Enter your last name.." id="lnameId">
                                    <?php
                                    if (isset($error['fnameError'])) {
                                        printf("<div class = 'text-info'>%s</div>", $error['lnameError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="emailId" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter your email.." id="emailId">
                                    <?php
                                    if (isset($error['emailError'])) {
                                        printf("<div class = 'text-info'>%s</div>", $error['emailError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="passId" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter your password.." id="passId">
                                    <?php
                                    if (isset($error['passwordError'])) {
                                        printf("<div class = 'text-info'>%s</div>", $error['passwordError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="photoId" class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photoId">
                                    <p>Upload 'jpg', 'jpeg', 'png', 'webp', 'gif'</p>
                                    <?php
                                    if (isset($error['photoError'])) {
                                        printf("<div class = 'text-info'>%s</div>", $error['photoError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
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