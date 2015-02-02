<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Julies Personal Asst.</title>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1' name='viewport'/>

    <!-- For linux and everything else in the world -->
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css"/>
    <!-- For windows -_- -->

    <link rel="stylesheet" href="\Julies_Website\css\bootstrap.min.css"/>
    <link rel="stylesheet" href="\Julies_Website\css\bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="\Julies_Website\css\bootstrap-theme.min.css"/>



</head>


<body>

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Nav</a>

    </div>
    <div id="navbar" class="navbar-collapse">
        <ul class="nav navbar-nav">

            <li><a href="#">Home</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"> Entertainment<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Invitations / party</a></li>
                    <li><a href="#">RSVP Coordination</a></li>
                    <li><a href="#">Coordination with vendors</a></li>
                    <li><a href="#">Grocery & Alcohol Shopping</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Moving<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Hire a moving company</a></li>
                    <li><a href="#">Day of move coordination</a></li>
                    <li><a href="#">Pack, un-pack & organize </a></li>
                    <li><a href="#">Stock house with supplies</a></li>
                    <li><a href="#">Setup utilises accounts</a></li>
                    <li><a href="#">Meet delivery people</a></li>
                    <li><a href="#">Donate un-wanted items</a></li>

                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Organization<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Home & Office Organization</a></li>
                    <li><a href="#">Home repair</a></li>
                    <li><a href="#">Deliveries</a></li>
                    <li><a href="#">Utilities Installation</a></li>
                    <li><a href="#">House Sitting</a></li>


                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Personal Care<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Senior Care</a></li>

                </ul>
            </li>

            <li><a href="#">Pricing</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Scheduling<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Laundry & dry cleaning</a></li>
                    <li><a href="#">Prescription drop off & pick up</a></li>
                    <li><a href="#">Post offices, UPS, & FedEx pickups</a></li>
                    <li><a href="#">Car detail and service appointments</a> </li>
                    <li><a href="#">Home repair</a> </li>
                    <li><a href="#">Restaurant reservations</a></li>
                    <li><a href="#">Car rentals</a></li>
                    <li><a href="#">Vacation planning</a></li>
                    <li><a href="#">Hotel scheduling</a></li>


                </ul>
            </li>

            <li><a href="#">Reminder Services</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Shopping Services<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Specific Gifts</a></li>
                    <li><a href="#">Gift Wrapping</a></li>
                    <li><a href="#">Addressing for holiday cards and gifts</a></li>
                    <li><a href="#">Gift cards/ certificates</a></li>
                    <li><a href="#">Ship or deliver a gift</a></li>
                </ul>
            </li>

        </ul>
    </div><!--/.nav-collapse -->
</nav>


<div class="jumbotron">
    <div class="container">

        <h2>Julies Personal Assistant Service</h2>

    </div>
</div>
<!-- Future Nathan, put your content here :) -->

<div class="container">

    <div class="panel panel-info">

        <div class="panel-heading">Sign up for services.</div>
        <div class="panel-body">
            <form method="post" action="signup.php">
                <div class="form-group">

                    <div class="col-md-6">
                        <div class="well-sm well">

                        <p class="text-primary text-justify">Personal Information</p>

                        <input type="text" placeholder="Name (First)" class="form-control" name="FirstName" required="true"><br>

                        <input type="text" placeholder="Name (Last)" class="form-control" name="LastName" required="true"><br>

                        <input type="email" placeholder="Email" class="form-control" name="email" required="true"><br>

                        <input type="tel" placeholder="Phone Number" class="form-control" name="phone" required="true" maxlength="8"><br>

                        <input type="text" placeholder="Address" class="form-control" name="Address" required="true"><br>

                        <input type="text" placeholder="City" class="form-control" name="City" required="true"><br>

                        <input type="text" placeholder="Zipcode" class="form-control" name="Zipcode" required="true" maxlength="5"><br>

                        <textarea rows="5" class="form-control" placeholder="Tell us about you" maxlength="1000" draggable="false" spellcheck="true"></textarea>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="well-sm well">
                            <p class="text-primary text-justify">Services</p><br>

                            <input type="">

                        </div>
                        <input class="btn btn-primary" type="submit" value="Sign Up">

                    </div>

                </div>


            </form>
        </div>
    </div>

</div>

<!-- & end it here -->
<div class="container">

    <div class="alert alert-danger">
        <p>Please note that this website is still a work in porgress,
            if you find a bug please report it <a href="mailto:nrtheprogrammer@gmail.com?Body=I would like to report a bug where ______ happens and I think ______ should be happening.&ampSubject=Website%20Bug%20Report">here</a>.</p>

    </div>

</div>


<footer class="footer">
    <div class="container">
        <p class="text-muted">© Julies Personal Assistant Inc. 2015. All Rights Reserved.</p>
    </div>
</footer>


<!-- For all os !Windows -->
<script src="/js/jquery-2.1.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- For windows -->

<script src="\Julies_Website\js\jquery-2.1.3.min.js"></script>
<script src="\Julies_Website\js\bootstrap.min.js"></script>
</body>

</html>