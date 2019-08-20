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

/* themes/contrib/radix/templates/misc/status-messages.html.twig */
class __TwigTemplate_6f08c6190d575b9441c1bafe0d3088275cb1e78a03ba2519087c696bad83e8ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "for" => 14, "embed" => 16];
        $filters = ["escape" => 15, "without" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'embed'],
                ['escape', 'without'],
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
        $context["types"] = ["status" => "success", "warning" => "warning", "error" => "danger", "info" => "info"];
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 16
            $this->loadTemplate("themes/contrib/radix/templates/misc/status-messages.html.twig", "themes/contrib/radix/templates/misc/status-messages.html.twig", 16, "305857981")->display(twig_array_merge($context, ["type" => $this->getAttribute(            // line 17
($context["types"] ?? null), $context["type"], [], "array")]));
            // line 34
            echo "  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  85 => 17,  84 => 16,  77 => 15,  60 => 14,  57 => 13,  55 => 7,);
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
 * Template for status messages.
 */
#}
{% set types = {
  status: 'success',
  warning: 'warning',
  error: 'danger',
  info: 'info',
} %}

{% for type, messages in message_list %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
    {% embed '@radix/alert/alert.twig' with {
      type: types[type],
    } %}
      {% block content %}
        {% if status_headings[type] %}
          <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
        {% endif %}
        {% if messages|length > 1 %}
          <ul>
            {% for message in messages %}
              <li>{{ message }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {{ messages|first }}
        {% endif %}
      {% endblock %}
    {% endembed %}
  </div>
{% endfor %}
", "themes/contrib/radix/templates/misc/status-messages.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/templates/misc/status-messages.html.twig");
    }
}


/* themes/contrib/radix/templates/misc/status-messages.html.twig */
class __TwigTemplate_6f08c6190d575b9441c1bafe0d3088275cb1e78a03ba2519087c696bad83e8ac___305857981 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("@radix/alert/alert.twig", "themes/contrib/radix/templates/misc/status-messages.html.twig", 16);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "for" => 25];
        $filters = ["escape" => 21, "length" => 23, "first" => 30];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'first'],
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
        return "@radix/alert/alert.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "        ";
        if ($this->getAttribute(($context["status_headings"] ?? null), ($context["type"] ?? null), [], "array")) {
            // line 21
            echo "          <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), ($context["type"] ?? null), [], "array")), "html", null, true);
            echo "</h2>
        ";
        }
        // line 23
        echo "        ";
        if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
            // line 24
            echo "          <ul>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                echo "              <li>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "          </ul>
        ";
        } else {
            // line 30
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null))), "html", null, true);
            echo "
        ";
        }
        // line 32
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 32,  253 => 30,  249 => 28,  240 => 26,  236 => 25,  233 => 24,  230 => 23,  224 => 21,  221 => 20,  218 => 19,  176 => 16,  87 => 34,  85 => 17,  84 => 16,  77 => 15,  60 => 14,  57 => 13,  55 => 7,);
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
 * Template for status messages.
 */
#}
{% set types = {
  status: 'success',
  warning: 'warning',
  error: 'danger',
  info: 'info',
} %}

{% for type, messages in message_list %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
    {% embed '@radix/alert/alert.twig' with {
      type: types[type],
    } %}
      {% block content %}
        {% if status_headings[type] %}
          <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
        {% endif %}
        {% if messages|length > 1 %}
          <ul>
            {% for message in messages %}
              <li>{{ message }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {{ messages|first }}
        {% endif %}
      {% endblock %}
    {% endembed %}
  </div>
{% endfor %}
", "themes/contrib/radix/templates/misc/status-messages.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/contrib/radix/templates/misc/status-messages.html.twig");
    }
}
