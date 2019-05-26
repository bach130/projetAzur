<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire AjoutVol  </title>
    </head>
    <body>
        <form method="post" action = "<?php echo base_url(); ?>Controleur_Client/login_validation">
            <div class="form_group">
                <label>Entrez Username</label>
                <input type="text" name="username" class="form-control"/>
                <span class="text danger" ><?php echo form_error('username');?></span>
            </div>
            <div class="form_group">
                <label>Entrez PassWord</label>
                <input type="password" name="password" />
                <span class="text danger" ><?php echo form_error('password');?></span>
            </div>
            <div class="form_group">
                
                <input type="submit" name="insert" value="Login" class="btn btn-info" />
                <?php echo $this->session->flashdata('error');?>
            </div>
                      
        </form>


    </body>
</html>