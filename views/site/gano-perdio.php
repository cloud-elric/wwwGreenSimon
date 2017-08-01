<?php
use yii\helpers\Url;

$this->title="Gano perdio";
?>
<style>
.jqp-controls{
	display: none !important;
	visibility: none !important;
}
</style>
<div class="container container-ribbon">
	<img id="imagen-puzzle" src="../images/img_avatar2.png" alt="imagen" class="jqPuzzle" height="500" width="500"/>
	<a id="js_comenzar" href="#">Comenzar</a>
</div>

<script type="text/javascript"> 
	$(document).ready(function() {
		var settings = { 
			rows: 3,                    // number of rows [3 ... 9] 
			cols: 3,                    // number of columns [3 ... 9] 
			hole: 9,                   // initial hole position [1 ... rows*columns] 
			shuffle: false,             // initially show shuffled pieces [true|false] 
			numbers: true,
			control: { 
                toggleNumbers: false, 
                counter: false, 
                timer: true 
			},
			success: { 
                callback: function(results) {
					var count = $("#imagen-puzzle input").val();
					//swal("Good job!", "Tu tiempo fue de "+count+" segundos", "success");
					swal({
						title: "Buen trabajo!!",
						text: "Tu tiempo fue de "+count+" segundos!",
						type: "success",
						showCancelButton: true,
						confirmButtonColor: "#DD6B55",
						confirmButtonText: "Verificar premio",
						closeOnConfirm: false
						},
						function(){
							//window.location.href = "<?=Url::base()?>/site/ganaste";
							$.ajax({
								url: "<?=Url::base()?>/site/guardar-tiempo",
								data: {token: "<?= $token?>", tiempo: count},
								type: "POST",
								success: function(resp){
									if(resp.status == "success"){
										window.location.href = '<?=Url::base()?>/site/premios?token='+'<?= $token ?>';
									}
								}
							});
						}
					);
                } 
            }
		}

		var myTexts = { 
            shuffleLabel:           'Comenzar!', 
            toggleOriginalLabel:    'Original!', 
        };
		$('#imagen-puzzle').jqPuzzle(settings, myTexts); // apply to all images 


		$("#js_comenzar").on("click", function(){
			$(".jqp-controls>a").trigger("click");
		});
	}); 
</script>