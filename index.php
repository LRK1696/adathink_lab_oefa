<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Login Jobber</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="modal-dialog">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/logo.png" alt="" srcset="">
                </div>
                <div class="col-12 user-name">
                    <h1></h1>
                </div>
                <div class="col-12 form-input">
                    <form id="needs-validation" action="home.php" method="POST">
                        <div class="form-group">
                            <label for="validationCustum01">Username</label>
                            <input type="email" class="form-control input-group" name="email" id="validationCustum01" placeholder="Enter email" required>
                            <div class="invalid-feedback">Complete datos</div>
                        </div>
                        <div class="form-group">
                             <label for="validationCustum02">Password</label>
                            <input type="password" class="form-control input-group" name="password" id="validationCustum02" placeholder="Enter password" required>
                            <div class="invalid-feedback">Complete datos</div>
                        </div>
                        <div class="form-group left">
                            <input type="checkbox" class=""> No cerrar sesión
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
                <div class="col-12 link-part">
                    <a href="#">¿Eres nuevo? Registrate aquí</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>