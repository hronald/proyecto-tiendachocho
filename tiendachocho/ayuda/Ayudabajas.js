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
    element: "#ayudaclave",
    title: "Sistema de ayuda   ",
    content: "Ingrese la clave del producto a borrar",
    placement: 'right',
    orphan: true            
	},
{
    element: "#ayudaborrar",
    title: "Sistema de ayuda   ",
    content: "Clic para borrar el producto elegido",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudalimpiar",
    title: "Sistema de ayuda   ",
    content: "Clic para limpiar el campo",
    placement: 'right',
    orphan: true            
  },
 
];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function Ayudabajas(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};

