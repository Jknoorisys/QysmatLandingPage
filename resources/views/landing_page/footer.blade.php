
<?php
    $contactDetails = DB::table('contact_details')->get();
    $instagram = $contactDetails->firstWhere('contact_type', 'instagram');
    $facebook = $contactDetails->firstWhere('contact_type', 'facebook');
    $twitter = $contactDetails->firstWhere('contact_type', 'twitter');
    $linkedin = $contactDetails->firstWhere('contact_type', 'linkedin');
?>

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
        
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="/">QYSMAT</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://noorisys.com/">Noorisys
                        Technologies Pvt
                        Ltd.</a>

                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="{{ strip_tags($twitter->details) }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ strip_tags($facebook->details) }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ strip_tags($instagram->details) }}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ strip_tags($linkedin->details) }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-md-6 text-center text-md-end text-white">
                    <div class="footer-menu">
                        <a href="{{ route('faqs') }}" class="text-white">FAQs</a>
                        {{-- <a href="{{ route('terms-conditions') }}" class="text-white">Terms & Conditions</a> --}}
                        <a href="{{ route('privacy-policy') }}" class="text-white">Privacy Policy & Cookies</a>
                        <a href="{{ route('contact-us') }}" class="text-white">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><b><i class="bi bi-arrow-up text-white"></i></b></a>