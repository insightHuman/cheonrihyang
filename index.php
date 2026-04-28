<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH . '/head.php');
?>

<?php
if (defined('_INDEX_')) { // index에서만 실행
   // include_once(G5_PATH . '/bbs/newwin.inc.php');
}
?>

<link rel="stylesheet" href="/asset/css/swiper-bundle.min.css">
<script type="text/javascript" src="https://oapi.map.naver.com/openapi/v3/maps.js?ncpKeyId=j1xcte098e"></script>

<main class="main__section">
   <section class="main__section-wrap main__section-wrap-1">
      <div class="main__section-inner">
         <div class="main_slide">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="slide-inner">
                     <div class="img-box">
                        <picture>
                           <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/main-slide-1.jpg'); ?>">
                           <img src="<?= asset('/asset/image/desktop/main-slide-1.jpg'); ?>">
                        </picture>
                     </div>
                     <div class="text-box">
                        <div class="text-box-top">
                           <div>
                              <h3>
                                 <p>증상이 아니라</p>
                                 <p><span>시스템</span>을 치료합니다.</p>
                              </h3>
                           </div>
                        </div>
                        <div class="text-box-bot">
                           <div>
                              <h2>
                                 <p>뇌-자율신경-구조의 균형을 회복하는 통합 솔루션</p>
                              </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-ball">
               <div class="text">
                  <p>scroll</p>
               </div>
               <div class="inner">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="27" viewBox="0 0 11 27" fill="none">
                     <path d="M10.5946 21.3299L9.5278 20.2097L6.05454 23.8489V0H4.54074V23.8489L1.0668 20.2018L0 21.3299L5.29695 26.8919L10.5946 21.3299Z" fill="white" />
                  </svg>
                  <div class="ball"></div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-2">
      <div class="automove-line">
         <div class="marquee">
            <img src="<?= asset('/asset/image/desktop/marq-1.png'); ?>">
         </div>
      </div>
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>CHEONRIHYANG ADVANTAGE</p>
                     <p>한의학과 뇌과학의 만남</p>
                     <p>전통 한의학과 신경과학을 기반으로 <br class="mobile-cont">몸의 기능과 원인을 깊이 있게 이해합니다.</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="box">
                        <div class="box-inner">
                           <div class="box-text box-m-left">
                              <div>
                                 <p>첫번째,</p>
                                 <p>
                                    데이터로 증명하는<br>
                                    뇌과학 연구
                                 </p>
                                 <p>
                                    뇌와 신경계의 상관관계를 심도 있게<br>
                                    분석하며, 지속적인 학술 연구를 통해<br>
                                    객관적인 의학적 근거를 구축합니다.
                                 </p>
                              </div>
                           </div>
                           <div class="box-img box-m-right">
                              <div>
                                 <picture>

                                    <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/2-1.jpg'); ?>">
                                    <img src="<?= asset('/asset/image/desktop/2-1.jpg'); ?>">
                                 </picture>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="box">
                        <div class="box-inner">
                           <div class="box-text box-m-right">
                              <div>
                                 <p>두번째,</p>
                                 <p>
                                    한의학 · 현대 과학 통합
                                 </p>
                                 <p>
                                    한의학적 진찰에 EEG(뇌파), HRV(자율신경) 등<br>
                                    현대 과학적 정밀 검사를 결합하여 각종 통증과<br>
                                    질환의 보이지 않는 원인 기전을 파악합니다.
                                 </p>
                              </div>
                           </div>
                           <div class="box-img box-m-left">
                              <div>
                                 <picture>

                                    <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/2-2.jpg'); ?>">
                                    <img src="<?= asset('/asset/image/desktop/2-2.jpg'); ?>">
                                 </picture>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="box">
                        <div class="box-inner">
                           <div class="box-text box-m-left">
                              <div>
                                 <p>세번째,</p>
                                 <p>
                                    다양한 강의 활동
                                 </p>
                                 <p>
                                    신경과학과 한의학 연구를 바탕으로<br>
                                    학술 및 강의 활동을 진행하며 임상 경험과<br>
                                    연구 내용을 지속적으로 공유하고 있습니다.
                                 </p>
                              </div>
                           </div>
                           <div class="box-img box-m-right">
                              <div>
                                 <picture>

                                    <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/2-3.jpg'); ?>">
                                    <img src="<?= asset('/asset/image/desktop/2-3.jpg'); ?>">
                                 </picture>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-3">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>OUR MEDICAL TEAM</p>
                     <p>함께하는 천리향 의료진</p>
                     <p>천리향한의원은 3인의 의료진이 <br class="mobile-cont">협진을 통해 인체 시스템을 분석하고 진료합니다.</p>
                  </div>
               </div>
               <div class="content-wrap desktop-cont">
                  <div class="content-wrap-inner">
                     <div class="item">
                        <div class="item-inner">
                           <div class="left">
                              <div>
                                 <picture>
                                    <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/3-1.jpg'); ?>">
                                    <img src="<?= asset('/asset/image/desktop/3-1.jpg'); ?>">
                                 </picture>
                              </div>
                           </div>
                           <div class="right">
                              <div class="right-inner">
                                 <div class="right-top">
                                    <div>
                                       <p>고정모</p>
                                       <span>원장</span>
                                    </div>
                                 </div>
                                 <div class="line"></div>
                                 <div class="right-bot">
                                    <div class="right-bot-inner">
                                       <div class="subject">
                                          <div>
                                             <p>약력</p>
                                          </div>
                                       </div>
                                       <div class="con">
                                          <div>
                                             <P>동의대학교 한의과대학 졸업</P>
                                             <P>동의대학교 한의과대학 외래교수</P>
                                             <P>동의대학교 한의과대학 출강 다수</P>
                                             <P>대한한방신경정신과학회 회원</P>
                                             <P>대한 뇌파한의학회 정회원</P>
                                             <P>NS한의학회 회장</P>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right-abs">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                          <g clip-path="url(#clip0_346_3589)">
                                             <path d="M3.25203 13C2.76061 13 2.31255 12.8935 1.90786 12.6807C1.53206 12.4679 1.18518 12.2246 0.86721 11.9509C0.578138 11.4339 0.361336 10.8865 0.216802 10.3088C0.0722669 9.70056 0 9.10758 0 8.52982C0 6.58363 0.592592 4.8807 1.77778 3.42105C2.96296 1.931 4.52393 0.790644 6.4607 0L6.93769 1.18596C5.52122 1.85497 4.39385 2.67603 3.55555 3.64912C2.71725 4.59182 2.12466 5.79298 1.77778 7.25263L1.56098 5.33684L4.33604 7.29824C4.97199 7.724 5.39114 8.18014 5.59349 8.66666C5.82474 9.1228 5.94037 9.63979 5.94037 10.2175C5.94037 11.0082 5.68021 11.6772 5.15988 12.2246C4.66847 12.7415 4.03252 13 3.25203 13ZM12.271 13C11.7796 13 11.3315 12.8935 10.9268 12.6807C10.551 12.4679 10.2041 12.2246 9.88619 11.9509C9.59708 11.4339 9.38027 10.8865 9.23578 10.3088C9.12011 9.70056 9.06234 9.10758 9.06234 8.52982C9.06234 6.58363 9.64044 4.8807 10.7968 3.42105C11.9819 1.931 13.5573 0.790644 15.523 0L16 1.18596C14.5546 1.85497 13.4128 2.67603 12.5745 3.64912C11.7651 4.59182 11.187 5.79298 10.8401 7.25263L10.6233 5.33684L13.3984 7.29824C14.0054 7.724 14.4246 8.18014 14.6558 8.66666C14.887 9.1228 15.0027 9.63979 15.0027 10.2175C15.0027 11.0082 14.7425 11.6772 14.2222 12.2246C13.7019 12.7415 13.0515 13 12.271 13Z" fill="white" fill-opacity="0.7" />
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_346_3589">
                                                <rect width="16" height="13" fill="white" />
                                             </clipPath>
                                          </defs>
                                       </svg>
                                       <p>증상이 아니라 <br class="mobile-cont"><b>시스템</b>을 치료합니다 </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="item-inner">
                           <div class="left">
                              <div>
                                 <picture>
                                    <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/3-2.jpg'); ?>">
                                    <img src="<?= asset('/asset/image/desktop/3-2.jpg'); ?>">
                                 </picture>
                              </div>
                           </div>
                           <div class="right">
                              <div class="right-inner">
                                 <div class="right-top">
                                    <div>
                                       <p>박선영</p>
                                       <span>원장</span>
                                    </div>
                                 </div>
                                 <div class="line"></div>
                                 <div class="right-bot">
                                    <div class="right-bot-inner">
                                       <div class="subject">
                                          <div>
                                             <p>약력</p>
                                          </div>
                                       </div>
                                       <div class="con">
                                          <div>
                                             <p>한방내과 전문의</p>
                                             <p>동의대학교 한의과대학 졸업</p>
                                             <p>동의대학교 한의과 대학박사</p>
                                             <p>대한한방내과학회 평생회원</p>
                                             <p>대한한방비만학회 정회원</p>
                                             <p>대한한방소아과학회 정회원</p>
                                             <p>대한 뇌파한의학회 정회원</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right-abs">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                          <g clip-path="url(#clip0_346_3589)">
                                             <path d="M3.25203 13C2.76061 13 2.31255 12.8935 1.90786 12.6807C1.53206 12.4679 1.18518 12.2246 0.86721 11.9509C0.578138 11.4339 0.361336 10.8865 0.216802 10.3088C0.0722669 9.70056 0 9.10758 0 8.52982C0 6.58363 0.592592 4.8807 1.77778 3.42105C2.96296 1.931 4.52393 0.790644 6.4607 0L6.93769 1.18596C5.52122 1.85497 4.39385 2.67603 3.55555 3.64912C2.71725 4.59182 2.12466 5.79298 1.77778 7.25263L1.56098 5.33684L4.33604 7.29824C4.97199 7.724 5.39114 8.18014 5.59349 8.66666C5.82474 9.1228 5.94037 9.63979 5.94037 10.2175C5.94037 11.0082 5.68021 11.6772 5.15988 12.2246C4.66847 12.7415 4.03252 13 3.25203 13ZM12.271 13C11.7796 13 11.3315 12.8935 10.9268 12.6807C10.551 12.4679 10.2041 12.2246 9.88619 11.9509C9.59708 11.4339 9.38027 10.8865 9.23578 10.3088C9.12011 9.70056 9.06234 9.10758 9.06234 8.52982C9.06234 6.58363 9.64044 4.8807 10.7968 3.42105C11.9819 1.931 13.5573 0.790644 15.523 0L16 1.18596C14.5546 1.85497 13.4128 2.67603 12.5745 3.64912C11.7651 4.59182 11.187 5.79298 10.8401 7.25263L10.6233 5.33684L13.3984 7.29824C14.0054 7.724 14.4246 8.18014 14.6558 8.66666C14.887 9.1228 15.0027 9.63979 15.0027 10.2175C15.0027 11.0082 14.7425 11.6772 14.2222 12.2246C13.7019 12.7415 13.0515 13 12.271 13Z" fill="white" fill-opacity="0.7" />
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_346_3589">
                                                <rect width="16" height="13" fill="white" />
                                             </clipPath>
                                          </defs>
                                       </svg>
                                       <p>증상이 아니라 <br class="mobile-cont"><b>시스템</b>을 치료합니다 </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="item-inner">
                           <div class="left">
                              <div>
                                 <picture>
                                    <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/3-3.jpg'); ?>">
                                    <img src="<?= asset('/asset/image/desktop/3-3.jpg'); ?>">
                                 </picture>
                              </div>
                           </div>
                           <div class="right">
                              <div class="right-inner">
                                 <div class="right-top">
                                    <div>
                                       <p>김균도</p>
                                       <span>원장</span>
                                    </div>
                                 </div>
                                 <div class="line"></div>
                                 <div class="right-bot">
                                    <div class="right-bot-inner">
                                       <div class="subject">
                                          <div>
                                             <p>약력</p>
                                          </div>
                                       </div>
                                       <div class="con">
                                          <div>
                                             <p>동의대학교 한의과대학 졸업</p>
                                             <p>경희대학교 한방재활의학과 석사</p>
                                             <p>대한통증진단학회 정회원</p>
                                             <p>척추신경추나의학회 정회원</p>
                                             <p>대한한방비만학회 회원</p>
                                             <p>NS한의학회 정회원</p>
                                             <p>전) 한가온한의원 진료원장</p>
                                             <p>전) 천지인한의원 진료원장</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right-abs">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                          <g clip-path="url(#clip0_346_3589)">
                                             <path d="M3.25203 13C2.76061 13 2.31255 12.8935 1.90786 12.6807C1.53206 12.4679 1.18518 12.2246 0.86721 11.9509C0.578138 11.4339 0.361336 10.8865 0.216802 10.3088C0.0722669 9.70056 0 9.10758 0 8.52982C0 6.58363 0.592592 4.8807 1.77778 3.42105C2.96296 1.931 4.52393 0.790644 6.4607 0L6.93769 1.18596C5.52122 1.85497 4.39385 2.67603 3.55555 3.64912C2.71725 4.59182 2.12466 5.79298 1.77778 7.25263L1.56098 5.33684L4.33604 7.29824C4.97199 7.724 5.39114 8.18014 5.59349 8.66666C5.82474 9.1228 5.94037 9.63979 5.94037 10.2175C5.94037 11.0082 5.68021 11.6772 5.15988 12.2246C4.66847 12.7415 4.03252 13 3.25203 13ZM12.271 13C11.7796 13 11.3315 12.8935 10.9268 12.6807C10.551 12.4679 10.2041 12.2246 9.88619 11.9509C9.59708 11.4339 9.38027 10.8865 9.23578 10.3088C9.12011 9.70056 9.06234 9.10758 9.06234 8.52982C9.06234 6.58363 9.64044 4.8807 10.7968 3.42105C11.9819 1.931 13.5573 0.790644 15.523 0L16 1.18596C14.5546 1.85497 13.4128 2.67603 12.5745 3.64912C11.7651 4.59182 11.187 5.79298 10.8401 7.25263L10.6233 5.33684L13.3984 7.29824C14.0054 7.724 14.4246 8.18014 14.6558 8.66666C14.887 9.1228 15.0027 9.63979 15.0027 10.2175C15.0027 11.0082 14.7425 11.6772 14.2222 12.2246C13.7019 12.7415 13.0515 13 12.271 13Z" fill="white" fill-opacity="0.7" />
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_346_3589">
                                                <rect width="16" height="13" fill="white" />
                                             </clipPath>
                                          </defs>
                                       </svg>
                                       <p>증상이 아니라 <br class="mobile-cont"><b>시스템</b>을 치료합니다 </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="content-wrap mobile-cont">
                  <div class="content-wrap-inner">
                     <div class="doctor-swiper">
                        <div class="doctor-arrow">
                           <div class="arrow arrow-left">
                              <img src="<?= asset('/asset/image/desktop/ball-left.png'); ?>">
                           </div>
                           <div class="arrow arrow-right">
                              <img src="<?= asset('/asset/image/desktop/ball-right.png'); ?>">
                           </div>
                        </div>
                        <div class="swiper-wrapper">
                           <div class="item swiper-slide">
                              <div class="item-inner">
                                 <div class="left">
                                    <div class="img">
                                       <picture>
                                          <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/3-1.jpg'); ?>">
                                          <img src="<?= asset('/asset/image/desktop/3-1.jpg'); ?>">
                                       </picture>
                                       <div class="swiper-fraction">
                                          <div></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right">
                                    <div class="right-inner">
                                       <div class="right-top">
                                          <div>
                                             <p>고정모</p>
                                             <span>원장</span>
                                          </div>
                                       </div>
                                       <div class="line"></div>
                                       <div class="right-bot">
                                          <div class="right-bot-inner">
                                             <div class="subject">
                                                <div>
                                                   <p>약력</p>
                                                </div>
                                             </div>
                                             <div class="con">
                                                <div>
                                                   <P>동의대학교 한의과대학 졸업</P>
                                                   <P>동의대학교 한의과대학 외래교수</P>
                                                   <P>동의대학교 한의과대학 출강 다수</P>
                                                   <P>대한한방신경정신과학회 회원</P>
                                                   <P>대한 뇌파한의학회 정회원</P>
                                                   <P>NS한의학회 회장</P>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="right-abs">
                                          <div>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                                <g clip-path="url(#clip0_346_3589)">
                                                   <path d="M3.25203 13C2.76061 13 2.31255 12.8935 1.90786 12.6807C1.53206 12.4679 1.18518 12.2246 0.86721 11.9509C0.578138 11.4339 0.361336 10.8865 0.216802 10.3088C0.0722669 9.70056 0 9.10758 0 8.52982C0 6.58363 0.592592 4.8807 1.77778 3.42105C2.96296 1.931 4.52393 0.790644 6.4607 0L6.93769 1.18596C5.52122 1.85497 4.39385 2.67603 3.55555 3.64912C2.71725 4.59182 2.12466 5.79298 1.77778 7.25263L1.56098 5.33684L4.33604 7.29824C4.97199 7.724 5.39114 8.18014 5.59349 8.66666C5.82474 9.1228 5.94037 9.63979 5.94037 10.2175C5.94037 11.0082 5.68021 11.6772 5.15988 12.2246C4.66847 12.7415 4.03252 13 3.25203 13ZM12.271 13C11.7796 13 11.3315 12.8935 10.9268 12.6807C10.551 12.4679 10.2041 12.2246 9.88619 11.9509C9.59708 11.4339 9.38027 10.8865 9.23578 10.3088C9.12011 9.70056 9.06234 9.10758 9.06234 8.52982C9.06234 6.58363 9.64044 4.8807 10.7968 3.42105C11.9819 1.931 13.5573 0.790644 15.523 0L16 1.18596C14.5546 1.85497 13.4128 2.67603 12.5745 3.64912C11.7651 4.59182 11.187 5.79298 10.8401 7.25263L10.6233 5.33684L13.3984 7.29824C14.0054 7.724 14.4246 8.18014 14.6558 8.66666C14.887 9.1228 15.0027 9.63979 15.0027 10.2175C15.0027 11.0082 14.7425 11.6772 14.2222 12.2246C13.7019 12.7415 13.0515 13 12.271 13Z" fill="white" fill-opacity="0.7" />
                                                </g>
                                                <defs>
                                                   <clipPath id="clip0_346_3589">
                                                      <rect width="16" height="13" fill="white" />
                                                   </clipPath>
                                                </defs>
                                             </svg>
                                             <p>증상이 아니라 <br class="mobile-cont"><b>시스템</b>을 치료합니다 </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item swiper-slide">
                              <div class="item-inner">
                                 <div class="left">
                                    <div class="img">
                                       <picture>

                                          <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/3-2.jpg'); ?>">
                                          <img src="<?= asset('/asset/image/desktop/3-2.jpg'); ?>">
                                       </picture>
                                       <div class="swiper-fraction">
                                          <div></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right">
                                    <div class="right-inner">
                                       <div class="right-top">
                                          <div>
                                             <p>박선영</p>
                                             <span>원장</span>
                                          </div>
                                       </div>
                                       <div class="line"></div>
                                       <div class="right-bot">
                                          <div class="right-bot-inner">
                                             <div class="subject">
                                                <div>
                                                   <p>약력</p>
                                                </div>
                                             </div>
                                             <div class="con">
                                                <div>
                                                   <p>한방내과 전문의</p>
                                                   <p>동의대학교 한의과대학 졸업</p>
                                                   <p>동의대학교 한의과 대학박사</p>
                                                   <p>대한한방내과학회 평생회원</p>
                                                   <p>대한한방비만학회 정회원</p>
                                                   <p>대한한방소아과학회 정회원</p>
                                                   <p>대한 뇌파한의학회 정회원</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="right-abs">
                                          <div>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                                <g clip-path="url(#clip0_346_3589)">
                                                   <path d="M3.25203 13C2.76061 13 2.31255 12.8935 1.90786 12.6807C1.53206 12.4679 1.18518 12.2246 0.86721 11.9509C0.578138 11.4339 0.361336 10.8865 0.216802 10.3088C0.0722669 9.70056 0 9.10758 0 8.52982C0 6.58363 0.592592 4.8807 1.77778 3.42105C2.96296 1.931 4.52393 0.790644 6.4607 0L6.93769 1.18596C5.52122 1.85497 4.39385 2.67603 3.55555 3.64912C2.71725 4.59182 2.12466 5.79298 1.77778 7.25263L1.56098 5.33684L4.33604 7.29824C4.97199 7.724 5.39114 8.18014 5.59349 8.66666C5.82474 9.1228 5.94037 9.63979 5.94037 10.2175C5.94037 11.0082 5.68021 11.6772 5.15988 12.2246C4.66847 12.7415 4.03252 13 3.25203 13ZM12.271 13C11.7796 13 11.3315 12.8935 10.9268 12.6807C10.551 12.4679 10.2041 12.2246 9.88619 11.9509C9.59708 11.4339 9.38027 10.8865 9.23578 10.3088C9.12011 9.70056 9.06234 9.10758 9.06234 8.52982C9.06234 6.58363 9.64044 4.8807 10.7968 3.42105C11.9819 1.931 13.5573 0.790644 15.523 0L16 1.18596C14.5546 1.85497 13.4128 2.67603 12.5745 3.64912C11.7651 4.59182 11.187 5.79298 10.8401 7.25263L10.6233 5.33684L13.3984 7.29824C14.0054 7.724 14.4246 8.18014 14.6558 8.66666C14.887 9.1228 15.0027 9.63979 15.0027 10.2175C15.0027 11.0082 14.7425 11.6772 14.2222 12.2246C13.7019 12.7415 13.0515 13 12.271 13Z" fill="white" fill-opacity="0.7" />
                                                </g>
                                                <defs>
                                                   <clipPath id="clip0_346_3589">
                                                      <rect width="16" height="13" fill="white" />
                                                   </clipPath>
                                                </defs>
                                             </svg>
                                             <p>증상이 아니라 <br class="mobile-cont"><b>시스템</b>을 치료합니다 </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item swiper-slide">
                              <div class="item-inner">
                                 <div class="left">
                                    <div class="img">
                                       <picture>
                                          <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/3-3.jpg'); ?>">
                                          <img src="<?= asset('/asset/image/desktop/3-3.jpg'); ?>">
                                       </picture>
                                       <div class="swiper-fraction">
                                          <div></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right">
                                    <div class="right-inner">
                                       <div class="right-top">
                                          <div>
                                             <p>김균도</p>
                                             <span>원장</span>
                                          </div>
                                       </div>
                                       <div class="line"></div>
                                       <div class="right-bot">
                                          <div class="right-bot-inner">
                                             <div class="subject">
                                                <div>
                                                   <p>약력</p>
                                                </div>
                                             </div>
                                             <div class="con">
                                                <div>
                                                   <p>동의대학교 한의과대학 졸업</p>
                                                   <p>경희대학교 한방재활의학과 석사</p>
                                                   <p>대한통증진단학회 정회원</p>
                                                   <p>척추신경추나의학회 정회원</p>
                                                   <p>대한한방비만학회 회원</p>
                                                   <p>NS한의학회 정회원</p>
                                                   <p>전) 한가온한의원 진료원장</p>
                                                   <p>전) 천지인한의원 진료원장</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="right-abs">
                                          <div>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                                <g clip-path="url(#clip0_346_3589)">
                                                   <path d="M3.25203 13C2.76061 13 2.31255 12.8935 1.90786 12.6807C1.53206 12.4679 1.18518 12.2246 0.86721 11.9509C0.578138 11.4339 0.361336 10.8865 0.216802 10.3088C0.0722669 9.70056 0 9.10758 0 8.52982C0 6.58363 0.592592 4.8807 1.77778 3.42105C2.96296 1.931 4.52393 0.790644 6.4607 0L6.93769 1.18596C5.52122 1.85497 4.39385 2.67603 3.55555 3.64912C2.71725 4.59182 2.12466 5.79298 1.77778 7.25263L1.56098 5.33684L4.33604 7.29824C4.97199 7.724 5.39114 8.18014 5.59349 8.66666C5.82474 9.1228 5.94037 9.63979 5.94037 10.2175C5.94037 11.0082 5.68021 11.6772 5.15988 12.2246C4.66847 12.7415 4.03252 13 3.25203 13ZM12.271 13C11.7796 13 11.3315 12.8935 10.9268 12.6807C10.551 12.4679 10.2041 12.2246 9.88619 11.9509C9.59708 11.4339 9.38027 10.8865 9.23578 10.3088C9.12011 9.70056 9.06234 9.10758 9.06234 8.52982C9.06234 6.58363 9.64044 4.8807 10.7968 3.42105C11.9819 1.931 13.5573 0.790644 15.523 0L16 1.18596C14.5546 1.85497 13.4128 2.67603 12.5745 3.64912C11.7651 4.59182 11.187 5.79298 10.8401 7.25263L10.6233 5.33684L13.3984 7.29824C14.0054 7.724 14.4246 8.18014 14.6558 8.66666C14.887 9.1228 15.0027 9.63979 15.0027 10.2175C15.0027 11.0082 14.7425 11.6772 14.2222 12.2246C13.7019 12.7415 13.0515 13 12.271 13Z" fill="white" fill-opacity="0.7" />
                                                </g>
                                                <defs>
                                                   <clipPath id="clip0_346_3589">
                                                      <rect width="16" height="13" fill="white" />
                                                   </clipPath>
                                                </defs>
                                             </svg>
                                             <p>증상이 아니라 <br class="mobile-cont"><b>시스템</b>을 치료합니다 </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-4">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>CRFM SYSTEM</p>
                     <p>뇌와 몸을 잇는 <br class="mobile-cont">통합 치료 시스템</p>
                     <p>CRFM은 소뇌, 그물형성체, 경락을 기반으로 <br class="mobile-cont">뇌와 신체의 균형을 회복하는 치료입니다.</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">

                     <?php
                     $wrap_4 = [
                        [
                           "tit" => "C",
                           "sub" => "소뇌",
                           "con" => "고유감각 정상화로<br>몸의 중심을 바로 잡습니다.",
                           "img" => "4-1.png"
                        ],
                        [
                           "tit" => "RF",
                           "sub" => "그물형성체",
                           "con" => "내장-체성감각의 통합으로<br>근본 원인을 찾습니다.",
                           "img" => "4-2.png"
                        ],
                        [
                           "tit" => "M",
                           "sub" => "경락",
                           "con" => "신경계-근육 기능 네트워크의<br>순환을 정상화시킵니다.",
                           "img" => "4-3.png"
                        ]
                     ];
                     ?>

                     <?php foreach ($wrap_4 as $item) { ?>
                        <div class="box">
                           <div class="box-inner">
                              <div class="box-top">
                                 <div>
                                    <picture>
                                       <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/' . $item['img']); ?>">
                                       <img src="<?= asset('/asset/image/desktop/' . $item['img']); ?>">
                                    </picture>
                                 </div>
                              </div>
                              <div class="box-bot">
                                 <div class="box-bot-inner">
                                    <div class="box-bot-top">
                                       <div>
                                          <p><?= $item['tit'] ?></p>
                                          <p><?= $item['sub'] ?></p>
                                       </div>
                                    </div>
                                    <div class="box-bot-bot">
                                       <div>
                                          <p><?= $item['con'] ?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php } ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-5">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>PERSPECTIVE <br class="mobile-cont">ON THE HUMAN BODY</p>
                     <p>우리의 몸은 <br class="mobile-cont">하나의 시스템으로 <br class="mobile-cont">연결되어 있습니다.</p>
                     <p>천리향한의원은 인체 시스템의 연결을 바탕으로 <br class="mobile-cont">몸의 균형과 기능 회복을 위한 진료를 진행합니다.</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="img-human">
                        <div>
                           <picture>

                              <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/5-1.png'); ?>">
                              <img src="<?= asset('/asset/image/desktop/5-1.png'); ?>">
                           </picture>
                        </div>
                     </div>
                     <div class="text-wrap">
                        <div class="text-wrap-inner">
                           <?php
                           $wrap_5 = [
                              [
                                 "tit" => "증상을 바라보는 관점",
                                 "con" => "증상은 특정 부위의 문제가 아니라<br>몸의 조절 시스템 변화에서 나타날 수 있습니다."
                              ],
                              [
                                 "tit" => "구조적 균형 시스템",
                                 "con" => "몸의 균형과 움직임 패턴은<br>신체 기능을 이해하는 중요한 요소입니다."
                              ],
                              [
                                 "tit" => "자율신경 조절 시스템",
                                 "con" => "자율신경은 호흡, 소화, 심박, 수면 등<br>오장육부의 기능을 조절하는 핵심 시스템입니다."
                              ],
                              [
                                 "tit" => "내수용감각 기반 정동 시스템",
                                 "con" => "몸의 내부 감각은 자아를 형성하고<br>감정의 베이스라인을 정하는 토대입니다."
                              ]
                           ];
                           ?>

                           <?php foreach ($wrap_5 as $item) { ?>
                              <div class="box">
                                 <div class="box-inner">
                                    <div class="box-top">
                                       <div>
                                          <p><?= $item['tit'] ?></p>
                                       </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="box-bot">
                                       <div>
                                          <p><?= $item['con'] ?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-6">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>INTEGRATED <br class="mobile-cont">DIAGNOSTIC SYSTEM</p>
                     <p>통합 검사 시스템</p>
                     <p>몸의 신호를 통합적으로 분석하는 검사,<br>정확한 진단의 시작입니다.</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">

                     <?php
                     $wrap_6 = [
                        [
                           "tit" => "균형 정밀 검사",
                           "con" => "신체의 좌우 균형과 움직임 패턴을 분석하여<br>몸의 구조적 정렬 상태와 균형 기능을 평가합니다.",
                           "img" => "6-1.jpg"
                        ],
                        [
                           "tit" => "HRV 자율신경분석",
                           "con" => "심박 변화를 통해 자율신경의 균형과 신체의<br>회복 능력을 분석하여 질병 발생 원인을 구별합니다.",
                           "img" => "6-2.jpg"
                        ],
                        [
                           "tit" => "진맥 분석",
                           "con" => "맥의 힘과 리듬, 혈류 흐름을 통해<br>신체 기능 상태를 확인하는 한의학 진단입니다.",
                           "img" => "6-3.jpg"
                        ],
                        [
                           "tit" => "EEG뇌파 분석",
                           "con" => "뇌 기능을 분석하여 뇌 기능 안정 상태와 노화 정도를<br>확인하고, 해당 질환과 뇌 기능의 연관성을 확인합니다.",
                           "img" => "6-5.jpg"
                        ],
                        [
                           "tit" => "수면뇌파 검사",
                           "con" => "수면 중 이마에 센서를 부착하여 뇌파를 측정하는<br>과학적이고 정밀한 수면뇌파 검사입니다.",
                           "img" => "6-4.jpg"
                        ]
                     ];
                     ?>

                     <?php foreach ($wrap_6 as $item) { ?>
                        <div class="box">
                           <div class="box-inner">
                              <div class="box-img">
                                 <div>
                                    <picture>

                                       <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/' . $item['img']); ?>">
                                       <img src="<?= asset('/asset/image/desktop/' . $item['img']); ?>">
                                    </picture>
                                 </div>
                              </div>
                              <div class="box-con">
                                 <div>
                                    <p><?= $item['tit'] ?></p>
                                    <p><?= $item['con'] ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-7">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>INTEGRATED THERAPY <br class="mobile-cont">SYSTEM</p>
                     <p>통합 치료 시스템</p>
                     <p>인체의 흐름을 바로잡아 전신의 균형 <br class="mobile-cont">회복을 돕는 통합 치료 시스템입니다.</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="left">
                        <div class="left-inner">
                           <div class="left-swiper">
                              <div class="swiper-fraction">
                                 <div></div>
                              </div>
                              <div class="swiper-wrapper">

                                 <?php for ($i = 1; $i <= 6; $i++) { ?>
                                    <div class="swiper-slide">
                                       <div>
                                          <picture>

                                             <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/7-' . $i . '.jpg'); ?>">
                                             <img src="<?= asset('/asset/image/desktop/7-' . $i . '.jpg'); ?>">
                                          </picture>
                                       </div>
                                    </div>
                                 <?php } ?>

                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="right">
                        <div class="right-inner">
                           <div class="right-swiper">
                              <div class="swiper-wrapper">

                                 <?php
                                 $wrap_7 = [
                                    [
                                       "tit" => "스파인 MT CORE <br>무중력 감압기",
                                       "con" => "척추를 부드럽게 견인하여 추간 압력을 <br>완화하고 뇌척수액 순환을 돕습니다."
                                    ],
                                    [
                                       "tit" => "바이오피드백",
                                       "con" => "호흡 패턴을 조절하는 훈련을 통해 <br>자율신경계의 안정과 회복을 돕습니다."
                                    ],
                                    [
                                       "tit" => "뉴로피드백",
                                       "con" => "뇌파 기반 훈련으로 중추신경계의 <br>균형 회복을 돕습니다."
                                    ],
                                    [
                                       "tit" => "SBB 밸런스보드",
                                       "con" => "균형 훈련을 통해 소뇌 기능과 <br>고유감각의 회복을 돕습니다."
                                    ],
                                    [
                                       "tit" => "파워플레이트 프로 5",
                                       "con" => "고유감각 자극을 통한 균형 재학습 및 <br>림프 순환 개선을 돕습니다."
                                    ],
                                    [
                                       "tit" => "광원치료기",
                                       "con" => "고강도 빛 자극으로 생체시계를 <br>재설정하여 자율신경과 수면 리듬을 <br>회복시키는 치료입니다."
                                    ]
                                 ];
                                 ?>

                                 <?php foreach ($wrap_7 as $item) { ?>
                                    <div class="swiper-slide">
                                       <div class="slide-inner">
                                          <div class="slide-text">
                                             <div>
                                                <p><?= $item['tit'] ?></p>
                                                <p><?= $item['con'] ?></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 <?php } ?>

                              </div>
                           </div>
                           <div class="right-arrow">
                              <div class="arrow arrow-left">
                                 <img src="<?= asset('/asset/image/desktop/ball-left.png'); ?>">
                              </div>
                              <div class="arrow arrow-right">
                                 <img src="<?= asset('/asset/image/desktop/ball-right.png'); ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-8">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>TREATMENT PROTOCOL</p>
                     <p>치료 프로토콜</p>
                     <p>천리향한의원은 몸이 스스로 안정된 <br class="mobile-cont">리듬을 회복하도록 만드는 것을 목표로 합니다.</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="left">
                        <div class="left-inner">
                           <div class="line">
                              <div class="gaze"></div>
                           </div>
                           <div class="dotted">
                              <div class="dot dot-1 on"></div>
                              <div class="dot dot-2"></div>
                              <div class="dot dot-3"></div>
                              <div class="dot dot-4"></div>
                           </div>
                        </div>
                     </div>
                     <div class="right">
                        <div class="right-inner">
                           <div class="box-gr">

                              <?php
                              $wrap_8 = [
                                 [
                                    "tit" => "구조 재정렬",
                                    "con" => "전신 균형을 무너뜨리는 핵심 원인을 <br>고유감각 시스템을 통해 파악하고 치료하여 <br>소뇌와 신경계가 바른 신체 구조를 회복하도록 합니다.",
                                    "mcon" => "전신 균형을 무너뜨리는 핵심 원인을 <br>고유감각 시스템을 통해 파악하고 <br>치료하여 소뇌와 신경계가 바른 신체 구조를 <br>회복하도록 합니다.",
                                    "img" => "8-1.png"
                                 ],
                                 [
                                    "tit" => "자율신경 안정화",
                                    "con" => "호흡교정 및 한의학적 치료를 통해 오장육부의 바른 움직임을 유도하고, <br>자율신경계를 안정화하여 몸 스스로가 질환을 복구할 수 있는 <br>안정적인 환경을 조성합니다.",
                                    "mcon" => "호흡교정 및 한의학적 치료를 통해 오장육부의 <br>바른 움직임을 유도하고, 자율신경계를 <br>안정화하여 몸 스스로가 질환을 복구할 수 있는 <br>안정적인 환경을 조성합니다.",
                                    "img" => "8-2.png"
                                 ],
                                 [
                                    "tit" => "내수용 감각 재학습",
                                    "con" => "최소 3달 이상의 지속적인 치료를 통해 체화된 새로운 호흡 방식과 <br>균형을 회복한 오장육부를 바탕으로 내수용 감각을 재학습합니다. <br>&nbsp;",
                                    "mcon" => "최소 3달 이상의 지속적인 치료를 통해 <br>체화된 새로운 호흡 방식과 균형을 회복한 <br>오장육부를 바탕으로 내수용 감각을 <br>재학습합니다.",
                                    "img" => "8-3.png"
                                 ],
                                 [
                                    "tit" => "뇌 네트워크 안정화",
                                    "con" => "변화된 신체 상태를 뇌가 정상으로 예측하도록 안정화하여 <br>신경 쓰지 않아도 건강한 상태가 유지되도록 합니다 .<br>&nbsp;",
                                    "mcon" => "변화된 신체 상태를 뇌가 정상으로 <br>예측하도록 안정화하여 <br>신경 쓰지 않아도 건강한 상태가 <br>유지되도록 합니다.",
                                    "img" => "8-4.png"
                                 ]
                              ];
                              ?>

                              <?php foreach ($wrap_8 as $index => $item) { ?>
                                 <div class="box <?php if ($index == 0) echo 'on'; ?>">
                                    <div class="box-inner">
                                       <div class="box-left">
                                          <div class="box-left-inner">
                                             <div class="box-tit">
                                                <div>
                                                   <span>STEP 0<?= $index + 1 ?></span>
                                                   <p><?= $item['tit'] ?></p>
                                                </div>
                                             </div>
                                             <div class="line"></div>
                                             <div class="box-con">
                                                <div>
                                                   <p class="desktop-cont"><?= $item['con'] ?></p>
                                                   <p class="mobile-cont"><?= $item['mcon'] ?></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="box-right">
                                          <div>
                                             <img src="<?= asset('/asset/image/desktop/' . $item['img']); ?>">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              <?php } ?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-9">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>CORE SERVICES</p>
                     <p>핵심진료</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="box-gr">
                        <?php
                        $wrap_9 = [
                           [
                              "tit" => "난치성 통증",
                              "con" => "오랜 기간 지속되는 통증의 <br class='mobile-cont'>원인을 살펴보고 <br class='desktop-cont'>신체기능과 <br class='mobile-cont'>균형 관점에서 진료합니다.",
                              "img" => "9-1.png"
                           ],
                           [
                              "tit" => "만성두통 · <br class='mobile-cont'>어지럼증",
                              "con" => "반복되는 두통과 어지럼증의 <br class='mobile-cont'>원인을 살펴보고 <br class='desktop-cont'>신체 균형과 <br class='mobile-cont'>신경 기능 관점에서 진료합니다.",
                              "img" => "9-2.png"
                           ],
                           [
                              "tit" => "불면",
                              "con" => "잠들기 어렵거나 깊게 잠들지 <br class='mobile-cont'>못하는 등 <br class='desktop-cont'>수면 문제에 대한 <br class='mobile-cont'>진료를 진행합니다.",
                              "img" => "9-3.png"
                           ],
                           [
                              "tit" => "치매 · <br class='mobile-cont'>ADHD",
                              "con" => "기억력 저하나 집중력 문제 등 <br class='mobile-cont'>인지 기능 <br class='desktop-cont'>관련 증상에 대한 <br class='mobile-cont'>상담과 진료를 합니다.",
                              "img" => "9-4.png"
                           ],
                           [
                              "tit" => "교통사고후유증",
                              "con" => "천리향한의원의 뇌과학 기반 <br class='mobile-cont'>치료방식으로 <br class='desktop-cont'>신체 회복 과정을 <br class='mobile-cont'>돕습니다.",
                              "img" => "9-5.png"
                           ],
                           [
                              "tit" => "만성비염 · <br class='mobile-cont'>두드러기 · 아토피",
                              "con" => "장뇌축을 중심으로 만성 염증을 <br class='mobile-cont'>바라보는 <br class='desktop-cont'>천리향한의원만의 <br class='mobile-cont'>관점으로 진료합니다.",
                              "img" => "9-6.png"
                           ]
                        ];
                        ?>
                        <?php foreach ($wrap_9 as $index => $item) { ?>
                           <div class="box">
                              <div class="box-inner">
                                 <div class="box-con">
                                    <div>
                                       <p><?= $item['tit'] ?></p>
                                       <p><?= $item['con'] ?></p>
                                    </div>
                                 </div>
                                 <div class="box-abs">
                                    <div>
                                       <img src="<?= asset('/asset/image/desktop/' . $item['img']); ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-10">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-tit">
                  <div>
                     <p>CHEONRIHYANG OVERVIEW</p>
                     <p>천리향한의원 둘러보기</p>
                  </div>
               </div>
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="overview-gr">
                        <div class="overview-arrow">
                           <div class="arrow arrow-left">
                              <img src="<?= asset('/asset/image/desktop/ball-left.png'); ?>">
                           </div>
                           <div class="arrow arrow-right">
                              <img src="<?= asset('/asset/image/desktop/ball-right.png'); ?>">
                           </div>
                        </div>
                        <div class="overview-fraction">
                           <div>

                           </div>
                        </div>
                        <div class="overview-swiper">
                           <div class="swiper-wrapper">
                              <?php for ($i = 1; $i <= 6; $i++) { ?>
                                 <div class="swiper-slide">
                                    <div>
                                       <picture>

                                          <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/10-' . $i . '.jpg'); ?>">
                                          <img src="<?= asset('/asset/image/desktop/10-' . $i . '.jpg'); ?>">
                                       </picture>
                                    </div>
                                 </div>
                              <?php } ?>

                           </div>
                        </div>
                     </div>
                     <div class="preview-swiper">
                        <div class="swiper-wrapper">
                           <?php for ($i = 1; $i <= 6; $i++) { ?>
                              <div class="swiper-slide">
                                 <div>
                                    <picture>

                                       <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/10-' . $i . '.jpg'); ?>">
                                       <img src="<?= asset('/asset/image/desktop/10-' . $i . '.jpg'); ?>">
                                    </picture>
                                 </div>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="main__section-wrap main__section-wrap-11">
      <div class="main__section-inner">
         <div class="content">
            <div class="content-inner">
               <div class="content-wrap">
                  <div class="content-wrap-inner">
                     <div class="left">
                        <div class="left-inner">
                           <div class="map" id="map"></div>
                        </div>
                     </div>
                     <div class="right">
                        <div class="right-inner">
                           <div class="box">
                              <div class="box-inner">
                                 <div class="box-tit">
                                    <div>
                                       <p>오시는 길</p>
                                    </div>
                                 </div>
                                 <div class="box-con box-con-1">
                                    <div>
                                       <p>부산 해운대구 센텀2로 25 센텀드림월드 3층 301호</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="line"></div>
                           <div class="box">
                              <div class="box-inner">
                                 <div class="box-tit">
                                    <div>
                                       <p>전화문의</p>
                                    </div>
                                 </div>
                                 <div class="box-con box-con-2">
                                    <div>
                                       <a href="">
                                          <p>051) 711.3288</p>
                                       </a>
                                       <p class="notice">※ 내원 전 예약해주시면 더욱 편안한 진료가 가능합니다.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="line"></div>
                           <div class="box">
                              <div class="box-inner">
                                 <div class="box-tit">
                                    <div>
                                       <p>진료시간</p>
                                    </div>
                                 </div>
                                 <div class="box-con box-con-3">
                                    <div>
                                       <picture>
                                          <source media="(max-width: 799px)" srcset="<?= asset('/asset/image/mobile/time.svg'); ?>">
                                          <img src="<?= asset('/asset/image/desktop/time.svg'); ?>">
                                       </picture>
                                       <p class="notice">※ 공휴일과 일요일은 휴진합니다.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

</main>

<script src="/asset/js/swiper-bundle.min.js"></script>
<script src="/asset/js/gsap.min.js"></script>
<script src="/asset/js/ScrollTrigger.min.js"></script>

<script>
   gsap.registerPlugin(ScrollTrigger);

   // const main1Swiper = new Swiper(".main__section-wrap-1 .main_slide", {
   //    loop: true,
   //    effect: 'fade',
   //    fadeEffect: {
   //       crossFade: true,
   //    },
   //    speed: 800,
   //    // autoplay: {
   //    //    delay: 5500,
   //    //    disableOnInteraction: false,
   //    // },
   //    pagination: {
   //       el: ".main__section-wrap-1 .bullets", // pagination 컨테이너 클래스
   //       clickable: true, // 클릭 가능
   //       renderBullet: function(index, className) {
   //          return `<div class="${className}"></div>`;
   //       }
   //    },
   //    navigation: {
   //       prevEl: ".main__section-wrap-1 .swiper-arrow-left",
   //       nextEl: ".main__section-wrap-1 .swiper-arrow-right",
   //    },
   //    on: {
   //       init(main1Swiper) {
   //          updateFraction(main1Swiper);
   //       },
   //       slideChange(main1Swiper) {
   //          updateFraction(main1Swiper);
   //       }
   //    }
   // });

   $(document).ready(function() {

      const main7Swiper_L = new Swiper(".main__section-wrap-7 .left-swiper", {
         loop: true,
         effect: 'fade',
         fadeEffect: {
            crossFade: true,
         },
         pagination: {
            el: '.main__section-wrap-7 .swiper-fraction div',
            type: 'fraction',
         },
         speed: 800,
      });

      const main7Swiper_R = new Swiper(".main__section-wrap-7 .right-swiper", {
         loop: true,
         effect: 'fade',
         fadeEffect: {
            crossFade: true,
         },
         autoplay: {
            delay: 4000,
            disableOnInteraction: false,
         },
         initialSlide: 1,
         speed: 800,
         // autoplay: {
         //    delay: 5500,
         //    disableOnInteraction: false,
         // },
         navigation: {
            prevEl: ".main__section-wrap-7 .arrow-left",
            nextEl: ".main__section-wrap-7 .arrow-right",
         },
      });

      main7Swiper_L.controller.control = main7Swiper_R;
      main7Swiper_R.controller.control = main7Swiper_L;

      const main10Swiper_B = new Swiper(".main__section-wrap-10 .preview-swiper", {
         loop: true,
         speed: 800,
         slidesPerView: 4,
         observer: true,
         observeParents: true,
         initialSlide: 0,
         watchSlidesProgress: true,
         slideToClickedSlide: true,
         spaceBetween: 10,
         breakpoints: {
            999: {
               spaceBetween: 10
            },
            1150: {
               spaceBetween: 14
            },
            1450: {
               spaceBetween: 18
            }
         }
      });

      const main10Swiper_T = new Swiper(".main__section-wrap-10 .overview-swiper", {
         loop: true,
         effect: 'fade',
         fadeEffect: {
            crossFade: true,
         },
         speed: 800,
         observer: true,
         observeParents: true,
         autoplay: {
            delay: 4000,
            disableOnInteraction: false,
         },
         initialSlide: 0,
         pagination: {
            el: '.main__section-wrap-10 .overview-fraction div',
            type: 'fraction',
         },
         navigation: {
            prevEl: ".main__section-wrap-10 .arrow-left",
            nextEl: ".main__section-wrap-10 .arrow-right",
         },
         thumbs: {
            swiper: main10Swiper_B,
         },
      });

      main10Swiper_T.on('slideChange', function() {
         main10Swiper_B.slideToLoop(main10Swiper_T.realIndex);
      });

   });

   const isMobile = window.matchMedia("(max-width: 768px)").matches;

   if (isMobile) {
      // const boxes_4 = document.querySelectorAll('.main__section-wrap-4 .box');
      // let currentIndex = 0;

      // function rotateOnClass_4() {
      //    boxes_4.forEach(box => box.classList.remove('on'));
      //    boxes_4[currentIndex].classList.add('on');
      //    currentIndex = (currentIndex + 1) % boxes_4.length;
      // }
      // rotateOnClass_4();
      // setInterval(rotateOnClass_4, 4000);

      window.addEventListener('scroll', () => {
         const contentWrap = document.querySelector('.main__section-wrap-8 .content-wrap');
         const gaze = document.querySelector('.gaze');
         const dots = document.querySelectorAll('.dot');
         const boxes = document.querySelectorAll('.main__section-wrap-8 .box');

         if (!contentWrap) return;

         const startOffset = window.innerHeight / 2;
         const wrapTop = contentWrap.offsetTop;
         const wrapHeight = contentWrap.offsetHeight;

         // 현재 기준선 위치 계산
         const currentLine = window.scrollY + startOffset;

         // 1. 진행률 계산 (0 ~ 100)
         let progress = ((currentLine - wrapTop) / wrapHeight) * 100;
         progress = Math.max(0, Math.min(100, progress));

         // 2. 게이지 업데이트
         gaze.style.height = `${progress}%`;

         // 3. 인덱스 판정 로직 수정
         // 100을 4등분하면 25씩이지만, 
         // 게이지가 각 점(.dot) 위치에 도달했을 때 불이 들어오게 하려면 범위를 세밀하게 조정해야 합니다.
         let activeIndex = 0;
         if (progress >= 80) {
            activeIndex = 3;
         } else if (progress >= 54) {
            activeIndex = 2;
         } else if (progress >= 25.1) {
            activeIndex = 1;
         } else {
            activeIndex = 0;
         }

         // 4. 클래스 교체
         dots.forEach((dot, idx) => {
            const isTarget = idx === activeIndex;
            dot.classList.toggle('on', isTarget);
            boxes[idx].classList.toggle('on', isTarget);
         });
      });

      const section2Boxes = document.querySelectorAll(".main__section-wrap-2 .box");
      section2Boxes.forEach((box) => {
         gsap.fromTo(box, {
            y: 30,
            opacity: 0
         }, {
            y: 0,
            opacity: 1,
            duration: 0.8,
            scrollTrigger: {
               trigger: box,
               start: "top 60%",
               toggleActions: "play none none none"
            }
         });
      });

      const section5 = document.querySelector('.main__section-wrap-5');
      const selectS5 = gsap.utils.selector(section5);

      // 2. 해당 섹션 내의 .box들만 배열로 가져오기 (변수명 구체화)
      const section5Boxes = selectS5(".box");

      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: section5.querySelector(".content-wrap"),
            start: "top top",
            end: "bottom bottom",
            pin: true,
            scrub: 1,
            markers: false
         }
      });
      // 3. 구체화된 변수명으로 애니메이션 적용
      section5Boxes.forEach((box, i) => {
         // 모든 박스 공통: 나타나는 애니메이션 (y: 30 -> 0)
         tl.fromTo(box, {
            opacity: 0,
            y: 30
         }, {
            opacity: 1,
            y: 0,
            duration: 1
         });

         // 마지막 박스가 아닐 때만 사라지는 애니메이션 추가
         if (i < section5Boxes.length - 1) {
            tl.to(box, {
               opacity: 0,
               y: -30,
               duration: 1,
               delay: 0.5
            }, ">");
         } else {
            tl.to({}, {
               duration: 1.5
            });
         }
      });

      const section6Boxes = document.querySelectorAll(".main__section-wrap-6 .box");
      section6Boxes.forEach((box) => {
         gsap.fromTo(box, {
            y: 30,
            opacity: 0
         }, {
            y: 0,
            opacity: 1,
            duration: 0.8,
            scrollTrigger: {
               trigger: box,
               start: "top 60%",
               toggleActions: "play none none none"
            }
         });
      });

      const main3Swiper = new Swiper(".main__section-wrap-3 .doctor-swiper", {
         loop: true,
         speed: 800,
         slidesPerView: 1,
         spaceBetween: 20,
         observer: true,
         observeParents: true,
         initialSlide: 0,
         navigation: {
            prevEl: ".main__section-wrap-3 .arrow-left",
            nextEl: ".main__section-wrap-3 .arrow-right",
         },
      });

      function updateCustomFraction(swiperInstance) {
         const current = swiperInstance.realIndex + 1;
         const total = swiperInstance.slides.length;
         const targets = document.querySelectorAll('.main__section-wrap-3 .swiper-fraction div');

         targets.forEach(el => {
            el.innerText = `${current} / ${total}`;
         });
      }

   } else {

      $(window).on('load', function() {

         $(".main__section-wrap-3 .item").each(function(i, e) {
            ScrollTrigger.create({
               trigger: e,
               start: () => `top ${140 + (i * 40)}px`,
               endTrigger: ".main__section-wrap-3",
               end: "bottom bottom",
               pin: true,
               pinSpacing: false,
               anticipatePin: 1,
               invalidateOnRefresh: true,
            });
         });
      });

      const section2Boxes = document.querySelectorAll(".main__section-wrap-2 .box");
      section2Boxes.forEach((section2Box) => {
         const section2Text = section2Box.querySelector(".box-m-left");
         const section2Img = section2Box.querySelector(".box-m-right");

         gsap.fromTo(section2Text, {
            x: -100,
            opacity: 0
         }, {
            x: 0,
            opacity: 1,
            duration: 0.8,
            scrollTrigger: {
               trigger: section2Box,
               start: "top 70%",
               toggleActions: "play none none none"
            }
         });
         gsap.fromTo(section2Img, {
            x: 100,
            opacity: 0
         }, {
            x: 0,
            opacity: 1,
            duration: 0.8,
            scrollTrigger: {
               trigger: section2Box,
               start: "top 70%",
               toggleActions: "play none none none"
            }
         });
      });

      const section5Boxes = document.querySelectorAll(".main__section-wrap-5 .box");
      section5Boxes.forEach((box, i) => {
         const isSpecial = (i === 1 || i === 3);
         gsap.fromTo(box, {
            y: isSpecial ? 250 : 40,
            opacity: 0
         }, {
            y: isSpecial ? 210 : 0,
            opacity: 1,
            duration: 0.8,
            scrollTrigger: {
               trigger: box,
               start: "top 70%",
               toggleActions: "play none none none"
            }
         });
      });

      const wrap6 = document.querySelector(".main__section-wrap-6");
      if (wrap6) {
         const contLeft = wrap6.querySelector(".content-tit");
         const contRight = wrap6.querySelector(".content-wrap");

         if (contLeft) {
            ScrollTrigger.create({
               trigger: wrap6,
               start: "top top",
               end: () => `+=${wrap6.offsetHeight / 1.5}`,
               scrub: true,
               pin: contLeft,
               pinSpacing: true
            });
         }

         if (contRight) {
            gsap.fromTo(contRight, {
               y: 200,
               opacity: 0
            }, {
               y: 0,
               opacity: 1,
               duration: 1,
               ease: "power2.out",
               scrollTrigger: {
                  trigger: wrap6,
                  start: "top 50%",
                  toggleActions: "play reverse play reverse",
               }
            });
         }
      }

      window.addEventListener('scroll', () => {
         const contentWrap = document.querySelector('.main__section-wrap-8 .content-wrap');
         const gaze = document.querySelector('.gaze');
         const dots = document.querySelectorAll('.dot');
         const boxes = document.querySelectorAll('.main__section-wrap-8 .box');

         if (!contentWrap) return;

         const startOffset = window.innerHeight / 2; // 화면의 50% 지점
         const wrapTop = contentWrap.offsetTop;
         const wrapHeight = contentWrap.offsetHeight;

         const currentLine = window.scrollY + startOffset;

         let progress = (currentLine - wrapTop) / wrapHeight;

         // 진행률 제한 (0 ~ 100%)
         progress = Math.max(0, Math.min(100, progress * 100));
         gaze.style.height = `${progress}%`;

         // 좀 더 부드러운 전환을 위해 Math.floor를 사용할 수도 있습니다.
         let activeIndex = Math.floor(progress / 25.25);
         if (activeIndex >= 4) activeIndex = 3; // 100%일 때 예외 처리

         // 4. 클래스 교체
         dots.forEach((dot, idx) => {
            if (idx === activeIndex) {
               dot.classList.add('on');
               boxes[idx].classList.add('on');
            } else {
               dot.classList.remove('on');
               boxes[idx].classList.remove('on');
            }
         });
      });
   }

   const mq = window.matchMedia("(max-width: 768px)");
   mq.addEventListener("change", () => {
      location.reload();
   });

   var ahref = "";
   var mapOptions = {
      center: new naver.maps.LatLng(35.1669483088462, 129.132959320724),
      zoom: 19
   };

   var map = new naver.maps.Map('map', mapOptions);
   var marker = new naver.maps.Marker({
      position: new naver.maps.LatLng(35.1669483088462, 129.132959320724),
      map: map
   });

   function Marquee(selector, speed) {
      const parentSelector = document.querySelector(selector);
      const clone = parentSelector.innerHTML;
      const firstElement = parentSelector.children[0];
      let i = 0;
      console.log(firstElement);
      parentSelector.insertAdjacentHTML('beforeend', clone);
      parentSelector.insertAdjacentHTML('beforeend', clone);

      setInterval(function() {
         firstElement.style.marginLeft = `-${i}px`;

         if (i > firstElement.clientWidth) {
            i = 0;
         }
         i = i + speed;
      }, 0);
   }
   window.addEventListener('load', Marquee('.marquee', 0.2));

   const boxes_9 = document.querySelectorAll('.main__section-wrap-9 .box-gr .box');
   let currentIndex = 0;

   function rotateOnClass() {
      boxes_9.forEach(box => box.classList.remove('on'));
      boxes_9[currentIndex].classList.add('on');
      currentIndex = (currentIndex + 1) % boxes_9.length;
   }
   rotateOnClass();
   setInterval(rotateOnClass, 3000);

   ScrollTrigger.refresh();
</script>

<?php
include_once(G5_PATH . '/tail.php');
