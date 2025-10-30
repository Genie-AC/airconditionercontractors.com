<!--foo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HVAC Contractors | Find Your AC Repair Contractor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        body        { margin:0;font:16px sans-serif;background: #214976 }
        .gradient_grey
                    { background: linear-gradient(0deg, rgba(220,220,220,1) 0%, rgba(255,255,255,1) 50%) }
        header      { display:flex;background:#fff;flex-direction:column;
                      padding:1em 1em 0;border-bottom:4px solid steelblue }
        nav         { display:flex;gap:1em;gap:30px;padding-top:15px;
                      margin-left:auto;justify-content:center }
        nav a       { color:steelblue;border-bottom:4px solid #fff;
                      padding:4px 0 }
        nav a:hover { border-color:deepskyblue }
        .ban__buck  { gap:10px }
        .ban__wrapper
                    { padding:15px;border:1pt solid #ccc;gap:4px;border-radius:8px;background: linear-gradient(0deg, rgba(255,255,255,1) 34%, rgba(238,238,238,1) 100%) }
        .ban__img   { max-width:800px;max-height:148px;border:1pt solid #888 }
        .logo       { display:flex;justify-content:center }
        .contractor-wrapper
                    { display:flex }
        .contractor { margin-bottom:-4px }
        .smiling-repairman__copy
                    { background:yellow;display:flex;padding:5px 15px;
                      border-radius:15px;margin:30px 0 0 -30px;border:1px solid; justify-content:flex-start;text-align:center; }
        .repairman__copy--tail
                    { margin-top:-1px }
                    
        search      { background:url('minisplit2.jpg') no-repeat center;
                      background-size:cover;height:300px;padding:1em;display:flex;align-items:center }
        search > b  { display:flex;flex-direction:column;padding:1em;border-radius:.5em;background:#ffffffaa;gap:1em;border:1px solid; }
                              
        .b                  { font-weight:bold!important }
        .i                  { font-style:italic!important }
        .text-sm            { font:14px sans-serif }
        .text-lg            { font:18px sans-serif }
        .text-xl            { font:20px sans-serif }
        .text-2xl           { font:24px sans-serif }
        .text-3xl           { font:30px sans-serif }
        .text-4xl           { font:36px sans-serif }
        .text-5xl           { font:48px/48px sans-serif }
        .items-center       { align-items: center }
        .self-stretch       { align-self: stretch }
        .justify-center     { justify-content: center }
        .justify-end        { justify-content: flex-end }
        .justify-between    { justify-content: space-between }
        
        .signup__wrapper    { padding:30px;margin:60px 1em;border-radius:15px;
                              max-width:400px;border:3px solid DimGrey;display:flex;flex-direction:column }
        .signup__hd         { font-weight:800;color:red;
                              border-bottom:1px solid DimGrey;padding-bottom:15px;margin-bottom:15px }
        .signup__copy       { display:inline }
        
        footer          { padding:100px 0;background:tan;gap:100px }
        .footer__copy   { gap:5px }
        .footer__nav    { gap:10px;border-top:1px solid DimGrey;margin-top:5px;padding-top:10px }
        footer a        { color:dimgrey }
        footer a:hover  { color:#fff }
        .copyright      { background:#000;color:#fff;padding:15px 0 15px }
        .copyright a    { color:deepskyblue }
        .copyright a:hover
                        { color:dimgrey }
        
    </style>
</head>
<body>
    <header class='gradient_grey'>
        <nav class="items-center">
            <a href="mailto:contact@airconditioner.com"><i class="fa-regular fa-envelope"></i> Contact Us</a>
            <a href="disclaimer.php">Disclaimer</a>
            <a href="#secSignup" class="b">Sign Up</a>
        </nav>
        <div class="logo">
            <img width="50" src="contractor-logo-silhouette.svg" alt="Contractor" class='contractor'>
            <img width="210" src="contractor-logo-type2.svg" alt=" Contractors">
        </div>
        <span class="contractor-wrapper">
            <img width="200" src="smiling-repairman2.png" alt="Smiling Contractor">
            <div class="bubble">
                <span class="smiling-repairman__copy b items-center text-lg i">Better Than the Yellow Pages&trade;</span>
                <svg width="140px" class="repairman__copy--tail" xmlns="http://www.w3.org/2000/svg" height="140px">
                    <path d="M 30 0 l -30 20 l 10 -20" fill="yellow" stroke="#000"/>
                </svg>
            </div>
        </span>
    </header>
    
    <search class="items-center justify-center">
        <b>
            <span class="search__hd__title text-3xl b i">The SEARCH that WORKS!</span>
            <span class="search__hd__copy">Find an air conditioning specialist near you</span>  
            <input id="search__inp" class="trg search__inp self-stretch text-lg" type="text" value="Select a State">
        </b>
    </search>
    
    <div class="signup__wrapper gradient_grey">
        <span class="signup__hd text-5xl">SIGNUP TODAY!</span>
        <span class="signup__copy b text-xl">If you are in the Business of Air Conditioners then you must Advertise with us on AirConditioner.com and let people on the internet find you fast and easy since our <i>Positioning</i> is great that will increase the number of hits for your business.</span>
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
                <a href="#secSignup" class="b">Sign Up</a>
            </span>
        </div>
    </footer>
    
    <!--<search id="search__tab" class="justify-center ">-->
    <!--    <div class="search__wrapper items-center justify-center">-->
    <!--        <div class="search__bubble">-->
                    
    <!--            </div>-->
    <!--            <span class="breadcrumb__wrapper">-->
    <!--                <span id="search__breadcrumb" class="search__breadcrumb" hidden></span>-->
    <!--            </span>-->
    <!--            <span class="search__inp__wrapper items-center">-->
    <!--                <span class="trg search__loc justify-end"><i class="fa-solid fa-location-dot"></i></span>-->
                    
    <!--                <span class="trg search__crt"><i class="fa-solid fa-caret-down"></i></span>-->
    <!--            </span>-->
    <!--            <ul id="lb" hidden></ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <section id="secSignup" class="sec__signup container justify-center">-->
            
    <!--    </section>-->
    <!--</search>-->
    
    <!--<div id="resultsTab" class="res__tab justify-center" hidden>-->
    <!--    <div id="resultsTitle" class="res__title justify-center text-2xl b">-->
    <!--        <span class="res__title__copy justify-center">Air Conditioner Contractors in</span>-->
    <!--        <span id="resultsLoc" class="res__title__loc text-3xl b justify-center">Los Angeles, CA</span>-->
    <!--    </div>-->
    <!--    <div class="res__wrapper container">-->
    <!--        <span class="res__pagination justify-between ">-->
    <!--            <span class="page__current">-->
    <!--                Showing Page <span id="page__current">1</span> of <span id="page__total">0</span> -->
    <!--            </span>-->
    <!--            <span class="page__index items-center">-->
    <!--                <button id="page__prev" disabled>-->
    <!--                    <i class="fa-solid fa-arrow-left"></i>-->
    <!--                    Prev</button>-->
    <!--                <button id="page__next">-->
    <!--                    <i class="fa-solid fa-arrow-right"></i>-->
    <!--                    Next</button>-->
    <!--            </span>-->
    <!--        </span>-->
    <!--        <div id="ban__buck" class="ban__buck" hidden>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/appli.jpg" alt="appli.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/asubcool.jpg" alt="asubcool.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/ava.jpg" alt="ava.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/coastalheatingandair.jpg" alt="coastalheatingandair.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/Francisco.jpg" alt="Francisco.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/Franco.jpg" alt="Franco.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/hector.jpg" alt="hector.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/iconnmechanical.jpg" alt="iconnmechanical.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/image.jpg" alt="image.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/jlcair.jpg" alt="jlcair.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/sande.jpg" alt="sande.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/SE1.jpg" alt="SE1.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/starsandstripesac.jpg" alt="starsandstripesac.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/tommy.jpg" alt="tommy.jpg" class="ban__img"></span>-->
    <!--            <span class="ban__wrapper justify-center"><img src="banner/usair.jpg" alt="usair.jpg" class="ban__img"></span>-->
                
    <!--        </div>-->
    <!--        <div id="stub__buck" class="stub__buck"></div>-->
    <!--        <button id="page__up" class="page__up">-->
    <!--            <i class="fa-solid fa-arrow-up"></i>-->
    <!--            Back Up-->
    <!--        </button>-->
    <!--    </div>-->
    <!--</div>-->
    
    <span class="copyright justify-center text-sm">&copy; COPYRIGHT 2024 AirConditionerContractors.com &emsp;POWERED BY&nbsp;<a href="https://airconditioner.com">AIRCONDITIONER.COM</a></span>
    <!--<script src="cities2.js"></script>-->
    <!--<script src="main8.js"></script>-->
</body>
</html>