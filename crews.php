<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "php/head.php"; ?>
    <title>Our Crews (2023) - Team Srijan | Formula Student Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include_once "php/header.php"; ?>
    <main class="flex-grow-1 py-3">
        <article class="container-xxl">
            <h1 class="text-center">OUR CREWS</h1>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <select class="form-select form-select-lg">
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
            <hr>
            <section>
                <h4>Vehicle Dynamics</h4>
                <div class="owl-carousel owl-theme crews-carousel">
                    <div class="item">
                        <div class="card">
                            <div class="ratio ratio-1x1"><img src="https://cdn-5.motorsport.com/images/amp/0ZR4WyL0/s1000/carlos-sainz-jr-ferrari-1.jpg" alt="Carlos Sainz" class="card-img-top"></div>
                            <div class="card-body">
                                <h6>Carlos Sainz</h6>
                                <nav class="nav nav-justified">
                                    <a href="mailto:" class="nav-item"><i class="fa-regular fa-envelope fa-lg"></i></a>
                                    <a href="#" class="nav-item"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section>
                <h4>Vehicle Dynamics</h4>
                <div class="owl-carousel owl-theme crews-carousel">
                    <div class="item">
                        <div class="card">
                            <div class="ratio ratio-1x1"><img src="https://cdn-5.motorsport.com/images/amp/0ZR4WyL0/s1000/carlos-sainz-jr-ferrari-1.jpg" alt="Carlos Sainz" class="card-img-top"></div>
                            <div class="card-body">
                                <h6>Carlos Sainz</h6>
                                <nav class="nav nav-justified">
                                    <a href="mailto:" class="nav-item"><i class="fa-regular fa-envelope fa-lg"></i></a>
                                    <a href="#" class="nav-item"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <?php include_once "php/footer.php"; ?>
</body>
<?php include_once "php/script.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".crews-carousel").owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    stagePadding: 25
                },
                425:{
                    items:2
                },
                576:{
                    items:3,
                    stagePadding: 25
                },
                768:{
                    items:4
                },
                992:{
                    items:5
                }
            }
        })
    })
</script>
</html>