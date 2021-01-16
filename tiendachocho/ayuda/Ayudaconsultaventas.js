/*
* @Autor Gerardo Cocom
* fecha: 09-05-2020
*@brief: Contiene las funciones e la ayuda al archivo login.php
*/
 
var pasos =[
 {
    title: "Bienvenido al Sistema de Ayuda ",
    content: "Por favor siga las Instrucciones para un registro exitoso",
    orphan: true
  },
	{
    element: "#ayudafolio",
    title: "Sistema de ayuda   ",
    content: "Ingrese el folio de la venta para la consulta",
    placement: 'right',
    orphan: true            
	},
 {
    element: "#ayudaconsulta",
    title: "Sistema de ayuda   ",
    content: "Clic para consultar",
    placement: 'right',
    orphan: true            
  },
{
    element: "#ayudalimpiar",
    title: "Sistema de ayuda   ",
    content: "Clic para limpiar los campos",
    placement: 'right',
    orphan: true            
  },
 
];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function Ayudaconsultaventas(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};

