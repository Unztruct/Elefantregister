
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "elefanter");


$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);



if (empty($dbh)) {

    echo "Elefant-register tomt";
    echo"<br>";
} else {





    if (isset($_GET["namn"])) {
        $name = $_GET["namn"];
        $betar = $_GET["betar"];
    }

    if (isset($_GET['add'])) {

        $sql = "INSERT INTO elefanter(id,namn,betar) VALUES('','$name','$betar')";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
    }






    $sql = "SELECT * FROM elefanter";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $elefantnamn = $stmt->fetchAll();
}
?>

<!DOCTYPE html>

<html>
    <head>

        <link href="css.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>




        <div id="clouds">
            <h1>Elefant-försäljning-och-handelssida</h1>
            <div class="cloud x1">



            </div>
            <div class="cloud x2">



            </div>
            <div class="x3">



            </div>
            <div class="cloud x4">



            </div>
            <div class="cloud x5">




            </div>
        </div>


        <form>
            Elefantnamn: <input type="text" name="namn"><br>
            Har betar?: <input type="text" name="betar">
            <input type="submit" value="Lägg till" name="add">
            <br>

            <input type="submit" value="Ta bort">

        </form>

        <br>

<?php
foreach ($elefantnamn as $elefant) {



    echo $elefant["namn"];




    echo "<br>";
    if ($elefant["betar"]) {
        echo "hurra jag kommer bli av med mina betar";
    } else {
        echo "hurra jag kommer inte bli av med mina betar";
    }
    echo "<br>";


    echo "Jag är elefant nummer ";
    echo $elefant["id"];



    echo "<br>";
    echo"<br>";
}
?>


    </body>
</html>
