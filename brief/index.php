<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бриф");
?>
    <div class="brief-section">
        <div class="container">
            <div class="brief-section_header">
                <div class="row">
                    <div class="col-md-5"><div class="section-title">Заполните бриф</div></div>
                    <div class="col-md-7">
                        Оставьте заявку, либо звоните, мы пообщаемся и сами все за вас заполним: <a href="tel:+74012400512">+7 (4012) 400-512</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 brief_right-column">
                    <div class="brief-item">
                        <div class="brief-section_subtitle">Услуги</div>
                        <ul class="brief-select_options-list js_brief-list">
                            <li><span class="text">Разработка сайтов</span></li>
                            <li><span class="text">Продвижение и реклама</span></li>
                            <li><span class="text">Обслуживание и развитие</span></li>
                            <li><span class="text">Автоматизация</span></li>
                            <li><span class="text">Другое</span></li>
                        </ul>
                    </div>
                    <div class="brief-item">
                        <div class="brief-section_subtitle">Бюджет</div>
                        <ul class="brief-select_options-list js_brief-list_2">
                            <li><span class="text">Менее 500 тыс</span></li>
                            <li><span class="text">от 500 тыс</span></li>
                            <li><span class="text">600-900 тыс</span></li>
                            <li><span class="text">Более 1 млн</span></li>
                        </ul>
                    </div>
                    <div class="brief-item">
                        <div class="brief-section_subtitle">Откуда вы узнали о нас?</div>
                        <ul class="brief-select_options-list js_brief-list">
                            <li><span class="text">Рейтинги</span></li>
                            <li><span class="text">Рекомендации</span></li>
                            <li><span class="text">Работы</span></li>
                            <li><span class="text">Соцсети</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="#" class="brief-form">
                        <div class="brief-section_subtitle subtitle-mod">Задача</div>
                        <div class="form-mod_group form-mod_group-task form-group_textarea">
                            <label class="form-label">Описание</label>
                            <input type="text" class="form-mod_control">
                        </div>
                        <div class="brief-form_file-box">
                            <label class="input-file input-file_mod">
		                  <span class="button">
		                    <input type="file" class="upload-file" name="file">
		                  </span><input class="input-file-text" placeholder="Прикрепить файл">
                            </label>
                            <div class="upload-message_box"><span class="ico-check"></span><span class="upload-message_text"></span></div>
                        </div>
                        <div class="brief-section_subtitle subtitle-mod">Контактные данные</div>
                        <div class="form-mod_group">
                            <label class="form-label">Имя</label>
                            <input type="text" class="form-mod_control">
                        </div>
                        <div class="form-mod_group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-mod_control">
                        </div>
                        <div class="form-mod_group">
                            <label class="form-label">Компания</label>
                            <input type="text" class="form-mod_control">
                        </div>
                        <div class="form-mod_group">
                            <label class="form-label">Телефон</label>
                            <input type="tel" class="form-mod_control">
                        </div>
                        <div class="brief-form_footer">
                            <span class="form-policy">Нажимая на кнопку, вы даете <a href="">согласие на обработку персональных данных</a> и соглашаетесь с <a href="">политикой конфиденциальности</a></span>
                            <div class="wrapper_brief-form_submit red-btn red-btn_mod">
                                <span class="red-btn_icon"></span>
                                <input type="submit" class="brief-form_submit-btn" value="Отправить">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>