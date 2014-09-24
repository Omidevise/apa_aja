<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css');?>" type="text/css"/>


<title><?php echo $title; ?></title>
</head>
 
<body>
<div id="header">
<img src="<?php echo base_url().'theme/images/banner.jpg';?>"/>
<div id="top_nav">Home | Profile | Product | Sejarah | Contact | Download | Support | Link | Iklan | Karir | Webmail</div>
</div>
 
<div id="content">
    <div id="leftbar">
        <?php echo $menu;?>
    </div>
    <div id="rightbar">
        <?php echo $content; ?>
    </div>
    <div id="clear" style="display:block;height:1px;clear:both;"> </div>
</div>
 
<div id="footer">
    <p class="copy">copyright © 2013 - your company</p>
</div>
 
</body>
</html>