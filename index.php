<html>
    <head>
        <title>Wordpress Password</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head><body style="background-color:black;color:lime;">
    <div class="container">
            <p class="h1">Password Wordpress Generator</p>
        <form id="generate">
            <div class="form-group">
                <label for="string_c">String</label>
                <input type="text" class="form-control form-control-lg" id="string_c" placeholder="String">
            </div>
            <div class="form-group">
                <label for="password_c">Password</label>
                <input type="text" class="form-control form-control-lg" id="password_c" placeholder="Password" disabled>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-outline-primary btn-lg">Encrypt!</button>
            </div>
        </form>
    </div>
    <div class="container">
            <p class="h1">Check password true/false</p>
        <form id="checkpass">
            <div class="form-group">
                <label for="string">String</label>
                <input type="text" class="form-control form-control-lg" id="string" placeholder="String">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control form-control-lg" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="hasil">Hasil</label>
                <input type="text" class="form-control form-control-lg" id="hasil" placeholder="Hasil" disabled>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-outline-primary btn-lg">Check!</button>
            </div>
        </form>
    </div>
    <script src="Jquery/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>
    </body>
</html>