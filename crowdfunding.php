<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "php/head.php"; ?>
    <title>Crowdfunding - Team Srijan | Formula Student Club</title>
    <style>
        .story{
            background: url(assets/images/crowdfunding/bubbles-bg.webp) top left / contain no-repeat, url(assets/images/crowdfunding/strips-bg.webp) bottom right / contain no-repeat;
        }
        @media screen and (max-width: 1199.98px) and (min-width: 576px){
            .story{
                background: url(assets/images/crowdfunding/strips-bg.webp) bottom right / contain no-repeat;
            }
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include_once "php/header.php"; ?>
    <main class="flex-grow-1 py-3">
        <article class="container-xxl">
            <h1 class="text-center">Crowdfunding</h1>
            <hr>
            <section class="story">
                <h3>Help Us Design, Build & Compete</h3>
                <p>Cultivating innovation and fostering talent lies at the heart of our endeavor at Team Srijan Club, the Formula Student Club of Birla Institute of Technology - Mesra. With a passion for engineering excellence, we are embarking on an ambitious journey to design and construct an Electric Vehicle (EV) Formula Student Car, poised to compete in esteemed competitions like Formula Bharat and Formula Green. However, such a monumental undertaking requires more than just technical expertise; it demands unwavering support from individuals and organizations who share our vision for a sustainable and technologically advanced future.</p>
                <p>By contributing to our cause, you are not merely donating; you are investing in the next generation of engineering leaders. Your support will enable us to push the boundaries of innovation, refine our skills, and gain invaluable hands-on experience in the competitive arena of motorsport engineering. Beyond the realm of academia, your donation will empower us to represent our institution and country proudly on the international stage, showcasing the prowess and ingenuity of Indian engineering talent.</p>
                <p>Moreover, your generosity will resonate far beyond the confines of our club. By supporting initiatives like ours, you are championing sustainable transportation solutions and advocating for a greener, cleaner future. Every rupee donated will be meticulously allocated towards crucial aspects of our project, from research and development to manufacturing and transportation. Together, we can transform aspirations into achievements, and dreams into reality.</p>
                <p>Join us in our quest to drive innovation, inspire greatness, and leave an indelible mark on the landscape of engineering excellence. Together, let's pave the way towards a brighter, more sustainable future. Thank you for considering supporting Team Srijan Club and becoming a vital part of our journey.</p>
            </section>
            <hr>
            <section class="p-3 rounded-3" style="background: url(assets/images/crowdfunding/comic-bg.webp) center / cover no-repeat, radial-gradient(#1872CF, #004E9F)">
                <h3 class="text-white">Support Us</h3>
                <form action="" method="post" class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="name">
                            <label for="#">Full name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-floating">
                            <input type="email" class="form-control" placeholder="email">
                            <label for="#">Email address</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="amount">
                            <label for="#">Amount</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Message" style="height: 5em; resize: none"></textarea>
                            <label for="#">Message</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <button type="submit" class="btn btn-danger w-100">Continue</button>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <?php include_once "php/footer.php"; ?>
</body>
<?php include_once "php/script.php"; ?>
</html>