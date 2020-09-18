<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';

    echo"<h2>Before using the create method</h2>";
    echo"<p>Bird count: " . Bird::create() . "</p>";
    echo"<p>Flycatcher count: " . YellowBelliedFlyCatcher::create() . "</p>";
    echo"<p>Kiwi count: " . Kiwi::create() . "</p>";

    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $bird2 = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $bird3 = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';


    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $fly_catcher2 = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';
    
    $fly_catcher3 = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';


    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>"; 

    $kiwi2 = new Kiwi;
    $kiwi2->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>"; 

    $kiwi3 = new Kiwi;
    $kiwi3->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>"; 
    
    echo"<p>Bird count: " . Bird::create() . "</p>";
    echo"<p>Flycatcher count: " . YellowBelliedFlyCatcher::create() . "</p>";
    echo"<p>Kiwi count: " . Kiwi::create() . "</p>";

?>
    </body>
</html>

