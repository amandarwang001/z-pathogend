<div class="container-fluid">
    <div class="row text-center equal">
        <div class="col-lg-3 contact">
            <h3>CONTACT US</h3>

            <p><strong itemprop="name">Pathogend<sup><i class="far fa-registered" style="font-size: 8px;"></i></sup> of Delaware</strong>
                <br><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">23917 Sunny Cove Ct.,</span>
                <span itemprop="addressLocality">Lewes</span>,
                <span itemprop="addressRegion">DE</span>
                <span itemprop="postalCode">19958</span>
                </span><br/>
                <span itemprop="telephone"><a href="tel:3023330234" class="phone-link-white">302-333-0234</a></span>
                <br/><a href="mailto: rich@pathogendofde.com" class="footerlink">
                    <span itemprop="email">rich@pathogendofde.com</span></a>
                <br/><a href="mailto: john@pathogendofde.com" class="footerlink">
                    <span itemprop="email">john@pathogendofde.com</span></a>
            </p>
        </div>
        <div class="col-lg-6 about pb-4">
            <h3>ABOUT US</h3>
            <p>Working towards healthier lives at work, home and play.</p>
            <a href="<?= CORP_BASE ?>" class="btn btn-purple btn-lg footerlink" role="button">Corporate Website</a>
        </div>
        <div class="col-lg-3 follow">
            <h3 class="pb-4">Links</h3>
            <div class="row pb-4">
                <div class="col-6"><a href="https://twitter.com/@EndingInfection" target="_blank"><i
                                class="fab fa-twitter fa-2x" aria-hidden="true"></i></a></div>
                <div class="col-6"><a href="https://www.facebook.com/EndingInfection" target="_blank"><i
                                class="fab fa-facebook fa-2x" aria-hidden="true"></i></a></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-md-12 tagline">
                <br/><br/>
                <p> © <? echo(date('Y')); ?> &#183 PATHOGEND<sup><i class="far fa-registered" style="font-size: 8px;"></i></sup> of DELAWARE &#183 All Rights Reserved &#183</p>
            </div>
        </div>
    </div>
</div>

<!--CDN for bootstrap v4 and requirements-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script><!--CDN for jquery and popper.js (required for bootstrap v4)-->


<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>-->
<!--    <script src="--><? //= JS_URL ?><!--bootstrap.min.js"></script>-->
<script src="<?= JS_URL ?>main.js"></script>
</body>