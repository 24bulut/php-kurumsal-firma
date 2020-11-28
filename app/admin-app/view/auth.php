<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo publicAdminUrl("vendors/bootstrap/dist/css/bootstrap.min.css") ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo publicAdminUrl("vendors/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo publicAdminUrl("vendors/nprogress/nprogress.css") ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo publicAdminUrl("vendors/animate.css/animate.min.css") ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo publicAdminUrl("build/css/custom.min.css") ?>" rel="stylesheet">
</head>

<body class="login">
    <div>


        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST"  action="">
                        <h1>Yönetici Giriş</h1>

                        <?php if (isset($loginMessage)):?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo  $loginMessage ?>
                        </div>
                        <?php endif;?>
                        <div>
                            <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" name="login" class="btn btn-success submit">Giriş</button>
                        </div>

                        <div class="clearfix"></div>


                    </form>
                </section>
            </div>


        </div>
    </div>
</body>

</html>