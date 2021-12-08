// JavaScript Document
$(document).ready(function() {

    "use strict";

    $(".appointmentpre-form").submit(function(e) {
        e.preventDefault();
        var department = $(".department");
        var doctor = $(".doctor");
        var patient = $(".patient");
        var date = $(".date");
        var name = $(".name");
        var email = $(".email");
        var phone = $(".phone");
       //   var edad = $(".edad");
          var diagnosis = $(".diagnosis");
        var genero = $(".genero");
    var sangre = $(".sangre");
    var educacion = $(".educacion");
    var religion = $(".religion");
        var ciudad = $(".ciudad");
        var colonia = $(".colonia");
        var numero = $(".numero");
        var calle = $(".calle");
         var cell = $(".cell");
         var nac = $(".nac");
           var cp = $(".cp");
            var medico = $(".medico");
               var medicamentos = $(".medicamentos");
           var civil = $(".civil");
              var prof = $(".prof");
                  var uso = $(".uso");
            var rfc = $(".rfc");
              var razon = $(".razon");
        var msg = $(".message");
        var flag = false;
        if (department.val() == "") {
            department.closest(".form-control").addClass("error");
            department.focus();
            flag = false;
            return false;
        } else {
            department.closest(".form-control").removeClass("error").addClass("success");
        } if (doctor.val() == "") {
            doctor.closest(".form-control").addClass("error");
            doctor.focus();
            flag = false;
            return false;
        } else {
            doctor.closest(".form-control").removeClass("error").addClass("success");
        } if (patient.val() == "") {
            patient.closest(".form-control").addClass("error");
            patient.focus();
            flag = false;
            return false;
        } else {
            patient.closest(".form-control").removeClass("error").addClass("success");
        } if (date.val() == "") {
            date.closest(".form-control").addClass("error");
            date.focus();
            flag = false;
            return false;
        } else {
            date.closest(".form-control").removeClass("error").addClass("success");
        } if (name.val() == "") {
            name.closest(".form-control").addClass("error");
            name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".form-control").removeClass("error").addClass("success");
        } if (email.val() == "") {
            email.closest(".form-control").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".form-control").removeClass("error").addClass("success");
        } if (phone.val() == "") {
            phone.closest(".form-control").addClass("error");
            phone.focus();
            flag = false;
            return false;
        } else {
            phone.closest(".form-control").removeClass("error").addClass("success");
        }/*if (edad.val() == "") {
            edad.closest(".form-control").addClass("error");
            edad.focus();
            flag = false;
            return false;
        } else {
            edad.closest(".form-control").removeClass("error").addClass("success");
        } */
        if (diagnosis.val() == "") {
            diagnosis.closest(".form-control").addClass("error");
            diagnosis.focus();
            flag = false;
            return false;
        } else {
            diagnosis.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (genero.val() == "") {
            genero.closest(".form-control").addClass("error");
            genero.focus();
            flag = false;
            return false;
        } else {
            genero.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (sangre.val() == "") {
            sangre.closest(".form-control").addClass("error");
            sangre.focus();
            flag = false;
            return false;
        } else {
            sangre.closest(".form-control").removeClass("error").addClass("success");
        } 
         if (educacion.val() == "") {
            educacion.closest(".form-control").addClass("error");
            educacion.focus();
            flag = false;
            return false;
        } else {
            educacion.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (religion.val() == "") {
            religion.closest(".form-control").addClass("error");
            religion.focus();
            flag = false;
            return false;
        } else {
            religion.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (calle.val() == "") {
            calle.closest(".form-control").addClass("error");
            calle.focus();
            flag = false;
            return false;
        } else {
            calle.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (colonia.val() == "") {
            colonia.closest(".form-control").addClass("error");
            colonia.focus();
            flag = false;
            return false;
        } else {
            colonia.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (numero.val() == "") {
            numero.closest(".form-control").addClass("error");
            numero.focus();
            flag = false;
            return false;
        } else {
            numero.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (ciudad.val() == "") {
            ciudad.closest(".form-control").addClass("error");
            ciudad.focus();
            flag = false;
            return false;
        } else {
            ciudad.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (nac.val() == "") {
            nac.closest(".form-control").addClass("error");
            nac.focus();
            flag = false;
            return false;
        } else {
            nac.closest(".form-control").removeClass("error").addClass("success");
        } 
         if (cell.val() == "") {
            cell.closest(".form-control").addClass("error");
            cell.focus();
            flag = false;
            return false;
        } else {
            cell.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (cp.val() == "") {
            cp.closest(".form-control").addClass("error");
            cp.focus();
            flag = false;
            return false;
        } else {
            cp.closest(".form-control").removeClass("error").addClass("success");
        } 
        
         if (civil.val() == "") {
            civil.closest(".form-control").addClass("error");
            civil.focus();
            flag = false;
            return false;
        } else {
            civil.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (prof.val() == "") {
            prof.closest(".form-control").addClass("error");
            prof.focus();
            flag = false;
            return false;
        } else {
            prof.closest(".form-control").removeClass("error").addClass("success");
        } 
        /* if (msg.val() == "") {
            msg.closest(".form-control").addClass("error");
            msg.focus();
            flag = false;
            return false;
        } else {
            msg.closest(".form-control").removeClass("error").addClass("success");
            flag = true;
        }*/
        var dataString = "pacientetipo=" + department.val() + "&estado=" + doctor.val() + "&visitado=" + patient.val() + "&ingreso=" + date.val() + 
        "&name=" + name.val() + "&email=" + email.val() + "&phone=" + phone.val() + "&alimentarias=" + msg.val() + "&diagnosis=" + diagnosis.val()
        + "&medico=" + medico.val() + "&cp=" + cp.val()  + "&cell=" + cell.val()  + "&nac=" + nac.val() + "&ciudad=" + ciudad.val() 
        + "&numero=" + numero.val() + "&colonia=" + colonia.val() + "&calle=" + calle.val() + "&religion=" + religion.val()
        + "&educacion=" + educacion.val()  + "&sangre=" + sangre.val()  + "&genero=" + genero.val() + "&medicamentos=" + medicamentos.val() 
        + "&civil=" + civil.val() + "&prof=" + prof.val() + "&rfc=" + rfc.val() + "&uso=" + uso.val() + "&razon=" + razon.val()  ; 
        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "php/appointmentFormPre.php",
            cache: false,
            success: function (d) {
                $(".form-control").removeClass("success");
                   if(d.indexOf("success") > -1 )
                    { // Message Sent? Show the 'Thank You' message and hide the form
                        $('.loading').fadeIn('slow').html('<font color="#48af4b">Mensaje enviado, en breve nos comunicaremos con usted.</font>').delay(3000).fadeOut('slow');
                    }
                         else
                         {
                        $('.loading').fadeIn('slow').html('<font color="#ff5607">Ocurrio un error , ' + d + ' favor de intentarlo mas tarde.</font>').delay(3000).fadeOut('slow');
                    }
                }
        });
        return false;
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });
    
})



