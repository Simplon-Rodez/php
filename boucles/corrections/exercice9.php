<?PHP

/**
* Creer un script permettant de creer plusieurs rectangles de tailles differentes
* et placer y des ronds a l'interieur de couleur differentes.
* Creer un formulaire demandant le nombre de carre ainsi que le nombre de rond par rectangle.
*/

$nb_square = 0;
$nb_circle = 0;
$has_errors = false;

if (isset($_POST['submit'])) {
    if (empty($_POST['nb-square'])) {
        $has_errors = true;
    } else {
        $nb_square = $_POST['nb-square'];
    }
    
    if (empty($_POST['nb-circle'])) {
        $has_errors = true;
    } else {
        $nb_circle = $_POST['nb-circle'];
    }
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Des carrés</title>

    <style>
        .canvas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            align-content: space-between;
            margin: 20px;
            min-height: 500px;
            padding: 10px;
            background: rgba(0,0,0,.1);
        }
        .square {
            position: relative;
            border: 1px solid pink;
        }
        .circle {
            position: absolute;
            border-radius: 50%;
        }
        .circle:nth-child(4n) {
            background: FireBrick;
        }
        .circle:nth-child(4n+1) {
            background: CornflowerBlue;
        }
        .circle:nth-child(4n+2) {
            background: DarkGray;
        }
        .circle:nth-child(4n+3) {
            background: DarkOrchid;
        }
    </style>
</head>
<body>
    <h1>Des carrés dans des ronds</h1>
    <form method="post">
        <label for="nb-square">Nombre de carrés <abbr title="Champ obligatoire">*</abbr></label>
        <input type="number" id="nb-square" name="nb-square" required value="<?php echo $nb_square; ?>">
        <label for="nb-circle">Nombre de ronds <abbr title="Champ obligatoire">*</abbr></label>
        <input type="number" id="nb-circle" name="nb-circle" required value="<?php echo $nb_circle; ?>">
        <input type="submit" name="submit" value="Changer">
    </form>
    
    <div class="canvas">
    <?php if($has_errors) {
        echo '<p>Tu n\'as pas mis de valeurs dans les champs petit sacripant !</p>';
    } else {
        // Append squares
        for ($i=0; $i<$nb_square; $i++) {
            $square_width=rand(100,400);

            echo '<div class="square" style="width:' . $square_width . 'px;height:' . $square_width . 'px;">';

            // Append circles in each square
            for ($j=0; $j<$nb_circle; $j++) {
                $circle_rad=rand(10,40);
                $circle_top=rand(0,$square_width - $circle_rad);
                $circle_left=rand(0,$square_width - $circle_rad);

                echo '<div class="circle" style="width:' . $circle_rad . 'px;height:' . $circle_rad . 'px;top:' . $circle_top . 'px;left:' . $circle_left . 'px;"></div>';
            }

            echo '</div>';
        }
    }
    ?>
    </div>
</body>
</html>