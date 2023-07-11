<main id="main">
	<section id="contact" class="contact">
<div class="container">
    <div class="hero-container" data-aos="fade-in">
		<div class="table-responsive divAdmin col-md-12">
            <h1 style="text-align:center">Objectif</h1>
		<table class="table table-bordered table-striped table-condensed" border=1px cellspacing=0>
        <tr>
            <td>idObjectif</td>
            <td>descriObjectif</td>
            
        </tr>
		
        <?php for($i=0;$i<$taille;$i++){ ?>
        <tr>
            <td><?php echo $Objectif['idObjectif_exercices'][$i]; ?></td>
            <td><?php echo $Objectif['descriObjectif'][$i]; ?></td>
             </tr>
        <?php } ?>
    	</table>
    </div>
</div>
</div>
</section>
</main>