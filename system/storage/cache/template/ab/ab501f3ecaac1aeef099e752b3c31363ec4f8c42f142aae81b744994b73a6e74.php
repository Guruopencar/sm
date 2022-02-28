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

/* smtheme/template/extension/module/categoryCatalog.twig */
class __TwigTemplate_38739a0cc4e8f9596819a7ca23bc8c4a3cecf538d955998449fe9040f97ce796 extends \Twig\Template
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
        echo "        <div class=\"all-cat\">
            ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "              <div class=\"item-cat\">
                      <div class=\"image-cat\">
                        <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
            echo "\" style=\"padding-bottom: 100%\">
                            <img alt=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img\" data-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 6);
            echo "\" src=\"#\"/>
                        </a>
                      </div>
                      <div class=\"caption\">
                        <div class=\"totlas-cat\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, ($context["totlas"] ?? null), "name", [], "any", false, false, false, 10);
            echo "</div>
                        <div class=\"name-cat\"><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
            echo "</a></div>
                      </div>
                  </div>
                </div>
                </div
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>";
    }

    public function getTemplateName()
    {
        return "smtheme/template/extension/module/categoryCatalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  67 => 11,  63 => 10,  52 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/extension/module/categoryCatalog.twig", "");
    }
}
