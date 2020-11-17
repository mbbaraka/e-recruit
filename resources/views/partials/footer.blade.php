<footer class="style3">
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="about_widget">
                            <div class="logo">
                                <a href="{{ url('/') }}" title=""><img src="{{ asset('logo.png') }}" alt="logo" /></a>
                            </div>
                            <span>Online Recruitent System Kampala Uganda.</span>
                            <span><a href="tel:+256 758 029 195">+256 758 029 195</a></span>
                            <span><a href="mailto:hr@ors.com" class="__cf_email__">hr@ors.com</a></span>
                            <div class="social">
                                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                <a href="#" title=""><i class="fa fa-behance"></i></a>
                            </div>
                        </div><!-- About Widget -->
                    </div>
                </div>
                <div class="col-lg-4 column">
                    <div class="widget">
                        <h3 class="footer-title">Subscribe to our Newsletter</h3>
                        <div class="link_widgets2">
                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- <a href="#" title="">Privacy & Seurty </a>
                                    <a href="#" title="">Terms of Serice</a>
                                    <a href="#" title="">Communications </a>
                                    <a href="#" title="">Referral Terms </a>
                                    <a href="#" title="">Lending Licnses </a>
                                    <a href="#" title="">Disclaimers </a> --}}
                                    <form action="{{ route('subscription') }}" method="post">
                                        @csrf
                                        <div class="pf-field">
                                            <input type="email" required name="subscription" class="@error('subscription') is-invalid @enderror" placeholder="Subscribe to our Newsletter"/>
                                            @error('subscription')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 column">
                    <div class="widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <div class="link_widgets2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#" title="">Support </a>
                                    <a href="#" title="">How It Works </a>
                                    <a href="#" title="">For Employers </a>
                                    <a href="#" title="">Underwriting </a>
                                    <a href="#" title="">Contact Us</a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" title="">Support </a>
                                    <a href="#" title="">How It Works </a>
                                    <a href="#" title="">For Employers </a>
                                    <a href="#" title="">Underwriting </a>
                                    <a href="#" title="">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-line style3">
        <div class="container">
            <span>© Online Recruitment System</span>
            <a class="back-top" href="#scrollup" title=""><i class="la la-long-arrow-up"></i></a>
        </div>
    </div>
</footer>
