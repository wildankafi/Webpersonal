<?php

/* partials/navigation.html.twig */
class __TwigTemplate_3d121724bd8435556e9c121a9d42a5f892b8ad561e77e214eae1007d7ae4f63e extends Twig_Template
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
        echo "<nav class=\"nav\">
    <ul class=\"nav-list\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 5
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 6
                echo "                <li class=\"nav-item ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                    <a class=\"pure-button\" href=\"";
                // line 7
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 8
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </a>
                </li>
            ";
            }
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 14
            echo "            <li class=\"nav-item\">
                <a class=\"pure-button\" href=\"";
            // line 15
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
</nav>          ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  63 => 15,  60 => 14,  55 => 13,  49 => 12,  42 => 8,  38 => 7,  33 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav class="nav">*/
/*     <ul class="nav-list">*/
/*     {% for page in pages.children %}*/
/*         {% if page.visible %}*/
/*             {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*                 <li class="nav-item {{ current_page }}">*/
/*                     <a class="pure-button" href="{{ page.url }}">*/
/*                         {{ page.menu }}*/
/*                     </a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% for mitem in site.menu %}*/
/*             <li class="nav-item">*/
/*                 <a class="pure-button" href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </nav>          */
