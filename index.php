<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            width: 100%;
            background-color: pink;
        }

        h1{
            background-color: rgb(230, 97, 207);
            height: 80px;
            font-size: 50px;
        }

        #calc, #user{
            width: 50px;
            height: 50px;
        }

        .calculator, .member, .cashier{
            float: left;
            padding-top: 100px;
        }

        .calculator{
            padding-left: 300px;
        }

        .member{
            padding-left: 180px;
        }

        .cashier{
            padding-left: 180px;
        }        

    </style>
</head>

<body>
    <center>
    <h1>Selamat Datang Di Berkah Computer</h1>

    <?php
    $filecounter ="counter.txt";
    $f1=fopen($filecounter, "r+");
    $hit=fread($f1, filesize($filecounter));
    echo("<table width250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#334443><tr>");
    echo("<td width=250 valign=midle align=center>");
    echo("<font face=verdana size=2 color=#233E8B><b>");
    echo("Anda pengunjung yang ke : ");
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");
    fclose($f1);
    $f1=fopen($filecounter, "w+");
    $hit=$hit+1;

    fwrite($f1, $hit, strlen($hit));
    fclose($f1);
    ?>

    <div class="content">
        <div class="calculator">
            <img src="calculator.png" id="calc"><br>
            <a href='Kalkulator/kalku.php'>CALCULATOR</a>
        </div>

        <div class="member">
            <img src="user.png" id="user"><br>
            <a href='formmember.html'>NEW MEMBER</a>

        </div>

        <div class="cashier">
            <img src="cashier.png" id="user"><br>
            <a href='kasir/kasir.php'>CASHIER</a>

        </div>
    </div>
    </center>
</body>
</html>
