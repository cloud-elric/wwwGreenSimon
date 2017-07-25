<?php
use yii\helpers\Url;

$this->title="Gano perdio";
?>
<div class="container container-ribbon">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor" style="text-align:center">
		<div class="premio js-premio-ajax">
			<a href="<?=Url::base()?>/site/usuario-gano?token=<?=$token?>" class="gano-btn">
				<h3>Gano</h3>
			</a>
			<a href="<?=Url::base()?>/site/index" class="perdio-btn">
				<h3>Perdio</h3>
			</a>
		</div>
		
	</div>
	<!-- Fin premio contenedor-->

</div>
