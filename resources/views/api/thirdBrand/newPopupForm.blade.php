<form class="form" id="popup-third" name="popup-third" onSubmit="checkFields(this)">
    <input type="hidden" name="Url" value="{{ $iss . '/' . $country }}">
    <input type="hidden" name="course" id="popup_course">
    <input type="hidden" name="delivery_type" id="popup_delivery">
    <input type="hidden" name="iso" value="{{ $country }}">
    <input type="hidden" name="form_id"  value="">
    <input type="hidden" name="utm_source" id="utm_source" value="{{ $utm_source ?? null }}">
    <input type="hidden" name="utm_campaign" id="utm_campaign" value="{{ $utm_campaign  ?? null}}">
    <input type="hidden" name="utm_gclid" id="utm_gclid" value="{{ $utm_gclid  ?? null }}">
    <div class="heading" id="quote">
        <h2>
            Get A Quote
        </h2>
    </div>
    <div class="tabs popup-tabs">
        <label> <img src="{{url('https://theenquiry.co.uk/img/star.svg')}}" alt=""> WHO WILL BE FUNDING THE COURSE?</label>
        <div class="item active" id="company-empJS">
            <input type="radio" name="fundingTypeEnq" value="1" checked="checked">
            <p>
                My employer
            </p>
        </div>
        <div class="item" id="company-selfJS">
            <input type="radio" name="fundingTypeEnq" value="2">
            <p>
                I will
            </p>
        </div>
        <div class="item" id="company-active">
            <input type="radio" name="fundingTypeEnq" value="3">
            <p>
                Not sure
            </p>
        </div>
    </div>
    <div class="form-grup">
        <label>name</label>
        <input type="text" name="name" class="name" tabindex="-1" autocomplete="nope"><br>
        <span class="errorp errorName" style="color:red; font-size: 11px;">Please enter Name</span>
        <label>email</label>
        <input type="text" name="email" class="email" tabindex="-1">
        <span class="errorp errorEmail" style="color:red; font-size: 11px;" autocomplete="nope">Please enter valid
            Email</span>
    </div>
    <div class="input-container">
        <label for=""> <img src="{{url('https://theenquiry.co.uk/img/star.svg')}}" alt=""> Full Name</label>
        <input type="text" name="jyth" onfocusout="removeValidations(this)" id="nameOther" autocomplete="nope">
    </div>
    <div class="input-container">
        <label for=""> <img src="{{ url('img/star.svg') }}" alt=""> Phone number</label>
        <div class="phonecode-field">
            <select class="country-code"></select>
            <span class="prefix">+44</span>
            <input type="number" class="telephone" id="phoneMain" onfocusout="removeValidations(this)"  placeholder="Phone No.*" autocomplete="nope">
            <div class="hidden-field">
                <input type="text" name="phone" class="phonenumber" autocomplete="nope">
            </div>
        </div>
    </div>
    <div class="input-container company-input">
        <label for="emailOther" id="labelEmail"><img src="{{url('https://theenquiry.co.uk/img/star.svg')}}" alt=""> Company email</label>
        <input type="email" name="kyht" id="emailOther" autocomplete="nope" onfocusout="checkEmail(this)">
    </div>
    <div class="checkEmail" style="display: none;">
        <div class="input-container company-input">
            <label for=""> Company Name(optional)</label>
            <input type="text" name="company_name" autocomplete="off">
        </div>
        <div class="input-container company-input">
            <label for=""> <img src="{{url('https://theenquiry.co.uk/img/star.svg')}}" alt=""> Company website</label>
            <input type="text" name="company" autocomplete="nope" onfocusout="validateURL(this)">
        </div>
    </div>
    <div class="input-container company-job">
        <label for=""> <img src="{{url('https://theenquiry.co.uk/img/star.svg')}}" alt=""> Job title</label>
        <input type="text" name="job" placeholder="Project Manager" autocomplete="nope">
    </div>
    <div class="tabs">
        <input type="hidden" name="preferredContact">
        <label>Preferred Contact Method</label>
        <div class="item active">
            <input type="radio" name="preferredContact" value="1" checked="checked">
            <p>
                Phone
            </p>
        </div>
        <div class="item">
            <input type="radio" name="preferredContact" value="2">
            <p>
                Email
            </p>
        </div>
        <div class="item">
            <input type="radio" name="preferredContact" value="3">
            <p>
                No preference
            </p>
        </div>
    </div>
    <div class="input-container message">
        <label for="">Message(optional)</label>
        <textarea name="message"></textarea>
    </div>
    <div class="form-consent">
        <input type="checkbox" id="Popup-Consent2" name="contactConsent">
        <label for="Popup-Consent2">By submitting this enquiry, I agree to be contacted in the most suitable
            manner (by phone or email) in order to respond to my enquiry.</label>
    </div>
    <div class="consent-error" style="display: none;">
        <p>We cannot process your enquiry without contacting you, please tick to confirm you consent
            to us contacting you about your enquiry</p>
    </div>
    <div class="form-consent">
        <input type="checkbox" id="Popup-checkConsentOther" name="marketing_consent">
        <label for="Popup-checkConsentOther">I wish to sign up to our email marketing, offers and discounts</label>
        {{-- <p>By submitting your details you agree to be contacted in order to respond to your enquiry.</p> --}}
    </div>
    <div class="buttons">
        <button class="btn-primary" type="submit">
            <img src="src/img/master/submit.svg" alt="submit">
            Submit
        </button>
    </div>
</form>