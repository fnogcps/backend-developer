<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Register</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/validation.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    
    <body class="bg-light">   

        <main role="main" class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded box-shadow">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">User List</h6>
                </div>
            </div>

            <?php for ($x = 0; $x <= 5; $x++) { ?>
                <div class="my-3 p-3 bg-white rounded box-shadow">
                    <div class="media text-muted pt-2 pb-2">
                        <img data-src="holder.js/35x35?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                        <div class="row w-100">
                            <div class="col-12 col-md-4">
                                <p class="media-body mb-0 lh-1">
                                    <strong class="d-block text-gray-dark">Name</strong>
                                    <small>user@email.com</small>
                                </p>
                            </div>
                            <div class="col-12 col-md-4">
                                <p class="media-body mb-0 lh-1 pt-2">Genre</p>
                            </div>
                            <div class="col-12 col-md-4">
                                <p class="media-body mb-0 lh-1 pt-2">Country</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </main>
        
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.min.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>