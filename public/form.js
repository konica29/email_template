$('.prince2-popup').attr('class', 'popup-inner');
$('button').prop('disabled', false);
$('.popup-main').attr('class', 'popup-inner');
$('body').find('.footer').attr('id','footer-gradient');

$('head').append('<link rel="stylesheet" type="text/css" href="https://theenquiry.co.uk/css/ThirdBrand/form.css">');
$('head').append('<link rel="stylesheet" type="text/css" href="https://theenquiry.co.uk/css/ThirdBrand/otherForm.css">');

function removeValidations(e)
{   
    if($(e).val()!='')
    {
    $(e).closest('.input-container').removeClass('input-error');
    }
}

function emailError(event)
{

   $(event).parent('.input-container').addClass('input-error');
   $(event).val("");
   $(event).attr('placeholder', 'Enter Valid Email');
   return false;

}

function checkFields(form) {
    var formEvent = form;
    event.preventDefault();
    $(formEvent).find(".input-container").removeClass("input-error");
    
    var namefield = $(formEvent).find("input[name='jyth']");
    var emailfield = $(formEvent).find("input[name='kyht']");
    var phonefield = $(formEvent).find("input[id='phoneMain']");
    var concentfield = $(formEvent).find("input[name='contactConsent']");
    var companyfield = $(formEvent).find("input[name='company']");

    var name = $(namefield).val();
    var email = $(emailfield).val();
    var phone = $(phonefield).val();
    var company = $(companyfield).val();
 

    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    if (name == "") {
        namefield.parent('.input-container').addClass('input-error');
        namefield.attr('placeholder', 'Name is required');
        return false;
    }
    if (phone == "") {
        phonefield.closest(".input-container").addClass('input-error');
        phonefield.attr('placeholder', 'Phone is required');
        return false;
    }
    if (email == "" || !re.test(email)) {

           return  emailError(emailfield);
        // emailfield.parent('.input-container').addClass('input-error');
        // emailfield.attr('placeholder', 'Enter Valid Email');
        // return false;
    }



    var formid = $(formEvent).attr('id');
    $(formEvent).find('input[name=form_id]').val(formid);

    var fundingTypeEnq = $(formEvent).find("input[name='fundingTypeEnq']:checked").val();
      console.log(fundingTypeEnq);
    if (fundingTypeEnq == 1 || fundingTypeEnq == 3) {
       
        if ($(form).find('.checkEmail').css('display') != 'none') {
           
            var validCompany = isvalidURL(company); 
            if (!validCompany) {
                companyfield.closest(".input-container").addClass('input-error');
                companyfield.attr('placeholder', 'Company website is required');
                return false;
            }

            if (company == '') {
                companyfield.closest(".input-container").addClass('input-error');
                companyfield.attr('placeholder', 'Company website is required');
                return false;
            }
        }
        // if (fundingTypeEnq == 1) {
        //     if (job == '') {
        //         jobField.closest(".input-container").addClass('input-error');
        //         jobField.attr('placeholder', 'Job Title is required');
        //         return false;
        //     }
        // }
    }

    if (concentfield.val() != undefined) {
        if (!concentfield.prop("checked")) {
            $(formEvent).find('.consent-error').show();
            return false;
        }
    }

    $(formEvent).find("button").prop('disabled', true).css('opacity', '0.6');
    $(formEvent).find("img[class='image-loader']").show();
    // $(formEvent).submit();
    // return true;


    // ajax submission code start

    var formValues = $(form).serialize();

    //  console.log(formValues);
    $.ajax({
        url: "/thank-you",
        data: formValues,
        type: "POST"

    });
    
    let origin = location.origin + '/thank-you';
     
    let html = `<form method="post" action="${origin}" id="last-form">
   <input type="hidden" name="redirect" value="1">                
   </form`;
    $('body').append(html);
    $('#last-form').submit();

    $(formEvent).find('input[name=form_id]').val('');
}

var emailSelfFunderArray = [

    'ntlworld.com',
    'btopenworld.com',
    'icloud.coom',
    'yahoo.co.in',
    'yahoo.fr',
    'gmail.co',
    'aol.co.uk',
    'aol.com',
    'btconnect.com',
    'btinternet.com',
    'email.de',
    'gmail.com',
    'googlemail.com',
    'hotmail.co.uk',
    'hotmail.com',
    'hushmail.com',
    'icloud.com',
    'live.com',
    'mac.com',
    'mail.com',
    'me.com',
    'msn.com',
    'ntl.com',
    'outlook.com',
    'sky.com',
    'sky.com',
    'talk21.com',
    'virginmedia.com',
    'yahoo.com',
    'ymail.com',
    'yahoo.co.uk',
    'live.co.uk'
];



function checkEmail(e) {

    var fundingTypeEnq = $(e).closest("form").find("input[name='fundingTypeEnq']:checked").val();
    let email = $(e).val();
    email = email.split("@");
    let domain = email[email.length - 1];
    if ($.inArray(domain, emailSelfFunderArray) !== -1 && fundingTypeEnq !=2) {
        $(e).closest('form').find('.checkEmail').show();
        // $(e).parent().siblings('.checkEmail').css('display', 'flex');

    } else {
        $(e).closest('form').find('.checkEmail').hide();
        // $(e).parent().siblings('.checkEmail').hide();
    }

    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    
    email = $(e).val();
    if (email.length == 0) {
        return false;
    }
    if (email == "" || !re.test(email)) {
        return  emailError(e);
     }
    validate_url = `https://theenquiry.co.uk/api/validate-email`;
    $.ajax({
        url: validate_url,
        type: 'GET',
        data: {
            email: email
        },
        success: function (response) {

            if (response == "Invalid") {

              return   emailError(e);

            }
            else
            {
                removeValidations(e);

            }
        },
        error: function (errors) {
         
            var errors = $.parseJSON(xhr.responseText);
            $.each(errors, function (key, val) {

                if (val.length != 0)
                {
                   return  emailError(e);
                }

            });
        }
    });



}


function isvalidURL(str) {
    var res = str.match(
        /(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
    return (res !== null)
}

function validateURL(e){
    var url = $(e).val();
    var valid = isvalidURL(url); 
    if (!valid) {
        $(e).closest(".input-container").addClass('input-error');
        $(e).attr('placeholder', 'Company website is required');
    }else{
        $(e).closest(".input-container").removeClass('input-error');
        $(e).attr('placeholder', '');
    }
}
