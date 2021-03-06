<footer class="flex-grow-0">
    <section class="py-3">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md">
                    <h2>
                        Tech Bank Africa
                    </h2>
                    <a href="our-story" class="btn mb-2 btn-lg btn-primary">About Us</a>
                </div>
                <div class="col-md">
                    <p><i class="fas fa-map-marker"></i> Our Address Here, Lagos, Nigeria</p>
                    <p><i class="fas fa-phone"></i> +234 809 200 0003</p>
                    <p><i class="fas fa-phone"></i> +234 703 095 1270</p>
                    <p><i class="fas fa-envelope"></i> info@techbankafrica.com</p>
                    <p><i class="fas fa-globe"></i>techbankafrica.com</p>
                </div>
                <div class="col-md">
                    <h3>Social</h3>
                    <p>We are Social. Connect with us on these platforms</p>
                    <p>
                        Tech Bank Africa
                        <a href="https://facebook.com/techbankafrica"><i class="fab fa-facebook"></i></a>
                        &nbsp;

                        <a href="https://twitter.com/techbankafrica"><i class="fab fa-twitter"></i></a>
                        &nbsp;
                        <a href="https://instagram.com/techbankafrica"><i class="fab fa-instagram"></i></a>
                        &nbsp;
                    </p>
                    <p>
                        @if ($privacy_policy = App\Models\Setting::retrieve('privacy_policy'))
                        <a target="_blank" href={{$privacy_policy}}>Privacy Policy</a>
                        @endif
                        &nbsp; |
                        &nbsp;
                        @if ($terms_of_use = App\Models\Setting::retrieve('terms_of_use'))
                        <a target="_blank" href={{$terms_of_use}}>Terms of Use</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div id="bottom" class="text-center">
        © 2019, <span>Tech Bank Africa</span>
    </div>
</footer>
