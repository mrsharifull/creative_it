<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="form">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <?php
                    if (isset($success)) {
                        printf('<div class="alert alert-success">%s</div>', $success);
                    }
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Sing Up</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mt-2">
                                    <label for="fnameId" class="form-label">First Name</label>
                                    <input type="text" name="fname" id="fnameId" class="form-control"
                                        placeholder="Enter your first name.." value="">
                                    <?php
                                    if (isset($error['fnameError'])) {
                                        printf('<div class="text-info">%s</div>', $error['fnameError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="lnameId" class="form-label">Last Name</label>
                                    <input type="text" name="lname" id="lnameId" class="form-control"
                                        placeholder="Enter your last name.." value="">
                                    <?php
                                    if (isset($error['lnameError'])) {
                                        printf('<div class="text-info">%s</div>', $error['lnameError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="emailId" class="form-label">Email</label>
                                    <input type="email" name="email" id="emailId" class="form-control"
                                        placeholder="Enter your email.." value="">
                                    <?php
                                    if (isset($error['emailError'])) {
                                        printf('<div class="text-info">%s</div>', $error['emailError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <label for="passId" class="form-label">Password</label>
                                    <input type="password" name="password" id="passId" class="form-control"
                                        placeholder="Enter your password.." value="">
                                    <?php
                                    if (isset($error['passwordError'])) {
                                        printf('<div class="text-info">%s</div>', $error['passwordError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <input type="file" name="image" id="imageId" class="form-control">
                                    <?php
                                    if (isset($error['imageError'])) {
                                        printf('<div class="text-info">%s</div>', $error['imageError']);
                                    }
                                    ?>
                                </div>
                                <div class="mt-2">
                                    <input type="submit" name="submit" class="btn btn-sm btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>