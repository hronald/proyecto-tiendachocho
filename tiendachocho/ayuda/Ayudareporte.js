/*
* @Autor Gerardo Cocom
* fecha: 09-05-2020
*@brief: Contiene las funciones e la ayuda al archivo login.php
*/
 
var pasos =[
 {
    title: "Bienvenido al Sistema de Ayuda ",
    content: "Por favor siga las Instrucciones para un proceso exitoso",
    orphan: true
  },
	{
    element: "#ayuunidad",
    title: "Sistema de ayuda   ",
    content: "Eliga la unidad para el reporte",
    placement: 'right',
    orphan: true            
	},
 {
    element: "#ayuenviar",
    title: "Sistema de ayuda   ",
    content: "Clic para obtener el reporte",
    placement: 'right',
    orphan: true            
  },
{
    element: "#ayuborrar",
    title: "Sistema de ayuda   ",
    content: "Clic para restablecer los campos",
    placement: 'right',
    orphan: true            
  },
 
];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function Ayudareporte(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};

