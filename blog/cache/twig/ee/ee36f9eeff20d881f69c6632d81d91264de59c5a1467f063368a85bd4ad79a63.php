<?php

/* default.html.twig */
class __TwigTemplate_09c1a1860757d4055727424d2aa6a78cabbd4e398a6d76de8b4a1eb585d56c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"posts\">
                <h1 class=\"content-subhead\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
<section class=\"post\">
  <header class=\"post-header\">
    <h2 class=\"post-title\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>\t
 </header>
        ";
        // line 9
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 10
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        } else {
            // line 12
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        }
        // line 14
        echo "   ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
</section>
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 12,  47 => 10,  45 => 9,  40 => 7,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <div class="posts">*/
/*                 <h1 class="content-subhead">{{ page.header.title }}</h1>*/
/* <section class="post">*/
/*   <header class="post-header">*/
/*     <h2 class="post-title">{{ page.header.title }}</h2>	*/
/*  </header>*/
/*         {% if big_header %}*/
/*             {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}*/
/*         {% else %}*/
/*             {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}*/
/*         {% endif %}*/
/*    {{ page.content}}*/
/* </section>*/
/* </div>*/
/* {% endblock %}*/
/* */
