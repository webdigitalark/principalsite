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

/* themes/contrib/radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_58edf080020ce0c61147fd72f0795331c38c62ac638647e523114db62cdcbf7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 7];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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
        // line 7
        $this->loadTemplate("themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 7, "576206768")->display(twig_array_merge($context, ["html_tag" => "div"]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,);
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
 * Template for the branding block.
 */
#}
{% embed '@radix/block/block.twig' with {
  html_tag: 'div',
} %}

{% block content %}
  {% include '@radix/navbar/navbar-brand.twig' with {
    text: site_name,
    image: site_logo,
    width: 30,
    height: 'auto',
    path: path('<front>'),
    alt: elements.content.site_name['#markup'] ~ ' logo' ,
  } %}
{% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/templates/block/block--system-branding-block.html.twig");
    }
}


/* themes/contrib/radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_58edf080020ce0c61147fd72f0795331c38c62ac638647e523114db62cdcbf7d___576206768 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("@radix/block/block.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 7);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 12];
        $filters = [];
        $functions = ["path" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                ['path']
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

    protected function doGetParent(array $context)
    {
        return "@radix/block/block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->loadTemplate("@radix/navbar/navbar-brand.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 12)->display(twig_array_merge($context, ["text" =>         // line 13
($context["site_name"] ?? null), "image" =>         // line 14
($context["site_logo"] ?? null), "width" => 30, "height" => "auto", "path" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"), "alt" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 18
($context["elements"] ?? null), "content", []), "site_name", []), "#markup", [], "array") . " logo")]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 18,  165 => 14,  164 => 13,  162 => 12,  159 => 11,  55 => 7,);
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
 * Template for the branding block.
 */
#}
{% embed '@radix/block/block.twig' with {
  html_tag: 'div',
} %}

{% block content %}
  {% include '@radix/navbar/navbar-brand.twig' with {
    text: site_name,
    image: site_logo,
    width: 30,
    height: 'auto',
    path: path('<front>'),
    alt: elements.content.site_name['#markup'] ~ ' logo' ,
  } %}
{% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/templates/block/block--system-branding-block.html.twig");
    }
}
