<?php

/* addons/call_to_action_body.html */
class __TwigTemplate_b8ecacc5237af52e6a2bffe4d810f41aeddd64787d334523b5ae59564b7f154d extends Twig_Template
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
        echo "<div class=\"mastbottom\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t      <p class=\"call-to-action\">";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("CALL_TO_ACTION_FOOTER");
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t  <a href=\"http://goo.gl/LvmwlF\" class=\"btn btn-xl btn-danger pull-right\" title=\"\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("PURCHASE_NOW_BTN");
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/call_to_action_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  25 => 5,  19 => 1,);
    }
}
