<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @radix/button/button.twig */
class __TwigTemplate_43f5f3a59588921ae475580e047352cd2ad732d6be36e6156bfc273b03389c7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "if" => 18];
        $filters = ["escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 14
        $context["css_classes"] = [0 => "btn", 1 => ((        // line 16
($context["type"] ?? null)) ? (("btn-" . $this->sandbox->ensureToStringAllowed(($context["type"] ?? null)))) : (""))];
        // line 18
        if ((($context["tag"] ?? null) == "input")) {
            // line 19
            echo "  <input";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["css_classes"] ?? null)], "method")), "html", null, true);
            echo " />
";
        } else {
            // line 21
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
            echo "</";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 23
        echo "

";
    }

    public function getTemplateName()
    {
        return "@radix/button/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  66 => 21,  60 => 19,  58 => 18,  56 => 16,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for a button component.
 *
 * Available config:
 * - type: primary | secondary | success | danger | warning | info | light | dark
 * - outline: true | false
 * - tag: button, a, input
 * - value: string
 * - attributes: Attributes array.
 */
#}
{% set css_classes = [
  'btn',
  type ? 'btn-' ~ type
] %}
{% if tag == 'input' %}
  <input{{ attributes.addClass(css_classes) }} />
{% else %}
  <{{ tag }}>{{ value }}</{{ tag }}>
{% endif %}


", "@radix/button/button.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/src/components/button/button.twig");
    }
}
