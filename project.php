<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>studio neoteric - Turnkey Specialists</title>
    <?php include("./sn-include/meta.php"); ?>
</head>

<body>
    <?php include("./sn-include/header.php"); ?>
    <!-- breadcrumb -->
    <div class="dz-bnr-inr style-1 overlay-white-middle" style="background-image: url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Our Projects</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Our Projects</li>
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
                    <div class="col-lg-12 text-center mb-5">
                        <div class="section-head style-1">
                            <span class="text-primary after-dash">Our Expertise</span>
                            <h6 class="text-primary sub-title">Welcome to Studio Neoteric</h6>
                            <h2 class="title">Crafting Timeless Architectural Solutions</h2>
                            <p>Studio Neoteric is dedicated to creating architectural masterpieces that stand the test of time. Our projects are a testament to our commitment to quality, innovation, and enduring design. Take a glimpse into our world of architectural excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" id="portfolio"></div>



            </div>
        </section>



        <!-- Modal Structure (Created Once) -->
        <div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content position-relative">
                    <div class="position-absolute top-0 end-0 m-3">
                        <button type="button" class="btn-close portfolio-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modal-img" src="" alt="" class="img-fluid rounded">
                        <h5 class="modal-title mt-4" id="modal-title"></h5>
                        <p class="mt-3" id="modal-description"></p>
                    </div>
                </div>
            </div>
        </div>

        <script>
           var portfolio = [
    {
        "img": "images/Project-1.webp",
        "title": "Project 1",
        "description": "Description for Project 1."
    },
    {
        "img": "images/Project-2.webp",
        "title": "Project 2",
        "description": "Description for Project 2."
    },
    {
        "img": "images/Project-3.webp",
        "title": "Project 3",
        "description": "Description for Project 3."
    },
    {
        "img": "images/Angela-Residence.jpg",
        "title": "Angela Residence",
        "description": "A luxurious residential project that redefines opulence and elegance."
    },
    {
        "img": "images/Sam-Valley-Highway.jpg",
        "title": "Sam Valley Highway",
        "description": "The Sam Valley Highway is a modern marvel of engineering and design."
    },
    {
        "img": "images/Irving-Industrial-Region.webp",
        "title": "Irving Industrial Region",
        "description": "The Irving Industrial Region is a hub of economic activity and growth."
    },
    {
        "img": "images/Mission-Lake-Bridge.jpg",
        "title": "Mission Lake Bridge",
        "description": "The Mission Lake Bridge is an architectural marvel that spans the tranquil waters of Mission Lake."
    },
    {
        "img": "images/Great-Hill-New-Campus.webp",
        "title": "Great Hill New Campus",
        "description": "The Great Hill New Campus is a state-of-the-art educational facility."
    },
    {
        "img": "images/Oceanside-Railway-Station.jpg",
        "title": "Oceanside Railway Station",
        "description": "The Oceanside Railway Station is a modern transportation hub."
    }
];

// Function to convert title into a slug
const generateSlug = (title) => {
    return title.toLowerCase()
        .replace(/ /g, "-")     // Replace spaces with "-"
        .replace(/[^\w-]+/g, ""); // Remove special characters
};

for (let project of portfolio) {
    let slug = generateSlug(project.title); // Generate slug from title

    const projectBox = document.createElement("div");
    projectBox.classList.add("col-lg-4", "m-lg-b30");

    projectBox.innerHTML = `
        <div class="project-box">
            <div class="project-img">
                <img src="${project.img}" alt="" class="aos-item aos-init aos-animate rounded" 
                    onclick="showProjectDetails('${project.title}', '${project.description}', '${project.img}')">
            </div>
            <div class="project-title text-center mt-3">
                <h4>${project.title}</h4>
            </div>
            <a href="project-details.php?slug=${slug}" class="btn btn-primary px-2 py-2 w-100 text-center mb-4">Click to View</a>
        </div>
    `;

    document.getElementById("portfolio").appendChild(projectBox);
}

const showProjectDetails = (title, description, img) => {
    document.getElementById("modal-title").innerText = title;
    document.getElementById("modal-description").innerText = description;
    document.getElementById("modal-img").src = img;

    const modalInstance = new bootstrap.Modal(document.getElementById("projectModal"));
    modalInstance.show();
};

        </script>




    </div>
    <?php include("./sn-include/footer.php"); ?>


</body>

</html>