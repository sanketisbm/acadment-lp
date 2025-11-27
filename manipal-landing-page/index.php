<?php
// Read JSON file
$jsonData = file_get_contents('data/testimonials.json');

// Convert JSON string to PHP array
$testimonials = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masters in Business Administration</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Slick Slider CSS -->
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/index.css">
    
    <!-- Meta Pixel Code -->
  
     <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '647703537631450');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=647703537631450&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    
    
    
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "u7dona5zdi");
    </script>
</head>

<body>
    <header class="position-fixed top-0 start-0 w-100 " style="z-index:20">
        <!-- Notice Bar -->
        <div class="notice-bar bg-light py-1 px-2">
            <div class="notice-text fw-bold small text-nowrap text-center">
                <span class="text-warning">15% discount on program fee, limited period offer!</span>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <span class="text-warning">15% discount on program fee, limited period offer!</span>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <span class="text-warning">15% discount on program fee, limited period offer!</span>
            </div>
        </div>

        <!-- Header Wrapper -->
        <div
            class="container bg-light rounded-4 shadow-sm d-flex justify-content-between align-items-center py-3 px-4 mt-2">
            <a href="#" class="d-inline-block">
                <img
                    src="assets/images/logo (1).webp"
                    alt="Acadment"
                    class="img-fluid  manipal-logo" />
            </a>

            <nav class="d-flex align-items-center gap-4">
                <!-- <a href="#" class="d-inline-block">
                    <img
                        src="assets/images/logo (1).webp"
                        alt="Acadment"
                        class="img-fluid  manipal-logo" />
                </a> -->
                <a
                    href="tel:+919373199999"
                    class="fw-semibold text-dark border-bottom border-2 border-secondary pb-1 text-decoration-none contact-number">
                    +91-9373 199 999
                </a>
                <button class="btn btn-lg btn-warning text-white fw-bold rounded-pill px-4 py-2 download-brochere" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Download MBA Brochure
                </button>
                <!-- <button class="btn btn-warning text-white fw-bold rounded-pill px-4 py-2 apply-now d-none">
                    Apply Now
                </button> -->
            </nav>
        </div>
    </header>

    <main class="course-specific-lp muj position-relative bg-white">
        <section id="banner" class="banner-section position-relative overflow-hidden" style="padding-top:6rem">
            <!-- SVG Doodle -->
            <svg class="doodle desktop animate d-none d-lg-block" xmlns="http://www.w3.org/2000/svg" width="1048" height="910" viewBox="871.757 0 1048.319 910" fill="none">
                <path d="M1999.5,993.502c-134-527.5-190.45-635.668-271.28-607.478c-80.83,28.192-46.71,208.77-20.37,349.576c20.7,110.598-62.63,176.401-174.891,53.991c-169.14-184.452-242.739-454.515-183.119-528.875c116.119-144.807,222.939,511.255,91.25,559.761c-202.811,74.701-416.46-399.763-548.067-936.37" stroke="rgba(157,218,240,0.3)" stroke-width="80"></path>
            </svg>

            <div class="banner-bg container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class=" col-lg-8 ">
                        <div class="first-row d-flex flex-column flex-md-row justify-content-between">
                            <div class="banner-content text-start mb-4 mb-md-0 col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                                <p class="tagline fs-6 text-dark mb-2">Advance Your Managerial Career With An</p>
                                <h1 class=" fw-semibold text-dark" style="font-size: 2.5rem;">
                                    <span class="position-relative highlight-text ">Online MBA From </span><br>
                                    Manipal University Jaipur
                                </h1>

                                <!-- Logos -->
                                <div class="d-flex align-items-center gap-4 mt-3 flex-wrap justify-content-start">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/UGC.svg" alt="UGC" width="55" loading="lazy">
                                        <span class="small">UGC-Entitled</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/naac-icon.svg" alt="NAAC" width="55" loading="lazy">
                                        <span class="small">NAAC A+ <br> Accredited</span>
                                    </div>
                                </div>

                                <button class="btn btn-lg btn-warning text-white fw-bold rounded-pill px-4 py-2 mt-4 dow-broch" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Download Brochure
                                </button>
                            </div>

                            <div class="text-center text-md-end  col-lg-6 col-md-6 " style="z-index:10">
                                <img src="assets/images/woman-graduation-cap-holds-diploma.webp" class="banner-image-2 img-fluid " alt="MBA Banner">
                            </div>

                        </div>
                        <!-- Scholarship Band -->
                        <div class="scholarship-band text-white rounded-end-pill px-4 py-3">
                            <div class="fw-bold">15% discount on program fee. <span class="fw-normal">Limited period offer!</span></div>
                        </div>
                    </div>
                    <!-- Right Form -->
                    <div class="form-box col-lg-4" style="z-index:10">
                        <div class="programLeadForm text-white p-4 rounded-start-4 rounded-end-0 shadow">
                            <h5 class="fw-bold mb-4">Share your details and we’ll get back to you.</h5>

                            <form id="programLeadForm" novalidate="">
                                <div class="mb-3">
                                    <input type="text" id="name" class="form-control form-control-lg" placeholder="Enter your full name" required="">
                                </div>
                                <div class="mb-3">
                                    <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter your email" required="">
                                </div>
                                <div class="mb-3 input-group">
                                    <span class="input-group-text bg-white border-end-0">
                                        <img src="assets/images/in.png" alt="India Flag" width="20">
                                        <span class="ms-1 text-dark">+91</span>
                                    </span>
                                    <input type="tel" id="phone" class="form-control form-control-lg border-start-0" placeholder="Enter your mobile number" maxlength="10" required="">
                                </div>

                                <!-- State Dropdown -->
                                <div class="mb-3">
                                    <select id="state" class="form-select form-select-lg" required="">
                                        <option value="">Select State</option>

                                    </select>
                                </div>

                                <!-- City Dropdown -->
                                <div class="mb-3">
                                    <select id="city" class="form-select form-select-lg city" required="">
                                        <option value="">Select City</option>
                                    </select>
                                </div>

                                <!-- Hidden Fields -->
                                <input type="hidden" id="country" value="INDIA">
                                <input type="hidden" id="course" value="Master of Business Administration (MBA)">
                                <input type="hidden" id="level" value="Postgraduate">
                                <input type="hidden" id="widget_name" value="Acadment">
                                <input type="hidden" id="lead_origin" value="API">
                                <input type="hidden" id="lead_source" value="DLP-MANIPAL">
                                <?php
                                $query_params = [];
                                parse_str(parse_url($current_url, PHP_URL_QUERY), $query_params);
                                $utm_source = isset($query_params['gad_source']) ? htmlspecialchars($query_params['gad_source'] || $query_params['utm_source']) : '';
                                $utm_medium = isset($query_params['gclid']) ? htmlspecialchars($query_params['gclid']) : '';
                                $utm_campaign = isset($query_params['utm_campaign']) ? htmlspecialchars($query_params['utm_campaign']) : '';
                                ?>
                                <input type="text" name="utm_source" id="utm_source" value="<?php echo base64_encode($utm_source); ?>" hidden>
                                <input type="text" name="utm_medium" id="utm_medium" value="<?php echo base64_encode($utm_medium) ?>" hidden>
                                <input type="text" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign ?>" hidden>

                                <div class="form-check text-start mb-3 small">
                                    <input class="form-check-input" type="checkbox" id="consentCheck" checked="">
                                    <label class="form-check-label" for="consentCheck" style="font-size: 12px;">
                                        I authorize Acadment and its associates to contact me with updates via email,
                                        SMS, WhatsApp, and voice call.
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-brown w-100 py-2 fw-bold text-uppercase" disabled="">
                                    Apply Now
                                </button>
                                <div class="form-footer">
                                    <div class="deadline">
                                        <div class="label">Application closes in</div>
                                        <div class="time">0d 11h 17m</div>
                                    </div> <span class="footer-divider" aria-hidden="true"></span>
                                    <div class="seats">
                                        <div class="progress-circle" data-percent="82" style="display: flex;"> <svg viewBox="0 0 36 36" aria-hidden="true" style=""> <!-- background track -->
                                                <path class="track" d="M18 2a16 16 0 1 1 0 32a16 16 0 1 1 0-32"></path> <!-- progress arc -->
                                                <path class="bar" d="M18 2a16 16 0 1 1 0 32a16 16 0 1 1 0-32" stroke-dasharray="82, 100"></path>
                                            </svg>
                                            <div class="progress-text">
                                                <div class="pct">82%</div>
                                                <div class="cap">Seats filled!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="stat-strip section-mb">
            <div class="container">
                <div class="row g-0">

                    <!-- Duration -->
                    <div class="col-lg-3 col-md-3 col-6 stat-item">
                        <div class="d-flex flex-column">
                            <span class="stat-label">Duration:</span>
                            <span class="stat-value">24 months</span>
                        </div>
                    </div>

                    <!-- Fees -->
                    <div class="col-lg-3 col-md-3 col-6 stat-item">
                        <div class="d-flex flex-column">
                            <span class="stat-label">Fees:</span>
                            <span class="stat-value">43,750 <span>per semester</span></span>
                        </div>
                    </div>

                    <!-- Eligibility -->
                    <div class="col-lg-3 col-md-3 col-6 stat-item">
                        <div class="d-flex flex-column">
                            <span class="stat-label">Eligibility:</span>
                            <span class="stat-value text-orange">No experience required</span>
                        </div>
                    </div>

                    <!-- Coursera -->
                    <div class="col-lg-3 col-md-3 col-6 stat-item">
                        <div class="d-flex align-items-center">
                            <img
                                src="assets/images/UNIT-_Coursera.svg"
                                alt="Coursera"
                                width="30"
                                height="30"
                                class="me-2 rounded-1" />
                            <span class="fw-semibold stat-label text-dark">
                                Complimentary Access To Paid Coursera Content
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="ranking" class="ranking-accredition section-mb top-ranking-section">
            <div class="ranking-wrapper container">
                <div class="ranking-section-top">
                    <h2 class="section-title text-center">Rankings & Accreditations</h2>
                </div>
                <div class="row">
                    <div class="logo-content d-flex flex-wrap justify-content-center align-items-center rank-card-container">

                        <!-- NAAC -->
                        <div class="col-12 p-4" style="width: 326px;">

                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/NAAC-A-2.jpg.webp" alt="NAAC A+ Accredited University" width="100">
                                </div>

                                <div class="rank-card-title">
                                    Rajasthan's</span> 1<sup>st</sup>
                                    NAAC A+ Accredited University
                                </div>
                            </div>
                        </div>

                        <!-- UGC -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/UGC-2.jpg.webp" alt=" UGC-entitled Online Degrees Equivalent to Campus Degree" width="100">
                                </div>
                                <div class="rank-card-title">
                                    UGC-entitled Online Degrees Equivalent to Campus Degree
                                </div>
                            </div>
                        </div>

                        <!-- AICTE -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/WES-2.jpg.webp" alt="Globally Recognized Online Degrees" width="100">
                                </div>
                                <div class="rank-card-title">
                                    Globally Recognized Online Degrees
                                </div>
                            </div>
                        </div>

                        <!-- AACSB -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/AICTE-3-1.jpg.webp" alt="AICTE Norms Compliant" width="100">
                                </div>
                                <div class="rank-card-title">
                                    AICTE Norms Compliant
                                </div>
                            </div>
                        </div>

                        <!-- CGPURC -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/NBA.jpg.webp" alt=" MBA program accredited by NBA" width="80">
                                </div>
                                <div class="rank-card-title">
                                    MBA program accredited by NBA
                                </div>
                            </div>
                        </div>

                        <!-- State Govt. NOC -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-badge">
                                    <div class="rank-top">
                                        <span> Rank 13 </span>
                                    </div>
                                </div>
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/Career360-1.jpg.webp" alt="Amongst India's Top 15 Universities (Management) 2023" width="80">
                                </div>
                                <div class="rank-card-title">
                                    Amongst India's Top 15 Universities (Management) 2023
                                </div>
                            </div>
                        </div>

                        <!-- BCI -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-badge">
                                    <div class="rank-top">
                                        <span> Top 225 </span>
                                    </div>
                                </div>
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/QS-2.jpg.webp" alt="Amongst South Asia's Top Universities in 2024" width="100">
                                </div>
                                <div class="rank-card-title">
                                    Amongst South Asia's Top Universities in 2024
                                </div>
                            </div>
                        </div>

                        <!-- PCI -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/ACU-3.jpg.webp" alt=" Member of ACU" width="100">
                                </div>
                                <div class="rank-card-title">
                                    Member of ACU
                                </div>
                            </div>
                        </div>

                        <!-- AIU -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/ICAS-1.jpg.webp" alt="International Credential Assessment Service of Canada" width="100">
                                </div>
                                <div class="rank-card-title">
                                    International Credential Assessment Service of Canada
                                </div>
                            </div>
                        </div>

                        <!-- NSDC -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/IQAS_Online-Manipal-Website.jpg.webp" alt=" International Qualifications Assessment Service" width="100">
                                </div>
                                <div class="rank-card-title">
                                    International Qualifications Assessment Service
                                </div>
                            </div>
                        </div>

                        <!-- IAU -->
                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-badge">
                                    <div class="rank-top">
                                        <span> Top 60 </span>
                                    </div>
                                </div>
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/NIRF-1.jpg.webp" alt="Amongst India’s Top #60 Universities in 2025" width="100">
                                </div>
                                <div class="rank-card-title">
                                    Amongst India’s Top #60 Universities in 2025
                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-4" style="width: 326px;">
                            <div class="rank-line-item text-center">
                                <div class="rank-card-img mb-3">
                                    <img src="assets/images/rec2/zaqa-logo.jpg.webp" alt="Zambia Qualifications Authority" width="100">
                                </div>
                                <div class="rank-card-title">
                                    Zambia Qualifications Authority
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="guided-mentorship section-mb py-5">
            <!-- doodle bg -->
            <svg class="doodle" viewBox="0 0 1767 767" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.2"
                    d="M1758.22 269.944C1618.48 308.018 1266.94 1038.73 931.288 592.767C799.046 417.062 941.725 19.4498 1098.47 123.284C1266.94 234.883 761.111 632.859 527.225 619.704C147.106 598.325 -182.324 129.806 -209.009 6.90089"
                    stroke="#D6D6D6" stroke-width="60" />
            </svg>

            <div class="container position-relative">
                <div class="row align-items-center justify-content-between g-4">
                    <!-- left -->
                    <div class="col-lg-6">
                        <h2 class="section-title mb-4">
                            Manipal University <span class="circle-word">advantages</span>
                        </h2>

                        <ul class="feature-list">
                            <li>
                                <div class="fw-bold">UGC-entitled degrees</div>
                                <div>Access UGC-entitled degrees from world-class universities that are NAAC accredited.</div>
                            </li>
                            <li>
                                <div class="fw-bold">Industry webinars &amp; simulations</div>
                                <div>Attend webinars by industry experts to gain industry-specific knowledge.</div>
                            </li>
                            <li>
                                <div class="fw-bold">Free Coursera access</div>
                                <div>Get exclusive access to 10,000+ courses on Coursera.</div>
                            </li>
                            <li>
                                <div class="fw-bold">Prestigious Manipal University alumni status</div>
                                <div>Benefit from 70+ years of Manipal University legacy and join a 150,000+ member alumni network.</div>
                            </li>
                        </ul>
                    </div>

                    <!-- right -->
                    <div class="col-lg-5">
                        <div class="figure-wrap">
                            <img src="assets/images/star-pink.svg"
                                alt="star" class="pink-star">
                            <img src="assets/images/mentorship-support.webp"
                                class="img-fluid rounded-3" alt="Mentorship & Support">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="curriculum" class="curriculum">
            <div class="container">

                <h2 class="section-title mb-3">Course Curriculum</h2>

                <!-- small stat icons (optional) -->
                <div class="d-flex align-items-center gap-4 mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/duration-white.svg" width="20" height="20" alt="">
                        <span>24 months</span>
                    </div>
                    <img src="assets/images/calendar.svg" width="20" height="20" alt="">
                    <img src="assets/images/list-edit.svg" width="20" height="20" alt="">
                    <img src="assets/images/Star-white.svg" width="20" height="20" alt="">
                </div>

                <!-- tabs + brochure -->
                <div class="d-flex justify-content-between tabs-wrap mb-3">
                    <ul class="nav nav-pills" id="yearTabs" role="tablist">
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link active" id="y1-tab" data-bs-toggle="tab" data-bs-target="#y1" type="button" role="tab">Year 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="y2-tab" data-bs-toggle="tab" data-bs-target="#y2" type="button" role="tab">Year 2</button>
                        </li>
                    </ul>

                    <a class="dl-btn" href="#">
                        <img src="assets/images/download-icon.svg" width="16" height="16" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Download MBA Brochure Now
                    </a>
                </div>

                <div class="tab-content">

                    <!-- YEAR 1 -->
                    <div class="tab-pane fade show active" id="y1" role="tabpanel">

                        <!-- Desktop: two cards -->
                        <div class="row g-4 sem-desktop">
                            <div class="col-lg-6">
                                <div class="sem-card">
                                    <span class="sem-chip bg-blue">Semester 1</span>
                                    <ul class="feature-list">
                                        <li>Entrepreneurial Practice</li>
                                        <li>Business Communication (WAC)</li>
                                        <li>Managerial Economics</li>
                                        <li>Financial Accounting</li>
                                        <li>Data Visualisation (Excel/Tableau)</li>
                                        <li>Organizational Behaviour</li>
                                        <li>Marketing Management</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sem-card">
                                    <span class="sem-chip bg-lime">Semester 2</span>
                                    <ul class="feature-list">
                                        <li>Business Research Methods (R/Python)</li>
                                        <li>Operation Management</li>
                                        <li>Human Resource Management</li>
                                        <li>Management Accounting</li>
                                        <li>Financial Management</li>
                                        <li>Legal Aspects of Business</li>
                                        <li>Business Communication (VAC)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile: accordion -->
                        <div class="accordion sem-accordion mt-3" id="y1Acc">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button hdr bg-blue" type="button" data-bs-toggle="collapse" data-bs-target="#y1s1">Semester 1</button>
                                </h2>
                                <div id="y1s1" class="accordion-collapse collapse show" data-bs-parent="#y1Acc">
                                    <div class="accordion-body">
                                        <ul class="feature-list mb-0">
                                            <li>Entrepreneurial Practice</li>
                                            <li>Business Communication (WAC)</li>
                                            <li>Managerial Economics</li>
                                            <li>Financial Accounting</li>
                                            <li>Data Visualisation (Excel/Tableau)</li>
                                            <li>Organizational Behaviour</li>
                                            <li>Marketing Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed hdr bg-lime" type="button" data-bs-toggle="collapse" data-bs-target="#y1s2">Semester 2</button>
                                </h2>
                                <div id="y1s2" class="accordion-collapse collapse" data-bs-parent="#y1Acc">
                                    <div class="accordion-body">
                                        <ul class="feature-list mb-0">
                                            <li>Business Research Methods (R/Python)</li>
                                            <li>Operation Management</li>
                                            <li>Human Resource Management</li>
                                            <li>Management Accounting</li>
                                            <li>Financial Management</li>
                                            <li>Legal Aspects of Business</li>
                                            <li>Business Communication (VAC)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /YEAR 1 -->

                    <!-- YEAR 2 -->
                    <div class="tab-pane fade" id="y2" role="tabpanel">

                        <!-- Desktop: two cards (Sem 3 & 4) -->
                        <div class="row g-4 sem-desktop">
                            <div class="col-lg-6">
                                <div class="sem-card">
                                    <span class="sem-chip bg-yellow">Semester 3</span>
                                    <ul class="feature-list">
                                        <li>Strategic Management</li>
                                        <li>Term Paper</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sem-card">
                                    <span class="sem-chip bg-pink">Semester 4</span>
                                    <ul class="feature-list">
                                        <li>International Business Management</li>
                                        <li>Project</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile: accordion -->
                        <div class="accordion sem-accordion mt-3" id="y2Acc">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button hdr bg-yellow" type="button" data-bs-toggle="collapse" data-bs-target="#y2s3">Semester 3</button>
                                </h2>
                                <div id="y2s3" class="accordion-collapse collapse show" data-bs-parent="#y2Acc">
                                    <div class="accordion-body">
                                        <ul class="sem-list mb-0">
                                            <li>Strategic Management</li>
                                            <li>Term Paper</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed hdr bg-pink" type="button" data-bs-toggle="collapse" data-bs-target="#y2s4">Semester 4</button>
                                </h2>
                                <div id="y2s4" class="accordion-collapse collapse" data-bs-parent="#y2Acc">
                                    <div class="accordion-body">
                                        <ul class="sem-list mb-0">
                                            <li>International Business Management</li>
                                            <li>Project</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="course-fee-section py-5">
            <div class="container">
                <h2 class="section-title mb-4">Course Fee</h2>

                <!-- Course Fee Box -->
                <div class="bg-light-purple p-4 rounded-4 text-dark">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <p class="mb-2 fw-medium">Full course fee (Four semesters)</p>
                            <h3 class="fw-bold display-5 mb-0">INR 1,75,000</h3>
                            <small>Inclusive of all taxes</small>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="bg-white p-3 rounded-4 h-100">
                                        <p class="mb-1 fw-medium">Each semester fee</p>
                                        <h4 class="fw-bold mb-0">INR 43,750</h4>
                                        <small>Inclusive of all taxes</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-white p-3 rounded-4 h-100">
                                        <p class="mb-1 fw-medium">EMI starting at</p>
                                        <h4 class="fw-bold mb-0">INR 7,292 <span class="fs-6">/Month</span></h4>
                                        <small>Terms &amp; conditions apply</small>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="bg-white rounded-4 mt-3 p-2 d-flex align-items-center">-->
                            <!--    <img-->
                            <!--        src="assets/images/note.svg"-->
                            <!--        alt="note"-->
                            <!--        height="20"-->
                            <!--        width="20"-->
                            <!--        class="me-2" />-->
                            <!--    <span class="fw-medium">Note for online payments</span>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>

                <!-- Scholarships Section -->
                <div class="mt-5 text-dark">
                    <h4 class="fw-bold mb-4">Easy EMI & Scholarships</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="bg-light-gray p-4 rounded-4 d-flex align-items-center h-100">
                                <img
                                    src="assets/images/scheme.svg"
                                    alt="emi"
                                    height="60"
                                    width="60"
                                    class="me-3" />
                                <div>
                                    <h5 class="fw-bold mb-1">No-cost EMI</h5>
                                    <p class="mb-0 small text-muted">
                                        Hassle-free learning with no-cost EMIs, low interest rates, and flexible part-payment options.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-light-gray p-4 rounded-4 d-flex align-items-center justify-content-between h-100">
                                <div class="d-flex align-items-center">
                                    <img
                                        src="assets/images/emi.svg"
                                        alt="scholarship"
                                        height="60"
                                        width="60"
                                        class="me-3" />
                                    <div>
                                        <h5 class="fw-bold mb-1">Manipal University scholarship scheme</h5>
                                        <p class="mb-0 small text-muted">
                                            Exclusive scholarships of up to 20% for various categories.
                                        </p>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none fw-medium text-dark">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <button class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-white">Get In Touch</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="admission-process py-5 text-white position-relative">
            <div class="bg-overlay"></div>
            <div class="container position-relative">
                <h2 class="fw-bold mb-5">Admission Process</h2>

                <div class="process-line d-none d-lg-block"></div>

                <div class="row justify-content-between position-relative">
                    <div class="col-lg-3 col-md-12 mb-4 step-item">
                        <div class="step-circle">1</div>
                        <div class="step-card">
                            <h5 class="fw-bold mb-2">Application</h5>
                            <p class="mb-0">
                                Fill in your basic, education & work experience-related details and pay
                                the application fee to register.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 mb-4 step-item">
                        <div class="step-circle">2</div>
                        <div class="step-card">
                            <h5 class="fw-bold mb-2">Fee payment</h5>
                            <p class="mb-0">
                                Pay the admission fee for the first semester/year or full program.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 mb-4 step-item">
                        <div class="step-circle">3</div>
                        <div class="step-card">
                            <h5 class="fw-bold mb-2">Document upload</h5>
                            <p class="mb-0">
                                Upload supporting documents & submit your application.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 mb-4 step-item">
                        <div class="step-circle">4</div>
                        <div class="step-card">
                            <h5 class="fw-bold mb-2">University approval</h5>
                            <p class="mb-0">
                                The university will evaluate your documents to confirm your admission.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="specialization-section py-5">
            <div class="container">
                <h2 class="section-title mb-4">
                    Electives / Specializations Offered
                </h2>

                <div class="specialization-offered-slider">
                    <!-- 1 -->
                    <div>
                        <div class="line-items">
                            <div class="secialization-desc">
                                <img src="assets/images/specialization.svg" width="36" height="36" alt="icon">
                                <p class="specialization-txt mb-0">Marketing Management</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div>
                        <div class="line-items">
                            <div class="secialization-desc">
                                <img src="assets/images/specialization.svg" width="36" height="36" alt="icon">
                                <p class="specialization-txt mb-0">Finance Management</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div>
                        <div class="line-items">
                            <div class="secialization-desc">
                                <img src="assets/images/specialization.svg" width="36" height="36" alt="icon">
                                <p class="specialization-txt mb-0">Human Resource Management</p>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div>
                        <div class="line-items">
                            <div class="secialization-desc">
                                <img src="assets/images/specialization.svg" width="36" height="36" alt="icon">
                                <p class="specialization-txt mb-0">Operations Management</p>
                            </div>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div>
                        <div class="line-items">
                            <div class="secialization-desc">
                                <img src="assets/images/specialization.svg" width="36" height="36" alt="icon">
                                <p class="specialization-txt mb-0">Analytics & Data Science</p>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div>
                        <div class="line-items">
                            <div class="secialization-desc">
                                <img src="assets/images/specialization.svg" width="36" height="36" alt="icon">
                                <p class="specialization-txt mb-0">International Business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="admission-process py-5">
            <div class="container position-relative">
                <h2 class="section-title text-white mb-5">
                    Admission Process
                </h2>

                <!-- Steps wrapper -->
                <div class="process-line d-lg-flex gap-4 justify-content-between">
                    <!-- STEP -->
                    <div class="step d-lg-flex align-items-start">
                        <span class="num d-inline-grid place-items-center">1</span>
                        <div class="card step-card shadow-sm">
                            <h3 class="step-title mb-2">Application</h3>
                            <p class="mb-0">
                                Fill in your basic, education & work experience-related details and pay
                                the application fee to register.
                            </p>
                        </div>
                    </div>

                    <div class="step d-lg-flex align-items-start">
                        <span class="num d-inline-grid place-items-center">2</span>
                        <div class="card step-card shadow-sm">
                            <h3 class="step-title mb-2">Fee payment</h3>
                            <p class="mb-0">
                                Pay the admission fee for the first semester/year or full program.
                            </p>
                        </div>
                    </div>

                    <div class="step d-lg-flex align-items-start">
                        <span class="num d-inline-grid place-items-center">3</span>
                        <div class="card step-card shadow-sm">
                            <h3 class="step-title mb-2">Document upload</h3>
                            <p class="mb-0">
                                Upload supporting documents & submit your application.
                            </p>
                        </div>
                    </div>

                    <div class="step d-lg-flex align-items-start">
                        <span class="num d-inline-grid place-items-center">4</span>
                        <div class="card step-card shadow-sm">
                            <h3 class="step-title mb-2">University approval</h3>
                            <p class="mb-0">
                                The university will evaluate your documents to confirm your admission.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="potential-career py-5">
            <div class="container">
                <h2 class="section-title mb-4 ">Potential Career Options</h2>

                <!-- Job Profiles -->
                <div class="job-title mb-3">Job Profiles</div>
                <div class="job-slider">
                    <!-- slide -->
                    <div>
                        <div class="chip-card">
                            <span class="chip-icon">
                                <img src="assets/images/right-tick.svg" width="20" height="20" alt="">
                            </span>
                            <span class="chip-text">General Manager</span>
                        </div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Finance Manager</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Operations Lead</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">HR Associate</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Digital Marketer</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Territory Manager</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Supply Chain Manager</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Quality Controller</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Project Manager</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon"><img src="assets/images/right-tick.svg" width="20" height="20" alt=""></span><span class="chip-text">Entrepreneurship</span></div>
                    </div>
                </div>

                <!-- Industries -->
                <div class="industries-title mt-5 mb-3">Industries</div>
                <div class="industries-slider">
                    <div>
                        <div class="chip-card">
                            <span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span>
                            <span class="chip-text">Advertising</span>
                        </div>
                    </div>

                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">Consulting</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">Retail</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">FMCG</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">Media &amp; Publication</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">Manufacturing</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">EdTech</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">Financial Services</span></div>
                    </div>
                    <div>
                        <div class="chip-card"><span class="chip-icon chip-icon-lg"><img src="assets/images/ind.svg" width="28" height="28" alt=""></span><span class="chip-text">Banking</span></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial py-5">
            <div class="container">
                <h2 class="section-title mb-4 ">
                    Real Stories, Real <span class="text-dark">Impact</span>
                </h2>

                <div class="testimonial-slider">
                    <?php foreach ($testimonials as $student): ?>
                        <div class="px-3">
                            <div class="card testimonial-card h-100">
                                <img src="assets/images/testimonials/<?php echo htmlspecialchars($student['image']); ?>"
                                    class="card-img-top" alt="images/testimonials/<?php echo htmlspecialchars($student['image']); ?>">
                                <div class="card-body d-flex flex-column">
                                    <p class="card-text flex-grow-1">
                                        <?php echo htmlspecialchars($student['testimonial']); ?> <a href="#" class="read-more">Read More</a>
                                    </p>
                                    <div class="mt-3">
                                        <h6 class="mb-0 fw-bold"><?php echo htmlspecialchars($student['name']); ?></h6>
                                        <small class="text-muted"><?php echo htmlspecialchars($student['field']); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>



        <!-- CTA FOOTER (Bootstrap 5) -->
        <footer class="cta-footer position-relative">
            <div class="container py-lg-5 py-4 position-relative">
                <!-- background doodle -->
                <svg class="cta-doodle position-absolute top-0 start-0" viewBox="0 0 1920 832" aria-hidden="true">
                    <path d="M-668 152C-639.667 417.167 -288.1 487.78 839.5 -42.6199C2249 -705.62 86.5 655 798.5 703.5C930.267 712.476 1025.5 691.995 1147.5 648.5M1147.5 648.5C1779 601.683 2062.04 -114.691 1608.5 13C1089.5 159.12 1032.5 760.683 1147.5 648.5ZM1147.5 648.5C1368.5 836.021 1885.8 936.98 2289 -42.6199"
                        stroke="#E8E8B7" stroke-width="120" fill="none" />
                </svg>

                <div class="row align-items-end">
                    <!-- Left: form -->
                    <div class="col-lg-7 z-1">
                        <h2 class="section-title  mb-2">Advance Your Career</h2>
                        <p class="text-muted mb-4">Fill in your information, and our team will connect with you shortly.</p>

                        <form class="needs-validation" id="secondaryLeadForm" novalidate>
                            <div class="row g-3">

                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Full name <span class="text-danger">*</span></label>
                                    <input type="text" id="name2" class="form-control" placeholder="Enter your full name" required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label">Email address <span class="text-danger">*</span></label>
                                    <input type="email" id="email2" class="form-control" placeholder="Enter your email" required>
                                </div>

                                <!-- Mobile -->
                                <div class="col-md-6">
                                    <label class="form-label">Mobile number <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text px-2">
                                            <span class="me-1">🇮🇳</span> +91
                                        </span>
                                        <input type="tel" id="phone2" class="form-control" placeholder="Enter your mobile number" maxlength="10" required>
                                    </div>
                                </div>

                                <!-- State -->
                                <div class="col-md-6">
                                    <label class="form-label">State <span class="text-danger">*</span></label>
                                    <select id="state2" class="form-select state2" required>
                                        <option value="">Select State</option>
                                    </select>
                                </div>

                                <!-- City -->
                                <div class="col-md-6">
                                    <label class="form-label">City <span class="text-danger">*</span></label>
                                    <select id="city2" class="form-select city2" required>
                                        <option value="">Select City</option>
                                    </select>
                                </div>

                                <!-- Consent -->
                                <div class="col-12">
                                    <div class="form-check d-flex gap-2">
                                        <input class="form-check-input mt-0" type="checkbox" id="consent2" checked>
                                        <label class="form-check-label small text-muted" for="consent2">
                                            I authorize Acadment and its associates to contact me via Email, SMS, WhatsApp, and voice call.
                                        </label>
                                    </div>
                                </div>

                                <!-- Hidden fields -->
                                <input type="hidden" id="country2" value="INDIA">
                                <input type="hidden" id="course2" value="Master of Business Administration (MBA)">
                                <input type="hidden" id="level2" value="Postgraduate">
                                <input type="hidden" id="widget_name2" value="Acadment">
                                <input type="hidden" id="lead_origin2" value="API">
                                <input type="hidden" id="lead_source2" value="DLP-MANIPAL">
                                 <?php
                                $query_params = [];
                                parse_str(parse_url($current_url, PHP_URL_QUERY), $query_params);
                                $utm_source = isset($query_params['gad_source']) ? htmlspecialchars($query_params['gad_source'] || $query_params['utm_source']) : '';
                                $utm_medium = isset($query_params['gclid']) ? htmlspecialchars($query_params['gclid']) : '';
                                $utm_campaign = isset($query_params['utm_campaign']) ? htmlspecialchars($query_params['utm_campaign']) : '';
                                ?>
                                <input type="text" name="utm_source2" id="utm_source2" value="<?php echo base64_encode($utm_source); ?>" hidden>
                                <input type="text" name="utm_medium2" id="utm_medium2" value="<?php echo base64_encode($utm_medium) ?>" hidden>
                                <input type="text" name="utm_campaign2" id="utm_campaign2" value="<?php echo $utm_campaign ?>" hidden>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button class="btn btn-brown btn-lg px-5 rounded-pill w-100" id="submit2" type="submit" disabled>Apply Now</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <!-- Right: image -->
                    <div class="col-lg-5 position-relative">
                        <img
                            src="assets/images/footer-lady-1.webp"
                            class="cta-agent-img img-fluid ms-lg-auto"
                            alt="Support agent">
                    </div>
                </div>
            </div>

            <!-- bottom bar -->
            <div class="container py-3 d-flex justify-content-center gap-3 small text-muted">
                <div>© 2025 Acadment. ALL RIGHTS RESERVED.</div>
            </div>
        </footer>




    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Cancel button in the top-right corner -->

                <div class="modal-body p-0">
                    <div class="modal_banner">
                        <div class="form-section">
                            <button type="button" class="btn-close2 position-absolute top-0 end-0 m-2"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            <h3>Apply Now</h3>
                            <p>Please fill in your details below. </p>
                            <form id="modalLeadForm" novalidate class="formPanel">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="name3"  placeholder="Enter your Name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" id="email3"  placeholder="Enter your Email" required>
                                </div>
                                <div class="form-group mb-3" style="display: flex;">
                                    <input type="text" maxlength="10" style="width: 100%;" id="phone3"  class="form-control"
                                        placeholder="Phone Number"  autocomplete="off" required>
                                </div>
                                <div class="form-group mb-3">
                                    <select class="form-control form-select state3" id="state3" required>
                                        <option value>Select State</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select class="form-control form-select city3" id="city3" required>
                                        <option value>Select City</option>
                                    </select>
                                </div>
                             

                                 <!-- Hidden fields -->
                                <input type="hidden" id="country3"  value="INDIA">
                                <input type="hidden" id="course3" value="Master of Business Administration (MBA)">
                                <input type="hidden" id="level3" value= "Postgraduate">
                                <input type="hidden" id="widget_name3"  value="Acadment">
                                <input type="hidden" id="lead_origin3" value="API">
                                <input type="hidden" id="lead_source3" value="DLP-MANIPAL">
                                <?php
                                $query_params = [];
                                $utm_source = isset($query_params['gad_source']) ? htmlspecialchars($query_params['gad_source'] || $query_params['utm_source']) : '';
                                $utm_medium = isset($query_params['gclid']) ? htmlspecialchars($query_params['gclid']) : '';
                                $utm_campaign = isset($query_params['utm_campaign']) ? htmlspecialchars($query_params['utm_campaign']) : '';
                                ?>
                                <input type="text" name="utm_source3" id="utm_source3" value="<?php echo base64_encode($utm_source); ?>" hidden>
                                <input type="text" name="utm_medium3" id="utm_medium3" value="<?php echo base64_encode($utm_medium) ?>" hidden>
                                <input type="text" name="utm_campaign3" id="utm_campaign3" value="<?php echo $utm_campaign ?>" hidden>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                        By clicking on submit I allow Acadment to call me & send program information on Email/Phone.
                                    </label>
                                </div>
                                <div class="form-group mb-3 d-flex justify-content-center">
                                    <input type="submit" id="submitButton" name="submit" value="Apply Now" class="btn banner-button btn-primary" />
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (required by Slick) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="assets/slick/slick.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.logo-content').slick({
                dots: true,
                autoplay: true,
                infinite: true,
                speed: 3000, // Adjust speed for faster sliding
                autoplaySpeed: 0, // Set to 0 for continuous movement
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1300,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.testimonial-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 800,
                slidesToShow: 4,
                slidesToScroll: 1,
                variableWidth: false, // keep equal widths
                adaptiveHeight: false,
                cssEase: 'ease',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Job Profiles slider
            $('.job-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 700,
                slidesToShow: 4,
                slidesToScroll: 1,
                cssEase: 'ease',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Industries slider
            $('.industries-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 700,
                slidesToShow: 4,
                slidesToScroll: 1,
                cssEase: 'ease',
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $('.specialization-offered-slider').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 800,
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: true,
                cssEase: 'ease',
                prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><i class="fa fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next" aria-label="Next"><i class="fa fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 4
                        }
                    }
                ]
            });

            $('.rank-line-item').each(function() {
                const txt = $.trim($(this).find('.rank-top').text());
                if (txt.length) $(this).find('.rank-badge').css('display', 'block');
            });

            // Fetch states when page loads
            fetch_states();

            // When a state is selected, fetch its cities
            $("#state").on("change", function() {
                fetch_city();
            });

            fetch_states2();

            // When a state is selected, fetch its cities
            $("#state2").on("change", function() {
                fetch_city2();
            });

            fetch_states3();

            // When a state is selected, fetch its cities
            $("#state3").on("change", function() {
                fetch_city3();
            });
            // Validate input fields
            $("#programLeadForm input, #programLeadForm select, #consentCheck").on("input change", validateForm);

            // Handle form submit
            $("#programLeadForm").on("submit", function(e) {
                e.preventDefault();

                if (!validateForm()) return;

                const data = {
                    name: $("#name").val().trim(),
                    email: $("#email").val().trim(),
                    phone: $("#phone").val().trim(),
                    state: $("#state").val(),
                    city: $("#city").val(),
                    country: $("#country").val(),
                    course: $("#course").val(),
                    level: $("#level").val(),
                    user_registration_date: new Date().toISOString().slice(0, 19).replace("T", " "),
                    widget_name: $("#widget_name").val(),
                    lead_origin: $("#lead_origin").val(),
                    lead_source: $("#lead_source").val(),
                    current_url: window.location.href,
                    utm_source: $("#utm_source").val() || "NA",
                    utm_medium: $("#utm_medium").val() || "NA",
                    utm_campaign: $("#utm_campaign").val() || "NA",
                    additional_remark: $("#additional_remark").val() || ""
                };

                $.ajax({
                    url: "https://insityapp.com/api/leads/allocate-dlp",
                    type: "POST",
                    data: JSON.stringify(data), // Send JSON
                    contentType: "application/json", // Tell server it’s JSON
                    dataType: "json", // Expect JSON response
                    success: function(response) {
                        console.log(response);
                        if (response.status === "success") {
                            // alert("✅ Form submitted successfully!");
                            // $("#programLeadForm")[0].reset();
                            // $("button[type='submit']").prop("disabled", true);
                            window.location.href = "thank-you.php";
                        } else if (response.status === "duplicate") {
                            alert("⚠️ Duplicate lead submission detected.");
                        } else {
                            alert("⚠️ Unexpected response from server.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error, xhr.responseText);
                        alert("❌ Error submitting form. Please try again later.");
                    }
                });
            });

            // Enable submit button only if form is valid
            $("#secondaryLeadForm input, #secondaryLeadForm select").on("input change", function() {
                const allFilled = $("#name2").val().trim() &&
                    $("#email2").val().trim() &&
                    $("#phone2").val().trim().length === 10 &&
                    $("#state2").val() &&
                    $("#city2").val();
                $("#submit2").prop("disabled", !allFilled);
            });

            // Form submit
            $("#secondaryLeadForm").on("submit", function(e) {
                e.preventDefault();

                // Basic validation
                const phone = $("#phone2").val().trim();
                if (!/^\d{10}$/.test(phone)) {
                    alert("Please enter a valid 10-digit mobile number.");
                    return;
                }

                const data = {
                    name: $("#name2").val().trim(),
                    email: $("#email2").val().trim(),
                    phone: phone,
                    state: $("#state2").val(),
                    city: $("#city2").val(),
                    country: $("#country2").val(),
                    course: $("#course2").val(),
                    level: $("#level2").val(),
                    user_registration_date: new Date().toISOString().slice(0, 19).replace("T", " "),
                    widget_name: $("#widget_name2").val(),
                    lead_origin: $("#lead_origin2").val(),
                    lead_source: $("#lead_source2").val(),
                    current_url: window.location.href,
                    utm_source: $("#utm_source2").val(),
                    utm_medium: $("#utm_medium2").val(),
                    utm_campaign: $("#utm_campaign2").val()
                };

                $.ajax({
                    url: "https://insityapp.com/api/leads/allocate-dlp",
                    type: "POST",
                    data: JSON.stringify(data),
                    contentType: "application/json",
                    success: function(response) {
                        console.log(response);
                        if (response.status === "success") {
                            // alert("✅ Form submitted successfully!");
                            // $("#secondaryLeadForm")[0].reset();
                            // $("#submit2").prop("disabled", true);
                            window.location.href = "thank-you.php";
                        } else if (response.status === "duplicate") {
                            alert("⚠️ Duplicate lead submission detected.");
                        } else {
                            alert("⚠️ Unexpected response from server.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert("❌ Error submitting form. Please try again later.");
                    }
                });
            });

             // Form submit
            $("#modalLeadForm").on("submit", function(e) {
                e.preventDefault();

                // Basic validation
                const phone = $("#phone3").val().trim();
                if (!/^\d{10}$/.test(phone)) {
                    alert("Please enter a valid 10-digit mobile number.");
                    return;
                }

                const data = {
                    name: $("#name3").val().trim(),
                    email: $("#email3").val().trim(),
                    phone: phone,
                    state: $("#state3").val(),
                    city: $("#city3").val(),
                    country: $("#country3").val(),
                    course: $("#course3").val(),
                    level: $("#level3").val(),
                    user_registration_date: new Date().toISOString().slice(0, 19).replace("T", " "),
                    widget_name: $("#widget_name3").val(),
                    lead_origin: $("#lead_origin3").val(),
                    lead_source: $("#lead_source3").val(),
                    current_url: window.location.href,
                    utm_source: $("#utm_source3").val(),
                    utm_medium: $("#utm_medium3").val(),
                    utm_campaign: $("#utm_campaign3").val()
                };

                $.ajax({
                    url: "https://insityapp.com/api/leads/allocate-dlp",
                    type: "POST",
                    data: JSON.stringify(data),
                    contentType: "application/json",
                    success: function(response) {
                        console.log(response);
                        if (response.status === "success") {
                            window.location.href = "thank-you.php";
                        } else if (response.status === "duplicate") {
                            alert("⚠️ Duplicate lead submission detected.");
                        } else {
                            alert("⚠️ Unexpected response from server.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert("❌ Error submitting form. Please try again later.");
                    }
                });
            });

        });

        function fetch_states() {
            $.ajax({
                type: "POST",
                url: "https://insityapp.com/dbFiles/fetch_states.php",
                dataType: "json",
                success: function(response) {
                    var names = response.states;
                    var state = $("#state");
                    state.empty().append('<option value="">Select State</option>');
                    for (var i = 0; i < names.length; i++) {
                        var name = names[i];
                        state.append($("<option>", {
                            value: name,
                            text: name
                        }));
                    }
                },
                error: function(error) {
                    console.error("Error fetching states:", error);
                }
            });
        }

        function fetch_city() {
            var state = $("#state").val();
            $.ajax({
                type: "POST",
                url: "https://insityapp.com/dbFiles/fetch_cities.php",
                data: {
                    state: state
                },
                dataType: "json",
                success: function(response) {
                    var names = response.cities;
                    var city = $(".city");
                    city.empty().append('<option value="">Select City</option>');
                    for (var i = 0; i < names.length; i++) {
                        var name = names[i];
                        city.append($("<option>", {
                            value: name,
                            text: name
                        }));
                    }
                },
                error: function(error) {
                    console.error("Error fetching cities:", error);
                }
            });
        }

        function fetch_states2() {
            $.ajax({
                type: "POST",
                url: "https://insityapp.com/dbFiles/fetch_states.php",
                dataType: "json",
                success: function(response) {
                    var names = response.states;
                    var state = $("#state2");
                    state.empty().append('<option value="">Select State</option>');
                    for (var i = 0; i < names.length; i++) {
                        var name = names[i];
                        state.append($("<option>", {
                            value: name,
                            text: name
                        }));
                    }
                },
                error: function(error) {
                    console.error("Error fetching states:", error);
                }
            });
        }

        function fetch_city2() {
            var state = $("#state2").val();
            $.ajax({
                type: "POST",
                url: "https://insityapp.com/dbFiles/fetch_cities.php",
                data: {
                    state: state
                },
                dataType: "json",
                success: function(response) {
                    var names = response.cities;
                    var city = $(".city2");
                    city.empty().append('<option value="">Select City</option>');
                    for (var i = 0; i < names.length; i++) {
                        var name = names[i];
                        city.append($("<option>", {
                            value: name,
                            text: name
                        }));
                    }
                },
                error: function(error) {
                    console.error("Error fetching cities:", error);
                }
            });
        }


        function fetch_states3() {
            $.ajax({
                type: "POST",
                url: "https://insityapp.com/dbFiles/fetch_states.php",
                dataType: "json",
                success: function(response) {
                    var names = response.states;
                    var state = $("#state3");
                    state.empty().append('<option value="">Select State</option>');
                    for (var i = 0; i < names.length; i++) {
                        var name = names[i];
                        state.append($("<option>", {
                            value: name,
                            text: name
                        }));
                    }
                },
                error: function(error) {
                    console.error("Error fetching states:", error);
                }
            });
        }

        function fetch_city3() {
            var state = $("#state3").val();
            $.ajax({
                type: "POST",
                url: "https://insityapp.com/dbFiles/fetch_cities.php",
                data: {
                    state: state
                },
                dataType: "json",
                success: function(response) {
                    var names = response.cities;
                    var city = $(".city3");
                    city.empty().append('<option value="">Select City</option>');
                    for (var i = 0; i < names.length; i++) {
                        var name = names[i];
                        city.append($("<option>", {
                            value: name,
                            text: name
                        }));
                    }
                },
                error: function(error) {
                    console.error("Error fetching cities:", error);
                }
            });
        }



        function validateForm() {
            const name = $("#name").val().trim();
            const email = $("#email").val().trim();
            const phone = $("#phone").val().trim();
            const state = $("#state").val();
            const city = $("#city").val();
            const consent = $("#consentCheck").is(":checked");

            const isValidEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            const isValidPhone = /^[0-9]{10}$/.test(phone);

            if (name && isValidEmail && isValidPhone && state && city && consent) {
                $("button[type='submit']").prop("disabled", false);
                return true;
            } else {
                $("button[type='submit']").prop("disabled", true);
                return false;
            }
        }

        // Open first accordion section when tab switches on mobile
        document.getElementById('yearTabs').addEventListener('shown.bs.tab', (e) => {
            const pane = document.querySelector(e.target.dataset.bsTarget);
            const accFirst = pane.querySelector('.sem-accordion .accordion-collapse');
            if (accFirst && !accFirst.classList.contains('show')) {
                new bootstrap.Collapse(accFirst, {
                    toggle: true
                });
            }
        });
    </script>


</body>

</html>