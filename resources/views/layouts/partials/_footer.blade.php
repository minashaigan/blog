<!-- Footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<footer>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <section id="contact">
                <h4><strong>3D Mad Max</strong>
                </h4>
                <p>Valiasr St
                    <br>Tehran, Tehran</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (021) 66-789032</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="https://plus.google.com" title="google plus"><i class="fa fa-google-plus fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" title="facebook"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" title="twitter"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" title="instagram"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="telegram.me/" title="telegram"><i class="fa fa-telegram fa-fw fa-3x"></i></a>
                    </li>
                </ul>
    </section>
                <hr class="small">
                <p class="text-muted">Copyright &copy; Vesta Tous Aria 2017</p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>

</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
</script>