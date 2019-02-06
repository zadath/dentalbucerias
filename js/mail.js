$(document).ready(function() {

var form = $('#main-contact-form');
form.submit(function (event) {
    event.preventDefault();
    var form_status = $('<div class="form_status"></div>');
    
    $.ajax({
        url: $(this).attr('action'),
         type: 'POST', // form submit method get/post
         contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
         dataType: 'html', // request type html/json/xml
         data: form.serialize(), // serialize form data

        beforeSend: function () {
            form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Enviando mensaje...</p>').fadeIn());
        }
    }).done(function (data) {
        
        //form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
        form_status.html('<p class="text-success">Mensaje enviado!</p>').delay(3000).fadeOut();
        form.trigger('reset');
    });
});

});