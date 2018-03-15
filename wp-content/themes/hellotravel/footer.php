<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>


<footer id="footer" class="footer">
    <div class="footer_inner">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 footer_column">
                            <h3 class="footer_column_title">Hoạt động</h3>
                            <ul class="footer_link">
                                <li><a href="" title="Về chúng tôi">Về chúng tôi</a></li>
                                <li><a href="" title="Phản hồi">Phản hồi</a></li>
                                <li><a href="" title="Tuyển dụng">Tuyển dụng</a></li>
                                <li><a href="" title="Hoạt động">Hoạt động</a></li>
                            </ul>
                            <!--	<?php /*if ( is_active_sidebar( 'footer-sidebar-1' ) ) : */?>
                        <?php /*dynamic_sidebar( 'footer-sidebar-1' ); */?>
                    --><?php /*endif; */?>
                        </div>
                        <div class="col-sm-6 col-md-3 footer_column">
                            <div class="footer_contact">
                                <h3 class="footer_column_title">Thông tin hữu ích</h3>
                                <div>
                                    <ul class="footer_link">
                                        <li><a href="" title="Hình thức thanh toán">Hình thức thanh toán</a></li>
                                        <li><a href="" title="Chính sách hoàn hủy">Chính sách hoàn hủy</a></li>
                                        <li><a href="" title="Điều khoản sử dụng">Điều khoản sử dụng</a></li>
                                        <li><a href="" title="Chính sách bảo mật">Chính sách bảo mật</a></li>
                                    </ul>
                                </div>
                            </div>
						    <?php /*if ( is_active_sidebar( 'footer-sidebar-2' ) ) : */?><!--
                        <?php /*dynamic_sidebar( 'footer-sidebar-2' ); */?>
                    --><?php /*endif; */?>
                        </div>
                        <div class="col-sm-6 col-md-3 footer_column">
						    <?php /*if ( is_active_sidebar( 'footer-sidebar-3' ) ) : */?><!--
                        <?php /*dynamic_sidebar( 'footer-sidebar-3' ); */?>
                    --><?php /*endif; */?>
                            <h3 class="footer_column_title">Danh mục sản phẩm</h3>
                            <div>
                                <ul class="footer_link">
                                    <li><a href="" title="Tour Nội địa">Tour Nội địa</a></li>
                                    <li><a href="" title="Tour nước ngoài">Tour nước ngoài</a></li>
                                    <li><a href="" title="Tour giá rẻ">Tour giá rẻ</a></li>
                                    <li><a href="" title="Hành trình xa cao cấp">Hành trình xa cao cấp</a></li>
                                    <li><a href="" title="Gói Trăng Mật">Gói Trăng Mật</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 footer_column">
                            <h3 class="footer_column_title">Được chứng nhận</h3>
                            <img src="<?php bloginfo('template_url') ?>/assets/images/chung-nhan.png" alt="" />
                        </div>
                    </div>
                    <div class="airlines">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/airlines.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer_column_title">Kết nối với Hello World Travel</h3>
                </div>
            </div>

            <!--
        <nav id="footer_nav" class="footer_nav">
			<?php
		    /*			wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'menu_id'        => 'footer_menu',
							'menu_class'     => 'footer_menu'
						) );
						*/?>
        </nav>-->
        </div>
    </div>
    <div class="footer_info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row no-gutters footer_info_left">
                        <div class="col-2">
                            <img src="<?php bloginfo('template_url') ?>/assets/images/logo-small.png" class="footer_info_logo" alt="" />
                        </div>
                        <div class="col-10">
                            <h2 class="footer_info_title">CÔNG TY TNHH DU LỊCH CHÀO THẾ GIỚI</h2>
                            <p>
                                Giấy phép kinh doanh số 0105225586 do sở KH&ĐT TP Hà Nội cấp ngày 29/3 năm 2011. <br />
                                Giấy phép Kinh doanh Lữ hành Quốc tế số 01-692/2014/TCDL-GPLHQT
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 footer_info_right">
                    Bạn cần trợ giúp? <strong>Hãy gọi ngay </strong><br />
                    CSKH: <strong>0904.77.2000</strong> <br />
                    Từ 7h30 - 18h hằng ngày
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    Địa chỉ: Số 2 Nguyễn Khắc Hiếu, P. Trúc Bạch, Q. Ba Đình, Hà Nội. <br />
                    Tel: 024 - 63285677.<br />
                    Hotline: 0904.77.2000<br />
                    Email:  info@helloworldtravel.vn
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            Copyright © 2013-2017. All Rights Reserved by Hello World Travel.
        </div>
    </div>
</footer><!-- #Footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- cdnjs -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>

</body>
</html>
