<form id="bottomLeadForm" method="post" class="formPanel p-3 lead-form">
    <h6 class="text-orange fw-bold" style="font-size: 0.985rem">Admission Open</h6>
    <h4 class="text-blue">Enroll Now for 2025-26</h4>
    <div class="row mt-3">
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
        </div>
        <div class="form-group mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
        </div>
        <div class="form-group otp-form">
            <input type="text" maxlength="10" style="width: 100%;" id="phone" class="form-control phone mb-3"
                placeholder="Phone Number" name="phone" autocomplete="off" required>
            <p id="note" class="d-none note mb-2" style="color: #111 !important;font-size: 0.735rem;text-align: left; margin-left: 0.35rem; letter-spacing: 0.395px"></p>
            <div class="form-group mb-3 otp-box" style="display: none;">
                <input type="text" maxlength="6" class="form-control otp" placeholder="Enter OTP" name="otp"
                    autocomplete="off" required>
            </div>
        </div>

        <div class="form-group col-12 col-lg-6 mb-3">
            <select class="form-control form-select state" id="state" name="state" required>
                <option value>Select State</option>
            </select>
        </div>
        <div class="form-group col-12 col-lg-6 mb-3">
            <select class="form-control form-select city" name="city" required>
                <option value>Select City</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <input class="form-control course" id="course" name="course" value="Master of Business Administration (MBA)"
                required readonly>
        </div>

        <input type="text" class="form-control" id="current_url" name="current_url"
            value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"
            hidden>
        <?php
        $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $query_params = [];
        parse_str(parse_url($current_url, PHP_URL_QUERY), $query_params);
        $utm_source = isset($query_params['gad_source']) ? htmlspecialchars($query_params['gad_source'] || $query_params['utm_source']) : '';
        $utm_medium = isset($query_params['gclid']) ? htmlspecialchars($query_params['gclid'] || $query_params['utm_medium']) : '';
        $utm_campaign = isset($query_params['utm_campaign']) ? htmlspecialchars($query_params['utm_campaign']) : '';
        ?>
        <input type="text" name="utm_source" value="<?php echo base64_encode($utm_source); ?>" hidden>
        <input type="text" name="utm_medium" value="<?php echo base64_encode($utm_medium) ?>" hidden>
        <input type="text" name="utm_campaign" value="<?php echo $utm_campaign ?>" hidden>
        <input class="level" id="level" name="level" value="Post Graduate" required hidden />
        <div class="form-check ms-3">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label declaration-text" for="flexCheckDefault" style="color: black;">
                By clicking on submit I allow Acadment to call me & send program information on Email/Phone.
            </label>
        </div>
        <div class="form-group d-flex justify-content-center">
            <input type="submit" id="submitButton" name="submit" value="Submit" class="btn banner-button btn-primary" />
        </div>
    </div>
</form>

<!-- OTP Modal -->
<div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otpModalLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="otpModalBody">
                <!-- Message will be inserted here -->
            </div>
        </div>
    </div>
</div>


<script>
    function disableButton() {
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
        submitButton.value = "Submitting...";
        return true;
    }
</script>