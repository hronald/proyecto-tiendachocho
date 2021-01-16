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
    element: "#ayuuser",
    title: "Sistema de ayuda   ",
    content: "Ingrese el usuario: usuario",
    placement: 'right',
    orphan: true            
	},
  {
    element: "#ayupassword",
    title: "Sistema de ayuda  ",
    content: " Ingrese el password: usuario",
    placement: 'right',
    orphan: true            
  },
{
    element: "#ayuiniciar",
    title: "Sistema de ayuda    ",
    content: "Click iniciar para iniciar la sesion",
    placement: 'right',
    orphan: true            
  },


 
];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function Ayuda1(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};

