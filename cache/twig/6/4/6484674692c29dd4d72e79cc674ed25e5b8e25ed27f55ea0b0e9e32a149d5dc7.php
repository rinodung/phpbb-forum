<?php

/* overall_footer.html */
class __TwigTemplate_6484674692c29dd4d72e79cc674ed25e5b8e25ed27f55ea0b0e9e32a149d5dc7 extends Twig_Template
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
        echo "</main>

";
        // line 3
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FOOTER", array()) == 1)) {
            // line 4
            echo "\t";
            $location = "custom_footer_first.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_footer_first.html", "overall_footer.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } elseif (($this->getAttribute(        // line 5
(isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FOOTER", array()) == 2)) {
            // line 6
            echo "\t";
            $location = "custom_footer_second.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_footer_second.html", "overall_footer.html", 6)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } elseif (($this->getAttribute(        // line 7
(isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FOOTER", array()) == 3)) {
            // line 8
            echo "\t";
            $location = "custom_footer_third.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_footer_third.html", "overall_footer.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 10
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  55 => 8,  53 => 7,  40 => 6,  38 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
