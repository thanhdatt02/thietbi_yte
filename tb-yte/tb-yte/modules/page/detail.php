 <?php
 get_header();
 ?>
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="?mod=home&act=main">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Liên hệ</li>
                </ul>

            </div>
        </div>
    </div>
</div>
            <!--breadcrumbs area end-->

            <!--contact area start-->
<div class="contact_area">
    <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact_message">
                    <h3>Bạn có thắc mắc?</h3>   
                    <form id="contact-form" method="POST" action="assets/mail.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="name" placeholder="Tên *" type="text">    
                            </div>
                            <div class="col-lg-6">
                                <input name="email" placeholder="Email *" type="email">    
                            </div>
                            <div class="col-lg-6">
                                <input name="subject" placeholder="Chủ đề *" type="text">   
                            </div>
                                <div class="col-lg-6">
                                <input name="phone" placeholder="Số điện thoại *" type="text">   
                            </div>

                            <div class="col-12">
                                <div class="contact_textarea">
                                    <textarea placeholder="Tin nhắn *" name="message" class="form-control2"></textarea>     
                                </div>   
                                <button type="submit"> Gửi </button>  
                            </div> 
                            <div class="col-12">
                                <p class="form-messege">
                            </div>
                        </div>
                    </form>    
                </div> 
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="contact_message contact_info">
                    <h3>Liên hệ với chúng tôi</h3>    
                        <ul>
                           <li> Bộ phận CSKH:  <a href="https://www.facebook.com/hoavm.02/">Vũ Minh Hòa</a></li>
                            <li> Bộ phận quản lý thiết bị:  <a href="https://www.facebook.com/profile.php?id=100048111754921">Đỗ Thành Đạt</a></li>
                            <li> Bộ phận kho:    <a href="https://www.facebook.com/duck31litq">Hoàng Mạnh Đức</a></li>
                        </ul>
                    <ul>
                        <li><i class="fa fa-fax"></i>Địa chỉ : Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</li>
                        <li><i class="fa fa-phone"></i> <a href="#">(084) 234 432 3568</a></li>
                        <li><i class="fa fa-envelope-o"></i>duck31litq@gmail.com</li>
                    </ul>        
                    <h3><strong>Thời gian làm việc</strong></h3>
                    <p><strong>Thứ hai – Thứ bảy</strong>:  08AM – 22PM</p>       
                </div> 
            </div>
        </div>
</div>

            <!--contact area end-->
            
            <!--contact map start-->
<!--<div class="contact_map">
    <div class="row">
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb" width="500" height="450" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
</div>-->
            <!--contact map end-->
<?php
 get_footer();
 ?>