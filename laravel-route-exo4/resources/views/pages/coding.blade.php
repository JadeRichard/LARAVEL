<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($prenom as $key => $value) {
            print $value . " ";
        };

        // print $personnes->get_props();

        foreach($personnes as $key => $value) {
            if($value->age > 18){
                print $value->prenom . " " . $value->nom . " est majeur. " . "\n";
            } else {
                print $value->prenom . " " . $value->nom . " est mineur. " . "\n";
            }
        }


    
        ?>
  

</body>
</html>