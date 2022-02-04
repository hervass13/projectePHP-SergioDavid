<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="/css/register.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
    <div class="contact-image">
        <a href="./index.php"><img src="assets/img/logoGran.jpg" alt="logo" /></a>
    </div>
    <form method="POST" action="./verificarPOST.php">
        <h3>Registrate Ahora</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter a username *" value="" />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" placeholder="Enter your first name " value="" />
                </div>
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <input type="text" name="lastname" class="form-control" placeholder="Enter your last name " value="" />
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter a password *" value="" />
                </div>

                <div class="form-group">
                    <input type="password" name="verifypassword" class="form-control" placeholder="Repeat password *" value="" />
                </div>

            </div>

            <div class="col-md-6">
                <div class="">
                    <input type="submit" name="submit" class="btnContact" value="Submit" />
                </div>
            </div>
        </div>
    </form>
</div>
