<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <title>Project X</title>
</head>
<body>
<img src="assets/img/banner.png" style="width:1350px;height:250px;" >
<hr>

<a href="/index.php"><span>Minust</span></a>
<a href="/too2.php"><span>Töö #2</span></a>

<br>
<br>

<h1>Tere!</h1>
<p>Minu nimi on Indro Malleus ja Te olete sattunud minu veebilehele.</p>
<h2>Enesetutvustus</h2>
<!-- Teen siia unordered listi -->
<ul>
    <li>Olen 20 aastane noormees</li>
    <li>Pikkus 185cm</li>
    <li>Kaal 66kg</li>
    <li>Tähtkuju Jäär</li>
</ul>
<h3>Haridustee</h3>
<table>
    <tr>
        <th>#</th>
        <th>Kool</th>
        <th>Aastad</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Tartu Karlova Gümnaasium</td>
        <td>2002-2014</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Tartu Kutsehariduskeskus</td>
        <td>2015-...</td>
    </tr>
</table>
<h4>Ajateenistus</h4>
<ul>
    <li>1. oktoober 2014 - 30. mai 2015</li>
    <li>Väeosa: Kuperjanovi jalaväepataljon</li>
    <li>Kompanii: Alfa-Kompanii</li>
</ul>
<h5>Hobid</h5>
<ol>
    <li>E-sport</li>
    <li>Ujumine</li>
    <li>Jalgpall</li>
    <li>Jalgratta sõit</li>
</ol>
<h6>Kontakt</h6>
<ol>
    <li>Nimi: Indro Malleus</li>
    <li>E-mail: indro.malleus@khk.ee</li>
    <li>Skype: indrolox</li>
</ol>
<hr>
<!-- Lisan kuupäeva! -->
Täna  on <?php echo date("l jS \of F Y"); ?>


</body>
</html>