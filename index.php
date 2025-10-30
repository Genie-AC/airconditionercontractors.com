<!--foo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HVAC Contractors | Find Your AC Repair Contractor</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="components/signup-modal.css">
    
    <style>
        .ban__buck{gap:10px;}
        .ban__wrapper{padding:15px;border:1pt solid #ccc;gap:4px;border-radius:8px;background: linear-gradient(0deg, rgba(255,255,255,1) 34%, rgba(238,238,238,1) 100%);} 
        .ban__img{max-width:800px;max-height:148px;border:1pt solid #888;}
        /* Accessible helper to visually hide labels while keeping them for screen readers */
        .visually-hidden{position:absolute !important;width:1px !important;height:1px !important;padding:0 !important;margin:-1px !important;overflow:hidden !important;clip:rect(0 0 0 0) !important;white-space:nowrap !important;border:0 !important;}
    </style>
</head>
<body>
    <span id="splash" class="splash gradient_grey justify-center">
        <span class="title">
            <img width="100" src="contractor-logo-silhouette.svg" alt="Contractor">
            <img width="420" src="contractor-logo-type2.svg" alt=" Contractors">
        </span>
        <div>
            <nav class="items-center">
                <a href="mailto:contact@airconditioner.com"><i class="fa-regular fa-envelope"></i> Contact Us</a>
                <a href="disclaimer.php">Disclaimer</a>
                <a href="#signupModal" class="b" data-open-signup-modal aria-controls="signupModal">Sign Up</a>
            </nav>
            <span>
                <img width="200" src="smiling-repairman2.png" alt="Smiling Contractor">
                <div>
                    <span class="smiling-repairman__copy b items-center text-lg i">Better Than the Yellow Pages&trade;</span>
                    <svg width="140px" class="repairman__copy--tail" xmlns="http://www.w3.org/2000/svg" height="140px">
                        <path d="M 30 0 l -30 20 l 10 -20" fill="yellow" stroke="#000"/>
                    </svg>
                </div>
            </span>
        </div>
    </span>
    <search id="search__tab" class="justify-center ">
        <div class="search__wrapper items-center justify-center">
            <div class="search__bubble">
                <div class="search__hd">
                    <span class="search__hd__title text-3xl b i">The SEARCH that WORKS!</span>
                    <span class="search__hd__copy">Find an air conditioning specialist near you</span>
                </div>
                <span class="breadcrumb__wrapper">
                    <span id="search__breadcrumb" class="search__breadcrumb" hidden></span>
                </span>
                <span class="search__inp__wrapper items-center">
                    <span class="trg search__loc justify-end"><i class="fa-solid fa-location-dot"></i></span>
                    <label for="search__inp" class="visually-hidden">Select a State</label>
                    <input id="search__inp" class="trg search__inp self-stretch text-lg" type="text" value="Select a State" placeholder="Select a State" title="Select a State">
                    <span class="trg search__crt"><i class="fa-solid fa-caret-down"></i></span>
                </span>
                <ul id="lb" hidden></ul>
            </div>
        </div>
        <section id="secSignup" class="sec__signup container justify-center">
            <div class="signup__wrapper gradient_grey">
                <span class="signup__hd text-5xl">SIGNUP TODAY!</span>
                <span class="signup__copy b text-xl">If you are in the Business of Air Conditioners then you must Advertise with us on AirConditioner.com and let people on the internet find you fast and easy since our <i>Positioning</i> is great that will increase the number of hits for your business.</span>
                <div class="items-center" style="gap:12px;margin-top:12px;">
                    <span class="text-sm" style="color:#666;">For sign-up information, please contact us via phone or email:</span>
                    <div class="items-center" style="gap:10px;">
                        <a class="contact-link" href="tel:+18187854151" aria-label="Call 818-785-4151"><i class="fa-solid fa-phone"></i> 818-785-4151</a>
                        <a class="contact-link" href="mailto:contact@airconditioner.com" aria-label="Email contact@airconditioner.com"><i class="fa-regular fa-envelope"></i> contact@airconditioner.com</a>
                    </div>
                </div>
            </div>
        </section>
    </search>
    <div id="resultsTab" class="res__tab justify-center" hidden>
        <div id="resultsTitle" class="res__title justify-center text-2xl b">
            <span class="res__title__copy justify-center">Air Conditioner Contractors in</span>
            <span id="resultsLoc" class="res__title__loc text-3xl b justify-center">Los Angeles, CA</span>
        </div>
        <div class="res__wrapper container">
            <span class="res__pagination justify-between ">
                <span class="page__current">
                    Showing Page <span id="page__current">1</span> of <span id="page__total">0</span> 
                </span>
                <span class="page__index items-center">
                    <button id="page__prev" disabled>
                        <i class="fa-solid fa-arrow-left"></i>
                        Prev</button>
                    <button id="page__next">
                        <i class="fa-solid fa-arrow-right"></i>
                        Next</button>
                </span>
            </span>
            <div id="ban__buck" class="ban__buck" hidden>
                <span class="ban__wrapper justify-center"><img src="banner/appli.jpg" alt="appli.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/asubcool.jpg" alt="asubcool.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/ava.jpg" alt="ava.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/coastalheatingandair.jpg" alt="coastalheatingandair.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/Francisco.jpg" alt="Francisco.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/Franco.jpg" alt="Franco.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/hector.jpg" alt="hector.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/iconnmechanical.jpg" alt="iconnmechanical.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/image.jpg" alt="image.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/jlcair.jpg" alt="jlcair.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/sande.jpg" alt="sande.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/SE1.jpg" alt="SE1.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/starsandstripesac.jpg" alt="starsandstripesac.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/tommy.jpg" alt="tommy.jpg" class="ban__img"></span>
                <span class="ban__wrapper justify-center"><img src="banner/usair.jpg" alt="usair.jpg" class="ban__img"></span>
                
            </div>
            <div id="stub__buck" class="stub__buck"></div>
            <button id="page__up" class="page__up">
                <i class="fa-solid fa-arrow-up"></i>
                Back Up
            </button>
        </div>
    </div>
    <footer class="container items-center">
        <span class="title">
            <img width="40" src="contractor-logo-silhouette.svg" alt="Contractor">
            <img width="200" src="contractor-logo-type2.svg" alt="HVAC Contractors">
        </span>
        <div class="footer__copy">
            <span class="text-lg b">HVAC Contractors</span>
            <span>AirConditionerContractors.com</span>
            <span class="footer__nav">
                <a href="mailto:contact@airconditioner.com"><i class="fa-regular fa-envelope"></i> Contact Us</a>
                <a href="disclaimer.php">Disclaimer</a>
                <a href="#signupModal" class="b" data-open-signup-modal aria-controls="signupModal">Sign Up</a>
            </span>
        </div>
    </footer>
    <span class="copyright justify-center text-sm">&copy; COPYRIGHT <?php echo date('Y'); ?> AirConditionerContractors.com &emsp;POWERED BY&nbsp;<a href="https://airconditioner.com">AIRCONDITIONER.COM</a></span>
    <!-- Sign Up Modal Markup -->
    <div id="signupModal" class="signup-modal" role="dialog" aria-modal="true" aria-labelledby="signupModalTitle" aria-describedby="signupModalDesc" hidden>
        <div class="signup-modal__backdrop" data-dismiss="signup-modal" aria-hidden="true"></div>
        <div class="signup-modal__dialog" tabindex="-1">
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
    <script src="cities2.js"></script>
    <script src="main8.js"></script>
    <script src="components/signup-modal.js"></script>
</body>
</html>