<?php
use yii\helpers\Url;

$this->title="Gano perdio";
?>
<div class="container container-ribbon">

<!-- Premio contenedor -->
	<div class="js-premio-contenedor" style="text-align:center">
		<div class="premio js-premio-ajax">
			<div class="gano-btn">
				<h3>Gano</h3>
			</div>
			<div class="perdio-btn">
				<h3>Perdio</h3>
			</div>
		</div>
		<a class="btn btn-primary" href="<?=Url::base()?>">Finalizar</a>
	</div>
	<!-- Fin premio contenedor-->

</div>
