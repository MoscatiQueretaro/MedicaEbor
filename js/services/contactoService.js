

// ******************************Campos del Formulario ************************************

var name = document.getElementById("contact-us-name").value;
var email = document.getElementById("contact-us-email").value;
var phone = document.getElementById("contact-us-phone").value;
var asunto = document.getElementById("contact-us-asunto").value;
var mensaje = document.getElementById("contact-us-mensaje").value;

const element = document.getElementById('enviado');
element.innerHTML = '';

function sendContact() {


    name = document.getElementById("contact-us-name").value;
    email = document.getElementById("contact-us-email").value;
    phone = document.getElementById("contact-us-phone").value;
    asunto = document.getElementById("contact-us-asunto").value;
    mensaje = document.getElementById("contact-us-mensaje").value;


    $.ajax({
        type: "POST",  //type of method
        url: "http://hospitalebor.com.mx/php/ContactRegister/sendContact.php",  //page to save on data base
        data: {
            name: name,
            email: email,
            phone: phone,
            asunto: asunto,
            mensaje: mensaje
        },// passing the values
        success: function (res) {
            var val = $.parseJSON(res);
            val[0].nombre;
            const element = document.getElementById('enviado');
            element.innerHTML = '<div style="position: absolute; margin-top: 5%"><h4>Enviado</h4><img src="images/check.gif" style="width: 70px; height: 70px;"/></div>';

        }
    });


    // Or go to another URL:  actions.redirect('thank_you.html');

}


