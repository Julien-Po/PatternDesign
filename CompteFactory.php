<?php
require_once('./CompteCourant.php');
require_once('./CompteEpargne.php');
require_once('./CompteInvestissement.php');
class CompteFactory 
{
       public function createCompteCourant($titulaire, $solde, $devise, $premium, $numeroDeCompte)
    {
        new CompteCourant($titulaire, $solde, $devise, $premium, $numeroDeCompte);
    }
}
?>