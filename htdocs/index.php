<doctype html>
<html>
<head>
  <title>Országok és fővárosok</title>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="bootstrap.min.css">  
</head>
<body>
  <h1>Országok és fővárosok</h1>
  <table class="table table-striped table-dark">
    <tr>
        <th>Ország</th>
        <th>Főváros</th>
    </tr>

        <?php
        require 'connect.php';
        # lekerdezés
        $sql = "SELECT * FROM `orszagok` WHERE 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // adatok kiírása
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["orszag"]. "</td><td>" . $row["fovaros"]. "</td></tr>";
        }
        } else {
        echo "Nincs találat.";
        }

        require 'close.php';
        ?>
        </table>
</body>
</html>