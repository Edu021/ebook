<?php

/**
 * Footer
 */

if (!defined('WPINC')) {
    header('Location: /');
    exit;
}

?>

<?php inc('partials/footer/main-footer'); ?>

<?php wp_footer(); ?>

<script>
    var BASE_URL  = '<?= get_site_url(); ?>';
    var IS_HOME   = '<?= is_page('home'); ?>';
    var THEME_URL = '<?= theme_url(); ?>';
</script>

<link rel="stylesheet" href='<?= theme_url('public/css/aos.css') ?>'>
<link rel="stylesheet" href='<?= theme_url('public/css/style.min.css') ?>?v=0.0.0'>

<script src="<?= theme_url('public/vendors/jquery.min.js'); ?>"></script>
<script src="<?= theme_url('public/vendors/slick.min.js'); ?>"></script>
<script src="<?= theme_url('public/vendors/bootstrap-notify.min.js'); ?>"></script>
<script src="<?= theme_url('public/vendors/aos.js'); ?>"></script>
<script src="<?= theme_url('public/js/scripts.min.js'); ?>?v=0.0.0"></script>

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    })
    window.addEventListener('load', AOS.refresh);


    // Lazy Load para divs com background-image // background-image -> data-style=""
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll(".lazy"));
        var active = false;

        const lazyLoad = function() {
            if (active === false) {
                active = true;

                setTimeout(function() {
                    lazyImages.forEach(function(lazyImage) {
                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                            lazyImage.style = lazyImage.dataset.style;
                            lazyImage.classList.remove("lazy");

                            lazyImages = lazyImages.filter(function(image) {
                                return image !== lazyImage;
                            });

                            if (lazyImages.length === 0) {
                                document.removeEventListener("scroll", lazyLoad);
                                window.removeEventListener("resize", lazyLoad);
                                window.removeEventListener("orientationchange", lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        document.addEventListener("scroll", lazyLoad);
        window.addEventListener("resize", lazyLoad);
        window.addEventListener("orientationchange", lazyLoad);
    });

    // Lazy Load para tags img // img -> data-src=""
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll(".lazy-img"));
        var active = false;

        const lazyLoad = function() {
            if (active === false) {
                active = true;

                setTimeout(function() {
                    lazyImages.forEach(function(lazyImage) {
                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy-img");

                            lazyImages = lazyImages.filter(function(image) {
                                return image !== lazyImage;
                            });

                            if (lazyImages.length === 0) {
                                document.removeEventListener("scroll", lazyLoad);
                                window.removeEventListener("resize", lazyLoad);
                                window.removeEventListener("orientationchange", lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        document.addEventListener("scroll", lazyLoad);
        window.addEventListener("resize", lazyLoad);
        window.addEventListener("orientationchange", lazyLoad);
    });
</script>

</body>

</html>