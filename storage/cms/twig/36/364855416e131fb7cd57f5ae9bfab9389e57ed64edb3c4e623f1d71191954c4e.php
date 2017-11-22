<?php

/* E:\inetpub\FRB/themes/Fusion/partials/blog/categories.htm */
class __TwigTemplate_758d6e765b3447bd5745c63cd2d795f8f5d61d1ba3aa76412e4b63322e9c1a33 extends Twig_Template
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
        $context["categories"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array());
        // line 2
        $context["currentCategorySlug"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "currentCategorySlug", array());
        // line 3
        echo "
<div class=\"list-group\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 7
            echo "        <a
            href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\"
            class=\"list-group-item ";
            // line 9
            echo ((($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) ? ("active") : (""));
            echo "\"
            >";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
            ";
            // line 11
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 12
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
            ";
            }
            // line 14
            echo "        </a> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/partials/blog/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  57 => 14,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set categories = blogCategories.categories %}*/
/* {% set currentCategorySlug = blogCategories.currentCategorySlug %}*/
/* */
/* <div class="list-group">*/
/*     {% for category in categories %}*/
/*         {% set postCount = category.post_count %}*/
/*         <a*/
/*             href="{{ category.url }}"*/
/*             class="list-group-item {{ category.slug == currentCategorySlug ? 'active' }}"*/
/*             >{{ category.name }}*/
/*             {% if postCount %}*/
/*                 <span class="badge">{{ postCount }}</span>*/
/*             {% endif %}*/
/*         </a> */
/*     {% endfor %}*/
/* </div>*/
