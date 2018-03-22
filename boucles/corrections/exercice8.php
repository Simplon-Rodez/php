<?PHP
/**
* Créer un echiquier de 8 cases sur 8 avec une case sur deux colorés en noir
*/
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echiquier</title>

    <style>
        .chessboard {
            display: flex;
            flex-wrap: wrap;
            margin: 20px auto;
            width: 80px;
            height: 80px;
            border: 1px solid #323232;
        }
        .chess-case {
            width: 10px;
            height: 10px;
        }
        .chess-case:nth-child(16n+2), .chess-case:nth-child(16n+4), .chess-case:nth-child(16n+6), .chess-case:nth-child(16n+8),
        .chess-case:nth-child(16n+9), .chess-case:nth-child(16n+11), .chess-case:nth-child(16n+13), .chess-case:nth-child(16n+15) {
            background: #323232;
        }
        
        .one-chess::before {
            content: '';
            width: 10px;
            height: 10px;
            box-shadow: 10px 0 0 0 #323232,
                        30px 0 0 0 #323232,
                        50px 0 0 0 #323232,
                        70px 0 0 0 #323232,
                        0 10px 0 0 #323232,
                        20px 10px 0 0 #323232,
                        40px 10px 0 0 #323232,
                        60px 10px 0 0 #323232,
                        10px 20px 0 0 #323232,
                        30px 20px 0 0 #323232,
                        50px 20px 0 0 #323232,
                        70px 20px 0 0 #323232,
                        0 30px 0 0 #323232,
                        20px 30px 0 0 #323232,
                        40px 30px 0 0 #323232,
                        60px 30px 0 0 #323232,
                        10px 40px 0 0 #323232,
                        30px 40px 0 0 #323232,
                        50px 40px 0 0 #323232,
                        70px 40px 0 0 #323232,
                        0 50px 0 0 #323232,
                        20px 50px 0 0 #323232,
                        40px 50px 0 0 #323232,
                        60px 50px 0 0 #323232,
                        10px 60px 0 0 #323232,
                        30px 60px 0 0 #323232,
                        50px 60px 0 0 #323232,
                        70px 60px 0 0 #323232,
                        0 70px 0 0 #323232,
                        20px 70px 0 0 #323232,
                        40px 70px 0 0 #323232,
                        60px 70px 0 0 #323232;
        }
    </style>
</head>
<body>
    <h1>Un échiquier</h1>

    <div class="chessboard">
        <?php for ($i;$i<64;$i++) : ?>
        <div class="chess-case"></div>
        <?php endfor; ?>
    </div>

    <div class="chessboard one-chess"></div>
</body>
</html>