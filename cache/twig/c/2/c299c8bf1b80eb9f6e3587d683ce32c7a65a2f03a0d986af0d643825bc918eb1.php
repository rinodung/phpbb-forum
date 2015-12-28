<?php

/* jumpbox.html */
class __TwigTemplate_c299c8bf1b80eb9f6e3587d683ce32c7a65a2f03a0d986af0d643825bc918eb1 extends Twig_Template
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
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box ";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO");
            echo " ";
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "</a>
";
        } elseif (        // line 4
(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box ";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a>
";
        } elseif (        // line 6
(isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p><a class=\"left-box ";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO");
            echo ": ";
            echo (isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null);
            echo "</a>
";
        } elseif (        // line 8
(isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<a class=\"left-box ";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_SEARCH_ADV");
            echo "</a>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "\t<form method=\"post\" id=\"jumpbox\" action=\"";
            echo (isset($context["S_JUMPBOX_ACTION"]) ? $context["S_JUMPBOX_ACTION"] : null);
            echo "\" onsubmit=\"if(this.f.value == -1){return false;}\">

\t";
            // line 15
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS", array())) {
                // line 16
                echo "\t\t<fieldset class=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS", array());
                echo "\">
\t";
            } else {
                // line 18
                echo "\t\t<fieldset>
\t";
            }
            // line 20
            echo "\t\t\t<label for=\"f\" accesskey=\"j\">";
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo ":</label><select name=\"f\" id=\"f\" onchange=\"if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }\">
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "S_FORUM_COUNT", array()) == 1)) {
                    echo "<option value=\"-1\">------------------</option>";
                }
                // line 23
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array());
                echo "\"";
                echo $this->getAttribute($context["jumpbox_forums"], "SELECTED", array());
                echo ">";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    echo "&nbsp; &nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t</select><input type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t\t</fieldset>
\t</form>
\t<div class=\"clear\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 25,  118 => 23,  113 => 22,  109 => 21,  98 => 20,  94 => 18,  88 => 16,  86 => 15,  80 => 13,  78 => 12,  75 => 11,  63 => 9,  61 => 8,  50 => 7,  48 => 6,  37 => 5,  35 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
