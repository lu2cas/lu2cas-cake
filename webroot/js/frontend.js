$('document').ready(function() {
    var lastId,
    topMenu = $('#main-menu'),
    topMenuHeight = topMenu.outerHeight() + 1,
    menuItems = topMenu.find('a'),
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr('href'));
        if (item.length) {
            return item;
        }
    });
    menuItems.click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href'),
        offsetTop = href === '#' ? 0 : $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 350);
    });
    $(window).scroll(function() {
        var fromTop = $(this).scrollTop() + topMenuHeight;
        var cur = scrollItems.map(function() {
            if ($(this).offset().top - 20 < fromTop) {
                return this;
            }
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : '';
        if (lastId !== id) {
            lastId = id;
            menuItems
                .parent().removeClass('active')
                .end().filter('[href="#' + id + '"]').parent().addClass('active');
        }
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
