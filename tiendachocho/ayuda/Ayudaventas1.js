/*
* @Autor Gerardo Cocom
* fecha: 09-05-2020
*/
 
var pasos =[
 {
    title: "Bienvenido al Sistema de Ayuda ",
    content: "Por favor siga las Instrucciones para un proceso exitoso",
    orphan: true
  },
	{
    element: "#ayudasucursal",
    title: "Sistema de ayuda   ",
    content: "Eliga la sucursal de la venta",
    placement: 'right',
    orphan: true            
	},
{
    element: "#ayudavendedor",
    title: "Sistema de ayuda   ",
    content: "Eliga el vendedor en turno",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaproducto",
    title: "Sistema de ayuda   ",
    content: "Eliga el producto",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaprecio",
    title: "Sistema de ayuda   ",
    content: "Eliga el precio del producto",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudacantidad",
    title: "Sistema de ayuda   ",
    content: "Ingrese la cantidad de compra",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudatipopago",
    title: "Sistema de ayuda   ",
    content: "Eliga el tipo de pago del cliente",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudacobrar",
    title: "Sistema de ayuda   ",
    content: "Click para realizar el cobro",
    placement: 'right',
    orphan: true            
  },
  {
    element: "#ayudaborrar",
    title: "Sistema de ayuda   ",
    content: "Click para limpiar los campos",
    placement: 'right',
    orphan: true            
  },
 
];
$.each(pasos, function(i, step){
  step.title += '<span class="pull-right">'+(i+1)+'/'+pasos.length+'</span>';
  var percent = parseInt(((i+1) / pasos.length) * 100);
  step.content = '<div class="pbar_wrapper"><hr class="pbar" style="width:'+percent+'%;"></div>' + step.content;
});
function Ayudaventas1(){
    var tour = new Tour({
      backdrop: true,
      storage: false,
      steps: pasos
    });
    
    tour.init();
    
    tour.restart();
    
};

