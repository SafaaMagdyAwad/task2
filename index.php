<?php

$data=[
  "name"=>"safaa",
"lname"=>"magdy",
"email"=>"engsafaamagdy1024@gmail.com",
"phone"=>"01067605447",
"address"=>"Mansura",
"about"=>"i'm a fullstack develober react , laravel",
"image"=>"image/1.jpg",
"facebook"=>"https://www.facebook.com/profile.php?id=61556737927247",
"twitter"=>"https://twitter.com/SafaaMagdy69799",
"linkedin"=>"https://www.linkedin.com/in/safaa-magdy-aa7381234/"
];
$education=[
  "collage"=>["name"=>"Al-Azhar University","degree"=>"Bachelor of Engineering","department"=>"Computer & Systems engineering","year"=>"August 2023 - May 2018","gpa"=>" Excellent with honors"],
  "highSchool"=>["name"=>"Bilkas Kames High School", "degree"=>"High School","year"=>"August 2018 - May 2015","gpa"=>"94%"],
  "PrimarySchool"=>["name"=>"Bilkas Kames Primary School", "degree"=>"Primary School","year"=>"August 2015 - May 2012","gpa"=>"91%"],
];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $data['name'] ?></title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
      />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <style>
      * {
        font-family: "Saira Extra Condensed", sans-serif;
      }

      .bg-main {
        background-color: #bd5d38 !important;
      }
      
      .text-main {
        color: #bd5d38;
      }

      .border-main {
        border: 5px solid #ca7d60;
      }

      .text-hover:hover {
        color: #bd5d38;
        opacity: 0.3;
      }

      .text-gray {
        color: #343a40;
      }
    </style>
  </head>
  <body>
    <div class="container mt-3">
      <div
        class="row justify-content-center align-items-center"
        style="height: 95vh"
      >
        <div class="col-lg-3 col-5 bg-main h-100 rounded-start">
          <div
            class="d-flex flex-column align-items-center justify-content-center h-100"
          >
            <div
              class="position-relative overflow-hidden mb-4"
              style="max-width: 200px"
            >
              <img
              src="<?php echo $data['image'] ?>"

                alt="safaa"
                style="aspect-ratio: 1"
                class="w-100 rounded-circle border-main"
              />
            </div>
            <h4 class="mb-3">
              <a
                href="#about"
                class="text-decoration-none text-white text-hover"
                >About</a
              >
            </h4>
            <h4 class="mb-3">
              <a
                href="#education"
                class="text-decoration-none text-white text-hover"
                >Education</a
              >
            </h4>
            <h4 class="mb-3">
              <a
                href="#skills"
                class="text-decoration-none text-white text-hover"
                >Skills</a
              >
            </h4>
          </div>
        </div>
        <div class="col-lg-8 h-100 overflow-auto">
          <div
            class="row h-100 align-items-center justify-content-center flex-column"
            id="about"
          >
            <h1 class="text-gray display-3 fw-bold">
              <?php echo $data['name'] ?>
              <span class="text-main"><?php echo $data['lname'] ?></span>
            </h1>
            <div class="subheading mb-3 fw-bold text-gray">
              <?php echo $data['address'] ?>  , <?php echo $data['phone'] ?> ,  
              <a href="<?php echo $data['email'] ?>" class="text-main"
                ><?php echo $data['email'] ?></a
              >
            </div>
            <p class="lead mb-5">
              <?php echo $data['about'] ?>
            </p>
            <div class="social-media">
              <a class="social-icon fs-2 fw-bold text-gray me-2" 
              href="<?php echo $data['facebook'] ?>"
                ><i class="bi bi-facebook"></i
              ></a>
              <a class="social-icon fs-2 fw-bold text-gray" 
              href="<?php echo $data['twitter'] ?>"
                ><i class="bi bi-twitter me-2"></i
              ></a>
              <a class="social-icon fs-2 fw-bold text-gray" 
              href="<?php echo $data['linkedin'] ?>"
                ><i class="bi bi-linkedin me-2"></i
              ></a>
            </div>
          </div>
<div class="row h-100 flex-column" id="education">
            <h2 class="text-gray display-3 fw-bold mt-5">Education</h2>
            <section class="my-3 mx-2">
              <h4 class="fw-bold text-gray"> "<?php echo $education['collage']['name'] ?></h4>
              <div class="d-flex justify-content-between">
                <h5 class="fw-bold text-gray opacity-75">
                <?php echo $education['collage']['degree'] ?>
                </h5>
                <p class="me-5 text-gray"><?php echo $education['collage']['year'] ?></p>
              </div>
              <p class="mb-0"><?php echo $education['collage']['department'] ?></p>
              <p class="mb-0">GPA: <?php echo $education['collage']['gpa'] ?></p>
            </section>
            <hr class="w-75 mx-auto" />
            <section class="my-3 mx-2">
              <h4 class="fw-bold text-gray"><?php echo $education['highSchool']['name'] ?></h4>
              <div class="d-flex justify-content-between">
                <h5 class="fw-bold text-gray opacity-75"><?php echo $education['highSchool']['degree'] ?></h5>
                <p class="me-5 text-gray"><?php echo $education['highSchool']['year'] ?></p>
              </div>
              <p class="mb-0">GPA: <?php echo $education['highSchool']['gpa'] ?></p>
            </section>
            <hr class="w-75 mx-auto" />
            <section class="my-3 mx-2">
              <h4 class="fw-bold text-gray"><?php echo $education['PrimarySchool']['name'] ?></h4>
              <div class="d-flex justify-content-between">
                <h5 class="fw-bold text-gray opacity-75"><?php echo $education['PrimarySchool']['degree'] ?></h5>
                <p class="me-5 text-gray"><?php echo $education['PrimarySchool']['year'] ?></p>
              </div>
              <p class="mb-0">GPA: <?php echo $education['PrimarySchool']['gpa'] ?></p>
            </section>
          </div>           
          <div class="row h-100 flex-column" id="skills">
            <h2 class="text-gray display-3 fw-bold mt-5">Skills</h2>
            <h4 class="fw-bold text-gray opacity-75 mt-5">SKILLS</h4>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-filetype-php"></i>
              <span class="fs-5">Programing with PHP</span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-filetype-js"></i>
              <span class="fs-5">Programing with javaScript</span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-filetype-java"></i>
              <span class="fs-5">Programing with Java</span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-laptop"></i>
              <span class="fs-5">Programing with JavaSpring</span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-box"></i>
              <span class="fs-5">Programing with laravel</span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-laptop"></i>
              <span class="fs-5">mavin </span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-database"></i>
              <span class="fs-5">can ceate DataBase</span>
            </div>
            <div class="fs-2 fw-bold text-gray mx-3">
              <i class="bi bi-people"></i>
              <span class="fs-5">Team work</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
     
