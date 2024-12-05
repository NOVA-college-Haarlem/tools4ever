<?php

require 'database.php';

$sql = "SELECT * FROM tools";

$result = mysqli_query($conn, $sql);

$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($tools);
// die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
   

    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Prijs</th>
                <th>Merk</th>
                <th>Categorie</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tools  as $tool): ?>
                
             <tr>
                <td><?php echo $tool['tool_name'] ?></td>
                <td><?php echo $tool['tool_price'] ?></td>
                <td><?php echo $tool['tool_brand'] ?></td>
                <td><?php echo $tool['tool_category'] ?></td>
                <td>
                    <a href="tools_detail.php?id=<?php echo $tool['tool_id'] ?>">Detail bekijken</a>
                </td>
               
             </tr>
             <?php endforeach;?>
             <a href="tools_create.php">Maak tool</a>
             
        </tbody>
    </table>


</body>
</html>
