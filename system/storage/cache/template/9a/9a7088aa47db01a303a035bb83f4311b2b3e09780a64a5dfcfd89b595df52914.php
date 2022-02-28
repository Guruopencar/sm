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

/* smtheme/template/common/cart.twig */
class __TwigTemplate_b308c0397e1818cf50005203d1e3c67551087eb4d6f350c703bea86d04e57285 extends \Twig\Template
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
        echo "


<div id=\"cart\" class=\"btn-group btn-block\">
  <a href=\"";
        // line 5
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn-cart\">
    <div class=\"all-cart\">
      <div class=\"left-cart\">
        <div class=\"icon-cart\"><svg width=\"31\" height=\"26\" viewBox=\"0 0 31 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M29.8423 6.74114C29.4856 6.2247 28.5941 5.70815 27.8809 5.70815L4.88089 4.15873L3.98937 1.40415C3.98937 1.232 3.81108 0.887701 3.45451 0.887701L1.31491 0.199108C0.958345 0.0269592 0.423392 0.199108 0.245109 0.715553C0.0668262 1.05985 0.245109 1.57639 0.779959 1.74854L2.56289 2.26498L3.45441 5.19172L7.02027 17.0707C7.2752 17.9693 7.81549 18.7079 8.51796 19.2418C7.71917 19.8752 7.19681 20.8221 7.19681 21.8912C7.19681 23.7849 8.80147 25.3344 10.7627 25.3344C12.7239 25.3344 14.3286 23.7849 14.3286 21.8912C14.3286 21.2628 14.1396 20.6791 13.8311 20.1696H20.7115C20.4031 20.6793 20.214 21.2628 20.214 21.8912C20.214 23.7849 21.8187 25.3344 23.7799 25.3344C25.7429 25.3344 27.3458 23.7849 27.3458 21.8912C27.3458 20.9632 26.9572 20.1213 26.333 19.4999C27.2066 18.9628 27.861 18.1296 28.0607 17.0707L30.2004 8.97918C30.3771 8.11844 30.3771 7.42974 29.8423 6.74114ZM10.7629 23.6128C9.69309 23.6128 8.97995 22.9242 8.97995 21.8914C8.97995 20.8583 9.69309 20.1698 10.7629 20.1698C11.6544 20.1698 12.5458 20.8583 12.5458 21.8914C12.5458 22.9242 11.8326 23.6128 10.7629 23.6128ZM23.7784 23.6128C22.7086 23.6128 21.9954 22.9242 21.9954 21.8914C21.9954 20.8583 22.7086 20.1698 23.7784 20.1698C24.85 20.1698 25.5614 20.8583 25.5614 21.8914C25.5614 22.9242 24.8482 23.6128 23.7784 23.6128ZM26.4529 16.7264C26.3031 17.5975 25.5079 18.312 24.5183 18.5255C24.2795 18.4755 24.0334 18.448 23.7784 18.448C23.4094 18.448 23.0599 18.5186 22.7247 18.6202H11.8165C11.4814 18.5186 11.1319 18.448 10.7628 18.448C10.679 18.448 10.6005 18.4669 10.5185 18.4722C9.74473 18.1847 9.069 17.5063 8.79972 16.7264L5.59053 6.05246L27.6991 7.60188C28.0558 7.60188 28.234 7.77403 28.4123 7.94619C28.5906 8.11833 28.5906 8.46263 28.5906 8.63477L26.4529 16.7264Z\" fill=\"#3A1850\"/>
</svg></div>
        <div class=\"total-cart\">";
        // line 11
        echo ($context["text_items"] ?? null);
        echo "</div>

      </div>
<div class=\"right-cart\">";
        // line 14
        echo ($context["text_items2"] ?? null);
        echo "</div>
    </div>


  </a>


  
</div>
";
    }

    public function getTemplateName()
    {
        return "smtheme/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/cart.twig", "");
    }
}
