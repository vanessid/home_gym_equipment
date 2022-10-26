<!----Header ---->
<?php include_once("database/connect.php");?>
<?php if (!isset($_SESSION['captcha'])) : ?>
 <?php   $_SESSION['message'] = 'Please verify captcha before proceeding to home page';
        $_SESSION['type'] = 'error'; ?>
<?php include_once('captcha.php')?>

<?php else: ?>
<?php include_once('controllers/view_counter.php') ?>
<?php include_once('includes/header.php') ?>
<?php $page = 'Home'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

<div class="text-box">
    <h1>Home Gym Equipment</h1>
    <P> Exercise equipment is any apparatus or device used during physical activity to enhance the strenght<br>
        or
        conditioning effects of that exercise by providing either fixed or adjustable amount of restistance,
        or<br> to otherwise enhance experience or outcome of an exercise routine.<br>
        A home gym is a compact unit of equipment designed to allow you to perform ma y exercises at the one
        station.
        <br> These workstations are designed to fit into a spare room, basement or garage
        so that you can do weight training at home.
    </P>
    <a href="" class="hero-btn">Visit Us To Know More</a>
</div>
</section>
<!-----Equipment---->
<section class="equipment">
    <h1>Featured Products This Month</h1>

    <div class="row">
        <div class="equipment-col">
            <h2>Bowflex Adustable Dumbles</h2>
            <video controls>
                <source src="video/j.mp4" type="video/mp4">
            </video>
        </div>
        <div class="equipment-col">
            <h2> Rogue Monster Lite RML-3WC Power Rack</h2>
            <video controls>
                <source src="video/h.mp4" type="video/mp4">
            </video>

        </div>

    </div>
</section>
<!---campus--->
<section class="campus">
    <h1>Our Global Campus</h1>
    <p>have because it can be folded and be fixed to the wall.</p>

    <div class="row">
        <div class="campus-col">
            <img src="images/woman.png" alt="woman">
            <div class="layer">
                <h3>London</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/weights.jpg" alt="woman">
            <div class="layer">
                <h3>New York</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/man.png" alt="woman">
            <div class="layer">
                <h3>green</h3>
            </div>
        </div>
    </div>
</section>

<!-- Slider main container -->
<div class="container">

    <div class="swiper">

        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="images/garage.png"></div>
            <div class="swiper-slide"><img src="images/outside.png"></div>
            <div class="swiper-slide"><img src="images/small.png"></div>
            <div class="swiper-slide"><img src="images/room.png"></div>

        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>

</div>
<!----testimonials---->
<section class="testimonials">
        <h1>What our customers say</h1>
        

        <div class="row">
            <div class="testimonial-col">
                <img src="images/tim.jpg" alt="user1">
                <div>
                    <p>I find their gym equipment durable</p>
                    <h3>Lupita Nyongo</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-0"></i>
                </div>
            </div>

            <div class="testimonial-col">
                <img src="images/sam.jpg" alt="user1">
                <div>
                    <p>I purchase my gym equipment from these guysS</p>
                    <h3>John Wright</h3> <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,

        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

<!----Call To Action----->

<section class="cta">
<h1>Purchase the best, simple and  multi-function equipment from US.</h1>
    <a href="" class="hero-btn">CONTACT US</a>
</section>

<!----Footer----->
<?php include_once('includes/footer.php') ?>

<?php endif; ?>