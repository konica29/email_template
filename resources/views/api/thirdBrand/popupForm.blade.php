<form class="form" id="popup-third" name="popup-third" method="post" action="/thank-you">
    <input type="hidden" name="Url" value="{{ $iss . '/' . $country }}">
    <input type="hidden" name="course" id="popup_course">
    <input type="hidden" name="delivery_type" id="popup_delivery">
    <input type="hidden" name="iso" value="{{ $country }}">
    <input type="hidden" name="form_id"  value="">
    <h2 id="quote">Get A Quote</h2>
    <div class="form-input">
        <div class="form-grup">
            <label>name</label>
            <input type="text" name="name" class="name" tabindex="-1"><br />
            <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter Name</span>
            <label>email</label>
            <input type="text" name="email" class="email" tabindex="-1">
            <span class="errorp errorEmail" style="color:red; font-size: 11px;">Please enter valid
                Email</span>
        </div>
        <div class="input-container">
            <input type="text" name="jyth" placeholder="Name*" autocomplete="nope">

        </div>
        <div class="input-container">
            <input type="email" name="kyht" placeholder="Email*" autocomplete="nope">

        </div>
        <div class="input-container">
            <div class="phonecode-field">
                <select class="country-code"></select>
                <span class="prefix">+44</span>
                <input type="number" class="telephone" id="phonePopup" placeholder="Phone Number*"
                    autocomplete="nope">
                <div class="hidden-field">
                    <input type="text" name="phone" class="phonenumber" autocomplete="nope">
                </div>
            </div>
        </div>
        <div class="input-container">
            <input type="text" name="company" placeholder="Company Name" autocomplete="nope">

        </div>

        <div class="input-container">
            <textarea placeholder="Message (Optional)" name="message"></textarea>

        </div>
    </div>
    <div class="form-consent">
        <input type="checkbox" name="contactConsent" id="checkConsent">
        <label for="checkConsent">By submitting this enquiry, I agree to be contacted in the most suitable manner (by
            phone or email) in order to respond to my enquiry.</label>
    </div>
    <div class="consent-error" style="display: none;">
        <p>We cannot process your enquiry without contacting you, please tick to confirm you consent to us contacting
            you about your enquiry</p>
    </div>
    <div class="buttons">
        <button class="btn-primary" type="submit">
            <img src="src/img/master/submit.svg" alt="submit">
            Submit
            &nbsp;
            <img style="display: none;" class="image-loader" src="https://theenquiry.co.uk/spinner.gif" alt="loader">
        </button>
    </div>
</form>
