<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="poster">
            <!-- <div class="teks">
                <?php
                    $instruction = "SIAP LIP!!!!";
                    echo $instruction;
                ?>
            </div> -->
            
            <form method="POST">
                <div class="haduh">
                    <label for="math">Math Score: </label>
                    <input type="number" name="math" class="input" required>
                </div>
                
                <div class="haduh">
                    <label for="phy">Physics Score: </label>
                    <input type="number" name="phy" class="input" required>
                </div>
                
                <div class="haduh">
                    <label for="mandarin">Mandarin Score: </label>
                    <input type="number" name="mandarin" class="input" required>
                </div>
                
                <div class="haduh">
                    <label for="anth">Anthro Score: </label>
                    <input type="number" name="anth" class="input" required>
                </div>
                
                <button type="submit" name="ave" >SUBMIT</button>
            </form>

            <div class="animation">
                <h3>AVERAGE</h3>

                <?php
                    if(isset($_POST['ave'])){
                        $math = $_POST['math'];
                        $phy = $_POST['phy'];
                        $mandarin = $_POST['mandarin'];
                        $anth = $_POST['anth'];
                        $ave = ($math + $phy + $mandarin + $anth)/4;

                        echo "<h1>$ave</h1>";

                        if($ave <= 100 && $ave > 90){
                            echo "<h1>A</h1>";
                        } elseif($ave <= 90 && $ave > 80){
                            echo "<h1>B</h1>";
                        } elseif($ave <= 80 && $ave > 70){
                            echo "<h1>C</h1>";
                        } elseif($ave <= 70 && $ave > 60){
                            echo "<h1>D</h1>";
                        } elseif($ave <= 60 && $ave >= 0){
                            echo "<h1>FAILED</h1>";
                        }
                    }
                ?>
            </div>
            

        </div>
        
    </div>
</body>
</html>