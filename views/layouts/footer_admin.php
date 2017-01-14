
    <div class="page-buffer"></div>
    </div>

    <footer id="footer" class="page-footer"><!--Footer-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +987 2 444 125</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> livesmitty@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<p class="pull-left">Copyright © 2016</p>-->
                </div>
            </div>
        </div>
    </footer><!--/Footer-->



    <script src="/template/js/jquery.js"></script>
    <script src="/template/js/jquery.cycle2.min.js"></script>
    <script src="/template/js/jquery.cycle2.carousel.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/jquery.scrollUp.min.js"></script>
    <script src="/template/js/price-range.js"></script>
    <script src="/template/js/jquery.prettyPhoto.js"></script>
    <script src="/template/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $(".add-to-cart").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/addAjax/"+id, {}, function (data) {
                    $("#cart-count").html(data);
                });
                return false;
            });
        });
    </script>

    </body>
    </html>

