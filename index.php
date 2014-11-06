
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





    
    if (isset($_POST["betar"]) and isset($_POST["namn"])) {
        //var_dump($_POST);
        $name = $_POST["namn"];
        $betar = $_POST["betar"];
    }

    if (isset($_POST['add'])) {

        $sql = "INSERT INTO elefanter(id,namn,betar) VALUES('','$name','$betar')";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
    }

    
    if (isset($_POST["tabort"]) and isset($_POST["id"])) {
        $id = $_POST["id"];
        $sql = 'DELETE FROM `elefanter` WHERE id="' . $id . '"';
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
 <link href="Bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <link href="Bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="Bootstrap/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>

        <div id="wrapper">
  

        <div  id="clouds">
             <h1 class="center-block"  >Elefant-försäljning-och-handelssida</h1>
             <div id="forms">
                 <form method="post">
            Elefantnamn: <input type="text" name="namn"><br>
            Har betar?: <input type="text" name="betar"><br><br>
            <input type="submit" value="Lägg till" name="add">
            <br>
             </form>
</div>
<!--            <input type="submit" value="Ta bort" name="tabort">-->

       
            
          
            
             
             
             
             
             <div class=" x1">

                <img src="elefanten.png" alt="123">

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
            

          
        

        <br>
        
        <!--Start of collapse-->
        <div class="container">
        <div id="row" >
                
                <div class="panel-group"   id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <h2 style="text-align: center;">Elefantlista</h2>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
          
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
          
        
          
       

      </div>
    </div>
  </div>
</div>
           
  </div>
            <!--End of accordion-->
            
            
</div>
           
 
        
        <form method="post">
            Ta bort elefantnummer: <input type="text" name="id"><br>
            <input type="submit" value="Ta bort" name="tabort">
            
            
        </form>

</div>
    </body>
</html>
    