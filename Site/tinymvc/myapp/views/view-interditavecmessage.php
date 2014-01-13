<!DOCTYPE html>
<html>
	<head>
		<title>Le coureur nordique</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?=url?>/../css/foundation.css" />


		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<style>
			hr {
				margin-top: 10px;
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>

				  	<div class="hide-for-medium-up top-bar">
						<section class="left-small">
				        	<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
				      	</section>
				   	</div>

		
				    

				    <div class="contenu">
				    	<div class="medium-9 columns">
							<h3>Interdit</h3>
					    	<div class="panel">
							<div data-alert class="alert-box warning round">
					    		Accès interdit <br /><br />
								
								<?php if (isset($erreur)) { ?>
										<?=$erreur?>
								<?php } ?>
								</div>
					    	</div>
					    </div>
				    </div>
				  <!-- close the off-canvas menu -->
				  <a class="exit-off-canvas"></a>

				</div>
	  	</div>	
	</body>
</html>