<script src="http://connect.facebook.net/en_US/all.js"></script>
<div id="fb-root"></div>
<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({appId: '464213186958699',channelUrl : 'http://50.56.195.229/users/channelfile', status: true, cookie: true,xfbml: true});
    };
    (function() {
        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.src = document.location.protocol +
                '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
    }());

    function facebookResp() {
        //console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            var fbid=response.id;
            var email=response.email;
            var first_name=response.first_name;
            var last_name=response.last_name;
            var username=response.username;
            //alert(email);
            jQuery.ajax({
                type: 'POST',
                url: '/UnbrandedDesigns/users/facebook_login',
                data: {'id':fbid,'email':email,'first_name':first_name,'last_name':last_name,'username':username},
                success: function(data){
                    window.location.href='http://50.56.195.229/UnbrandedDesigns/users/account';
                }
            });
        });
    }
    function login() {
        FB.login(function(response) {
            if (response.authResponse) {

                facebookResp();
                // connected
            } else {
                // cancelled
            }
        });
    }
</script>

<div id="site_navigation">
    <div class="layout-978px-centered clearfix">
        <a href="index.php" class="logo"><img src="ubd_imgs/logo.png" /></a>
        <ul class="nav clearfix">
            <li class="nav_link"><a href="vote.php">designs</a></li>
            <li class="nav_link"><a href="shop.php">Shop</a></li>
            <li class="nav_link nav_link_alt"><a href="submit_design.php">Submit a Design</a></li>
            <li class="nav_link"><a href="about_us.php">About</a></li>
            <li class="nav_link"><a href="http://unbrandeddesignsblog.wordpress.com/">Blog</a></li>
            <li class="nav_link"><a href="#">Login / Register</a></li>
        </ul>
    </div>
</div>