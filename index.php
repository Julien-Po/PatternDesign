<?php
// require_once('./CompteCourant.php');
// require_once('./CompteEpargne.php');
// require_once('./CompteInvestissement.php');

require_once('./CompteFactory.php');

$client1 = new CompteFactory();

$client1->createCompteCourant('Titouan', 25871, 'euros', false, 51356);



// $client1 = new CompteCourant('Titouan', '10', 'euros', false, 24685415);
//var_dump($client1);
// echo $client1->deposerArgent('10', '50');

// $client2 = new CompteEpargne('René-Patrick', '310', 'yen', true, 1521415618);

// echo $client2->retirerArgent('110', '310');

// $client3 = new CompteInvestissement('Sileas de la Molfès', 784128, 'roupies', true, 654185);

// echo $client3-> afficherSolde('784128' , 'roupies');

// $client4 = new CompteBancaire('Henri Golri', '6523', 'Ecus', false, 78654184);

// echo $client4-> transfererArgent('6523' , '369' , '7891');

// $instance1 = $client1::getInstance('Titouan', '10', 'euros', false, 11);

// $instance2 = $client2::getInstance( 'René-Patrick', 310, 'yen', true, 11);
// var_dump( $instance1);
// var_dump($instance2);

?>

