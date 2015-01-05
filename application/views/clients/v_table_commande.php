<div class="row">
  <div class="col-md-9 col-lg-offset-1">
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>#</th><th>Etat</th><th>Date de commande</th><th>Date de livraison</th><th>Secteur</th><th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php if($commande != null): ?>
            <?php foreach ($commande as $c): ?>
                <tr><td>
                <?php echo $c->id_Commande; ?>
                </td><td>
                <?php echo $c->etat; ?>
                </td><td>
                <?php echo $c->date_Commande; ?>
                </td><td>
                <?php echo $c->date_Livraison; ?>
                </td><td>
                <?php echo $c->lieu; ?>
                </td>
                <td>
			        <a href="<?= site_url('/commande_c/afficherProduits/'.$c->id_Commande);?>">Afficher les produits</a>
			        <!--<a href="<?//= site_url('/article_c/supprimerArticle/'.$r->id);?>">supprimer</a>-->
		          </td>
		            
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
</div>
