<html>
    <head>
        <title>User login and registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>
                    </form>
                </div>

                <div class="col-md-6">
                    <h2>Register Here</h2>
                    <form action="registation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>