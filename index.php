<!DOCTYPE html>
<html>
<head>
    <link>
</head>
<body>
    <?php
        spl_autoload_register(function($class_name){
            include 'Classes/' . $class_name . '.php';
        });

        $charmeleon = new Charmeleon('Charmeleon');
        $pikachu = new Pikachu('Pikachu');
        echo $pikachu->getName() . "<br>";
        echo $pikachu->getType() . "<br>";
        echo $pikachu->getHealth() . " Health <br><br>";

        echo $charmeleon->getName() . "<br>";
        echo $charmeleon->getType() . "<br>";
        echo $charmeleon->getHealth() . " Health <br><br>";
        ?>
        <div class="col-8">
            <?php echo $pikachu->doAttack($charmeleon, $pikachu->attacks[0]); ?>
            <?php echo $charmeleon->doAttack($pikachu, $charmeleon->attacks[1]); ?>
        </div>
</body>
</html>