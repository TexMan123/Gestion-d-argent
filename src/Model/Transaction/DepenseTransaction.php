<?php

    require('src/Model/Entity/Depense.php');
    require_once('config/database.php');

    class DepenseTransaction extends Depense {

        public function add(){
            $conn= new connexion();
            $nom= $this->getNom();
            $prix= $this->getPrix();
            $date= $this->getDate();

            $query2= $conn->pdo->query("SELECT total FROM argent");
            $res=  $query2->fetch();
            if($res['total'] > $prix) {
                $total= $res['total'] - intval($prix);
                $query2= $conn->pdo->query("UPDATE argent SET total=$total");
                $query= $conn->pdo->query("INSERT INTO depenses(nom,prix,dates) VALUES('$nom','$prix','$date')");
                header('Location:index.php');
            } else {

                header('Location:index.php');
            }
            
            
        }

    }