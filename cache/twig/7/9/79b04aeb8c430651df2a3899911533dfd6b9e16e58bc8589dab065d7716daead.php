<?php

/* custom_sidebar.html */
class __TwigTemplate_79b04aeb8c430651df2a3899911533dfd6b9e16e58bc8589dab065d7716daead extends Twig_Template
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
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 2
            echo "<form method=\"post\" action=\"";
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\">
<div class=\"mono-block\">
\t<div class=\"mono-block-header\">
\t<h3><a href=\"";
            // line 5
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t</div>
\t<div class=\"mono-block-content\">
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo ":</label><input type=\"text\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" />
\t\t\t<label for=\"password\">";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo ":</label><input type=\"password\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" />
\t\t\t<div class=\"btn btn-big\">
\t\t\t\t<input type=\"submit\" name=\"login\" value=\"";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" />
\t\t\t</div>
\t\t\t";
            // line 14
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t</fieldset>
\t</div>
</div>
</form>
";
        }
        // line 20
        echo "
<div class=\"secondary-block\">
\t<div class=\"secondary-block-header\">
\t\t<h3>
\t\t\tWelcome on ";
        // line 24
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "
\t\t</h3>
\t</div>
\t<div class=\"secondary-block-content\">
\t\tYour message
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "custom_sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  72 => 20,  63 => 14,  58 => 12,  51 => 10,  45 => 9,  28 => 5,  21 => 2,  19 => 1,);
    }
}
