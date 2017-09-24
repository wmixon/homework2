<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/styles.css");
        </style>
        <title> Map Creator </title>
    </head>
    <body id="center">
        <h1 id="center1">
            Create your very own map!
        </h1>
        <div id="main">
            <?php
                $height = array(rand(1,8),rand(1,8),rand(1,8),rand(1,8),rand(1,8),rand(1,8),rand(1,8),rand(1,8),rand(1,8),rand(1,8));
                $picName = array("gold.jpg", "water.jpg", "sky.jpg",  "dirt.jpg",  "grass.jpg");
                $columnLength = rand(5,10);
                $goldAndWater = array();
                $gold = 0;
                $water = 0;
                echo "<table cellspacing='0' cellpadding='0'>";
                for($iii = 0; $iii < 8; $iii++){
                    echo "<tr style='margin=0'>";
                    for($ii = 0; $ii < 10; $ii++){
                        if ($iii >= $height[$ii]){
                            if($iii == ($height[$ii])+4){
                                $ran = rand(0,1);
                                echo "<td><img src='img/" . $picName[$ran] . "'/></td>";
                                array_push($goldAndWater, $ran);
                            }
                            else{
                                echo "<td><img src='img/dirt.jpg'/></td>";
                            }
                        }
                        else if($iii == ($height[$ii])-1){
                            echo "<td><img src='img/grass.jpg'/></td>";
                        }
                        else{
                            echo "<td><img src='img/sky.jpg'/></td>";
                        }
                    }
                echo "</tr>";
                }
                echo "</table>";
                
                $test;
                foreach($goldAndWater as $value){
                    $test = array_pop($goldAndWater);
                    if($test == 0){
                        $gold++;
                    }
                    else{
                        $water++;
                    }
                }
                echo "<h2>Gold: " . $gold . " Water: " . $water . "</h2>";
                echo "<h3>Win: " . (array_sum($height) * $gold)/($water+.01) . " points!</h3>";
            ?>
            <form>
                <input type="submit" value="Generate!"/>
            </form>
        <br>
        <br>
        <div id="footer">
            <footer>&copy; Mixon 2017. <br/> Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br/>
        <img src="img/csumb-logo.png" alt="CSUMB Logo" /></footer>
        </div>
        
    </body>
</html>