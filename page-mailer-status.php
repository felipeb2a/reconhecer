<?php
	include_once('template/header.php');
?>
			<div class="bloco">
	            <div class="container" style="">
		            <div class="container" style="background: #fff;border-radius: 10px;box-shadow: 0 15px 25px rgba(0,0,0,0.2);width: 70%;height: auto;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">
			                <div class="block-heading" style="padding: 50px;">
			                    <h2 class="text-info" align="center">Status Envio Selo</h2>
			                </div>

			                <div class="row justify-content-center">
			                    <div class="col-md-8 feature-box"><i class="text-success icon-envelope-letter icon"></i>
		                            <h3 class="text-success">Selos enviados com sucesso!</h3>
		                             	<?php echo $EnvioEmailSucesso; ?>
		                        </div>

		                        <div class="col-md-8 feature-box"><i class="text-danger icon-envelope-letter icon"></i>
		                            <h3 class="text-danger">Selos com falha no envio!</h3>
		                             	<?php echo $EnvioEmailFalha; ?>
		                        </div>
			                </div>
		            </div>
		        </div>
		    </div>
	    </section>        
<?php
	include_once('template/footer.php');
?>