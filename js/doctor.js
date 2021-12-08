// JavaScript Document
$(document).ready(function() {

    "use strict";



/*$('[name^="btn_"]').click(function() {
    //get the value of the button that was clicked
    var buttonValue = $(this).val();
    alert(buttonValue );
    // send data to the other file using the action attribute of the form
    $('form').submit();
});*/


     $('#Selectdoctor').change(function(){


        $("#doctors-5").empty(); 

        var espeid = $(this).val();
        var dataString = "id=" + espeid; 

           $.ajax({
            type: "POST",
            data:  dataString,
            url: "php/doctors.php",
          //  cache: false,
            dataType: 'json',
            success: function (response) {
               
               var len = response.length;
                var bloque = '<div id="obra-social-' + response + '" class="obra-social"><p>Contenido obra social</p</div>';
               // $('#doctors-4').append(bloque);

               // $("#doctors-4").append()
                 //$("#doctors-4").html("<section id=\"doctors-3\" class=\"bg-lightgrey wide-60 doctors-section division\"><div class=\"container\"><div class=\"row\"><?php   $stmt = $conn->prepare(\"SELECT especialidad,nombre,titulo  FROM doctores ORDER BY especialidad\"); $stmt->execute();      $countriesList = $stmt->fetchAll(); foreach($countriesList as $country){  echo \" <div id=\"dr2\" class=\"col-md-5 col-lg-3\">  <div class=\"doctor-2\">       <div class=\"hover-overlay\">  <img class=\"img-fluid\" src=\"images/doctor-1.jpg\" alt=\"doctor-foto\">      </div>   <div class=\"doctor-meta\"> <h5 class=\"h5-xs blue-color\">\".$country['nombre'].\"</h5> <span>\".$country['titulo'].\"</span>  <a class=\"btn btn-sm btn-blue blue-hover mt-15\" href=\"doctor-1.html\" title=\"\">View More Info</a>   </div>       </div>                                 </div>  \" ;      }     ?>     </div>          </div>        </section>    ");
                     for( var i = 0; i<len; i++){


                    var id2 = response[i]['id'];
                          var id = response[i]['nombre'];
                         var name = response[i]['titulo'];
                        var foto = response[i]['foto'];

                            // $("#sel_city").append("<option value='"+id+"'>"+name+"</option>");
                        var bloque='<div id="dr2" class="col-md-5 col-lg-3">  <div class="doctor-2">       <div class="hover-overlay">  <img class="img-fluid" src="images/medicos/' ;
                           bloque=bloque +      foto  + '"';
                             bloque=bloque +    ' alt="doctor-foto">      </div>   <div class="doctor-meta"> <h5 class="h5-xs blue-color">';
                        bloque=bloque + id ; 
                        bloque=bloque + ' </h5> <span>';
                        bloque= bloque +name ;
                        bloque=bloque + '</span>  <a class="btn btn-sm btn-blue blue-hover mt-15"  name="btn_';
                        bloque = bloque  + id2 + '"';
                        bloque=bloque + 'id="btn_';
                        bloque= bloque + id2 + '"';
                         bloque=bloque + 'data-id="';
                        bloque= bloque + id2 + '"';
                        bloque= bloque + ' title="">Detalle</a>   </div>       </div>                                 </div>    ';
                        $("#doctors-5").append(bloque);
                                     //   for( var i = 0; i<len; i++){
                         //var id = response[i]['id'];
                         //var name = response[i]['name'];
                     }

                    //  $("#sel_state").append("<option value='"+id+"'>"+name+"</option>");

         


                                  }
        });


     });

    
    
})

$(document).on('click', 'a[data-id]', function (e) {
    var requested_to = $(this).attr('data-id');
    //alert(requested_to );
    window.location.href="doctor-1.php?paquete=" + requested_to;

    // Do whatever else you need to do.
});



