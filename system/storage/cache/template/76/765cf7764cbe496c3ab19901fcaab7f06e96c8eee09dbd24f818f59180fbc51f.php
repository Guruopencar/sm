<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* smtheme/template/common/home.twig */
class __TwigTemplate_1f008aed714130cc35a1514bc488a90033ce9333b524bd836e0325782b211a09 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <div class=\"row\">
";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
</div>
</div>
<div class=\"bg-promo\">
  <div class=\"top-bg\">
<div class=\"container\">
    <div class=\"row\">
<div class=\"all-promo\">
  <div class=\"left-promo\"><img src=\"image/promo.png\" alt=\"\" title=\"\" /></div>
  <div class=\"right-promo\">
    <div class=\"title-promo\">

С нами выгодно<br /> сотрудничать
    </div>
  
    <div class=\"info-promo\">
      <div class=\"item-promo\">
        <div class=\"icon-promo\"><img src=\"image/select.png\" alt=\"\" /></div>
        <div class=\"text-promo\">Более 1500<br /> позиций</div>
      </div>
      <div class=\"item-promo\">
        <div class=\"icon-promo\"><img src=\"image/select.png\" alt=\"\" /></div>
        <div class=\"text-promo\">Отправка заказа<br /> от 1 дня</div>
      </div>
      <div class=\"item-promo\">
        <div class=\"icon-promo\"><img src=\"image/select.png\" alt=\"\" /></div>
        <div class=\"text-promo\">Лучшие<br /> цены</div>
      </div>

    </div>

  </div>

</div>


</div>
</div>


<div class=\"container\">
    <div class=\"row\">
      <div class=\"title-about\">О нас</div>
      <div class=\"text-about\">
        <div class=\"about-item\">
<p>Каждый человек хоть раз в жизни задумывался о настоящей татуировке. Такое решение дается непросто. Сегодня хорошей альтернативой настоящим является временное тату. </p>

<p>Временные татуировки — возможность ненадолго украсить своё тело необычным рисунком. В отличие от постоянных тату эта разновидность бодиарта исчезает без следа уже через несколько дней или недель. Поэтому можно с легкостью регулярно менять стили, цвета и размеры рисунков — и все это без боли, вреда для здоровья кожи и с минимальными затратами.</p>

<p>Предлагаем Вашему вниманию наш интернет магазин с широким ассортиментом товаров для временных тату. Известные бренды и производители. </p>

<p>В наличии всегда большой выбор материалов для качественной и удобной работы. Хна и масло для мехенди, джагуа гель, трафареты для хны и блеск тату, переводные флеш тату, блеск и клей для тела, стразы и кисти. Для вас всегда хороший товар по разумной цене, быстрая и доступная доставка по России и Крыму.</p>
</div>
 <div class=\"about-item\">
<p>С 2014 года мы занимаемся производством трафаретов и создаём эскизы для временных тату, с 2011 года ежегодно открываем в Крыму на лето несколько точек по нанесению временных татуировок, поэтому хорошо разбираемся в этой тематике.</p>

<p>Если вы задумались над тем, чтобы и самим заняться бизнесом по нанесению временных тату и мехенди, мы можем вам в этом помочь. Мы проконсультируем и предоставим вам возможность в короткие сроки и с минимальными вложениями начать его. </p>

<p>Специальные цены для оптовых покупателей дают возможность совершить заказ с большой скидкой. Также предлагаем вам авторские альбомы и трафареты. Оперативная отправка заказов. Зарабатывайте вместе с нами.</p>

<p>Дополнительным аксессуаром вечера может стать блеск тату на вашем теле или узор мехенди. И если вы решили примерить на себя татуировку перед тем как делать настоящую, временное тату – это то, что вам нужно.</p>

<p>Мы всегда поможем правильно выбрать эскизы и материалы. Ждем вас на нашем сайте, начнём вносить в жизнь яркие краски вместе.</p>
</div>
      </div>

</div>
</div>      


";
        // line 74
        echo ($context["content_bottom"] ?? null);
        echo "



";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "smtheme/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 78,  116 => 74,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/home.twig", "");
    }
}
