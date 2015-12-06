<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restoran Oleholeh Sunda</title>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/oleholeh.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script>
    function loadDoc(str) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          document.getElementById("myModal").innerHTML = xhttp.responseText;
        }
      }
      xhttp.open("GET", str, true);
      xhttp.send();
    }
    </script>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" onclick="loadpage('tambahan', '#indexID'); loadpage('carousel', '#myCarousel', '');">HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                              <a onclick="loadpage('menu-lengkap-makanan', '#indexID');loadpage('header', '#myCarousel', 'remove');" href="#">Menu Makanan</a>

                            </li>
                            <li>
                              <a onclick="loadpage('menu-lengkap-minuman', '#indexID');loadpage('header', '#myCarousel', 'remove');" href="#" >Menu Minuman</a>
                                <!--<a href="menu-lengkap-minuman.html">Menu Minuman</a>-->
                            </li>
                            <li>
                              <a onclick="loadpage('menu-lengkap-oleholeh', '#indexID');loadpage('header', '#myCarousel', 'remove');" href="#">Oleholeh Khas Sunda</a>
                                <!--<a href="menu-lengkap-oleholeh.html">Oleholeh Khas Sunda</a>-->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resep <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                      <a onclick="loadpage('about', '#indexID');loadpage('header', '#myCarousel','remove');" href="#">About</a>
                        <!--<a href="about.html">About</a>-->
                    </li>
                    <li>
                      <a onclick="loadpage('contact', '#indexID');loadpage('header', '#myCarousel', 'remove');" href="#" >Contact</a>
                        <!--<a href="contact.html">Contact</a>-->
                    </li>
                    <li id="cart">
                      <a data-toggle='modal' data-target='#myModal' href="#"" ><span style="color:white;" class="glyphicon glyphicon-shopping-cart"></span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
