<?php

/* custom_navigation_type_first.html */
class __TwigTemplate_18c017f9a404feccdf75d7fc0b2c81fb86f97a99e465308f0cceb1c2fb90f5d7 extends Twig_Template
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
        echo "<header id=\"page-header-a\" class=\"wrap\">
\t<a id=\"top\" accesskey=\"t\"></a>
\t<a id=\"wrap\"></a>
\t<div id=\"logo\">
\t\t<a href=\"";
        // line 5
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\">";
        echo (isset($context["SITE_LOGO_IMG"]) ? $context["SITE_LOGO_IMG"] : null);
        echo "</a>
\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>

\t<nav id=\"page-nav\">
\t\t<ul>
\t\t\t";
        // line 11
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_NAVIGATION", array())) {
            // line 12
            echo "\t\t\t\t";
            $location = "custom_navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_navigation.html", "custom_navigation_type_first.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 13
            echo "\t\t\t";
        }
        // line 14
        echo "\t\t</ul>
\t</nav>

\t<div class=\"rmenu\" onclick=\"open_menu('nav-menu');\"><i class=\"fa fa-bars\"></i></div>

\t<ul id=\"nav-menu\">
\t\t";
        // line 20
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_NAVIGATION", array())) {
            // line 21
            echo "\t\t\t";
            $location = "custom_navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_navigation.html", "custom_navigation_type_first.html", 21)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 22
            echo "\t\t";
        }
        // line 23
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 24
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 25
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a>
\t\t</li>
\t\t";
        }
        // line 28
        echo "\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 29
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 30
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a>
\t\t</li>
\t\t";
        }
        // line 33
        echo "\t";
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
            // line 34
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 35
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a>
\t\t</li>
\t\t";
            // line 37
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 38
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 39
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PRIVATE_MESSAGE_INFO"]) ? $context["PRIVATE_MESSAGE_INFO"] : null);
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 42
            echo "\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 43
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 44
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 47
            echo "\t";
        }
        // line 48
        echo "\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 49
            echo "\t\t\t";
            if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 50
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 51
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>
\t\t\t</li>
\t\t\t";
            }
            // line 54
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 55
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>
\t\t\t</li>
\t\t";
        }
        // line 58
        echo "\t</ul>
</header>

<div id=\"user-menu-a\" class=\"wrap\">
\t";
        // line 62
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 63
            echo "\t<div id=\"page-search\">
\t\t<form action=\"";
            // line 64
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t\t<fieldset>
\t\t\t<input name=\"keywords\" class=\"keywords\" type=\"text\" maxlength=\"128\" title=\"";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\" />
\t\t\t<input value=\"&#xf002;\" class=\"button\" type=\"submit\" />
\t\t\t";
            // line 68
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t</fieldset>
\t\t</form>
\t</div>
\t";
        }
        // line 73
        echo "
\t<ul>
\t\t";
        // line 75
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 76
            echo "\t\t<li>
\t\t\t<a class=\"w-icon\" href=\"";
            // line 77
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" data-tooltip=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\"><i class=\"fa fa-tachometer\"></i></a>
\t\t</li>
\t\t";
        }
        // line 80
        echo "
\t\t";
        // line 81
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 82
            echo "\t\t<li>
\t\t\t<a class=\"w-icon\" href=\"";
            // line 83
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" data-tooltip=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\"><i class=\"fa fa-gavel\"></i></a>
\t\t</li>
\t\t";
        }
        // line 86
        echo "
\t";
        // line 87
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
            // line 88
            echo "\t\t<li>
\t\t\t<a class=\"w-icon\" href=\"";
            // line 89
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\" data-tooltip=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\"><i class=\"fa fa-user\"></i></a>
\t\t</li>
\t\t";
            // line 91
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 92
                echo "\t\t<li>
\t\t\t<a class=\"w-icon\" href=\"";
                // line 93
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\"><i class=\"fa fa-envelope\"></i>
\t\t\t";
                // line 94
                if ((isset($context["S_NEW_PM"]) ? $context["S_NEW_PM"] : null)) {
                    // line 95
                    echo "\t\t\t\t<span>";
                    echo (isset($context["PRIVATE_MESSAGE_INFO"]) ? $context["PRIVATE_MESSAGE_INFO"] : null);
                    echo "</span>
\t\t\t";
                } elseif (                // line 96
(isset($context["PRIVATE_MESSAGE_INFO_UNREAD"]) ? $context["PRIVATE_MESSAGE_INFO_UNREAD"] : null)) {
                    // line 97
                    echo "\t\t\t\t<span class=\"hid\">";
                    echo (isset($context["PRIVATE_MESSAGE_INFO_UNREAD"]) ? $context["PRIVATE_MESSAGE_INFO_UNREAD"] : null);
                    echo "</span>
\t\t\t";
                }
                // line 99
                echo "\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 102
            echo "\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 103
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 104
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 107
            echo "\t";
        }
        // line 108
        echo "\t\t
\t\t";
        // line 109
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 110
            echo "\t\t\t";
            if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 111
                echo "\t\t\t<li>
\t\t\t\t<a class=\"w-icon-text\" href=\"";
                // line 112
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\"><i class=\"fa fa-check-square-o\"></i><span>";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</span></a>
\t\t\t</li>
\t\t\t";
            }
            // line 115
            echo "\t\t\t";
            if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 116
                echo "\t\t\t<li>
\t\t\t\t<a class=\"w-icon-text\" href=\"";
                // line 117
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "\" accesskey=\"x\"><i class=\"fa fa-sign-in\"></i><span>";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</span></a>
\t\t\t</li>
\t\t\t";
            }
            // line 120
            echo "\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 121
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 122
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "\" accesskey=\"x\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a>
\t\t\t</li>
\t\t\t";
            }
            // line 125
            echo "\t\t";
        }
        // line 126
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "custom_navigation_type_first.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 126,  366 => 125,  356 => 122,  353 => 121,  350 => 120,  340 => 117,  337 => 116,  334 => 115,  326 => 112,  323 => 111,  320 => 110,  318 => 109,  315 => 108,  312 => 107,  304 => 104,  301 => 103,  298 => 102,  293 => 99,  287 => 97,  285 => 96,  280 => 95,  278 => 94,  274 => 93,  271 => 92,  269 => 91,  260 => 89,  257 => 88,  255 => 87,  252 => 86,  244 => 83,  241 => 82,  239 => 81,  236 => 80,  228 => 77,  225 => 76,  223 => 75,  219 => 73,  211 => 68,  204 => 66,  199 => 64,  196 => 63,  194 => 62,  188 => 58,  178 => 55,  175 => 54,  167 => 51,  164 => 50,  161 => 49,  158 => 48,  155 => 47,  147 => 44,  144 => 43,  141 => 42,  133 => 39,  130 => 38,  128 => 37,  119 => 35,  116 => 34,  113 => 33,  105 => 30,  102 => 29,  99 => 28,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  69 => 21,  67 => 20,  59 => 14,  56 => 13,  43 => 12,  41 => 11,  33 => 6,  25 => 5,  19 => 1,);
    }
}
