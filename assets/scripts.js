 $(document).ready(function(){


    $('#tb-reporte-ven').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'excelHtml5',
            title: 'Listado De Ventas',
            exportOptions: {
              columns: [0,1,2,3,4,5,6]
            }
          },
          {
            extend: 'pdfHtml5',
            title: 'Listado De Ventas',
            exportOptions: {
              columns: [0,1,2,3,4,5,6]
            } 
          },
          {
            extend: 'print',
            title: 'Listado De Ventas',
            exportOptions: {
              columns: [0,1,2,3,4,5,6]
            }
          },
        ],
        "responsive": true, 
      "lengthChange": false,
       "autoWidth": false,
       "language": {
           
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }

    } );

    $('#tb-reporte-cat').DataTable( {
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'excelHtml5',
          title: 'Listado De Categorias',
          exportOptions: {
            columns: [0,1,2,3]
          }
        },
        {
          extend: 'pdfHtml5',
          title: 'Listado De Categorias',
          exportOptions: {
            columns: [0,1,2,3]
          } 
        },    {
          extend: 'print',
          title: 'Listado De Categorias',
          exportOptions: {
            columns: [0,1,2,3]
          }
        },
      ],
      "responsive": true, 
    "lengthChange": false,
     "autoWidth": false,
     "language": {
         
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          },
      }

  } );

  $('#tb-reporte-clien').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'excelHtml5',
        title: 'Listado De Clientes',
        exportOptions: {
          columns: [0,1,2,3,4,5,6]
        }
      },
      {
        extend: 'pdfHtml5',
        title: 'Listado De Clientes',
        exportOptions: {
          columns: [0,1,2,3,4,5,6]
        }
      },
      {
        extend: 'print',
        title: 'Listado De Clientes',
        exportOptions: {
          columns: [0,1,2,3,4,5,6]
        }
      },
    ],
    "responsive": true, 
  "lengthChange": false,
   "autoWidth": false,
   "language": {
       
        "zeroRecords": "No se encontraron resultados en su busqueda",
        "searchPlaceholder": "Buscar registros",
        "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
        "infoEmpty": "No existen registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    }

} );
$('#tb-reporte-prod').DataTable( {
  dom: 'Bfrtip',
  buttons: [
    {
      extend: 'excelHtml5',
      title: 'Listado De Productos',
      exportOptions: {
        columns: [0,1,2,3,4,5,6]
      }
    },
    {
      extend: 'pdfHtml5',
      title: 'Listado De Productos',
      exportOptions: {
        columns: [0,1,2,3,4,5,6]
      }
    },
    {
      extend: 'print',
      title: 'Listado De Productos',
      exportOptions: {
        columns: [0,1,2,3,4,5,6]
      }
    },
  ],
  "responsive": true, 
"lengthChange": false,
 "autoWidth": false,
 "language": {
     
      "zeroRecords": "No se encontraron resultados en su busqueda",
      "searchPlaceholder": "Buscar registros",
      "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
      "infoEmpty": "No existen registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "search": "Buscar:",
      "paginate": {
          "first": "Primero",
          "last": "Último",
          "next": "Siguiente",
          "previous": "Anterior"
      },
  }

} );

   $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false,
       "autoWidth": false,
       "language": {
           
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }

    });
  
  }); 

    $('.eliminar').click(function(e){
       e.preventDefault();
    
        Swal.fire({
            title: 'Estas Seguro Eliminar esta CATEGORIA?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showDenyButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrar!',
            denyButtonText: `Cancelar`,
          }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    title: 'Borrado correctamente',
                    showConfirmButton: false,
                    timer: 1500
                  }).then(() => {
                   
              $.ajax({
                url: $(this).attr("href"),
                type: $(this).attr("method"),
                success: function(){
                    location.reload();
                }
              });
            }) 
                
            }
            else if (result.isDenied) {
                Swal.fire('Accion Realizada con exito', '', 'info')
              }
          
            
          })
        });
       
 

        $("#comprobantes").on("change",function(){// seleccionado el select Comlrovante  y verificar si hay algun cambio "change"

        var opcion=$(this).val(); //recuperar datos del value
         data_comprobante = opcion.split("*"); //separando la informacion del value datos[0]

          if(opcion =! ''){

           $("#idcomprobante").val(data_comprobante[0]);//asiganmaos los datos recuperados
           $("#igv").val(data_comprobante[2]);//asiganmaos los datos recuperados
           $("#serie").val(data_comprobante[3]);//asiganmaos los datos recuperados
           $("#numero").val(gen_num(data_comprobante[1]) );//generamos numeros con la funcion gen_num
        
         } else{
          $("#idcomprobante").val(null);
          $("#igv").val(null);
          $("#serie").val(null);
          $("#numero").val(null);
         }
         sumar();

        })

        $(document).on("click",("#btn-check"),function(){ //elejir cliente
           cliente=$(this).val(); //capturamos infomacion del cliente
           cliente_info=cliente.split("*");//recuperando las palabras separadas por *
        
            $("#idcliente").val(cliente_info[0]); //campo oculto  dando  al value del id_cliente
           $("#cliente").val(cliente_info[1]);//campo   dando al  value del nombre_clioente
           $("#modal-default").modal("hide"); //seleccionando modal  y cerrando
 
        })
      
        $("#producto").autocomplete({ // jquery -ui - seleccionando el input productos por el id
          source: function(request,response){ // source: informacion que se mostrara al escribir
            $.ajax({ // cosultado a la base de datos
              url: "getproductos",//controlador: movimietos/getproductos
              type: "post", // 
              dataType: "json", // tipo de dato que sera devuelto
              data: {valor: request.term},//data: es lo que enviaremos por el form--- request.term: recuperar la info que estamos escribiendo
              success: function(data){ // cuando termine 
                response(data);
              }
            });
          },
          minLength: 2, //minimo dwe caracteres para que se active las sujerencias
          select: function(event,ui){// cuando seleccionamos una sujerencia--
            datos=ui.item.id+"*"+ui.item.codigo+"*"+ui.item.label+"*"+ui.item.precio+"*"+ui.item.stock;// objeto iu -item , guardamos informacion de los productos que retrona desde el metodo get productos
            $("#btn-agregar").val(datos);
          },

        });
        $("#btn-agregar").on("click",function(){ //releccionando el boton agregar  producto
          datos_producto=$(this).val(); //recuperando la informacion del boton 
          if(datos_producto!= ''){
            info_producto=datos_producto.split("*");//separandao datos captados 
            html ="<tr>";//imprimendo filas ques eran agrefadas
            html +="<td>"+info_producto[1]+"</td>";
            html +="<td>"+info_producto[2]+"</td>";
            html +="<td>"+info_producto[3]+" </td>";
            html +="<td>"+info_producto[4]+"</td>";
            html +="<td><input type='text'  value='1' class='cantidades'></td>";
            html +="<td>  <p>"  +info_producto[3]+" </p></td>";
            html +="<td> <button  class='btn btn-danger btn-remove-producto' ><i class='fas fa-trash'></i></button> </td>";
            html +="</tr>";
            $("#tbventas tbody").append(html);//pasamos la variable html
            sumar();
            $("#btn-agregar").val(null);// borramos lo datos anteriores
            $("#producto").val(null);
          }else{
            alert("seleccione un producto");
          }
        });

        $(document).on("click",".btn-remove-producto",function(){//progrmamanos el boton de elminar registro
          $(this).closest("tr").remove();//ubicamos un elemto anteriro al boton
          sumar();

        });
        $(document).on("keyup","#tbventas input.cantidades",function(){//seleccionamos el input cantidades-- keyup - se ejecuta cuando ingresamos un valor por tevlado
          cantidad =  $(this).val();// caprturqmos el valor que ingresamos
          precio=$(this).closest("tr").find("td:eq(2)").text(); // capturamos el rpecio // TD:eq(2):  capturasmos el td en indice dos que es el que contiene el precio initario .-- text()recuperamso el contenod de la columna
          importe= cantidad * precio;// calculamos el precio totoal
          $(this).closest("tr").find("td:eq(5)").children("p").text(importe); // inprimimos el precio total

          sumar();
        });
        grafico();

})

function gen_num(num){
 
 aux= Number(num)+Number(1); //num debe ser el ultimo numero generado
  char = aux.toString(); //covirtiendo aux a chard
  fn='00000000'; //es la mascara de ceros
fn= fn.substring (0,8-char.length) + aux; /// con substring obtenemos x cantidad de caracteres comenzando desde 0, hasta 8 que es la cantidad de ceros en la mascara menos la cantidad de digitos del numero Nuevo mas el numero en sí.
 return fn;
}
function sumar(){
  subtotal=0;
  $("#tbventas tbody tr").each(function(){//recorremos los tr por el metodo each
    subtotal=subtotal+Number($(this).find("td:eq(5)").text());//seleccionamos el tr del sub total
  });
  $("input[name=subtotal]").val(subtotal);//seleccionamo el input con name subtotal y inrpimimos  la vairialble

  porcentaje=$("#igv").val();//agarramos el igv  
  igv=subtotal*(porcentaje/100);// calculamos el igv en decimales
  $("input[name=igv]").val(igv);//enviamos el ivg calculado

  descuento=  $("input[name=descuento]").val();//capturamos el decuento
  total=subtotal+igv-descuento;//calulamos el total
  $("input[name=total]").val(total);//envianos los calculos
}


 function grafico(){
  const chart = Highcharts.chart('grafico', {
    title: {
        text: 'Estadistica de VENTAS'
    },
    subtitle: {
        text: 'año 2021'
    },
    xAxis: {
      title: {
        text: 'Meses'
      },
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
      title: {
        text: 'Dinero GANADO (SOLES)'
      },
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">monto: </td>' +
          '<td style="padding:0"><b>{point.y:.1f} soles</b></td></tr>',
      footerFormat: '</table>',

      useHTML: true
  },
    series: [{
        type: 'column',
        colorByPoint: true,
        data: [100, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        showInLegend: false
    }]
});

} 