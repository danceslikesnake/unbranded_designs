<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <style type="text/css">
        body {
            text-align: center;
            background: black;
            font-size: 24px;
            margin: 0;
            padding: 0;
            font-family: arial, sans-serif;
        }
        #navigation {
            height: 75px;
            position: fixed;
            width: 100%;
            top:0;
            left: 0;
            background: white;
            z-index: 5;
        }
        #navigation a {
            font-size: 14px;
            font-weight: bold;
        }
        #container {
            margin: 84px auto 0 auto;
            overflow: hidden;
            width:949px;
            padding-left: 9px;
            z-index: 1;
            background: white;
            text-align: left;
        }
        .item {
            float: left;
            margin-bottom: 9px;
            margin-right: 9px;
        }
        .type1 {
            width: 307px;
            height: 393px;
            background: #78BD55;
        }
        .type2 {
            width: 623px;
            height: 393px;
            background: #A0C8FC;
        }
        .type3 {
            width: 940px;
            height: 393px;
            background: #DD2266;
        }
        .type4 {
            width: 307px;
            height: 192px;
            background: #FF6633;
        }
        .hold_small {
            width: 316px;
            float: left;
            overflow: hidden;
        }
    </style>

</head>
<body>
<div id="navigation">3 Sizes &amp; Featured<br><a href="test.php">3 sizes &amp; featured</a></div>
<div id="container">
    <?php
    $row_slots_left = 6;
    $possible_slots = array(
        6 => array('type1', 'type2', 'type3', 'type1', 'type2', 'type3', 'type1', 'type2', 'type3', 'type1', 'type2', 'type3', 'type1', 'type2', 'type3', 'type1', 'type2', 'type3', 'type4'),
        5 => array('type4'),
        4 => array('type1', 'type2', 'type1', 'type2', 'type1', 'type2', 'type1', 'type2', 'type1', 'type2', 'type1', 'type2', 'type4'),
        3 => array('type4'),
        2 => array('type1', 'type1', 'type1', 'type1', 'type1', 'type1', 'type4'),
        1 => array('type4')
    );
    $slot_value = array(
        'type1' => 2,
        'type2' => 4,
        'type3' => 6,
        'type4' => 1
    );
    $close_half = FALSE;

    for($i=1;$i<=25;$i++)
    {
        if($row_slots_left==6)
        {
            $random_type = rand(1,6);
        }
        else
        {
            $random_type = $row_slots_left;
        }

        // get possible types
        $possible_types = $possible_slots[$random_type];
        $count = count($possible_types) - 1;

        $use = rand(0, $count);

        $class_name = $possible_types[$use];

        if($possible_types[$use]=='type4' && $row_slots_left%2==0)
        {
            echo '<div class="hold_small">';
            $close_half = TRUE;
        }
        if($row_slots_left%2!=0)
        {
            $class_name = 'type4';
        }
    ?>
    <div class="this_bg<?= $i; ?> item <?php echo $class_name; ?>">
        <div style="padding: 9px; background: #008f8b; color: white;"><?= $row_slots_left; ?> slots left</div>
    </div>
    <?php
        $row_slots_left -= $slot_value[$class_name];
        if($close_half && $row_slots_left%2==0)
        {
            echo '</div>';
            $close_half = FALSE;
        }
        if($row_slots_left <= 0)
        {
            $row_slots_left = 6;
        }
    }
    ?>
</div>
<script src="jquery-1.7.1.min.js"></script>
<script src="jquery.anystretch.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    <?php
    $img_array = array('test_bg.jpg', 'test_bg2.jpg', 'test_bg3.jpg', 'test_bg4.jpg', 'test_bg.jpg', 'test_bg2.jpg', 'test_bg3.jpg', 'test_bg4.jpg', 'test_bg.jpg', 'test_bg2.jpg', 'test_bg3.jpg', 'test_bg4.jpg');
    for($i=1;$i<=25;$i++)
    {
        $rand_num = rand(0, 3);
?>
        $('.this_bg<?= $i; ?>').backstretch("<?php echo $img_array[$rand_num]; ?>");
        <?php
    }
        ?>
    });
</script>
</body>
</html>