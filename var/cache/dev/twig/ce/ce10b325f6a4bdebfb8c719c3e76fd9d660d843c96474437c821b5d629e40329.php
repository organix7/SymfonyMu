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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_c1ca979dc3acc50195abbfbc8a09f405eefdc37e52514c4908be036bd42604eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div class=\"container\" id=\"container-signin\">
    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
            <div class=\"card card-signin my-5 text-white\" style=\"background-color:#333333\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">Sign In</h5>
                    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                        ";
        // line 14
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" />
                        ";
        }
        // line 17
        echo "                        <div class=\"form-label-group\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" placeholder=\"username\" class=\"form-control\" autofocus>
                            <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>

                        <div class=\"form-label-group\">
                            <input type=\"password\" id=\"password\" name=\"_password\" autocomplete=\"current-password\" class=\"form-control\" placeholder=\"Password\" required>
                            <label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>

                        <div class=\"custom-control custom-checkbox mb-3\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\" name=\"_remember_me\" value=\"on\">
                            <label class=\"custom-control-label\" for=\"customCheck1\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                        <button id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-lg btn-success btn-block text-uppercase\" type=\"submit\">Sign in</button>
                        <hr class=\"my-4\">
                    </form>

                    <div class=\"text-center\">
                        <a class=\"btn btn-control btn-primary btn-center text-uppercase\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\">sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  103 => 31,  98 => 29,  90 => 24,  82 => 19,  78 => 18,  75 => 17,  69 => 15,  67 => 14,  63 => 13,  54 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"container\" id=\"container-signin\">
    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
            <div class=\"card card-signin my-5 text-white\" style=\"background-color:#333333\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">Sign In</h5>
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        {% endif %}
                        <div class=\"form-label-group\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" placeholder=\"username\" class=\"form-control\" autofocus>
                            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        </div>

                        <div class=\"form-label-group\">
                            <input type=\"password\" id=\"password\" name=\"_password\" autocomplete=\"current-password\" class=\"form-control\" placeholder=\"Password\" required>
                            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                        </div>

                        <div class=\"custom-control custom-checkbox mb-3\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\" name=\"_remember_me\" value=\"on\">
                            <label class=\"custom-control-label\" for=\"customCheck1\">{{ 'security.login.remember_me'|trans }}</label>
                        </div>
                        <button id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-lg btn-success btn-block text-uppercase\" type=\"submit\">Sign in</button>
                        <hr class=\"my-4\">
                    </form>

                    <div class=\"text-center\">
                        <a class=\"btn btn-control btn-primary btn-center text-uppercase\" href=\"{{ path('fos_user_registration_register') }}\">sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\MiniUsine\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
