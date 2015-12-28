<?php

/* custom_navigation.html */
class __TwigTemplate_7255f7c01a6adac69078b25ffb01786c3777767ecad1b443fa34e659ea25b12c extends Twig_Template
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
        echo "<li>
\t<a href=\"";
        // line 2
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\">Rules</a>
</li>
<li>
\t<a href=\"";
        // line 5
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\">Drop Down</a>
\t<ul>
\t\t<li>
\t\t\t<a href=\"";
        // line 8
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\">First Item</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 11
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\">Second Item</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 14
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\">Third Item</a>
\t\t</li>
\t</ul>
</li>
";
        // line 18
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null))) {
            // line 19
            echo "<li>
\t<a href=\"";
            // line 20
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a>
</li>
";
        }
        // line 23
        echo "<li>
\t<a href=\"";
        // line 24
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "custom_navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  78 => 23,  68 => 20,  65 => 19,  63 => 18,  54 => 14,  46 => 11,  38 => 8,  30 => 5,  22 => 2,  19 => 1,);
    }
}
