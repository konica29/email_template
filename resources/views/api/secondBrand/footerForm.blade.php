<form class="form" id="second-footer" name="second-footer" method="post" action="/thank-you">
    <input type="hidden" name="Url" value="{{ $iss . '/' . $country }}">
    <input type="hidden" name="iso" value="{{ $country }}">
    <input type="hidden" name="course" id="footer-course">
    <input type="hidden" name="form_id"  value="">
    <h3>Get Your Special Offer</h3>
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
        <label for="sname">NAME</label>
        <input type="text" name="jyth" autocomplete="nope" />
        <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter Name</span>
    </div>
    <div class="form-group">
        <label for="semail">EMAIL</label>
        <input type="email" name="kyht" autocomplete="nope" />
        <span class="errorp errorEmail" style="color:red; font-size: 11px;">Please enter valid
            Email</span>
    </div>
    <div class="form-group">
        <label for="sphone">PHONE</label>
        <div class="phonecode-field">
            <select class="country-code"></select>
            <span class="prefix"></span>
            <input type="number" class="telephone" id="phonemain" autocomplete="nope">
            <div class="hidden-field">
                <input type="text" name="phone" class="phonenumber" autocomplete="nope">
            </div>
        </div>
        <!-- <input type="number" name="phone" id="sphone" autocomplete="nope" /> -->
        <span class="errorp errorPhone" style="color:red; font-size: 11px;">Please enter valid Phone
            number</span>
    </div>
    <div class="checkbox-consent">
            <label class="checkbox-label">
                <input type="checkbox"  name="contactConsent" class="gdprCheck" id="gdprPMP" value="1">
                <span class="checkmark"></span>
            </label>
            <label for="gdprPMP" class="checkbox-text">By submitting this enquiry I agree to be
                contacted in the most suitable manner (by phone or email) in order to respond to my
                enquiry</label>
        </div>
        <span class="errorp errorGDPR consent-error" style="color:red; font-size: 11px; text-align: left; margin-bottom: 10px; line-height: 1.5;">We
            cannot process your enquiry without contacting you, please tick to confirm you consent to us
            contacting you about your enquiry</span>
        <div class="checkbox-consent">
            <label class="checkbox-label">
                <input type="checkbox" name="marketing_consent"class="marketingCheck" id="marketingPMP"
                    value="1">
                <span class="checkmark"></span>
            </label>
            <label class="gpdr-right checkbox-text" for="marketingPMP">Click here to sign up to our
                email marketing, offers and discounts</label>
        </div>
    <div class="allbuttons">
        <button class="btn simple-yellow" id="scrum-enquiry" type="submit">
            Receive your offer
            &nbsp;
            <img style="display: none;" class="image-loader" width="25px" height="25px" src="https://theenquiry.co.uk/spinner.gif" alt="loader">
        </button>
    </div>
</form>