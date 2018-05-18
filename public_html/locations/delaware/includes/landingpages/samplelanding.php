<div class="container-fluid">
    <div class="container">
        <div class="row content">
            <div class="col-md-4 icon contactform">
                <img src="<?=IMAGE_URL ?>contact.png" class="img-responsive" >
            </div>
            <div class="col-md-8">
                <h1>SAMPLE LANDING PAGE</h1>
                <h3>Thank you for visiting our site. Call us today at <a id="link" href="tel:4071234567">407.123.4567</a> for your consultation, or simply fill out the form below and click “SUBMIT”. We will reply to your message as soon as possible - usually within 24 hours.</h3>
                <form class="contact-us">
                    <div class="form-group">
                        <input type="text" class="form-control" name='name' id="name" placeholder="Name" required>
                        <br>
                        <input type="text" class="form-control" name='phone' id="email" placeholder="Phone" required>
                        <br>
                        <input type="email" class="form-control" name='email' id="email" placeholder="Email" required>
                        <br>
                        <textarea rows="10" cols="5" class="form-control"  type="text" name='msg' id="msg" placeholder="Message" required></textarea>
                        <button class="btn btn-md yellow btn-contact">Submit</button>
                    </div>
                </form>
                <div class="messageSent alert alert-success alert-dismissable" style="display: none">
                    <a href="/" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>Message sent successfully! We will reply within 24 hours thank you!</p>
                </div>
                <div class="messageError alert alert-danger alert-dismissable" style="display: none">
                    <a href="Home" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>Uh Oh! Looks like there was an issue sending your message. Please try again and make sure all fields are correct.</p>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>