<html>
    <head><h1> MINA FILMER🐳</h1>
    <a href="start.php">START</a> <--->     
    <a href="kontakt.php">Kontakt</a> <--->
        <a href="list.php">Listan🎥</a></head>
        <body><h2>I think these are the best movies made ever: 1,2,3 is best, 4 is a little bit worst, but it is good aswell🙈</h2>
        <div id="Btn">The 4 movies:</div>
        <?php 

$myFilms = array(
    "1. Gladiator" => "Greatest movie, it surely spills much blood and the swordfights are epic", 
    "2. Dr. Strange" => "Marvel makes a lot of great movies, this is just one of my favorites. Magicians fights eachother and there is very cool animations in this movie!", 
    "3. Troja" => "Well recorded movie about the Greeks that fights about Troja, a castle in the desert.", 
    "4. Braveheart" => "If you like warfare with the spirit of Scotland - Lovely movie!"
);

 function filmDesc() {
krsort($myFilms);
foreach($myFilms as $key => $value); {

    }
 }
function film($numberA, $numberB) {
    
    if ($numberA < $numberB) {
        return $numberA;
    } else {
        return $numberB;
    }
    }
       echo     "<select>";
                
                myCoolLoop(0, count($myFilms), $myFilms);
              
        echo     "</select>";

    function myCoolLoop($start, $stop, $array1) {
        $realStart = film($start, count($array1));
        $realStop = film($stop, count($array1));
        
        for ($x = $realStart; $x <= $realStop; $x++) {
            
            echo "<option value=".$array1[$x].">".$array1[$x]."</option>";
      }
    }
    echo "<button type='submit'>Check more info about this movie</button>";

      //myCoolLoop(0, 3, $myFilms);


      
?>
        
</body>
<footer><p>Min 👣 ser ut på följande sätt=</p>
    <div>nummer = 0763096174, resten kommer sen.</div>
 </footer>
    </html>
