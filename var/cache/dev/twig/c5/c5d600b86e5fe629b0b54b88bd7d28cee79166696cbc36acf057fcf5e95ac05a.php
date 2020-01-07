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

/* @Mu/muview/muview.html.twig */
class __TwigTemplate_384a01b31b5b4a04197497979ef24589a29233e3486842ebff25796ccde54af3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Mu/muview/muview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Mu/muview/muview.html.twig"));

        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Mu/muview/muview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "        <br>
        <div class=\"text-center\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "zoneAllowed", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 6
            echo "                ";
            if (($context["zone"] == "Z1")) {
                // line 7
                echo "                    <button id=\"btn-Z1\" type=\"button\" class=\"btn btn-outline-primary big\">ZONE 1</button>
                ";
            } elseif ((            // line 8
$context["zone"] == "Z2")) {
                // line 9
                echo "                    <button id=\"btn-Z2\" type=\"button\" class=\"btn btn-outline-warning big\">ZONE 2</button>
                ";
            } elseif ((            // line 10
$context["zone"] == "Z3")) {
                // line 11
                echo "                    <button id=\"btn-Z3\" type=\"button\" class=\"btn btn-outline-danger big\">ZONE 3</button>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>

        <div id=\"tableau\">
            <br>
            <table id=\"dataTable\" class=\"table-dark table-striped table-bordered table-sm\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th class=\"th-sm\">ID</th>
                    <th class=\"th-sm\">Station ID</th>
                    <th class=\"th-sm\">EWON Tag ID</th>
                    <th class=\"th-sm\">Name</th>
                    <th class=\"th-sm\">Val</th>
                    <th class=\"th-sm\">Description</th>
                </tr>
                </thead>
            </table>
        </div>

        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("api.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Mu/muview/muview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  99 => 14,  93 => 13,  89 => 11,  87 => 10,  84 => 9,  82 => 8,  79 => 7,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layout.html.twig\" %}
    {% block fos_user_content %}
        <br>
        <div class=\"text-center\">
            {% for zone in user.zoneAllowed %}
                {% if zone == \"Z1\" %}
                    <button id=\"btn-Z1\" type=\"button\" class=\"btn btn-outline-primary big\">ZONE 1</button>
                {% elseif zone == \"Z2\" %}
                    <button id=\"btn-Z2\" type=\"button\" class=\"btn btn-outline-warning big\">ZONE 2</button>
                {% elseif zone==\"Z3\" %}
                    <button id=\"btn-Z3\" type=\"button\" class=\"btn btn-outline-danger big\">ZONE 3</button>
                {% endif %}
            {% endfor %}
        </div>

        <div id=\"tableau\">
            <br>
            <table id=\"dataTable\" class=\"table-dark table-striped table-bordered table-sm\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th class=\"th-sm\">ID</th>
                    <th class=\"th-sm\">Station ID</th>
                    <th class=\"th-sm\">EWON Tag ID</th>
                    <th class=\"th-sm\">Name</th>
                    <th class=\"th-sm\">Val</th>
                    <th class=\"th-sm\">Description</th>
                </tr>
                </thead>
            </table>
        </div>

        <script src=\"{{ asset('api.js') }}\"></script>

    {% endblock fos_user_content %}
{% trans_default_domain 'FOSUserBundle' %}
", "@Mu/muview/muview.html.twig", "C:\\xampp\\htdocs\\MiniUsine\\src\\MuBundle\\Resources\\views\\muview\\muview.html.twig");
    }
}
