<?php
require('../db/header.php');
?>
<body class="login-body">
    <div class=" login-body">

        <div class="row" id="pwd-container">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <section class="login-form">
                    <form method="post" action="../controller/register.php" role="login">
                        <!-- <h3 class="text-center">AXA Assurance</h3> -->

                        <img src="https://image.flaticon.com/icons/svg/236/236831.svg" width="128vw" class="img-responsive" alt="" />
                        <input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
                        <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password"
                            required="" />
                        <div class="pwstrength_viewport_progress"></div>
                        <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                        <div>
                            <a href="#">Create account</a> or <a href="#">reset password</a>
                        </div>

                    </form>


                </section>
            </div>

            <div class="col-md-4"></div>


        </div>
    </div>

<?php
  require('../db/footer.php');
?>
