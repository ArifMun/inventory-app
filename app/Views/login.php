<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the login form */
        .login-container {
            margin-top: 100px;
            /* adjust as needed for vertical alignment */
        }

        body {
            background-color: #f8f8f8;
        }

        .card-body {
            background-color: #4cbd66;
            border-radius: 15px;
            border: none;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #fefefe;">
            <div class="container">
                <a class="navbar-brand" href="#" style="color:inherit">Sistem Inventaris <br>
                    <h6>PT. REJOSO MANIS INDO</h6>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color:inherit" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:inherit" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6">
                <div class="card" style=" border: none;">
                    <div class="card-body">
                        <form action="your_login_action.php" method="POST">
                            <div class="form-group">
                                <label style="color: white;" for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="username">
                            </div>
                            <div class="form-group">
                                <label style="color: white;" for="password">Akses</label>
                                <input type="Akses" class="form-control" id="Akses" name="Akses" required placeholder="Admin">
                            </div>
                            <div class="form-group">
                                <label style="color: white;" for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="password">
                            </div>
                            <div class="button d-flex justify-content-end">
                                <button type="submit" class="btn " style="background-color: #81d293;color:white">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>