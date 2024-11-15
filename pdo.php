<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{
            border-collapse:collapse;
            width:400px;
            margin:auto;
         }
         table, td{
            padding:5px 15px;
            text-align:center;
            border:1px solid black;
         }    
    </style>

</head>
<body>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from classes";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";  // Open the table tag once before starting the loop
foreach($rows as $row) {
    echo "<tr>";  // Open a new table row for each item
    echo "<td>" . $row['id'] . "</td>";   // Correctly close <td> tags
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['tutor'] . "</td>";
    echo "</tr>";  // Close the table row
}
echo "</table>";  // Close the table tag after the loop


    echo"<pre>";
    print_r($rows);
    echo "</pre>"
    ?>
</body>
</html>