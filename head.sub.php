<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$g5_debug['php']['begin_time'] = $begin_time = get_microtime();
?>

<!doctype html>
<html lang="ko">

<head>
   <meta charset="utf-8">
   <meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1">

   <title>천리향한의원</title>
   <meta property="title" content="천리향한의원">
   <meta property="og:title" content="천리향한의원">
   <meta name="description" content="전통 한의학과 신경과학을 기반으로 몸의 기능과 원인을 깊이 있게 이해합니다.">
   <meta property="og:description" content="불면증, 만성통증, 어지럼증, 만성 소화불량, 자율신경불균형 등 개인별 상황에 맞춘 진료를 제공합니다.">
   <meta name="author" content="천리향한의원">
   <meta name="keywords" content="해운대한의원, 부산불면증한의원, 센텀한의원, 부산어지럼증한의원, 해운대불면증한의원, 센텀불면증한의원, 해운대교통사고한의원">
   <!--오픈 그래프-->
   <meta property="og:type" content="website">
   <meta property="og:image" content="http://cheonrihyang.com/asset/image/meta_logo.png">
   <meta property="og:url" content="cheonrihyang.com">

   <?php
   if (defined('G5_IS_ADMIN')) {
      if (!defined('_THEME_PREVIEW_'))
         echo '<link rel="stylesheet" href="' . run_replace('head_css_url', G5_ADMIN_URL . '/css/admin.css?ver=' . G5_CSS_VER, G5_URL) . '">' . PHP_EOL;
   }
   ?> 

   <script>
      var g5_url = "<?php echo G5_URL ?>";
      var g5_bbs_url = "<?php echo G5_BBS_URL ?>";
      var g5_is_member = "<?php echo isset($is_member) ? $is_member : ''; ?>";
      var g5_is_admin = "<?php echo isset($is_admin) ? $is_admin : ''; ?>";
      var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
      var g5_bo_table = "<?php echo isset($bo_table) ? $bo_table : ''; ?>";
      var g5_sca = "<?php echo isset($sca) ? $sca : ''; ?>";
      var g5_editor = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor']) ? $config['cf_editor'] : ''; ?>";
      var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
      <?php if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
         var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
      <?php } ?>
      <?php if (defined('G5_IS_ADMIN')) { ?>
         var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
      <?php } ?>
   </script>

   <script type="text/javascript" src="/asset/js/jquery.min.js"></script>
   <script src="/js/common.js"></script>
   
</head>

<body>