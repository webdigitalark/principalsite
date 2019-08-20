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

/* themes/contrib/radix/templates/navigation/links.html.twig */
class __TwigTemplate_d0e724ec815ebbd653bb543777f45a15a6b5ecc7b64bc47d47299515fbf27be9 extends \Twig\Template
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
        $this->loadTemplate("themes/contrib/radix/templates/navigation/links.html.twig", "themes/contrib/radix/templates/navigation/links.html.twig", 7, "1714062737")->display(twig_array_merge($context, ["items" =>         // line 8
($context["links"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  55 => 7,);
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
 * Template for links.
 */
#}
{% embed '@radix/nav/nav.twig' with {
  items: links,
} %}

{% block items %}
  {%- for item in links -%}
    <li{{ item.attributes.addClass('nav-item') }}>
      {%- if item.link -%}
        <a href=\"{{ item.link['#url'] }}\" class=\"nav-link\">{{ item.link['#title'] }}</a>
      {%- elseif item.text_attributes -%}
        <span{{ item.text_attributes.addClass('nav-link') }}>{{ item.text }}</span>
      {%- else -%}
        <span class=\"nav-link\">{{ item.text }}</span>
      {%- endif -%}
    </li>
  {%- endfor -%}
{% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/navigation/links.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/templates/navigation/links.html.twig");
    }
}


/* themes/contrib/radix/templates/navigation/links.html.twig */
class __TwigTemplate_d0e724ec815ebbd653bb543777f45a15a6b5ecc7b64bc47d47299515fbf27be9___1714062737 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("@radix/nav/nav.twig", "themes/contrib/radix/templates/navigation/links.html.twig", 7);
        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 12, "if" => 14];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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

    protected function doGetParent(array $context)
    {
        return "@radix/nav/nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_items($context, array $blocks = [])
    {
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "<li";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "nav-item"], "method")), "html", null, true);
            echo ">";
            // line 14
            if ($this->getAttribute($context["item"], "link", [])) {
                // line 15
                echo "<a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "link", []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"nav-link\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "link", []), "#title", [], "array")), "html", null, true);
                echo "</a>";
            } elseif ($this->getAttribute(            // line 16
$context["item"], "text_attributes", [])) {
                // line 17
                echo "<span";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "text_attributes", []), "addClass", [0 => "nav-link"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                echo "</span>";
            } else {
                // line 19
                echo "<span class=\"nav-link\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                echo "</span>";
            }
            // line 21
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 21,  192 => 19,  185 => 17,  183 => 16,  177 => 15,  175 => 14,  171 => 13,  167 => 12,  164 => 11,  122 => 7,  56 => 8,  55 => 7,);
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
 * Template for links.
 */
#}
{% embed '@radix/nav/nav.twig' with {
  items: links,
} %}

{% block items %}
  {%- for item in links -%}
    <li{{ item.attributes.addClass('nav-item') }}>
      {%- if item.link -%}
        <a href=\"{{ item.link['#url'] }}\" class=\"nav-link\">{{ item.link['#title'] }}</a>
      {%- elseif item.text_attributes -%}
        <span{{ item.text_attributes.addClass('nav-link') }}>{{ item.text }}</span>
      {%- else -%}
        <span class=\"nav-link\">{{ item.text }}</span>
      {%- endif -%}
    </li>
  {%- endfor -%}
{% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/navigation/links.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/templates/navigation/links.html.twig");
    }
}
