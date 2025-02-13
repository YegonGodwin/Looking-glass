<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <p>Hi<?php echo $_SESSION['user'];?></p>
<button class="nav-link btn btn-outline-secondary" href="#" data-toggle="modal" data-target="#loginModal"><i class="bi bi-box-arrow-in-left"></i>Log Out</button>
    <section>
        <div class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-primary"></h4>
                        <div class="modal-body">
                            <h5 class="text-secondary">Are you sure you wanna exit?</h5>
                            <a href="#" class="btn btn-danger">Yes</a>&nbsp;
                            <button class="btn btn-outline-secondary" data-dismiss="modal" aria-label="close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>