<form class="form" id="popup-fourth" name="popup-fourth" method="post" action="/thank-you">
    <input type="hidden" name="Url" value="{{ $iss . '/' . $country }}">
    <input type="hidden" name="course" id="popup_course">
    <input type="hidden" name="delivery_type" id="popup_delivery">
    <input type="hidden" name="iso" value="{{ $country }}">
    <input type="hidden" name="form_id"  value="">
    <h2 id="quote">Get A Quote</h2>
    <div class="form-grup">
        <label>name</label>
        <input type="text" name="name" class="name" tabindex="-1"><br />
        <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter Name</span>
        <label>email</label>
        <input type="text" name="email" class="email" tabindex="-1">
        <span class="errorp errorEmail" style="color:red; font-size: 11px;">Please enter valid
            Email</span>
    </div>
    <div class="input-list">
        <div class="input-container">
            <input type="text" name="jyth" placeholder="Name*" autocomplete="nope">
            <span>
                <img src="src/img/master/name-white.svg" alt="name" class="grey-img">
                <img src="src/img/master/name-red.svg" alt="name-red" class="red-img"></span>
        </div>
        <div class="input-container">
            <input type="text" name="kyht" placeholder="Email*" autocomplete="nope">
            <span>
                <img src="src/img/master/mail-white.svg" alt="mail" class="grey-img">
                <img src="src/img/master/mail-red.svg" alt="mail-red" class="red-img">
            </span>
        </div>
        <div class="input-container">
            <div class="phonecode-field">
                <select class="country-code"></select>
                <span class="prefix">+44</span>
                <input type="number" class="telephone" id="phoneMain" placeholder="Phone No.*" autocomplete="nope">
                <div class="hidden-field">
                    <input type="text" name="phone" class="phonenumber" autocomplete="nope">
                </div>
            </div>
            <span>
                <img src="src/img/master/number-white.svg" alt="number" class="grey-img">
                <img src="src/img/master/number-red.svg" alt="number-red" class="red-img">
            </span>
        </div>
        <div class="input-container">
            <input type="text" name="company" placeholder="Company" autocomplete="nope">
            <span>
                <img src="src/img/master/company-white.svg" alt="company" class="grey-img">
                <img src="src/img/master/company-red.svg" alt="company-red" class="red-img">
            </span>
        </div>
        <div class="input-container">
            <textarea placeholder="Message (Optional)" name="message"></textarea>
            <span>
                <img src="src/img/master/message-white.svg" alt="message" class="grey-img">
                <img src="src/img/master/message-red.svg" alt="message-red" class="red-img">
            </span>
        </div>

    </div>

    <div class="form-consent">
        <p>The information you provide shall be processed by us. Your data shall be used by a member of
            staff to contact you regarding your enquiry.
        </p>
    </div>
    <div class="form-consent">
        <input type="checkbox" id="Consent2" name="contactConsent">
        <label for="Consent2">By submitting this enquiry, I agree to be contacted in the most suitable
            manner (by phone or email) in order to respond to my enquiry.</label>
    </div>
    <div class="consent-error" style="display: none;">
        <p>We cannot process your enquiry without contacting you, please tick to confirm you consent
            to us contacting you about your enquiry</p>
    </div>
    <div class="form-consent">
        <input type="checkbox" name="marketing_consent" id="consent3">
        <label for="consent3">Click here to sign up for our email marketing, offer, and discounts.
        </label>
    </div>
    <div class="buttons">
        <button class="btn-secondary" type="submit">
            <img src="src/img/master/submit.svg" alt="submit">
            Submit
            &nbsp;
            <img style="display: none;" class="image-loader"  src="https://theenquiry.co.uk/loader.gif" alt="loader">
        </button>
    </div>

</form>
