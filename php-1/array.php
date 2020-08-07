<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        print_r($kids);
        echo "<br>";
        print_r($adults);

        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ;
        echo count($kids); // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        echo "</ol>";
        
        echo "Total Adults: " ;
        echo count($adults); // Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        echo "</ol>";

        echo "<h3> Soal 3 </h3>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"
            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"
            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"
            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */

        $person1 = [
            "name" => "Will Byers",
            "age" => 12,
            "aliases" => "Will the Wise",
            "status" => "Alive"
        ]; 
        $person2 = [
            "name" => "Mike Wheeler",
            "age" => 12,
            "aliases" => "Dungeon Master",
            "status" => "Alive"
        ]; 
        $person3 = [
            "name" => "Jim Hopper",
            "age" => 43,
            "aliases" => "Chief Hopper",
            "status" => "Deceased"
        ]; 
        $person4 = [
            "name" => "Eleven",
            "age" => 12,
            "aliases" => "El",
            "status" => "Alive"
        ];  

        echo "Data: <br>";  
        echo "Name:".$person1["name"], "<br>";  
        echo "Age:".$person1["age"], "<br>";  
        echo "Aliases:".$person1["aliases"], "<br>";  
        echo "Status:".$person1["status"], "<br><br>";  
  
        echo "Name:".$person2["name"], "<br>";  
        echo "Age:".$person2["age"], "<br>";  
        echo "Aliases:".$person2["aliases"], "<br>";  
        echo "Status:".$person2["status"], "<br> <br>";

        echo "Name:".$person3["name"], "<br>";  
        echo "Age:".$person3["age"], "<br>";  
        echo "Aliases:".$person3["aliases"], "<br>";  
        echo "Status:".$person3["status"], "<br><br>";

        echo "Name:".$person4["name"], "<br>";  
        echo "Age:".$person4["age"], "<br>";  
        echo "Aliases:".$person4["aliases"], "<br>";  
        echo "Status:".$person4["status"], "<br>";  

    ?>
</body>
</html>