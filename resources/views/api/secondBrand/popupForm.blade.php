<form action="/thank-you" id="popup-second" name="popup-second" class="form" method="post">
    <input type="hidden" name="Url" value="{{ $iss . '/' . $country }}">
    <input type="hidden" name="iso" value="{{ $country }}">
    <input type="hidden" name="course" id="popup_course" >
    <input type="hidden" name="delivery_type" id="popup_delivery">
    <input type="hidden" name="form_id"  value="">
    <h2 id="quote"></h2>
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
        <input class="form-control" type="text" name="jyth" placeholder="Name*"
            autocomplete="nope">
        <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter Name</span>
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="kyht" placeholder="Email*"
            autocomplete="nope">
        <span class="errorp errorEmail" style="color:red; font-size: 11px;">Please enter valid
                    Email</span>
    </div>
    <div class="form-group">
        <div class="phonecode-field">
            <select class="country-code"></select>
            <span class="prefix"></span>
            
            <input type="number" class="telephone" id="phonemain" autocomplete="nope">
            <div class="hidden-field">
                <input type="text" name="phone" class="phonenumber" autocomplete="nope">
            </div>
        </div>
        <span class="errorp errorPhone" style="color:red; font-size: 11px;">Please enter valid Phone
                number</span>
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="company" placeholder="Company Name"
            autocomplete="nope">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Message (Optional)"></textarea>
    </div>
    <div class="form-consent">
        <input type="checkbox" id="checkConsentOther1" name="contactConsent">
        <label for="checkConsentOther1">By submitting your details, you agree to be contacted in order to
            respond to your enquiry, send us your questions or concerns, and we will give you the help you
            need.</label>
    </div>
    <span class="errorp consent-error"
                style="color:red; font-size: 11px; text-align: left; margin-bottom: 10px; line-height: 1.5;">
                We cannot process your enquiry without contacting you, please tick to confirm you consent to us
                contacting you about your enquiry
    </span>
    <div class="allbuttons">
        <button type="submit" class="btn simple-yellow">
            Submit
            &nbsp;
            <img style="display: none;" class="image-loader" width="25px" height="25px" src="https://theenquiry.co.uk/spinner.gif" alt="loader">
        </button>
        
    </div>
</form>