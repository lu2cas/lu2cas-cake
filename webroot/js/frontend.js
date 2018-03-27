$('document').ready(function() {
    $('#main-menu a').click(function(e) {
        e.preventDefault();

        var element = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(element).offset().top - 75
        }, 300);
    });

    $('#contact-form #send').click(function(e) {
        e.preventDefault();

        var submit = $(this);
        var form = submit.closest('form');
        var url = form.attr('action');
        var post = form.serialize();

        $.ajax({
            type: 'post',
            url: url,
            data: post,
            beforeSend: function() {
                submit.html('Enviando...');
            },
            success: function(data) {
                if (data.is_valid_form) {
                    form.find(':input').not('button[type="submit"]').css('border', '3px solid #dadada');
                    if (data.send_email_success) {
                        form.find(':input').val('');
                    }
                    submit.html(data.send_email_message).prop('disabled', true);

                    setTimeout(function(){
                        submit.html('Enviar').prop('disabled', false);
                    }, 2000);
                } else {
                    submit.html('Enviar').prop('disabled', false);
                    $.each(data.fields, function (j, field) {
                        $('#' + field.name).css('border', '3px solid #dadada');
                        $.each(this.checks, function(k, check) {
                            if (!check.is_valid) {
                                console.log(check.message);
                                $('#' + field.name).css('border', '3px solid #ffa600').focus();
                            }
                        });
                    });
                }
            },
            dataType: 'json'
        });

    });
});
