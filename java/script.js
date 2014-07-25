$(function(){

	$('.festivales').on('click', agrandar);

	//FUNCIONES

	function agrandar(num){

		limpiar();

		var dato = num.currentTarget.id;

		var tamano_g = {
			height: '30em'
		};
		
		$("#"+dato).css(tamano_g);
	};


	function limpiar(){

		var tamano_p = {
			height: '2.8em'
		};

		$(".festivales").css(tamano_p);
	};

	$('#mask').cycle({fx: 'turnDown', speed: 500, timeout:  7000, pager: '#menu'});

});