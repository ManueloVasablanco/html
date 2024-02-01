<div id="form" class="brief-services brief-wrapper section-wrapper animate-wrapper white-bg">
    <div class="container w860 ">
        <div class="brief">
            <div class="h2 section-title with-more">Оставьте заявку</div>
            <form enctype="multipart/form-data" data-request="GlobalForm::onSend" data-request-validate data-request-files data-request-flash class="brief-form" data-request-success="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form_submit', 'data': $('.brief-form').serializeArray()});$('.brief-form').trigger('reset');$('.form-row').addClass('val');$('#file-upload-filename').text('');">
                <div class="h4 section-title">Контактные данные</div>
                <div class="brief-grid">
                    <div class="form-row val"><input oninput="checkValue(this)" name="name" id="name" type="text"><label for="name">Имя и фамилия</label><span class="errors" data-validate-for="name"></span></div>
                    <div class="form-row val"><input oninput="checkValue(this)" name="email" id="email" type="text"><label for="email">Эл. почта</label><span class="errors" data-validate-for="email"></span></div>
                    <div class="form-row val"><input oninput="checkValue(this)" name="tel" id="tel" type="text"><label for="tel">Телефон или мессенджер</label><span class="errors" data-validate-for="tel"></span></div>
                    <div class="form-row val"><input oninput="checkValue(this)" name="company" id="company" type="text"><label for="company">Компания</label></div>
                </div>
                <div class="h4 section-title">Расскажите о проекте</div>
                <div class="form-row val"><input oninput="checkValue(this)" name="msg" id="msg" type="text"><label for="msg">Расскажите о проекте</label></div>
                <div class="form-action">
                    <div class="action-buttons"><button data-attach-loading class="btn red">Отправить заявку</button><label for="file" class="btn-load"><span class="fz16">Прикрепить файл</span></label><input style="display: none" name="attachment" type="file" id="file"><span onclick="resetFile(this)" id="file-upload-filename"></span></div>                     <div class="accept">Натискаючи на кнопку, ви даєте згоду на <a class="policy" href="policy.php" target="_blank">обробку персональних даних і погоджуєтеся з політикою конфіденційності.</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
