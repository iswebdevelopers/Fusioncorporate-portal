<?php

/* E:\inetpub\FRB/themes/Fusion/pages/blog.htm */
class __TwigTemplate_5758dc421bdabb4da0e2c6ba0ed6fc8a178b335cc9d23f421565ee22c8caf5f3 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    </div>
    <div class=\"col-md-4\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/categories"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-md-8">*/
/*         {% partial 'blog/posts' %}*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         {% partial 'blog/categories' %}*/
/*     </div>*/
/* </div>*/
