<?php
    require('src/Model/Transaction/ListeTransaction.php');
    require_once('config/utilitaire.php');

    class ListeController {

        public function showDepenseDay(){
            $title="Liste";
            $liste= new ListeTransaction();
            $day= $liste->showDay();
            render('liste', ['day' => $day, 'title'=>$title]);
        }

        public function showDepenseAll(){
            $title="Liste";
            $liste= new ListeTransaction();
            $all= $liste->showAll();
            render('liste', ['all' => $all, 'title'=>$title]);
        }
    }