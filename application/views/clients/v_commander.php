<div class="row">
  <div class="col-md-9 col-lg-offset-1">
  <form action="<?= site_url('/commande_c/ValiderCommande/');?>">
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Libelle</th><th>TypeProduit</th><th>Prix</th><th>Poids/Piece</th>   <th>Quantité</th>
        </tr>
    </thead>
    <tbody>
<?php $compt=1; ?>
        <?php if($articles != null): ?>
            <?php foreach ($articles as $p): ?>
            
                <?php if(($p->disponibilite)==1): ?>     
                <tr><td>
                <?php echo $p->lib_produit; ?>
                </td><td>
                <?php echo $p->lib_type; ?>
                </td><td>
                <?php echo ($p->prix."€"); ?>
                </td><td>
                <?php echo $p->poids_piece; ?>
                </td>
                <td>
                <?php if(($p->disponibilite)==1): ?>
                    <?php if(($p->poids_piece)=="poids"): ?>
                      <?php echo ' <input type="text" name="'.$compt.'qte" value="0" size="3">'; 
                      ?>
                    <?php else: ?>
                         <?php echo'<input type="number" name="'.$compt.'qte" min="0" step="1" value="0" size="2">';?>
                    <?php endif ?>
                <?php else : ?>
                <?php endif ?>
                </td> 
                <?php endif ?>
                </td>
                
                    <!--<td>
                    <a href="<?//= site_url('/article_c/formModifierArticle/'.$r->id);?>">modifier</a>
                    <a href="<?//= site_url('/article_c/supprimerArticle/'.$r->id);?>">supprimer</a>
                    </td>
                    -->
                </tr>
            <?php $compt++;endforeach ?>
        <?php endif ?>
         </tbody>
</table>

<label> Selectionner le lieu de livraison : (*)    </label>
<select  name="secteur">
<?php foreach ($libelle as $key => $value) : ?>
    <?php echo $value;?>
    <?php if($id_Secteur==$key){?>
    <option value="<?php echo $key; ?>"selected  >
    <?= $value?> </option><?php }
     else {?>
        <option value="<?php echo $key; ?> " >
    <?= $value?> </option>
    <?php }?>
<?php endforeach; ?>
</select></br>

 <p id="utilisateur_information"> * : champs obligatoires </p>



<div class="center">
   
    <input type="submit" name="utilisateur_soumettre" value="Valider Commande">
</form>
</div>
</div>
</div>
