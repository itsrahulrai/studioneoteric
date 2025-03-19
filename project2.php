<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>studio neoteric - Project details</title>
    <?php include("./sn-include/meta.php"); ?>

</head>

<body>
    <?php include("./sn-include/header.php"); ?>
    <!-- breadcrumb -->
    <div class="dz-bnr-inr style-1 overlay-white-middle" style="background-image: url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Project details</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"></li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- end of breadcrumb -->
    <div class="page-wraper">
        <section class="mt-5">
            <div class="container mt-4">
                <div class="row align-items-center about-bx1">
                    <div class="col-lg-8 m-lg-b30">
                        <div class="row">
                            <!-- Thumbnails -->
                            <div class="col-md-2 col-12 d-flex flex-md-column thumbnail-images">
                                <img src="./images/Angela-Residence.jpg" class="active" onclick="changeImage('./images/Angela-Residence.jpg', this)">
                                <img src="./images/Sam-Valley-Highway.jpg" onclick="changeImage('./images/Sam-Valley-Highway.jpg', this)">
                                <img src="./images/Irving-Industrial-Region.webp" onclick="changeImage('./images/Irving-Industrial-Region.webp', this)">
                                <img src="./images/Great-Hill-New-Campus.webp" onclick="changeImage('./images/Great-Hill-New-Campus.webp', this)">
                            </div>
                            <!-- Main Image -->
                            <div class="col-md-10 col-12 main-image text-center">
                                <img id="mainImage" src="./images/Angela-Residence.jpg" alt="Main Image">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 aos-item aos-init aos-animate" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="800">
                        <div class="section-head style-1">
                            <!-- <h6 class="text-primary sub-title">About Us</h6> -->
                            <h2 class="title">Crafting Spaces, Creating Experiences</h2>
                        </div>
                        <p class="text-justify">Studio Neoteric is not just a design firm; we are storytellers of spaces, creators of experiences, and builders of dreams. Our journey is etched with a passion for innovation, a commitment to excellence, and a relentless pursuit of architectural perfection.
                            With a diverse portfolio spanning residential, commercial, retail, and interior design, we blend creativity with functionality to craft spaces that inspire and endure. Our team's expertise and unwavering dedication ensure that every project reflects our core values of integrity, ingenuity, and impact.</p>
               
                            </div>
                    </div>

                </div>
        </section>




    </div>
    <?php include("./sn-include/footer.php"); ?>


</body>

</html>