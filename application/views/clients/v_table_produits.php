<div class="row">
  <div class="col-md-9 col-lg-offset-1">
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Produit</th><th>Type</th><th>Quantité commandée</th

        </tr>
    </thead>
    <tbody>
        <?php if($produits != null): ?>
            <?php foreach ($produits as $p): ?>
                <tr>
                <td>
                    <?php echo $p->libelle; ?>
                </td>
                <td>
                    <?php echo $p->type; ?>
                </td>
                <td>
                    <?php if(($p->poids_piece)=="poids"): ?>
                        <?php echo $p->qte_Commandee." Kg"; ?>
                    <?php else: ?>
                        <?php if(($p->qte_Commandee)==1): ?>
                            <?php echo (int)($p->qte_Commandee)." unité"; ?>
                        <?php else: ?>
                           <?php echo (int)($p->qte_Commandee)." unités"; ?>
                        <?php endif ?>  
                    <?php endif ?> 
                </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
<div class="center">
    <a href="<?= site_url('/commande_c/afficherCommande');?>">Retour commandes</a>
</div>
</div>
</div>
