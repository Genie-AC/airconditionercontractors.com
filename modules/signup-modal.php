<?php
/**
 * Accessible Sign-up Contact Modal
 * Displays contact information (phone and email) with accessible markup.
 */
?>
<div id="signupModal" class="signup-modal" role="dialog" aria-modal="true" aria-labelledby="signupModalTitle" aria-describedby="signupModalDesc" hidden>
    <div class="signup-modal__backdrop" data-dismiss="signup-modal" aria-hidden="true"></div>
    <div class="signup-modal__dialog responsive-container" tabindex="-1">
        <button class="signup-modal__close" type="button" aria-label="Close sign-up modal" data-dismiss="signup-modal">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
        <h2 id="signupModalTitle" class="text-2xl b">Sign Up Information</h2>
        <p id="signupModalDesc" class="text-sm" style="color:#666;margin-bottom:1rem;">For sign-up information, please contact us via phone or email.</p>

        <div class="signup-modal__content items-center">
            <a class="contact-link" href="tel:+18187854151" aria-label="Call 818-785-4151">
                <i class="fa-solid fa-phone"></i>
                <span>818-785-4151</span>
            </a>
            <a class="contact-link" href="mailto:contact@airconditioner.com" aria-label="Email contact@airconditioner.com">
                <i class="fa-regular fa-envelope"></i>
                <span>contact@airconditioner.com</span>
            </a>
        </div>
    </div>
</div>