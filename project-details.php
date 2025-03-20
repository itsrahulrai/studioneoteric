<?php
$projects = [
    [
        "slug" => "angela-residence",
        "title" => "Angela Residence",
        "desc" => "Studio Neoteric is not just a design firm; we are storytellers of spaces, creators of experiences, and builders of dreams. Our journey is etched with a passion for innovation, a commitment to excellence, and a relentless pursuit of architectural perfection. With a diverse portfolio spanning residential, commercial, retail, and interior design, we blend creativity with functionality to craft spaces that inspire and endure. Our team's expertise and unwavering dedication ensure that every project reflects our core values of integrity, ingenuity, and impact.",
        "images" => [
            "./images/Angela-Residence.jpg",
            "./images/Sam-Valley-Highway.jpg",
            "./images/Irving-Industrial-Region.webp",
            "./images/Great-Hill-New-Campus.webp"
        ]
    ],
    [
        "slug" => "sam-valley-highway",
        "title" => "Sam Valley Highway",
        "desc" => "The Sam Valley Highway is a modern marvel of engineering and design.",
        "images" => [
            "./images/Sam-Valley-Highway.jpg",
            "./images/Angela-Residence.jpg",
            "./images/Irving-Industrial-Region.webp",
            "./images/Mission-Lake-Bridge.jpg"
        ]
    ],
    [
        "slug" => "irving-industrial-region",
        "title" => "Irving Industrial Region",
        "desc" => "The Irving Industrial Region is a hub of economic activity and growth.",
        "images" => [
            "./images/Irving-Industrial-Region.webp",
            "./images/Sam-Valley-Highway.jpg",
            "./images/Mission-Lake-Bridge.jpg",
            "./images/Great-Hill-New-Campus.webp"
        ]
    ],
    [
        "slug" => "mission-lake-bridge",
        "title" => "Mission Lake Bridge",
        "desc" => "The Mission Lake Bridge is an architectural marvel that spans the tranquil waters of Mission Lake.",
        "images" => [
            "./images/Mission-Lake-Bridge.jpg",
            "./images/Oceanside-Railway-Station.jpg",
            "./images/Great-Hill-New-Campus.webp",
            "./images/Angela-Residence.jpg"
        ]
    ],
    [
        "slug" => "great-hill-new-campus",
        "title" => "Great Hill New Campus",
        "desc" => "The Great Hill New Campus is a state-of-the-art educational facility.",
        "images" => [
            "./images/Great-Hill-New-Campus.webp",
            "./images/Mission-Lake-Bridge.jpg",
            "./images/Irving-Industrial-Region.webp",
            "./images/Sam-Valley-Highway.jpg"
        ]
    ],
    [
        "slug" => "oceanside-railway-station",
        "title" => "Oceanside Railway Station",
        "desc" => "The Oceanside Railway Station is a modern transportation hub.",
        "images" => [
            "./images/Oceanside-Railway-Station.jpg",
            "./images/Great-Hill-New-Campus.webp",
            "./images/Angela-Residence.jpg",
            "./images/Sam-Valley-Highway.jpg"
        ]
    ],
    [
        "slug" => "project-1",
        "title" => "Project 1",
        "desc" => "Project 1 is a groundbreaking architectural development that exemplifies modern design and sustainable innovation. This project seamlessly integrates contemporary aesthetics with practical functionality, setting new standards in residential and commercial spaces. 
        Designed to create an immersive experience, Project 1 features open-concept layouts, high-quality materials, and energy-efficient solutions. Every aspect of the project is carefully planned to enhance comfort, maximize space utilization, and ensure environmental responsibility.",
        "images" => [
            "./images/Project-1.webp",
            "./images/Project1-img-2.webp",
            "./images/Project1-img-3.webp",
            "./images/Project1-img-4.webp",
            "./images/Project1-img-5.webp",
            "./images/Project1-img-6.webp", 
            "./images/Project1-img-7.webp",
            "./images/Project1-img-8.webp",
        ]
    ],
    
    [
        "slug" => "project-2",
        "title" => "Project 2",
            "desc" => "Project 2 is a groundbreaking architectural development that exemplifies modern design and sustainable innovation. This project seamlessly integrates contemporary aesthetics with practical functionality, setting new standards in residential and commercial spaces. 
            Designed to create an immersive experience, Project 1 features open-concept layouts, high-quality materials, and energy-efficient solutions. Every aspect of the project is carefully planned to enhance comfort, maximize space utilization, and ensure environmental responsibility.",
        "images" => [
            "./images/Project2-img-1.webp",
            "./images/Project2-img-2.webp",
            "./images/Project2-img-3.webp",
            "./images/Project2-img-4.webp",
            "./images/Project2-img-5.webp",
            "./images/Project2-img-6.webp",
        ]
    ],
    [
        "slug" => "project-3",
        "title" => "Project 3",
            "desc" => "Project 3 is a groundbreaking architectural development that exemplifies modern design and sustainable innovation. This project seamlessly integrates contemporary aesthetics with practical functionality, setting new standards in residential and commercial spaces. 
            Designed to create an immersive experience, Project 1 features open-concept layouts, high-quality materials, and energy-efficient solutions. Every aspect of the project is carefully planned to enhance comfort, maximize space utilization, and ensure environmental responsibility.",
        "images" => [
            "./images/Project3-img-1.webp",
            "./images/Project3-img-2.webp",
            "./images/Project3-img-3.webp",
            "./images/Project3-img-4.webp",
           
        ]
    ]
];



// Get the slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Find the project with the matching slug
$selectedProject = null;
foreach ($projects as $project) {
    if ($project['slug'] === $slug) {
        $selectedProject = $project;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
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

    <?php if ($selectedProject): ?>
        <div class="dz-bnr-inr style-1 overlay-white-middle" style="background-image: url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Project details</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><?php echo $selectedProject['title']; ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="page-wraper">
            <section class="mt-5">
                <div class="container mt-4">
                    <div class="row align-items-center about-bx1">
                        <div class="col-lg-8 m-lg-b30">
                            <div class="row">
                                <div class="col-md-2 col-12 d-flex flex-md-column thumbnail-images">
                                    <?php foreach ($selectedProject['images'] as $image): ?>
                                        <img src="<?php echo $image; ?>" onclick="changeImage('<?php echo $image; ?>', this)">
                                    <?php endforeach; ?>
                                </div>
                                <div class="col-md-10 col-12 main-image text-center">
                                    <img id="mainImage" src="<?php echo $selectedProject['images'][0]; ?>" alt="Main Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 aos-item aos-init aos-animate" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="800">
                            <div class="section-head style-1">
                                <h2 class="title"><?php echo $selectedProject['title']; ?></h2>
                            </div>
                            <p class="text-justify"><?php echo $selectedProject['desc']; ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php else: ?>
        <p>No project found with this slug.</p>
    <?php endif; ?>

    <?php include("./sn-include/footer.php"); ?>
</body>

</html>
