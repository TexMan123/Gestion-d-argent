<section class="heads">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h1 class="text-center font-bold">Somme actuel</h1> <br>
                <table class="text-center" id="tableH2">
                    <tr>
                        <td>
                            <?php if(!$sommeTotal['total']) : ?>
                                <h2>0</h2>
                            <?php else : ?>
                                <h2 id="sommeTitre"><?= $sommeTotal['total'] ?> </h2>
                            <?php endif ?>
                        </td><td>
                            <h2 id="Ar">Ar</h2>
                        </td>
                    </tr>
                </table>  <br>
                <a href="index.php?controller=IndexController&task=updateArgent" class="btn btn-success btn-height">  Ajouter 10.000Ar à mon compte </a> 
                   
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <br>
                <div id="AjoutDepense">
                    <h2> Ajouter une dépense </h2> <br>

                    <form action="index.php?controller=DepenseController&task=addDepense" method="POST">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom"> 
                        <label for="somme">Prix</label>
                        <input type="text" class="form-control" name="prix" id="prix">
                        <label for="dates">Date</label>
                        <input type="date" class="form-control" name="dates" value="<?= date("Y-m-d") ?>"> <br>
                        <div id="alert">Votre somme total actuel est insuffisant.</div> <br>
                        <button class="btn btn-primary" name="b1" id="b1">Ajouter</button>
                    </form>

                </div> <br>
                <div class="text-center">
                    <a href="index.php?controller=ListeController&task=showDepenseDay" class="btn btn-warning btn-voir"> Voir les dépenses aujourd'hui</a>
                    <a href="index.php?controller=ListeController&task=showDepenseAll" class="btn btn-warning btn-voir"> Voir toutes les dépenses</a>
                </div>    
            </div>
        </div>
    </div>
</section>
