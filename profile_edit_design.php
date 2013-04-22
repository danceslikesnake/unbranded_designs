<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Vote | Unbranded Designs</title>
    <link type="text/css" rel="stylesheet" href="ubd_css/reset.css" />
    <link type="text/css" rel="stylesheet" href="ubd_css/overlord.css" />
    <link type="text/css" rel="stylesheet" href="ubd_css/tags2.css" />
    <script type="text/javascript" src="//use.typekit.net/gxr0nwt.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
<!-- Navigation -->
<?php include "ubd_elements/navigation.php"; ?>

<!-- Main Content -->
<div class="site_content alt_bg_2 no-border">
    <div class="section_wrapper layout-978px-centered clearfix">
        <div class="col_2 profile_userpic"><img src="ubd_imgs/userpic.jpg" /></div>
        <div class="col_7 profile_userinfo">
            <h1>Dances Like Snake</h1>
            <p>a.k.a <strong>Dennis Ramirez</strong> from <strong>Chicago, IL</strong><br />Member Since July 2012</p>
            <p>
                <a href="#" class="profile_link url_3">Website</a>&nbsp;&nbsp;&nbsp;<a href="#" class="profile_link facebook_3">Facebook</a>&nbsp;&nbsp;&nbsp;<a href="#" class="profile_link twitter_3">@TwitterHandle</a></p>
        </div>
        <div class="col_3 profile_useractions endcap">
            <a href="#" class="follow_button">Follow This User</a>
            <a href="#" class="send_a_message">Send A Message</a>
        </div>
    </div>
</div>
<div class="site_content alt_bg_2">
    <div class="layout-978px-centered profile_nav_wrapper">
        <ul class="profile_nav clearfix">
            <li><a href="profile.php">Dashboard</a></li>
            <li><span class="current_tab">Designs</span></li>
            <li><a href="profile_messages.php">Messages</a></li>
            <li><a href="profile_followers.php">Followers</a></li>
            <li><a href="profile_following.php">Following</a></li>
            <li><a href="profile_account.php">My Account</a></li>
        </ul>
    </div>
</div>
<div class="site_content">
    <div class="section_wrapper layout-978px-centered clearfix">
        <div class="col_8">
            <h2 class="section_headers">You Are Editing: <span class="highlight">Name of Piece</span></h2>
            <div class="fieldset_wrapper">
                <dl class="clearfix">
                    <dd>
                        <label>Name of The Design</label>
                        <input type="text" class="field col_8_input_size" />
                    </dd>
                    <dd>
                        <label>Description of the Design</label>
                        <textarea class="field col_8_input_size"></textarea>
                    </dd>
                    <dd>
                        <label>Tags to describe your Design (materials, type, etc.)</label>
                        <textarea id="tag_field" class="tag_field"></textarea>
                    </dd>
                </dl>
            </div>
            <h2 class="section_headers">Upload Images</h2>
            <p style="margin-bottom: 18px;">Images MUST be JPG or PNG format<br>Images MUST be 960 x 540px in size.</p>
            <div class="fieldset_wrapper">
                <dl class="clearfix">
                    <dd class="col_8_dd_half_size">
                        <label>Image 1</label>
                        <input type="file" class="field col_8_input_half_size" />
                    </dd>
                    <dd class="col_8_dd_half_size endcap">
                        <label>Image 2</label>
                        <input type="file" class="field col_8_input_half_size" />
                    </dd>
                    <dd class="col_8_dd_half_size">
                        <label>Image 3</label>
                        <input type="file" class="field col_8_input_half_size" />
                    </dd>
                    <dd class="col_8_dd_half_size endcap">
                        <label>Image 4</label>
                        <input type="file" class="field col_8_input_half_size" />
                    </dd>
                    <dd class="col_8_dd_half_size">
                        <label>Image 5</label>
                        <input type="file" class="field col_8_input_half_size" />
                    </dd>
                </dl>
                <dl>
                    <dd class="dd_submit">
                        <input type="submit" value="Edit Design" />
                    </dd>
                </dl>
            </div>
        </div>
        <div class="col_4 endcap">
            <h2 class="section_headers">Manage Your Design's Images</h2>
            <ul id="media_sort_holder" class="clearfix">
                <li id="asset_353" class="sort_holder">
                    <div class="handle">&laquo; Use Me To Drag &raquo;</div>
                    <div><img src="ubd_imgs/design_list_placeholder.jpg" width="138" height="77" border="0" /></div>
                    <div class="delete_handle"><a href="javascript:;" class="remove_media_link">Delete This Asset</a></div>
                </li>
                <li id="asset_355" class="sort_holder endcap">
                    <div class="handle">&laquo; Use Me To Drag &raquo;</div>
                    <div><img src="ubd_imgs/design_list_placeholder.jpg" width="138" height="77" border="0" /></div>
                    <div class="delete_handle"><a href="javascript:;" class="remove_media_link">Delete This Asset</a></div>
                </li>
                <li id="asset_356" class="sort_holder">
                    <div class="handle">&laquo; Use Me To Drag &raquo;</div>
                    <div><img src="ubd_imgs/design_list_placeholder.jpg" width="138" height="77" border="0" /></div>
                    <div class="delete_handle"><a href="javascript:;" class="remove_media_link">Delete This Asset</a></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include "ubd_elements/footer.php"; ?>

<!-- JQUERY and Other Javascript -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript" src="ubd_js/overlord.js"></script>
<script type="text/javascript" src="ubd_js/tag.js"></script>
<script type="text/javascript" src="ubd_js/sortable.js"></script>
<script type="text/javascript" src="ubd_js/jquery.dropkick-1.0.0.js"></script>
</body>
</html>