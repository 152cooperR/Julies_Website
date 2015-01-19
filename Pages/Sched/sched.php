<html>
<head>
    <link href="/Julies Website/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="this.css" rel="stylesheet" type="text/css">
    <div id="veryTop">
        <a>Julies Personal Assistant Service</a>
    </div>
</head>
<body>

<div class="navBar">
<ul>
    <li><a href="/Julies Website/Pages/home/home.php" id="home">Home</a></li>
    <li><a href="/Julies Website/Pages/PersonalCare/personalCare.php" id="personalCare" >Personal Care</a></li>
    <li><a href="/Julies Website/Pages/Org/org.php" id="organization" >Organization</a></li>
    <li><a href="/Julies Website/Pages/Moving/moving.php" id="moving" >Moving In/Out</a></li>
    <li><a href="/Julies Website/Pages/Reminding/remind.php" id="remind" >Reminder services</a></li>
    <li><a href="/Julies Website/Pages/Entertainment/ent.php" id="entertaining" >Entertaining</a></li>
    <li><a href="/Julies Website/Pages/Shopping/shopping.php" id="shopping" >Personal shopping</a></li>
    <li><a href="/Julies Website/Pages/Sched/sched.php" id="scheduling" >Schedule Services</a></li>
    <li><a href="/Julies Website/Pages/Pricing/pricing.php" id="pricing" >Pricing</a></li>
</ul>

    <script language="JavaScript" type="text/javascript" >
        var ent = document.getElementById(ent);
        var test = document.getElementById(test).style.display = 'none';
        test.style.display = 'none';
    </script>

</div>
<div class="contentWrapper">
</div>
    <div class="CB" ">
    <h3>Scheduling <br></h3>
        <form action="Confirm.php" method="post">
            To sign up for a service enter your contact information.<br>
            Name: <input type="text" name="name"> <br>
            Email: <input type="email" name="email"> <br>
            Address: <input type="text" name="adress"> <br>
            Phone number: <input type="text" maxlength="14" name="address"> <br>
            What services are you interested in? (Select all that apply)<br>
            <input type="checkbox" id="ent">  Entertainment  <br>
            <input type="checkbox">  Moving <br>
            <input type="checkbox">  Organization  <br>
            <input type="checkbox">  Personal Care  <br>
            <input type="checkbox">  Reminder Services <br>
            <input type="checkbox">  Shopping <br>
            <input type="checkbox" id="test">


        </form>
    </div>


</div>
<div class="credit">

    <a>© Nathan Rhodes 2015. All Rights Reserved.</a>

</div>
</body>
</html>