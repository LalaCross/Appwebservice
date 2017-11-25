$("#Miformulario").submit(function(evento){
	evento.preventDefault();
	//console.info("Activvando formulario");

var cadena=$(this).serializeArray();
//console.info(cadena);
$.ajax({
  url:"http://especialistasenlaweb.com/pruebalaura.php"
  type:"post",
  data:cadena
}).done(function(respuesta){
	$(".mensaje").html(respuesta);
   });
});