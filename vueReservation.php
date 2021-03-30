<?php $this->titre = "Reservation";?>

<section>
    <h2>Ensemble des pots de miel</h2>
    <table id='pot'>
        <tr>
            <td>Pot</td>
            <td>Prix</td>
            <td>Description</td>
            <td>Reserver</td>
        </tr>
        <?php foreach ($miels as $miel): ?>
            <tr>
                <td><?=$miel['titre']?></td>
                <td><?=$miel['date']?></td>
                <td><?=$miel['contenu']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</section> 