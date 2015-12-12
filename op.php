<?php
echo <<<_END
<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="http://su10.su/images/favicon.ico" type="image/x-icon">
<title>Штукатуры без посредников | Штукатурка стен без посредников</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name="description" content="Штукатурка стен без посредников">
<meta name="keywords" content="Штукатурка стен без посредников">
<link href="http://su10.su/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header style="width:100%;background:#fb8227;">
<div id="header">
<a href="/"><img src="http://su10.su/images/logo.png" alt="ООО ШТУКАТУР" width="288" height="80" class="logo" border="0" /></a><div id="phone">
<ul>
<li>
<a href="http://su10.su/usloviya-raboti.html"><span><img src="http://su10.su/images/sot.png" alt="Условие работы"width="30"/></span><span id="names">Условия работы</span></a>
<a href="http://su10.su/calc.html"><span style="  position: relative;left: 10px;"><img src="http://su10.su/images/calc.png" alt="Калькулятор" width="30"/></span><span id="names-1">Калькулятор</span></a>
</li>
<li>
<a href="#"><span><img src="http://su10.su/images/vopros.png" alt="Ответы и вопросы" width="30"/></span><span id="names">Вопросы и ответы</span></a>
<a href="http://su10.su/besplatniu_vizov_zamershika.php"><span><img src="http://su10.su/images/tp.png" alt="Вызов замерщика" width="30"/></span><span id="names">Вызвать замерщика</span></a>
</li>
</ul>
<label><span>+7 (495) 933 40 47</span><br/><span id="callback">заказать обратный звонок</span></label>
</div></div>
<nav>
<ul>
<li><a href="/">Главная</a></li>
<li><a href="/price.html">Цены</a></li>
<li><a href="/o-nas.html">О нас</a></li>
<li><a href="/foto_galareya.html">Наши работы</a></li>
<li><a href="/shtukaturka-kontakti.html">Контакты</a></li>
<li><a href="http://su10.su/usloviya-raboti.html">Условия работы</a></li>
<li><a href="public.html">Отзывы</a></li>
<li><a href="smeta.html">Смета</a></li>
<li><a href="calc.html">Калькулятор</a></li>
</ul></nav>
</header>
<!--left start -->
<div id="body">
<!--left start -->
<div id="left">

<br class="spacer" />
</div>
<!--left end -->
<!--right start -->
<div id="right">

<!--right begin -->
<div class="content">
_END;
?>
<?php
$frolov="Фролов";
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die ("Невозможно подключиться к Mysql:".mysql_error());
mysql_select_db($db_database) or die("Невозможно выбрать базу данных:" .mysql_error());
$query="SELECT * FROM brigada";
$result=mysql_query($query);
if (!$result) die ("Сбой при доступе к базе данных:".mysql_error());
$rows=mysql_num_rows($result);
echo "<div id=\"o-bri\">";
echo "<ul>";
for ($j=0;$j<$rows;++$j){
    echo "<li>";
    echo "<div class=\"o-bri\">";
    echo "<div class=\"card-bri\">";
    echo "<div class=\"bri-name\">";
    echo "<img src=\"/images/foto-1.png\" alt=\"Бригад\" title=\"Бригада\">";
    echo "<div>"."<span class=\"imya\">".mysql_result($result,$j,'name') ."  " .mysql_result($result,$j,'surname')  ."  " .mysql_result($result,$j,'middlename')."<span>"."</div>";
    echo "<span class=\"shtukatur\">" .mysql_result($result,$j,'job')."</span>";
    echo "</div>";
    echo "<div style=\"clear: both\"></div>";
    echo "<div class=\"bri-otzyv\"><h3>Отзывы</h3>";
    echo "<p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых клиентов недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>";
    echo "</div>";
    echo "<div class=\"bri-price\"><h3>Цены</h3>";
    echo "<ul>";
    echo "<li>". "<div class=\"bri-price-underline\"><span>Штукатурка стен с материалом</span></div>" ."<div class=\"bri-price-right\">".mysql_result($result,$j,'pricewith')."м"."<sup>2</sup></div>"."</li>" ;
    echo "<li>". "<div class=\"bri-price-underline\"><span>Штукатурка стен без материала</span></div>" ."<div class=\"bri-price-right\">".mysql_result($result,$j,'pricewithout')."м"."<sup>2</sup></div>"."</li>" ;
    echo "<div style=\"clear: both\"></div>";
    echo "</ul>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"reting-bri\">";
    echo "<ul>";
    echo"<li><span>";
    if(mysql_result($result,$j,'name')==$frolov){
        echo require_once 'obrabotka.php';
    }else{
        echo '0';
    };
    echo "</span><br/><label>рейтинг</label></li>";
    echo"<li><span>70</span><br/><label>отзывы</label></li>";
    echo "</ul>";
    echo "<ul class=\"quality\">";
    echo "<li><img src=\"/images/dog.png\"/><span>Работает по договору</span> </li>";
    echo "<li><img src=\"/images/secure.png\"/><span>Гарантия 3 года</span> </li>";
    echo "<li><img src=\"/images/gal.png\"/><span>Сертифицирован</span> </li>";
    echo "<li><img src=\"/images/gal.png\"/><span>Верифицирован</span> </li>";
    echo "</ul>";
    echo "</div>";
    echo "<div style=\"clear: both\"></div>";
    echo "</div>";
    echo "</li>";
}
echo "</ul>";
echo "<div style=\"clear: both\"></div>";
echo "</div>";
?>

<?php
echo <<<_END
</div>
<br class="spacer" />
</div>
<br class="spacer" />
</div>
<footer>
<div id="footer">
<table><tr><td width="300" style="text-align:left;">
<!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=31255973&amp;from=informer"target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/31255973/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:31255973,lang:'ru'});return false}catch(e){}" /></a><!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31255973 = new Ya.Metrika({ id:31255973, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ut:"noindex" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><!-- /Yandex.Metrika counter -->
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t20.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet--><!-- Rating@Mail.ru counter -->
  <script type="text/javascript">//<![CDATA[
(function(w,n,d,r,s){d.write('<p><a href="http://top.mail.ru/jump?from=2283305">'+
'<img src="http://d7.cd.b2.a2.top.mail.ru/counter?id=2283305;t=130;js=13'+
((r=d.referrer)?';r='+escape(r):'')+((s=w.screen)?';s='+s.width+'*'+s.height:'')+';_='+Math.random()+
'" style="border:0;" height="40" width="88" alt="Рейтинг@Mail.ru" /><\/a><\/p>');})(window,navigator,document);//]]>
</script><noscript><p><a href="http://top.mail.ru/jump?from=2283305">
  <img src="http://d7.cd.b2.a2.top.mail.ru/counter?id=2283305;t=130;js=na"
style="border:0;" height="40" width="80" alt="Рейтинг@Mail.ru" /></a><a href="http://top100.rambler.ru/navi/2821030/"><img src="http://counter.rambler.ru/top100.cnt?2821030" alt="Rambler's Top100" border="0" /></a></p>
</noscript>
  <!-- //Rating@Mail.ru counter -->

</td>
<td width="350">
<p>Copyright © 2006-2016 Сайт является собственности ООО<a href="http://su10.su/"> "Штукатур"</a>  Все статьи авторские, копирование материалов ЗАПРЕЩЕНО без указания ссылки на сайт!</p>
 </td>
 <td width="290" id="geo"><img src="http://su10.su/images/geolacation1.png" alt="геолакация"><address><span id="address">111621, Москва ул.Оренбургская д.30 стр.4</span>
  <span id="phones">+7 (495) 933 40 47</span>
  </address>
  </td>
  </tr>
  </table>
</div>
</footer>
<!--footer end --><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66336586-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
_END;
?>
