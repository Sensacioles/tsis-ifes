<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo sobre condicionais</title>
</head>
<body>
    <?php
        $day_pic='<img src="images/day.png" style="width:1000px;">';
        $dawn_pic='<img src="images/dawn.png" style="width:1000px;">';
        $night_pic='<img src="images/night.png" style="width:1000px;">';
        $datetime=new DateTime("now", new DateTimeZone("America/Sao_Paulo")); /* Para testar outras timezones: "Asia/Tokyo" "America/Sao_Paulo" "Europe/London"*/
        $hora=$datetime->format('H');
        if($hora>=0 && $hora<=12){
            echo "<h1>Bom dia!</h1>";
            echo $day_pic;
        }
        elseif($hora>12 && $hora<18){
            echo "<h1>Boa tarde!</h1>";
            echo $dawn_pic;
        }
        elseif($hora>=18 && $hora<=24){
            echo "<h1>Boa noite!</h1>";
            echo $night_pic;
        }
    ?>
</body>
</html>