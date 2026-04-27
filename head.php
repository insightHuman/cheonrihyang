<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불

run_event('pre_head');

include_once(G5_PATH . '/head.sub.php');
// include_once(G5_LIB_PATH.'/latest.lib.php');
// include_once(G5_LIB_PATH.'/outlogin.lib.php');

function asset($path)
{
   $fullPath = $_SERVER['DOCUMENT_ROOT'] . $path;

   if (file_exists($fullPath)) {
      return $path . '?v=' . filemtime($fullPath);
   } else {
      return $path;
   }
}

?>


<link rel="stylesheet" href="<?= asset('/css/default.css'); ?>">
<link rel="stylesheet" href="<?= asset('/asset/css/share__.min.css'); ?>">
<link rel="stylesheet" href="<?= asset('/asset/css/aos.css'); ?>">
<script src="<?= asset('/asset/js/aos.js'); ?>"></script>


<header class="js__header opens">
   <div class="header-inner">
      <div class="left">
         <div class="left-inner">
            <h1 class="logo">
               <a class="js__top-btn">
                  <img src="<?= asset('/asset/image/logo.png'); ?>">
               </a>
            </h1>
         </div>
      </div>

      <div class="right">
         <div class="right-inner">
            <div class="desktop-cont move-gr">
               <div class="move-gr-inner">
                  <ul>
                     <li>
                        <p class="js__sec_move-btn" move-attr="2">천리향한의원</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="3">의료진 소개</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="4">CRFM 시스템</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="5">인체에 대한 관점</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="6">통합 검사 시스템</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="7">통합 치료 시스템</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="9">핵심 진료</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="10">둘러보기</p>
                     </li>
                     <li>
                        <p class="js__sec_move-btn" move-attr="11">진료안내</p>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="btn js__header-btn mobile-cont">
               <i class="line line-1">
                  <div class="lines"></div>
                  <div class="lined"></div>
               </i>
               <i class="line line-2">
                  <div class="lines"></div>
                  <div class="lined"></div>
               </i>
               <i class="line line-3">
                  <div class="lines"></div>
                  <div class="lined"></div>
               </i>
            </div>
         </div>
      </div>
   </div>
   <div class="ham-menu js__ham-menu mobile-cont">
      <div class="ham-inner">
         <ul>
            <li>
               <p class="js__sec_move-btn" move-attr="2">천리향한의원</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="3">의료진 소개</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="4">CRFM 시스템</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="5">인체에 대한 관점</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="6">통합 검사 시스템</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="7">통합 치료 시스템</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="9">핵심 진료</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="10">둘러보기</p>
            </li>
            <li>
               <p class="js__sec_move-btn" move-attr="11">진료안내</p>
            </li>
         </ul>
      </div>
   </div>
</header>