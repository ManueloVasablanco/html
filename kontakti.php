<?php require 'header.php'; ?>

<main>
<div class="back-wrapper empty"></div>
      <div class="contacts-wrapper animate-wrapper">
         <div class="container w1240">
            <div class="contacts">
               <h1 class="h1-v2">Контакти</h1>
               <div class="contacts-grid">
                  <div class="form">
                     <div id="form" class="brief-services brief-wrapper section-wrapper animate-wrapper white-bg">
                        <div class="container w1240 ">
                           <div class="brief">
                              <div class="h2-v2 section-title">Залиште заявку</div>
                              <form enctype="multipart/form-data" data-request="GlobalForm::onSend" data-request-validate data-request-files data-request-flash class="brief-form" data-request-success="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form_submit', 'data': $('.brief-form').serializeArray()});$('.brief-form').trigger('reset');$('.form-row').addClass('val');$('#file-upload-filename').text('');">
                                 <div class="h4 section-title">Контактні дані</div>
                                 <input type="hidden" name="lang" value="ua">
                                 <div class="brief-grid">
                                    <div class="form-row val"><input oninput="checkValue(this)" name="name" id="name" type="text"><label for="name">Ім'я та прізвище</label><span class="errors" data-validate-for="name"></span></div>
                                    <div class="form-row val"><input oninput="checkValue(this)" name="email" id="email" type="text"><label for="email">Ел. пошта</label><span class="errors" data-validate-for="email"></span></div>
                                    <div class="form-row val"><input oninput="checkValue(this)" name="tel" id="tel" type="text"><label for="tel">Телефон або месенджер</label><span class="errors" data-validate-for="tel"></span></div>
                                    <div class="form-row val"><input oninput="checkValue(this)" name="company" id="company" type="text"><label for="company">Компанія</label></div>
                                 </div>
                                 <div class="h4 section-title">Розкажіть про проєкт</div>
                                 <div class="form-row val"><input oninput="checkValue(this)" name="msg" id="msg" type="text"><label for="msg">Розкажіть про проєкт</label></div>
                                 <div class="form-action">
                                    <div class="action-buttons"><button data-attach-loading class="btn red">Відправити заявку</button><label for="file" class="btn-load"><span class="fz16">Прикріпити файл</span></label><input style="display: none" name="attachment" type="file" id="file"><span onclick="resetFile(this)" id="file-upload-filename"></span></div>
                                    <div class="accept">Натискаючи на кнопку, ви даєте згоду на <a class="policy" href="policy.html" target="_blank">обробку персональних даних і погоджуєтеся з політикою конфіденційності.</a></a>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <ul class="contacts-list">
                     <li>
                        <div class="contacts-list-item"><a style="color: #000;" rel="nofollow" href="tel:+380630204585" class="h3 p">+38 063 020-45-85</a><a href="batyriev%40adsua.com.html" rel="nofollow" class="h3 p">batyriev@adsua.com.ua</a><a href="https://t.me/batyriev" target="_blank" rel="nofollow" class="h3 p">Telegram</a></div>
                     </li>
                     <li>
                        <div class="contacts-list-item">
                           <div class="fz14 small-title">Наша адреса</div>
                           <div class="h3 p">65111, Україна, м. Одеса, вул. Генерала Бочарова, буд. 32, кв. 37</div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="breadcrumps-wrapper">
         <div class="container w1240">
            <ul class="breadcrumps">
               <li class="fz14"><a class="fz14" href="index.php">AdsUa</a></li>
               <li class="fz14"><span>Контакти</span></li>
            </ul>
         </div>
      </div>


</main>

<?php require 'footer.php'; ?>