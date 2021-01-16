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
    content: "Ingrese la clave si el producto, de lo contrario el sistema lo ingresa automaticamente",
    placement: 'right',
    orphan: true            
	},
 {
    element: "#ayudanombre",
    title: "Sistema de ayuda   ",
    content: "Ingrese el nombre",
    placement: 'right',
    orphan: true            
  },
{
    element: "#ayudamarca",
    title: "Sistema de ayuda   ",
    content: "Ingrese la marca",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaunidad",
    title: "Sistema de ayuda   ",
    content: "Ingrese la unidad",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaperecedero",
    title: "Sistema de ayuda   ",
    content: "Si es perecedero coloque si, de lo contrario coloque no",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudacantidad",
    title: "Sistema de ayuda   ",
    content: "Ingrese la cantidad",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaprecio",
    title: "Sistema de ayuda   ",
    content: "Ingrese el precio",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaenviar",
    title: "Sistema de ayuda   ",
    content: "Clic en enviar para guardar los datos",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaborrar",
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
function Ayudaaltas(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};

