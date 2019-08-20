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

/* modules/contrib/radix_layouts/plugins/layouts/radix_boxton/radix-boxton.html.twig */
class __TwigTemplate_e7ad974a71228e9dab2f79643195cd197390a8a8d76a739e1c0ddf66714086d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 19];
        $filters = ["merge" => 20, "escape" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
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
        // line 13
        $context["container_classes"] = [0 => "panel-display", 1 => "boxton", 2 => "clearfix"];
        // line 19
        if (($context["classes"] ?? null)) {
            // line 20
            echo "    ";
            $context["container_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["container_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)));
        }
        // line 22
        if (($context["class"] ?? null)) {
            // line 23
            echo "    ";
            $context["container_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["container_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["class"] ?? null)));
        }
        // line 25
        echo "
<div ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["container_classes"] ?? null)], "method")), "html", null, true);
        if (($context["css_id"] ?? null)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_id"] ?? null)), "html", null, true);
        }
        echo ">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12 radix-layouts-content panel-panel\">
        <div ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "contentmain", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "contentmain", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>

</div><!-- /.boxton -->
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/radix_layouts/plugins/layouts/radix_boxton/radix-boxton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  83 => 31,  72 => 26,  69 => 25,  65 => 23,  63 => 22,  59 => 20,  57 => 19,  55 => 13,);
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
 * Template for Radix Boxton.
 *
 * Variables:
 * - \$css_id: An optional CSS id to use for the layout.
 * - \$content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
#}
{%
    set container_classes = [
    'panel-display',
    'boxton',
    'clearfix'
]
%}
{% if classes %}
    {% set container_classes = container_classes|merge(classes) %}
{% endif %}
{% if class %}
    {% set container_classes = container_classes|merge(class) %}
{% endif %}

<div {{ attributes.addClass(container_classes) }}{% if css_id %}{{ css_id }}{% endif %}>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12 radix-layouts-content panel-panel\">
        <div {{ region_attributes.contentmain.addClass('panel-panel-inner') }}>
          {{ content.contentmain }}
        </div>
      </div>
    </div>
  </div>

</div><!-- /.boxton -->
", "modules/contrib/radix_layouts/plugins/layouts/radix_boxton/radix-boxton.html.twig", "/Library/WebServer/Documents/test/webdigital/modules/contrib/radix_layouts/plugins/layouts/radix_boxton/radix-boxton.html.twig");
    }
}
