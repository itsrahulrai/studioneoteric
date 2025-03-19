<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="">
    <meta name="description" content="">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>studio neoteric - Turnkey Specialists</title>
    <?php include("./sn-include/meta.php"); ?>

</head>

<body>
    <?php include("./sn-include/header.php"); ?>
    <!-- breadcrumb -->
    <div class="dz-bnr-inr style-1 overlay-white-middle" style="background-image: url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Contact us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- end of breadcrumb -->
    <div class="page-wraper">
        <section class="content-inner bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-b30 aos-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="icon-bx-wraper style-8 bg-white" data-name="01">
                            <div class="icon-md m-r20">
                                <span class="icon-cell text-primary"><i class="flaticon-telephone"></i></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="tilte m-b10">Call Now</h4>
                                <p class="m-b0">+91 987 654 3210</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 aos-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="icon-bx-wraper style-8 bg-white" data-name="02">
                            <div class="icon-md m-r20">
                                <span class="icon-cell text-primary"><i class="flaticon-email"></i></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="tilte m-b10">Location</h4>
                                <p class="m-b0">E-520, 3rd Floor, near Ramphal Chowk, Sector 7 Dwarka, Delhi, 110075</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 m-b30 aos-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                        <div class="icon-bx-wraper style-8 bg-white" data-name="03">
                            <div class="icon-md m-r20">
                                <span class="icon-cell text-primary"><i class="flaticon-placeholder"></i></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="tilte m-b10">Email Now</h4>
                                <p class="m-b0">dummy@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
				<div class="contact-area1 aos-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
					<div class="section-head style-1 text-center">
						<h6 class="sub-title text-primary">Get in Touch</h6>
						<h2 class="title">Let's Start a Conversation</h2>
                        <p>We'd love to hear from you. Feel free to reach out to us using the form below or give us a call at +91-XXX-XXX-XXXX.</p>
					</div>
					<form class="dz-form style-1 dzForm" method="POST" action="script/contact_smtp.php">
						<input type="hidden" class="form-control" name="dzToDo" value="Contact">
						<div class="dzFormMsg"></div>							
						<div class="row sp10">
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="dzFirstName" placeholder="First Name" required="">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="dzLastName" placeholder="Last Name" required="">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="dzEmail" placeholder="Email" required="">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="dzPhoneNumber" placeholder="Phone No." required="">
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="dzOther[subject]" placeholder="Subject" required="">
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<textarea name="dzMessage" class="form-control">Message</textarea>
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-1kdbgi3rlgsw" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN&amp;co=aHR0cHM6Ly9hcmNoY29kZS5kZXhpZ256b25lLmNvbTo0NDM.&amp;hl=en&amp;v=p09oe8YIFfKgcnqQ9m9k4aiB&amp;size=normal&amp;cb=gn1e4i8uo4ay"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
									<input class="form-control d-none" style="display:none;" data-recaptcha="true" required="" data-error="Please complete the Captcha">
								</div>
							</div>
							<div class="col-sm-12 text-center">
								<button name="submit" type="submit" value="submit" class="btn btn-primary btn-rounded">SUBSCRIBE NOW <i class="m-l10 fas fa-caret-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </section>

    </div>
    <?php include("./sn-include/footer.php"); ?>


</body>

</html>