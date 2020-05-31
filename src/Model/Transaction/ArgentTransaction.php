<?php


    require('src/Model/Entity/Argent.php');
    require_once('config/database.php');
    
    class ArgentTransaction extends Argent { 

        public function update(){
            $conn= new connexion();
            $query= $conn->pdo->query("SELECT total FROM argent");
            $res= $query->fetch();

            if(!$res) {
                $total=10000;
                $query2= $conn->pdo->query("INSERT INTO argent(total) VALUES('$total')");
            } else {
                $somme= $this->getTotal(); 
                $totalS= $res['total'] + $somme;   
                $query3= $conn->pdo->query("UPDATE argent SET total='$totalS'");  
            }  
        }

        public function show(){
            $conn= new connexion();
            $query= $conn->pdo->query("SELECT total FROM argent");
        return $query->fetch();
        }

    }