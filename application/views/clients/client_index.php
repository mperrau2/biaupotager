<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" >
</head>
<body>

<div id="container">
    <div class="col-lg-8">
        <h1></h1>
    </div>
	<div class="col-md-4">
                <!-- Blog connexion -->
                <div class="well">
                    <div class="center">
                    	 <label>-- Coordonnées --	</label>
                         <p><strong>Prénom : </strong><?= $this->session->userdata('prenom');?></p>
        			     <p><strong>Nom :  </strong><?= $this->session->userdata('nom');?></p>
        			     <p><strong>Droit : </strong><?= $this->session->userdata('droit');?></p><hr/>
        			     <a href="">Espace client</a>
                    </div>
                    <!-- /.input-group -->
                </div>
       
		</div>
</div>

</body>
</html>
