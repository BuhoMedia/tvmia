<!-- ========== FOOTER ========== -->
<footer class="border-top border-gray-4800">
    <div class="bg-gray-1100">
        <div class="container px-md-5 space-1">
            <div class="row align-items-center space-top-1 pb-2">
                <div class="col-lg-3 text-center text-lg-left">
                    <a href="../home/index.html" class="mb-4 mb-lg-0">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>

                <div class="col-lg-6 text-center my-4 my-lg-0">
                    <ul class="nav justify-content-center font-secondary">
                      <li class="nav-item">
                          <a class="nav-link h-w-primary" href="#canales">Programación</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link h-w-primary" href="#como"> Como Funciona </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h-w-primary" href="#pricing">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h-w-primary" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 d-flex justify-content-center justify-content-lg-start">
                    <ul class="list-unstyled mx-n2 mb-0 d-flex flex-wrap align-items-center ml-lg-auto">
                        <li class="px-2">
                            <a href="#" class="btn btn-white rounded-circle justify-content-center p-0 avatar avatar-sm d-flex flex-wrap align-items-center">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="#" class="btn btn-white rounded-circle justify-content-center p-0 avatar avatar-sm d-flex flex-wrap align-items-center">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3" data-dismiss="modal" aria-label="Close">
                <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
            </button>

            <!-- Body -->
            <div class="modal-body">
                <form class="js-validate">
                    <!-- Login -->
                    <div id="login">
                        <!-- Title -->
                        <div class="text-center mb-7">
                            <h3 class="mb-0">Sign In to Vodi</h3>
                            <p>Login to manage your account.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" required
                                data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-3">
                            <label class="input-label">Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" required
                                data-msg="Your password is invalid. Please try again.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <div class="d-flex justify-content-end mb-4">
                            <a class="js-animation-link small link-underline" href="javascript:;"
                                data-hs-show-animation-options='{
                                    "targetSelector": "#forgotPassword",
                                    "groupName": "idForm"
                                }'>Forgot Password?
                            </a>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                        </div>

                        <div class="text-center mb-3">
                            <span class="divider divider-xs divider-text">OR</span>
                        </div>

                        <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fab fa-google mr-2"></i>
                                Sign In with Google
                            </span>
                        </a>

                        <div class="text-center">
                            <span class="small text-muted">Do not have an account?</span>
                            <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                data-hs-show-animation-options='{
                                    "targetSelector": "#signup",
                                    "groupName": "idForm"
                                }'>Sign Up
                            </a>
                        </div>
                    </div>

                    <!-- Signup -->
                    <div id="signup" style="display: none; opacity: 0;">
                        <!-- Title -->
                        <div class="text-center mb-7">
                            <h3 class="mb-0">Create your account</h3>
                            <p>Fill out the form to get started.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" required
                                data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" required
                                data-msg="Your password is invalid. Please try again.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Confirm Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" required
                                data-msg="Password does not match the confirm password.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                        </div>

                        <div class="text-center mb-3">
                            <span class="divider divider-xs divider-text">OR</span>
                        </div>

                        <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fab fa-google mr-2"></i>
                                Sign Up with Google
                            </span>
                        </a>

                        <div class="text-center">
                            <span class="small text-muted">Already have an account?</span>
                            <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                data-hs-show-animation-options='{
                                    "targetSelector": "#login",
                                    "groupName": "idForm"
                                }'>Sign In
                            </a>
                        </div>
                    </div>
                    <!-- End Signup -->

                    <!-- Forgot Password -->
                    <div id="forgotPassword" style="display: none; opacity: 0;">
                        <!-- Title -->
                        <div class="text-center mb-7">
                            <h3 class="mb-0">Recover password</h3>
                            <p>Instructions will be sent to you.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message">
                            <label class="sr-only" for="recoverEmail">Your email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" required
                                data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Recover Password</button>
                        </div>

                        <div class="text-center mb-4">
                            <span class="small text-muted">Remember your password?</span>
                            <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                data-hs-show-animation-options='{
                                    "targetSelector": "#login",
                                    "groupName": "idForm"
                                }'>Login
                            </a>
                        </div>
                    </div>
                    <!-- End Forgot Password -->
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Login Modal -->

<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
    data-hs-go-to-options='{
        "offsetTop": 700,
        "position": {
            "init": {
                "right": 15
            },
            "show": {
                "bottom": 15
            },
            "hide": {
                "bottom": -15
            }
        }
    }'>
    <i class="fas fa-angle-up"></i>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="vendor/hs-header/dist/hs-header.min.js"></script>
<script src="vendor/hs-go-to/dist/hs-go-to.min.js"></script>
<script src="vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
<script src="vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
<script src="vendor/hs-counter/dist/hs-counter.min.js"></script>
<script src="vendor/appear.js"></script>
<script src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="vendor/aos/dist/aos.js"></script>
<script src="vendor/slick-carousel/slick/slick.js"></script>
<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>

<!-- JS Vodi -->
<script src="js/hs.core.js"></script>
<script src="js/hs.validation.js"></script>
<script src="js/hs.cubeportfolio.js"></script>
<script src="js/hs.slick-carousel.js"></script>
<script src="js/hs.fancybox.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of header
        var header = new HSHeader($('#header')).init();

        // initialization of mega menu
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();

        // initialization of fancybox
        $('.js-fancybox').each(function () {
          var fancybox = $.HSCore.components.HSFancyBox.init($(this));
        });

        // initialization of unfold
        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

        // initialization of slick carousel
        $('.js-slick-carousel').each(function() {
            var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
        });

        // initialization of form validation
        $('.js-validate').each(function() {
            $.HSCore.components.HSValidation.init($(this), {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });
        });

        // initialization of show animations
        $('.js-animation-link').each(function () {
            var showAnimation = new HSShowAnimation($(this)).init();
        });

        // initialization of counter
        $('.js-counter').each(function() {
            var counter = new HSCounter($(this)).init();
        });

        // initialization of sticky block
        var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

        // initialization of cubeportfolio
        $('.cbp').each(function () {
            var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                layoutMode: 'grid',
                filters: '#filterControls',
                displayTypeSpeed: 0
            });
        });

        $('.cbp').on('initComplete.cbp', function() {
            // update sticky block
            cbpStickyFilter.update();

            // initialization of aos
            AOS.init({
                duration: 650,
                once: true
            });
        });

        $('.cbp').on('filterComplete.cbp', function() {
            // update sticky block
            cbpStickyFilter.update();

            // initialization of aos
            AOS.init({
                duration: 650,
                once: true
            });
        });

        $('.cbp').on('pluginResize.cbp', function() {
            // update sticky block
            cbpStickyFilter.update();
        });

        // animated scroll to cbp container
        $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
            $('html, body').stop().animate({
                scrollTop: $('#demoExamplesSection').offset().top
            }, 200);
        });

        // initialization of go to
        $('.js-go-to').each(function () {
            var goTo = new HSGoTo($(this)).init();
        });
    });
</script>
    <!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="vendor/polifills.js"><\/script>');
</script>
