<?php
   
    require('src/Model/Transaction/ArgentTransaction.php');
    require_once('config/utilitaire.php');

    class IndexController {

        public function showAll(){
            $title= "Acceuil";
            $somme= new ArgentTransaction();
            $sommeTotal= $somme->show();
            render('index', [
                'title'=>$title,
                'sommeTotal'=>$sommeTotal
            ]);
        }

        public function updateArgent() {
            $total = new ArgentTransaction();
            $total->setTotal(10000);
            $total->update();
            header('Location:index.php');        
        }

    }