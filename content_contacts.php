<?php

function print_contacts()
{
    echo '
<script>
    function initMap() 
    {
        var uluru = {lat: 53.672323, lng: 23.841530};
        var map = new google.maps.Map(document.getElementById(\'map\'), 
        { zoom: 12, center: uluru });
        var marker = new google.maps.Marker({ position: uluru, map: map });
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnEQPYFcFT0jTSVsTK2Z9YqsJgcYbHbeo&callback=initMap">
</script>

<div class="row" id="delivery">
    <span id="name_flower">ПРАВИЛА ДОСТАВКИ И ОПЛАТЫ:</span><br>
    <p>Отправка многолетних цветов осуществляется с учетом сезонных и рекомендуемых сроков посадки. 
    Минимальная сумма заказа на многолетние цветы: 20 руб. 
    Свой заказ Вы можете получить двумя способами: 1) На пункте выдачи заказов в г. Гродно, Центральный рынок; 2) ПОЧТОЙ или курьером на дом в любую точку Республике Беларусь.
    </p>
    <P>
        Дополнительную информацию по условиям доставки и продажи уточняйте по контактным телефонам.
    </P>
</div>

<div class="row" id="delivery">
        
    <p>1. Получить товар в Гродно.</p><br>
        <p>
            Заказы выдаются в Гродно, ул. Антонова, "Центральный рынок", только после предварительного звонка заказчику.
            Оплата производится только по факту получения.
        </p>
        
    <p>2. РУП "Белпочта"/наложенный платеж.</p><br>
        <p>
            При получении заказа оплата за многолетние цветы производится на Вашем почтовом отделении по факту получения.
            Указав в заказе свой мобильный телефон, Вы получите SMS-уведомление об отправке посылки на почту, в котором будет указана сумма наложенного платежа с учетом стоимости пересылки и код слежения.
            Отслеживать отправление можно на сайте РУП "Белпочта".
        </p>
        
    <p>3. Доставка курьером на дом (почтовый оператор "Наша почта")</p><br>
        <p>
            Доставка осуществляется в любую точку Республики Беларусь на указанный в заявке адрес. 
            Время доставки с 9 до 21 00 в будние дни, согласовывается заранее по телефону. 
            Все почтовые отправления выдаются на основании документа, удостоверяющего личность.
            Вы можете предварительно рассчитать стоимость доставки, воспользовавшись <a href="http://nashapochta.by/calculator/">калькулятором</a> "Нашей почты".
        </p>
        
</div>
    
<div id="map"></div>
</div>

';
}