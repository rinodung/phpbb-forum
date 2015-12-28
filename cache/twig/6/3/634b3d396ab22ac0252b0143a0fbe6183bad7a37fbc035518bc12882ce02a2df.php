<?php

/* custom_footer_first.html */
class __TwigTemplate_634b3d396ab22ac0252b0143a0fbe6183bad7a37fbc035518bc12882ce02a2df extends Twig_Template
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
        echo "<footer id=\"page-footer-a\">
\t<div id=\"footer-menu\" class=\"wrap\">
\t\t<ul>
\t\t\t";
        // line 4
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 5
            echo "\t\t\t";
            if ((isset($context["S_WATCH_FORUM_LINK"]) ? $context["S_WATCH_FORUM_LINK"] : null)) {
                // line 6
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["S_WATCH_FORUM_LINK"]) ? $context["S_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\">";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "</a></li>";
            }
            // line 7
            echo "\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 8
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("WATCH_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WATCH_TOPIC");
                echo "</a></li>";
            }
            // line 9
            echo "\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 10
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "</a></li>";
            }
            // line 11
            echo "\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                // line 12
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 13
            echo "\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            // line 15
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 16
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a>
\t\t\t</li>
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 20
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 21
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a>
\t\t\t</li>
\t\t\t";
        }
        // line 24
        echo "\t\t\t<li class=\"right\">
\t\t\t\t<span>";
        // line 25
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</span>
\t\t\t</li>
\t\t</ul>
\t</div>

\t";
        // line 30
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FOOTER_BLOCKS", array())) {
            // line 31
            echo "\t\t<div class=\"hr-cfb\"></div>
\t\t";
            // line 32
            $location = "custom_footer_blocks.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_footer_blocks.html", "custom_footer_first.html", 32)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 33
            echo "\t";
        }
        // line 34
        echo "
\t<div class=\"copyright\">
\t\t<div class=\"wrap\">";
        // line 36
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t\t<br />Ariki Theme Created by Gramziu
\t\t\t";
        // line 38
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 39
        echo "\t\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 40
        echo "\t\t</div>

\t\t<div>
\t\t\t<a id=\"bottom\" accesskey=\"z\"></a>
\t\t\t";
        // line 44
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 45
        echo "\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "custom_footer_first.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 45,  162 => 44,  156 => 40,  150 => 39,  145 => 38,  140 => 36,  136 => 34,  133 => 33,  121 => 32,  118 => 31,  116 => 30,  108 => 25,  105 => 24,  97 => 21,  94 => 20,  91 => 19,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  65 => 12,  62 => 11,  53 => 10,  50 => 9,  41 => 8,  38 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
