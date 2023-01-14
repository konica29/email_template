function formSubmit() {
    event.preventDefault();
    var formEvent = $(event.target).closest('.form');
    // console.log('dsfjdsdh');
    $(formEvent).find(".input-container").removeClass("input-error");
    var namefield = $(formEvent).find("input[name='jyth']");
    var emailfield = $(formEvent).find("input[name='kyht']");
    var phonefield = $(formEvent).find("input[id='phonePopup']");
    var concentfield = $(formEvent).find("input[name='contactConsent']");
    // var companyfield = $(formEvent).find("input[name='company']");
    var name = $(namefield).val();
    var email = $(emailfield).val();
    var phone = $(phonefield).val();
    // var company = $(companyfield).val();

    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    if (name == "") {
        namefield.parent('.input-container').addClass('input-error');
        namefield.attr('placeholder', 'Name is required');
        return false;
    }
    if (email == "" || !re.test(email)) {
        emailfield.parent('.input-container').addClass('input-error');
        emailfield.attr('placeholder', 'Enter Valid Email');
        return false;
    }
    if (phone == "") {
        phonefield.closest(".input-container").addClass('input-error');
        phonefield.attr('placeholder', 'Phone is required');
        return false;
    }

    if (concentfield.val() != undefined) {
        if (!concentfield.prop("checked")) {
            $(formEvent).find('.consent-error').show();
            return false;
        }
    }
    var formid = $(formEvent).attr('id');
    $(formEvent).find('input[name=form_id]').val(formid);

    $(formEvent).find("button").prop('disabled', true).css('opacity', '0.6');
    $(formEvent).find("img[class='image-loader']").show();
    $(formEvent).submit();

    $(formEvent).find('input[name=form_id]').val('');


}

$(window).on('load', function() {
    $('form').on("submit", function(event){
        var formEvent = $(event.target).closest('.form');
        $(formEvent).find(".input-container").removeClass("input-error");
        var namefield = $(formEvent).find("input[name='jyth']");
        var emailfield = $(formEvent).find("input[name='kyht']");
        var phonefield = $(formEvent).find("input[id='phonePopup']");
        var concentfield = $(formEvent).find("input[name='contactConsent']");
        // var companyfield = $(formEvent).find("input[name='company']");
        var name = $(namefield).val();
        var email = $(emailfield).val();
        var phone = $(phonefield).val();
        // var company = $(companyfield).val();

        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
        if (name == "") {
            namefield.parent('.input-container').addClass('input-error');
            namefield.attr('placeholder', 'Name is required');
            return false;
        }
        if (email == "" || !re.test(email)) {
            emailfield.parent('.input-container').addClass('input-error');
            emailfield.attr('placeholder', 'Enter Valid Email');
            return false;
        }
        if (phone == "") {
            phonefield.closest(".input-container").addClass('input-error');
            phonefield.attr('placeholder', 'Phone is required');
            return false;
        }

        if (concentfield.val() != undefined) {
            if (!concentfield.prop("checked")) {
                $(formEvent).find('.consent-error').show();
                return false;
            }
        }
        var formid = $(formEvent).attr('id');
        $(formEvent).find('input[name=form_id]').val(formid);

        $(formEvent).find("button").prop('disabled', true).css('opacity', '0.6');
        $(formEvent).find("img[class='image-loader']").show();
        // $(formEvent).submit();

        $(formEvent).find('input[name=form_id]').val('');
    });
});