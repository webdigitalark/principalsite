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

/* themes/custom/webdigitalark/templates/page/page.html.twig */
class __TwigTemplate_bd5d339b8d80da0dc4e43934eb69ef251a0437a4d443f0c3efebe19cd941c68a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 8, "if" => 37];
        $filters = ["escape" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed', 'if'],
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
        // line 7
        echo "<div id=\"particles-js\" class=\"page \">
  ";
        // line 8
        $this->loadTemplate("themes/custom/webdigitalark/templates/page/page.html.twig", "themes/custom/webdigitalark/templates/page/page.html.twig", 8, "832917411")->display(twig_array_merge($context, ["placement" => "sticky-top", "container" => "fluid", "color" => "light", "utility_classes" => [0 => "bg-light"]]));
        // line 35
        echo "
  <main class=\"pt-5 pb-5\">
    ";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 38
            echo "      <header class=\"page__header mb-3\">
        <div class=\"fluid\">
          ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      </header>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 46
            echo "      <div class=\"page__content\">
        <div class=\"fluid\">
          ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 52
        echo "  </main>

  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 55
            echo "    <footer class=\"page__footer\">
      <div class=\"fluid\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
      </div>
    </footer>
  ";
        }
        // line 63
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/webdigitalark/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 63,  104 => 58,  99 => 55,  97 => 54,  93 => 52,  86 => 48,  82 => 46,  80 => 45,  77 => 44,  70 => 40,  66 => 38,  64 => 37,  60 => 35,  58 => 8,  55 => 7,);
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
 * Template for the main page.
 */
#}
<div id=\"particles-js\" class=\"page \">
  {% embed '@radix/navbar/navbar.twig' with {
    placement: 'sticky-top',
    container: 'fluid',
    color: 'light',
    utility_classes: ['bg-light'],
  } %}

    {% block branding %}
      {% if page.navbar_branding %}
        {{ page.navbar_branding }}
      {% endif %}
    {% endblock %}

    {% block left %}
      {% if page.navbar_left %}
        <div class=\"mr-auto\">
          {{ page.navbar_left }}
        </div>
      {% endif %}
    {% endblock %}

    {% block right %}
      {% if page.navbar_right %}
        {{ page.navbar_right }}
      {% endif %}
    {% endblock %}
  {% endembed %}

  <main class=\"pt-5 pb-5\">
    {% if page.header %}
      <header class=\"page__header mb-3\">
        <div class=\"fluid\">
          {{ page.header }}
        </div>
      </header>
    {% endif %}

    {% if page.content %}
      <div class=\"page__content\">
        <div class=\"fluid\">
          {{ page.content }}
        </div>
      </div>
    {% endif %}
  </main>

  {% if page.footer %}
    <footer class=\"page__footer\">
      <div class=\"fluid\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          {{ page.footer }}
        </div>
      </div>
    </footer>
  {% endif %}
</div>
", "themes/custom/webdigitalark/templates/page/page.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/custom/webdigitalark/templates/page/page.html.twig");
    }
}


/* themes/custom/webdigitalark/templates/page/page.html.twig */
class __TwigTemplate_bd5d339b8d80da0dc4e43934eb69ef251a0437a4d443f0c3efebe19cd941c68a___832917411 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("@radix/navbar/navbar.twig", "themes/custom/webdigitalark/templates/page/page.html.twig", 8);
        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        return "@radix/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_branding($context, array $blocks = [])
    {
        // line 16
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])), "html", null, true);
            echo "
      ";
        }
        // line 19
        echo "    ";
    }

    // line 21
    public function block_left($context, array $blocks = [])
    {
        // line 22
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_left", [])) {
            // line 23
            echo "        <div class=\"mr-auto\">
          ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_left", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 27
        echo "    ";
    }

    // line 29
    public function block_right($context, array $blocks = [])
    {
        // line 30
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_right", [])) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_right", [])), "html", null, true);
            echo "
      ";
        }
        // line 33
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/webdigitalark/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 33,  302 => 31,  299 => 30,  296 => 29,  292 => 27,  286 => 24,  283 => 23,  280 => 22,  277 => 21,  273 => 19,  267 => 17,  264 => 16,  261 => 15,  217 => 8,  112 => 63,  104 => 58,  99 => 55,  97 => 54,  93 => 52,  86 => 48,  82 => 46,  80 => 45,  77 => 44,  70 => 40,  66 => 38,  64 => 37,  60 => 35,  58 => 8,  55 => 7,);
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
 * Template for the main page.
 */
#}
<div id=\"particles-js\" class=\"page \">
  {% embed '@radix/navbar/navbar.twig' with {
    placement: 'sticky-top',
    container: 'fluid',
    color: 'light',
    utility_classes: ['bg-light'],
  } %}

    {% block branding %}
      {% if page.navbar_branding %}
        {{ page.navbar_branding }}
      {% endif %}
    {% endblock %}

    {% block left %}
      {% if page.navbar_left %}
        <div class=\"mr-auto\">
          {{ page.navbar_left }}
        </div>
      {% endif %}
    {% endblock %}

    {% block right %}
      {% if page.navbar_right %}
        {{ page.navbar_right }}
      {% endif %}
    {% endblock %}
  {% endembed %}

  <main class=\"pt-5 pb-5\">
    {% if page.header %}
      <header class=\"page__header mb-3\">
        <div class=\"fluid\">
          {{ page.header }}
        </div>
      </header>
    {% endif %}

    {% if page.content %}
      <div class=\"page__content\">
        <div class=\"fluid\">
          {{ page.content }}
        </div>
      </div>
    {% endif %}
  </main>

  {% if page.footer %}
    <footer class=\"page__footer\">
      <div class=\"fluid\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          {{ page.footer }}
        </div>
      </div>
    </footer>
  {% endif %}
</div>
", "themes/custom/webdigitalark/templates/page/page.html.twig", "/Library/WebServer/Documents/test/webdigital/themes/custom/webdigitalark/templates/page/page.html.twig");
    }
}
