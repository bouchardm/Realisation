<div class="medium-12 columns">
	<h3>Messages</h3>

	
	
	<div class="panel">
		<?php  if (isset($success)) { ?>
		<div data-alert id="fade" class="alert-box success radius">
			 Le message a été supprimé
			 <a href="#" class="close">&times;</a>
		</div>
		<?php } else if (isset($fail)) { ?>
		<div data-alert id="fade" class="alert-box warning radius">
			Une erreur s'est produit lors de la suppression.
			<a href="#" class="close">&times;</a>
		</div> 
		<?php } ?>
		
		
		<?php if (isset($aucunMessage)) { ?>
			Il n'y a pas de message!
		<?php } ?>
		<?=$listMessage?>

		<div class="row">
			<br />
				<?=$btnPrecedent?>
				<?=$btnSuivant?>
				
		</div>
	</div>
	
	<script>
		$(document).ready(function(){
			$("#fade").fadeOut(1500,function(){
			});
		});
	</script>
	
</div>