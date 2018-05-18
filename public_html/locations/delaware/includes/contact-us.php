<!--
<div class="container-fluid px-0">
    <div class="row">
        <div class="col">
            <img id="contactUsImage" src="<?= IMAGE_URL ?>help.jpg" class="img-fluid">
            <div id="contactUsCaption" class="hidden-sm-down">
                this div is visible on tablet/desktop
                <h2 class="text-center mt-5">We're here to help!</h2>
                <h3 class="text-center">
                    <small>Build Your Brand &#8226; Get New Business &#8226; Manage Clients &#8226; Do It Yourself
                    </small>
                </h3>
                <button type="button" class="btn customize-btn-contact lastChanceCTA">Last Chance Call to Action</button>
                <p class="text-center">15 Day Free Trial. No Credit Card Needed.</p>

            </div>
            <div id="contactUsCaptionMobile" class="hidden-md-up">
                this div is only visible on mobile
                <h2 class="text-center mt-5">We're here to help!</h2>
                <h3 class="text-center">
                    <small>Build Your Brand &#8226; Get New Business &#8226; Manage Clients &#8226; Do It Yourself
                    </small>
                </h3>
                <button type="button" class="btn customize-btn-contact lastChanceCTA">Last Chance Call to Action</button>
                <p class="text-center">15 Day Free Trial. No Credit Card Needed.</p>

            </div>
        </div>
    </div>
 -->

    <div id="contactUsContainer" class="container-fluid py-5">
        <div class="row content">
            <!--            <div class="col-md-4 icon contactform">-->
            <!--                <img src="--><? //=IMAGE_URL ?><!--contact.png" class="img-responsive" >-->
            <!--            </div>-->
            <div class="col-md-1">
<!--                left empty for white space-->
            </div>
            <div class="col-md-6">
                <h1 class="pt-3">CONTACT US</h1>
                <p>Thank you for visiting our site. Call us today at <a id="link" href="tel:3023330234">302.333.0234</a>
                    for your consultation, or simply fill out the form below and click “SUBMIT”. We will reply to your
                    message as soon as possible - usually within 24 hours.</p>
                <!--               <form class="contact-us">-->
                <!--                    <div class="form-group">-->
                <!--                        <input type="text" class="form-control" name='name' id="name" placeholder="Name" required>-->
                <!--                        <br>-->
                <!--                        <input type="text" class="form-control" name='phone' id="email" placeholder="Phone" required>-->
                <!--                        <br>-->
                <!--                        <input type="email" class="form-control" name='email' id="email" placeholder="Email" required>-->
                <!--                        <br>-->
                <!--                        <textarea rows="10" cols="5" class="form-control"  type="text" name='msg' id="msg" placeholder="Message" required></textarea>-->
                <!--                        <button class="btn btn-md yellow btn-contact">Submit</button>-->
                <!--                    </div>-->
                <!--                </form>-->

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Name"
                               name='name' required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name='phone' id="email" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name='email' id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" cols="5" class="form-control" type="text" name='msg' id="msg"
                                  placeholder="Message" required></textarea>
                    </div>
                    <button class="btn btn-purple btn-contact">Submit</button>
                </form>
            </div>

            <div class="col-md-1">
                <!--                left empty for white space-->
            </div>

            <div class="col-md-4 pt-3">
                <h2>Connect with us:</h2>

                <p>
                    <small>For support or any questions,<br>
                        email us at: <br><a href="mailto: rich@pathogendofde.com">
                            <span itemprop="email">rich@pathogendofde.com</span></a><br/>
                            <a href="mailto: ohn@pathogendofde.com"><span itemprop="email">john@pathogendofde.com</span></a>
                    </small>
                </p>
                <br>
                <p>
                    <small><strong itemprop="name">PATHOGEND<sup><i class="far fa-registered" style="font-size: 14px;"></i></sup> OF DELAWARE</strong>
                        <br><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">23917 Sunny Cove Ct.</span>
                <span itemprop="addressLocality">Lewes</span>,
                <span itemprop="addressRegion">DE</span>
                <span itemprop="postalCode">19958</span>
                </span><br/>
                        <span itemprop="telephone"><a href="tel:3023330234" class="phonelink">302-333-0234</a></span>
                    </small>
                </p>
            </div>
        </div>


        <div class="messageSent alert alert-success alert-dismissable" style="display: none">
            <a href="/" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>Message sent successfully! We will reply within 24 hours thank you!</p>
        </div>
        <div class="messageError alert alert-danger alert-dismissable" style="display: none">
            <a href="Home" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>Uh Oh! Looks like there was an issue sending your message. Please try again and make sure all fields are
                correct.</p>
        </div>
        <br>
    </div>

<!--
    <div id="lastChanceContainer" class="container-fluid py-5">

        <h3 class="text-center">Making things happen just got easier</h3>

        <button type="button" class="btn customize-btn-contact lastChanceCTA">Last Chance Call to Action</button>

        <p class="text-center text-muted"><small>15 days free trial. No Credit Card required. &nbsp;&nbsp;&nbsp;Need help? <a href="mailto: info@dijatek.com">
                    <span itemprop="email">Get in touch</span></a> with our Support Team.</small></p>


    </div>
    -->