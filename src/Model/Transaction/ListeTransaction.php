<?php

    require_once('config/database.php');

    class ListeTransaction {

        public function showDay() {
            $conn = new connexion();
            $query= $conn->pdo->query("SELECT * FROM depenses WHERE dates='".date('Y-m-d')."'");
            return $query->fetchAll();
        }

        public function showAll() {
            $conn = new connexion();
            $query= $conn->pdo->query("SELECT * FROM depenses");
            return $query->fetchAll();
        }
    }