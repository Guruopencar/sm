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

/* smtheme/template/common/header.twig */
class __TwigTemplate_7d6d5d5d98aa8c1d56f9203aa2812065d31fe8b6dc3779c3de76f754a6ceda87 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\" />
";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/smtheme/stylesheet/font/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/smtheme/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 39);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 39);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 39);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 46
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 46);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 46);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 49
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</head>
<body>

<header>
  <div class=\"container\">
   
      <div class=\"all-header\">
        <div class=\"left-header\">
        <div class=\"logo-header\">
            ";
        // line 60
        if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
            // line 61
            echo "              <img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" />
            ";
        } else {
            // line 63
            echo "              <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
            ";
        }
        // line 65
        echo "
        </div>
        <div class=\"slogan-header\">
          Товары для временных тату<br /> с доставкой по РФ


        </div>
        <div class=\"open-header\">
          <b>График работы</b><br />
          Понедельник - Пятница с 10.00-19.00

        </div>
        </div>
        <div class=\"right-header\">
        <div class=\"social-header\">
          <a href=\"\" class=\"insta\"><svg width=\"24\" height=\"25\" viewBox=\"0 0 24 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<g clip-path=\"url(#clip0_2_16)\">
<path d=\"M17.5034 0.478516H6.49657C2.9143 0.478516 0 3.39282 0 6.97508V17.9821C0 21.5642 2.9143 24.4785 6.49657 24.4785H17.5036C21.0856 24.4785 24 21.5642 24 17.9821V6.97508C24 3.39282 21.0856 0.478516 17.5034 0.478516V0.478516ZM22.593 17.9821C22.593 20.7883 20.3098 23.0715 17.5034 23.0715H6.49657C3.69012 23.0715 1.40698 20.7883 1.40698 17.9821V6.97508C1.40698 4.16863 3.69012 1.8855 6.49657 1.8855H17.5036C20.3098 1.8855 22.593 4.16863 22.593 6.97508V17.9821Z\" fill=\"#3A1850\"/>
<path d=\"M12 5.9162C8.38146 5.9162 5.43768 8.85998 5.43768 12.4785C5.43768 16.097 8.38146 19.0408 12 19.0408C15.6185 19.0408 18.5623 16.097 18.5623 12.4785C18.5623 8.85998 15.6185 5.9162 12 5.9162ZM12 17.6338C9.15746 17.6338 6.84466 15.3212 6.84466 12.4785C6.84466 9.63598 9.15746 7.32318 12 7.32318C14.8427 7.32318 17.1553 9.63598 17.1553 12.4785C17.1553 15.3212 14.8427 17.6338 12 17.6338Z\" fill=\"#3A1850\"/>
<path d=\"M18.7192 3.58563C17.6499 3.58563 16.7801 4.45556 16.7801 5.52472C16.7801 6.59405 17.6499 7.46398 18.7192 7.46398C19.7885 7.46398 20.6585 6.59405 20.6585 5.52472C20.6585 4.45538 19.7885 3.58563 18.7192 3.58563ZM18.7192 6.05682C18.4259 6.05682 18.1871 5.81805 18.1871 5.52472C18.1871 5.2312 18.4259 4.99261 18.7192 4.99261C19.0127 4.99261 19.2515 5.2312 19.2515 5.52472C19.2515 5.81805 19.0127 6.05682 18.7192 6.05682Z\" fill=\"#3A1850\"/>
</g>
<defs>
<clipPath id=\"clip0_2_16\">
<rect width=\"24\" height=\"24\" fill=\"white\" transform=\"translate(0 0.478516)\"/>
</clipPath>
</defs>
</svg></a>
          <a href=\"\" class=\"vk\">
<svg width=\"24\" height=\"15\" viewBox=\"0 0 24 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M19.915 9.00652C19.527 8.51652 19.638 8.29852 19.915 7.86052C19.92 7.85552 23.123 3.42952 23.453 1.92852L23.455 1.92752C23.619 1.38052 23.455 0.978516 22.662 0.978516H20.038C19.37 0.978516 19.062 1.32352 18.897 1.70952C18.897 1.70952 17.561 4.90752 15.671 6.98052C15.061 7.57952 14.779 7.77152 14.446 7.77152C14.282 7.77152 14.027 7.57952 14.027 7.03252V1.92752C14.027 1.27152 13.84 0.978516 13.287 0.978516H9.161C8.742 0.978516 8.493 1.28452 8.493 1.56952C8.493 2.19152 9.438 2.33452 9.536 4.08452V7.88152C9.536 8.71352 9.385 8.86652 9.05 8.86652C8.158 8.86652 5.993 5.65552 4.71 1.98052C4.451 1.26752 4.198 0.979516 3.525 0.979516H0.9C0.151 0.979516 0 1.32452 0 1.71052C0 2.39252 0.891999 5.78352 4.148 10.2635C6.318 13.3215 9.374 14.9785 12.154 14.9785C13.825 14.9785 14.029 14.6105 14.029 13.9775C14.029 11.0555 13.878 10.7795 14.715 10.7795C15.103 10.7795 15.771 10.9715 17.331 12.4465C19.114 14.1955 19.407 14.9785 20.405 14.9785H23.029C23.777 14.9785 24.156 14.6105 23.938 13.8845C23.439 12.3575 20.067 9.21652 19.915 9.00652Z\" fill=\"#3A1850\"/>
</svg>

          </a>

        </div>
        <div class=\"phone-header\">
           <a href=\"tel:+7 (978) 974-55-52\" class=\"phone-href\">+7 (978) 974-55-52</a> 
           <a href=\"#callback\" class=\"calbak-href\">Заказать звонок</a>
        </div>


      </div>
    </div>

     
   
  </div>
</header>
";
        // line 113
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "smtheme/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 113,  228 => 65,  216 => 63,  206 => 61,  204 => 60,  193 => 51,  185 => 49,  181 => 48,  170 => 46,  166 => 45,  163 => 44,  154 => 42,  150 => 41,  137 => 39,  133 => 38,  122 => 31,  116 => 29,  110 => 27,  108 => 26,  104 => 25,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/header.twig", "");
    }
}
