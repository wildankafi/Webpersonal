<?php

/* partials/base.html.twig */
class __TwigTemplate_211ed637d75840920c4c370268858ec2376a29027462f9b0bccdc336404328b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'page' => array($this, 'block_page'),
            'navigation' => array($this, 'block_navigation'),
            'titlebar' => array($this, 'block_titlebar'),
            'widgets' => array($this, 'block_widgets'),
            'messages' => array($this, 'block_messages'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</title>
    ";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 8
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 13
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 15
            echo "        <meta name=\"robots\" content=\"noindex, nofollow\">
    ";
        }
        // line 17
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url_simple"]) ? $context["base_url_simple"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme_url"]) ? $context["theme_url"] : null), "html", null, true);
        echo "/images/favicon.png\">

    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "<body class=\"";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "size", array()) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "body_classes", array()), "html", null, true);
        echo "\">
    ";
        // line 34
        $this->displayBlock('page', $context, $blocks);
        // line 76
        echo "</body>
";
    }

    // line 34
    public function block_page($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"remodal-bg\">

        ";
        // line 37
        $this->displayBlock('navigation', $context, $blocks);
        // line 40
        echo "
        <main id=\"admin-main\" >
            ";
        // line 42
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
        echo "            <div id=\"titlebar\" class=\"titlebar\">
                ";
        // line 44
        $this->displayBlock('titlebar', $context, $blocks);
        // line 45
        echo "            </div>

            <div class=\"grav-update\" data-gpm-grav>
            </div>

            <div class=\"content-wrapper\">
                <div class=\"content-padding\">
                    ";
        // line 52
        $this->displayBlock('widgets', $context, $blocks);
        // line 53
        echo "                    <div class=\"default-box-shadow\">
                        ";
        // line 54
        $this->displayBlock('messages', $context, $blocks);
        // line 57
        echo "                        ";
        $this->displayBlock('content_top', $context, $blocks);
        // line 58
        echo "                        <div class=\"admin-block\">
                            ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                        </div>
                        ";
        // line 61
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "show_github_msg", array())) {
            // line 62
            echo "                        <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                        ";
        }
        // line 64
        echo "                        ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 65
        echo "                    </div>
                     <footer id=\"footer\">
                         <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">";
        // line 67
        echo twig_escape_filter($this->env, twig_constant("GRAV_VERSION"), "html", null, true);
        echo "</span> - Admin v";
        echo twig_escape_filter($this->env, (isset($context["admin_version"]) ? $context["admin_version"] : null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WAS_MADE_WITH")), "html", null, true);
        echo " <i class=\"fa fa-heart\"></i> ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BY")), "html", null, true);
        echo " <a href=\"http://www.rockettheme.com\">RocketTheme</a>.
                    </footer>
                </div>
            </div>

        </main>
        <div id='overlay'></div>
    </div>
    ";
    }

    // line 37
    public function block_navigation($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "        ";
    }

    // line 44
    public function block_titlebar($context, array $blocks = array())
    {
    }

    // line 52
    public function block_widgets($context, array $blocks = array())
    {
    }

    // line 54
    public function block_messages($context, array $blocks = array())
    {
        // line 55
        echo "                        ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                        ";
    }

    // line 57
    public function block_content_top($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_content_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  280 => 64,  275 => 59,  270 => 57,  266 => 56,  263 => 55,  260 => 54,  255 => 52,  250 => 44,  246 => 39,  243 => 38,  240 => 37,  221 => 67,  217 => 65,  214 => 64,  208 => 62,  206 => 61,  203 => 60,  201 => 59,  198 => 58,  195 => 57,  193 => 54,  190 => 53,  188 => 52,  179 => 45,  177 => 44,  174 => 43,  172 => 42,  168 => 40,  166 => 37,  162 => 35,  159 => 34,  154 => 76,  152 => 34,  145 => 33,  142 => 32,  135 => 28,  132 => 27,  129 => 26,  122 => 22,  119 => 21,  116 => 20,  111 => 26,  109 => 25,  106 => 24,  104 => 20,  97 => 18,  94 => 17,  90 => 15,  84 => 13,  81 => 12,  75 => 10,  69 => 8,  67 => 7,  54 => 6,  51 => 5,  48 => 4,  43 => 78,  41 => 32,  38 => 31,  36 => 4,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if title %}{{ title }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>*/
/*     {% if header.description %}*/
/*         <meta name="description" content="{{ header.description }}">*/
/*     {% else %}*/
/*         <meta name="description" content="{{ site.description }}">*/
/*     {% endif %}*/
/*     {% if header.robots %}*/
/*         <meta name="robots" content="{{ header.robots }}">*/
/*     {% else %}*/
/*         <meta name="robots" content="noindex, nofollow">*/
/*     {% endif %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" type="image/png" href="{{ base_url_simple }}/{{ theme_url }}/images/favicon.png">*/
/* */
/*     {% block stylesheets %}*/
/*         {% include 'partials/stylesheets.html.twig' %}*/
/*         {{ assets.css()|raw }}*/
/*     {% endblock %}*/
/* */
/*     {% include 'partials/javascript-config.html.twig' %}*/
/*     {% block javascripts %}*/
/*         {% include 'partials/javascripts.html.twig' %}*/
/*         {{ assets.js()|raw }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* </head>*/
/* {% block body %}*/
/* <body class="{{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }}">*/
/*     {% block page %}*/
/*     <div class="remodal-bg">*/
/* */
/*         {% block navigation %}*/
/*             {% include 'partials/nav.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         <main id="admin-main" >*/
/*             {% include 'partials/nav-toggle.html.twig' %}*/
/*             <div id="titlebar" class="titlebar">*/
/*                 {% block titlebar %}{% endblock %}*/
/*             </div>*/
/* */
/*             <div class="grav-update" data-gpm-grav>*/
/*             </div>*/
/* */
/*             <div class="content-wrapper">*/
/*                 <div class="content-padding">*/
/*                     {% block widgets %}{% endblock %}*/
/*                     <div class="default-box-shadow">*/
/*                         {% block messages %}*/
/*                         {% include 'partials/messages.html.twig' %}*/
/*                         {% endblock %}*/
/*                         {% block content_top %}{% endblock %}*/
/*                         <div class="admin-block">*/
/*                             {% block content %}{% endblock %}*/
/*                         </div>*/
/*                         {% if config.plugins.admin.show_github_msg %}*/
/*                         <div class="notice alert"><i class="fa fa-github"></i> <a href="https://github.com/getgrav/grav-plugin-admin/issues" target="_blank">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>*/
/*                         {% endif %}*/
/*                         {% block content_bottom %}{% endblock %}*/
/*                     </div>*/
/*                      <footer id="footer">*/
/*                          <a href="http://getgrav.org">Grav</a> v<span class="grav-version">{{ constant('GRAV_VERSION') }}</span> - Admin v{{ admin_version }} - {{ "PLUGIN_ADMIN.WAS_MADE_WITH"|tu|lower }} <i class="fa fa-heart"></i> {{ "PLUGIN_ADMIN.BY"|tu|lower }} <a href="http://www.rockettheme.com">RocketTheme</a>.*/
/*                     </footer>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </main>*/
/*         <div id='overlay'></div>*/
/*     </div>*/
/*     {% endblock page %}*/
/* </body>*/
/* {% endblock body %}*/
/* </html>*/
/* */
