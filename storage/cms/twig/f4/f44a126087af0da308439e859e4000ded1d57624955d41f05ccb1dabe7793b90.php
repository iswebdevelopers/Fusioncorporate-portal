<?php

/* E:\inetpub\FRB/themes/Fusion/partials/calcresult.htm */
class __TwigTemplate_308aa1e2efdafaea6f418f36681b83836980c98a87ed4d6719bbcaa1949bd6c2 extends Twig_Template
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
        echo "<p class=\"alert alert-";
        echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "E:\\inetpub\\FRB/themes/Fusion/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p class="alert alert-{{ level }}">{{ msg }}</p>*/
