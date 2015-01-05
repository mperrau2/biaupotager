<div class="row">
  <div class="col-md-9 col-lg-offset-1">
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Libelle</th><th>Type Produit</th><th>Prix</th><th>Poids/Piece</th><th>Disponibilite</th>
        </tr>
    </thead>
    <tbody>
        <?php if($produit != null): ?>
            <?php foreach ($produit as $p): ?>
                      
                <tr><td>
                <?php echo $p->lib_produit; ?>
                </td><td>
                <?php echo $p->lib_type; ?>
                </td><td>
                <?php echo ($p->prix."€"); ?>
                </td><td>
                <?php echo $p->poids_piece; ?>
                </td><td>
                <?php if(($p->disponibilite)==1): ?>
                    <?php echo "Disponible"; ?>
                <?php else: ?>
                    <?php echo "Indisponible"; ?>
                <?php endif ?>
                </td>
                    <!--<td>
			        <a href="<?//= site_url('/article_c/formModifierArticle/'.$r->id);?>">modifier</a>
			        <a href="<?//= site_url('/article_c/supprimerArticle/'.$r->id);?>">supprimer</a>
		            </td>
		            -->
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
</div>
