<?php

//On crée la classe que l'on appelle CompteBancaire
 abstract class CompteBancaire 
    {
        //On lui crée ses attributs, en private pour ne pas que ça soit modifié à l'extérieur de la classe
        private string $titulaire;
        private float $solde;
        private string $devise;
        private bool $premium;
        private int $numeroDeCompte;

        // On stocke nos instances ici, celles du multiton
        private static $instances = [];

        //Le construct, qui servira à initialiser les propritétés 

        public function __construct($titulaire, $solde, $devise, $premium, $numeroDeCompte)
        {
            $this->titulaire = $titulaire;
            $this->solde = $solde = 0;
            $this->devise = $devise;
            $this->premium = $premium;
            $this->numeroDeCompte = $numeroDeCompte;
        }


        //Ici, nos getter et nos setter, qui permettent respectivement d'accéder à nos données privées et de les modifier

        private function getTitulaire()
        {
            $this->titulaire;
        }

        private function setTitulaire($titulaire)
        {
            $this->titulaire = $titulaire;
        }

        private function getSolde()
        {
            $this->solde;
        }

        private function setSolde($solde)
        {
            $this->solde = $solde;
        }

        private function getDevise()
        {
            $this->devise;
        }

        private function setDevise($devise)
        {
            $this->devise = $devise;
        }

        private function getPremium()
        {
            $this->premium;
        }

        private function setPremium($premium)
        {
            $this->premium = $premium;
        }

        // La fonction prend le montant ajouté par l'utilisateur et l'ajoute au solde actuel. On affiche ensuite le nouveau solde

        public static function deposerArgent($montant, $solde)
        {
            $solde = $solde + $montant;
            echo 'Votre solde est de : ' . $solde . '<br/>';
         
        }

        //On retire le retrait du solde. Si on retire plus que ce qu'il y a sur le solde, on renvoie une erreur avec le throw

        public static function retirerArgent($montant, $solde)
        {
            $solde = $solde - $montant;
            if ( $solde < 0 ) {
                throw new Exception ("T'as cru t'étais Rotschild ? Mdrrrr");
            }else {
               echo "Compte débité, votre solde est maintenant de : " . $solde . '<br/>';
            }
        }

        //Une fonction affichant le solde. On affiche aussi la devise

        public static function afficherSolde($solde, $devise)
        {
           echo 'Vous avez ' . $solde . ' ' . $devise . '<br/>';
        }

        //Une fonction permettant de passer de l'argent d'un compte à un autre. Si on veut donner un montant plus grand que le compte
        //on renvoie une erreur

        public static function transfererArgent($solde, $montant, $autreCompte)
        {
            if ($montant > $autreCompte)
            {
                throw new Exception ("Vous n'avez pas assez pour effectuer la transaction demandée");
            } else {
                $solde = $solde + $montant;

                echo  'Vous avez maintenant : ' . $solde . '<br/>';
            }
        }

        public static function getInstance($numeroDeCompte, $titulaire, $solde, $devise, $premium)
        {
            if (!isset(self::$instances[$numeroDeCompte])) 
            {
                self::$instances[$numeroDeCompte] = new self($numeroDeCompte, $titulaire, $solde, $devise, $premium );
            }
            return self::$instances[$numeroDeCompte];
        }
    }

?>