<div class="col-lg-3 col-md-4">
    <div class="property_dashboard_navbar">
        <div class="dash_user_avater">
            <img src="public/img/user-3.jpg" class="img-fluid avater" alt="">
            <h4><?php echo $_SESSION["uauth"]["username"]; ?></h4>
            <span>HCM VietNam</span>
        </div>
        
        <div class="dash_user_menues">
            <ul>
                <!-- thêm active vào li tương ứng với url đang chạy -->
                <li><a href="index.php?controller=DashBoard&action=index"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                <li><a href="index.php?controller=DashBoard&action=profile"><i class="fa fa-user-tie"></i>My Profile</a></li>
                <li><a href="index.php?controller=DashBoard&action=saveProperty"><i class="fa fa-bookmark"></i>Saved Property<span class="notti_coun style-2">7</span></a></li>
                <li><a href="index.php?controller=DashBoard&action=myProperty"><i class="fa fa-tasks"></i>My Properties</a></li>
                <li><a href="index.php?controller=DashBoard&action=messages"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
                <li><a href="index.php?controller=DashBoard&action=package"><i class="fa fa-gift"></i>Choose Package<span class="expiration">10 days left</span></a></li>
                <li><a href="index.php?controller=DashBoard&action=newProperty"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                <li><a href="index.php?controller=DashBoard&action=changePassword"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
            </ul>
        </div>
        
        <div class="dash_user_footer">
            <ul>
                <li><a href="#"><i class="fa fa-power-off"></i></a></li>
                <li><a href="#"><i class="fa fa-comment"></i></a></li>
                <li><a href="#"><i class="fa fa-cog"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Lấy đường dẫn hiện tại
    var currentUrl = window.location.href;

    // Lấy tất cả các thẻ <a> trong danh sách menu
    var menuLinks = document.querySelectorAll('.dash_user_menues a');

    // Lặp qua từng liên kết và kiểm tra nếu href của nó khớp với đường dẫn hiện tại
    for (var i = 0; i < menuLinks.length; i++) {
        if (menuLinks[i].href === currentUrl) {
            // Thêm class "active" vào thẻ li của liên kết đó
            menuLinks[i].parentNode.classList.add('active');
            break; // Kết thúc vòng lặp sau khi tìm thấy liên kết khớp
        }
    }
</script>
