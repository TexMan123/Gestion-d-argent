<?php

    require('src/Model/Transaction/DepenseTransaction.php');

    class DepenseController {

        public function addDepense() {
            $depense = new DepenseTransaction();
            if(isset($_POST['b1'])) {
                $depense->setNom($_POST['nom']);
                $depense->setPrix($_POST['prix']);
                $depense->setDate($_POST['dates']);
                $depense->add();
               
            }
        }

    }