<?php

/* blog.html.twig */
class __TwigTemplate_f5f6838091c3c4d2ea8848841faa8bdf8591ef83cf9302bd136edd8d4dda6002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1757664934")->display($context);
        // line 77
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 77,  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_f5f6838091c3c4d2ea8848841faa8bdf8591ef83cf9302bd136edd8d4dda6002_1757664934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
            // line 4
            $context["author"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
        } else {
            // line 6
            $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array()), 0, array(), "array");
        }
        // line 8
        if ((isset($context["author"]) ? $context["author"] : null)) {
            // line 9
            $context["avatar"] = twig_lower_filter($this->env, twig_replace_filter((isset($context["author"]) ? $context["author"] : null), " ", "-"));
        }
        // line 12
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 13
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 14
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 16
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 17
            $context["base_url"] = "";
        }
        // line 20
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 21
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
            // line 26
            echo "    <div class=\"posts\">
                <h1 class=\"content-subhead\">Popular Post</h1>

";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "hits", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 30
                echo "                                ";
                $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                // line 31
                echo "                                    <!-- Mini Post -->
                                  <section class=\"post\">
                                       <header class=\"post-header\">
                                              ";
                // line 34
                if ((isset($context["author"]) ? $context["author"] : null)) {
                    // line 35
                    echo "                                              <img class=\"post-avatar\" alt=\"";
                    echo (isset($context["author"]) ? $context["author"] : null);
                    echo "\" height=\"48\" width=\"48\" src=\"";
                    echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                    echo "/images/";
                    echo (isset($context["avatar"]) ? $context["avatar"] : null);
                    echo ".jpg\">
                                              ";
                }
                // line 37
                echo "                                              <h2 class=\"post-title\"><a href=\"";
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></h2>
                                              <p class=\"post-meta\">
                            ";
                // line 39
                if ((isset($context["author"]) ? $context["author"] : null)) {
                    // line 40
                    echo "                            By <a href=\"";
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"post-author\">";
                    echo (isset($context["author"]) ? $context["author"] : null);
                    echo "</a>
                            ";
                }
                // line 42
                echo "                             on <time class=\"published\" datetime=\"";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
                echo "</time> under 
                             ";
                // line 43
                if ($this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array())) {
                    // line 44
                    echo "                             ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 45
                        echo "                             <a class=\"post-category post-category-";
                        echo twig_lower_filter($this->env, $context["tag"]);
                        echo "\" href=\"";
                        echo (isset($context["base_url"]) ? $context["base_url"] : null);
                        echo "/tag";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                        echo $context["tag"];
                        echo "\">";
                        echo $context["tag"];
                        echo "</a> 
                             ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                             ";
                }
                // line 48
                echo "                           </p> </header>
                    <div class=\"post-description\">
                        <p>";
                // line 50
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "description", array());
                echo "</p>
                             <ul class=\"actions\">
                                <li><a href=\"";
                // line 52
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" class=\"pure-button\">Continue Reading</a></li>
                            </ul>

             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </div>
     ";
        }
        // line 58
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array()) && ((isset($context["base_url"]) ? $context["base_url"] : null) != ""))) {
            // line 59
            echo "      ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 59)->display($context);
            // line 60
            echo "    ";
        }
        // line 61
        echo "    <div class=\"posts\">
                <h1 class=\"content-subhead\">Recent Posts</h1>


    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "      ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 66)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 67
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
    ";
        // line 69
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 70
            echo "      ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 70)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 71
            echo "    ";
        }
        // line 72
        echo "    </div>

  ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 72,  264 => 71,  261 => 70,  259 => 69,  256 => 68,  242 => 67,  239 => 66,  222 => 65,  216 => 61,  213 => 60,  210 => 59,  207 => 58,  203 => 56,  193 => 52,  188 => 50,  184 => 48,  181 => 47,  165 => 45,  160 => 44,  158 => 43,  151 => 42,  143 => 40,  141 => 39,  133 => 37,  123 => 35,  121 => 34,  116 => 31,  113 => 30,  109 => 29,  104 => 26,  101 => 25,  98 => 24,  94 => 1,  91 => 21,  89 => 20,  86 => 17,  84 => 16,  82 => 14,  80 => 13,  78 => 12,  75 => 9,  73 => 8,  70 => 6,  67 => 4,  65 => 3,  51 => 1,  21 => 77,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% if page.header.author %}*/
/* {% set author =  page.header.author %}*/
/* {% else %}*/
/* {% set author =  page.header.taxonomy.author[0] %}*/
/* {% endif %}*/
/* {% if author %}*/
/* {% set avatar = author|replace(' ', '-')|lower %}*/
/* {% endif %}*/
/* */
/*   {% set collection = page.collection() %}*/
/*   {% set base_url = page.url %}*/
/*   {% set feed_url = base_url %}*/
/* */
/*   {% if base_url == '/' %}*/
/*     {% set base_url = '' %}*/
/*   {% endif %}*/
/* */
/*   {% if base_url == base_url_relative %}*/
/*     {% set feed_url = base_url~'/'~page.slug %}*/
/*   {% endif  %}*/
/* */
/*   {% block content %}*/
/*     {% if base_url == '' %}*/
/*     <div class="posts">*/
/*                 <h1 class="content-subhead">Popular Post</h1>*/
/* */
/* {% for p in page.find('/blog').children.order('hits', 'desc').slice(0, 1) %}*/
/*                                 {% set bannerimage = p.media.images|first %}*/
/*                                     <!-- Mini Post -->*/
/*                                   <section class="post">*/
/*                                        <header class="post-header">*/
/*                                               {% if author %}*/
/*                                               <img class="post-avatar" alt="{{ author }}" height="48" width="48" src="{{ theme_url }}/images/{{avatar}}.jpg">*/
/*                                               {% endif %}*/
/*                                               <h2 class="post-title"><a href="{{ p.url }}">{{ p.title }}</a></h2>*/
/*                                               <p class="post-meta">*/
/*                             {% if author %}*/
/*                             By <a href="{{ p.url }}" class="post-author">{{ author }}</a>*/
/*                             {% endif %}*/
/*                              on <time class="published" datetime="{{p.date|date("Y-m-d")}}">{{ p.date|date("M j, Y")}}</time> under */
/*                              {% if p.taxonomy.tag %}*/
/*                              {% for tag in p.taxonomy.tag %}*/
/*                              <a class="post-category post-category-{{ tag|lower }}" href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a> */
/*                              {% endfor %}*/
/*                              {% endif %}*/
/*                            </p> </header>*/
/*                     <div class="post-description">*/
/*                         <p>{{ p.header.description }}</p>*/
/*                              <ul class="actions">*/
/*                                 <li><a href="{{ p.url }}" class="pure-button">Continue Reading</a></li>*/
/*                             </ul>*/
/* */
/*              {% endfor %}*/
/*     </div>*/
/*      {% endif %}*/
/*     {% if config.plugins.breadcrumbs.enabled and base_url != ''%}*/
/*       {% include 'partials/breadcrumbs.html.twig' %}*/
/*     {% endif %}*/
/*     <div class="posts">*/
/*                 <h1 class="content-subhead">Recent Posts</h1>*/
/* */
/* */
/*     {% for child in collection %}*/
/*       {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}*/
/*     {% endfor %}*/
/* */
/*     {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*       {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*   {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
/* */
/* */
