<DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="../web/css/bootstrap.min.css">
        <link rel="stylesheet" href="../web/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../web/css/style.css">

        <script src="//code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<!--        <script src="../web/js/bootstrap.js" type="text/javascript"></script>-->
        <script src="../web/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../web/js/script.js" type="text/javascript"></script>
    </head>
    <body>

    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Tasks</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="?controller=tasks&action=index">Tasks <span class="sr-only">(current)</span></a></li>
                                    <li><a href="?controller=tasks&action=create">Create <span class="sr-only">(current)</span></a></li>


                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a id="login" href="?controller=users&action=login">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php require_once('routes.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>

                </footer>
            </div>
        </div>
    </div>





    <body>
    <html>