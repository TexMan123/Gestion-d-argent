<section class="heads">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <!-- Debut If  !-->
                <?php if($_GET['task'] === "showDepenseDay") : ?>
                    <h1 class="text-center font-bold">Liste des dépenses aujourd'hui le 
                    <?php
                        setlocale(LC_ALL, 'fr_FR', 'fra_FRA');
                        echo strftime('%A %e %B %Y', strtotime(date("Y-m-d")));
                        
                     ?></h1> <br> 
                <?php else : ?>
                    <h1 class="text-center font-bold">Liste de toutes les dépenses</h1> <br> 
                <?php endif ?>  
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto tableL">
            <?php if($_GET['task'] === "showDepenseDay") : ?>
                <table id="tab" class="table table-striped">
                    <thead>
                        <tr class='bg-warning'>
                            <td class="text-center td-success"><b>Nom</b></td>
                            <td class="text-center"><b>Prix</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total=0 ?>
                        <?php foreach ($day as $days) : ?>
                            <?php $total += $days['prix']; ?>
                            <tr class="bg-success" style="color:white">
                                <td class="text-center"><?= $days['nom'] ?></td>
                                <td class="text-center"><?= $days['prix'] ?> Ar</td>
                            </tr>
                        <?php endforeach ?>   
                    </tbody>
                </table>         
                <b class="text-center" id="tdTotal">Total: <?= $total ?> Ar</b>

            <?php else : ?>
                <table id="tab" class="table table-striped">
                    <thead>
                        <tr class='bg-warning'>
                            <td class="text-center"><b>Nom</b></td>
                            <td class="text-center"><b>Prix</b></td>
                            <td class="text-center"><b>Date</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total=0 ?>
                        <?php foreach ($all as $alls) : ?>
                            <?php $total += $alls['prix']; ?>
                            <tr class="bg-success" style="color:white">
                                <td class="text-center"><?= $alls['nom'] ?></td>
                                <td class="text-center"><?= $alls['prix'] ?> Ar</td>
                                <td class="text-center"><?= $alls['dates'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <b class="text-center" id="tdTotal">Total: <?= $total ?> Ar</b>
            <?php endif ?>
        </div>
    </div>
</div>
    