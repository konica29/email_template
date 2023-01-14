<form class="form" id="second-header" name="second-header" method="post" action="/thank-you">
    <input type="hidden" name="Url" value="{{ $iss . '/' . $country }}">
    <input type="hidden" name="iso" value="{{ $country }}">
    <input type="hidden" name="course" id="header-course">
    <input type="hidden" name="form_id"  value="">
    <div class="form-grup">
        <label>name</label>
        <input type="text" name="name" class="name"  tabindex="-1" ><br/>
        <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter Name</span>
        <label>email</label>
        <input type="text" name="email" class="email"  tabindex="-1" >
        <span class="errorp errorEmail" style="color:red; font-size: 11px;">Please enter valid
        Email</span>
    </div>                                                          
    <div class="form-group">
        <label>name</label>
        <input class="form-control" type="text" name="jyth" autocomplete="nope">
        <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter
            Name</span>
    </div>
    <div class="form-group">
        <label>email</label>
        <input class="form-control" type="email" name="kyht" autocomplete="nope">
        <span class="errorp errorEmail" style="color:red; font-size: 11px;">Please enter valid
            Email</span>
    </div>
    <div class="form-group">
        <label>phone</label>
        <div class="phonecode-field">
            <select class="country-code"></select>
            <span class="prefix"></span>
            <input type="number" class="telephone" id="phonemain" autocomplete="nope">
            <div class="hidden-field">
                <input type="text" name="phone" class="phonenumber" autocomplete="nope">
            </div>
        </div>
        <!-- <input class="form-control" type="phone" name="phone" id="phone"> -->
        <span class="errorp errorPhone" style="color:red; font-size: 11px;">Please enter valid
            Phone
            number</span>
    </div>
    <div class="form-group">
        <label>message (optional)</label>
        <textarea class="form-control" type="phone" name="message" id="message"></textarea>
    </div>
    <div class="form-consent">
        <input type="checkbox" id="checkConsentOther" name="contactConsent">
        <label for="checkConsentOther">By submitting your details, you agree to be contacted in order to
            respond to your enquiry, send us your questions or concerns, and we will give you the help you
            need.</label>
    </div>
    <span class="errorp errorGDPR consent-error" style="color:red; font-size: 11px; text-align: left; margin-bottom: 10px; line-height: 1.5;">
       We cannot process your enquiry without contacting you, please tick to confirm you consent to us contacting you about your enquiry
    </span>
    <div class="allbuttons">
        <button class="btn simple-yellow"  type="submit">
            Send enquiry
            &nbsp;
            <img style="display: none;" class="image-loader" width="25px" height="25px"  src="https://theenquiry.co.uk/spinner.gif" alt="loader">
        </button>
    </div>
</form>