<?php

/* message_body.html */
class __TwigTemplate_84e0a5752f7f161e351f745b97785dc90aa05f1195afedcc2402597adbf62870 extends Twig_Template
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
        if ((isset($context["S_SIMPLE_MESSAGE"]) ? $context["S_SIMPLE_MESSAGE"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "message_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 4
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "message_body.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 5
            echo "\t<div id=\"page-body\" class=\"wrap\">
";
        }
        // line 7
        echo "
<div class=\"panel\" id=\"message\">
\t<div class=\"content\">
\t<h2>";
        // line 10
        echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
        echo "</h2>
\t<p>";
        // line 11
        echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
        echo "</p>
\t";
        // line 12
        if ((((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "search") &&  !(isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null)) &&  !(isset($context["S_NO_SEARCH"]) ? $context["S_NO_SEARCH"] : null)) && (isset($context["L_RETURN_TO_SEARCH_ADV"]) ? $context["L_RETURN_TO_SEARCH_ADV"] : null))) {
            echo "<p><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_SEARCH_ADV");
            echo "</a></p>";
        }
        // line 13
        echo "\t</div>
</div>

";
        // line 16
        if ((isset($context["S_SIMPLE_MESSAGE"]) ? $context["S_SIMPLE_MESSAGE"] : null)) {
            // line 17
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "message_body.html", 17)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 19
            echo "\t</div>
\t";
            // line 20
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "message_body.html", 20)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "message_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  96 => 19,  82 => 17,  80 => 16,  75 => 13,  65 => 12,  61 => 11,  57 => 10,  52 => 7,  48 => 5,  35 => 4,  21 => 2,  19 => 1,);
    }
}
