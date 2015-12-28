<?php

/* custom_settings.html */
class __TwigTemplate_f1a8703aab0860bfc79354bd68d8d1245012b99a1bcfd2d0e6e88092fed615ce extends Twig_Template
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
        echo "
";
        // line 2
        $value = 1;
        $context['definition']->set('CUSTOM_NAVIGATION_TYPE', $value);
        // line 3
        $value = 1;
        $context['definition']->set('CUSTOM_NAVIGATION', $value);
        // line 4
        $value = 1;
        $context['definition']->set('CUSTOM_FOOTER', $value);
        // line 5
        $value = 1;
        $context['definition']->set('CUSTOM_FOOTER_BLOCKS', $value);
        // line 6
        $value = 1;
        $context['definition']->set('CUSTOM_SIDEBAR', $value);
    }

    public function getTemplateName()
    {
        return "custom_settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
