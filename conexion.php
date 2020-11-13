<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/signin.css">
    <link rel="stylesheet" href="assets/css/mystyles.css">
    <title>Inicio Facebook</title>
</head>

<body class="text-center bg">

    <script>
        function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
            console.log('statusChangeCallback');
            console.log(response); // The current login status of the person.
            if (response.status === 'connected') { // Logged into your webpage and Facebook.
                testAPI();
            } else { // Not logged into your webpage or we are unable to tell.
                document.getElementById('status').innerHTML = 'Porfavor registrate usando esta pagina.';
            }
        }


        function checkLoginState() { // Called when a person is finished with the Login Button.
            FB.getLoginStatus(function(response) { // See the onlogin handler
                statusChangeCallback(response);
            });
        }


        window.fbAsyncInit = function() {
            FB.init({
                appId: '664328514207434',
                cookie: true, // Enable cookies to allow the server to access the session.
                xfbml: true, // Parse social plugins on this webpage.
                version: 'v8.0', // Use this Graph API version for this call.
                profileFields: ['email'],
                scope: ['email'],
            });


            FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
                statusChangeCallback(response); // Returns the login status.
            });
        };

        function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', {
                fields: 'name,picture.type(large)'
            }, function(response) {
                console.log('Inicio de sesión existoso para: ' + response.name);
                //console.log('Correo: ' + response.email);
                document.getElementById('status').innerHTML =
                    //'<h1 class="nom">Nombre del usuario</h1> ' + response.name +
                    // '<br> Email: ' + response.email +
                    //'<br> <img src="' + response.picture.data.url + '" width="100px" class="img">';

                    location.href = 'pagprinc.html';
            });
        }
    </script>

    <form id="formulario" class="form-signin" method="POST">
        <label for="inputUser" class="sr-only">Usuario</label>
        <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>
        <button id="btnLogin" class="btn btn-lg btn-block color_btn">Entrar</button>
        <br>

        <div class="fb-login-button" data-size="large" data.scope="public_profile,email" data-button-type="continue_with" data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="true" data-width=""></div>

        <br>

        </a>
        <!-- The JS SDK Login Button -->
        <div id="status">
        </div>
        <br>
        <a href="registro.html"><button type="button" class="btn btn-link text-nowrap">Registrarse</button></a>
        <button type="button" class="btn btn-link text-nowrap">¿Olvidaste tu contraseña?</button>
        <!--<p class="mt-3 mb-3 text-muted">¿Olvidaste tu contraseña?</p>-->
        <p class="mt-3 mb-3 text-muted">&copy; 2020</p>
    </form>
    <br>
    <br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Load the JS SDK asynchronously -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>