<style>
table{
    border:1px solid #999;
    padding:10px;
}

table td{
    padding:5px;
    text-align:center;
    border:1px solid #ccc;
}

table tr:nth-child(1),
table td:nth-child(1){
    background: #bbb;
}

</style>


<?php

for($i=1; $i<=9; $i++){     //tr
    for($j=1; $j<=9; $j++){     //td
        echo $j . 'x' . $i . '=' . $i * $j .' '; 
    }
    echo "<br>"; 
}

echo "<hr>";

$x = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$y = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach($x as $valueX){     //tr
    foreach($y as $valueY){     //td
        echo $valueX . 'x' . $valueY . '=' . $valueX * $valueY .' '; 
    }
    echo "<br>";
}

echo "<hr>";

echo "<table border='1'>";
for($i=1; $i<=9; $i++){    
    echo "<tr>";
    for($j=1; $j<=9; $j++){
        echo "<td>". $j . 'x' . $i . '=' . $i * $j ."</td>"; 
    }
    echo "</tr>"; 
}
echo "</table>";

echo "<hr>";

echo "<table border='1'>";
for($i=0; $i<10; $i++){
    if($i==0){
        echo "<tr><td></td>";
    } else{
        echo "<tr><td>". $i ."</td>";
    }  
    for($j=1; $j<=9; $j++){
        if($i==0){
            echo "<td>". $j ."</td>";
       } else{ 
            echo "<td>". $i * $j ."</td>"; 
       }
    }
    echo "</tr>"; 
}        
echo "</table>";

echo "<hr>";



?>