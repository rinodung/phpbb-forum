<?php

/* overall_header.html */
class __TwigTemplate_706f901dfe08db6094086c3ca499183737eb66afc8da59391321b5fef2f109da extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\" xml:lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>

<meta http-equiv=\"content-type\" content=\"text/html; charset=";
        // line 5
        echo (isset($context["S_CONTENT_ENCODING"]) ? $context["S_CONTENT_ENCODING"] : null);
        echo "\" />
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
";
        // line 7
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 8
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " &bull; ";
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " &bull; ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " &bull; ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

";
        // line 10
        $location = "custom_settings.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom_settings.html", "overall_header.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\" />";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\" />";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\" />";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\" />";
            }
            // line 17
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\" />";
            }
            // line 18
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\" />";
            }
            // line 19
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\" />";
            }
        }
        // line 21
        echo "
<!--
\tStyle name:\t\t\tAriki
\tBased on style:\t\tprosilver (the default phpBB 3.0.x style)
\tOriginal author:\tGramziu
\tModified by:\t\t
-->

<script>
// <![CDATA[
\tvar jump_page = '";
        // line 31
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo ":';
\tvar on_page = '";
        // line 32
        echo (isset($context["ON_PAGE"]) ? $context["ON_PAGE"] : null);
        echo "';
\tvar per_page = '";
        // line 33
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "';
\tvar base_url = '";
        // line 34
        echo (isset($context["A_BASE_URL"]) ? $context["A_BASE_URL"] : null);
        echo "';
\tvar style_cookie = 'phpBBstyle';
\tvar style_cookie_settings = '";
        // line 36
        echo (isset($context["A_COOKIE_SETTINGS"]) ? $context["A_COOKIE_SETTINGS"] : null);
        echo "';
\tvar onload_functions = new Array();
\tvar onunload_functions = new Array();

\t";
        // line 40
        if (((isset($context["S_USER_PM_POPUP"]) ? $context["S_USER_PM_POPUP"] : null) && (isset($context["S_NEW_PM"]) ? $context["S_NEW_PM"] : null))) {
            // line 41
            echo "\t\tvar url = '";
            echo (isset($context["UA_POPUP_PM"]) ? $context["UA_POPUP_PM"] : null);
            echo "';
\t\twindow.open(url.replace(/&amp;/g, '&'), '_phpbbprivmsg', 'height=225,resizable=yes,scrollbars=yes, width=400');
\t";
        }
        // line 44
        echo "
\t/**
\t* Find a member
\t*/
\tfunction find_username(url)
\t{
\t\tpopup(url, 760, 570, '_usersearch');
\t\treturn false;
\t}

\t/**
\t* New function for handling multiple calls to window.onload and window.unload by pentapenguin
\t*/
\twindow.onload = function()
\t{
\t\tfor (var i = 0; i < onload_functions.length; i++)
\t\t{
\t\t\teval(onload_functions[i]);
\t\t}
\t};

\twindow.onunload = function()
\t{
\t\tfor (var i = 0; i < onunload_functions.length; i++)
\t\t{
\t\t\teval(onunload_functions[i]);
\t\t}
\t};

\t/**
\t* Open menu for phones and tablets
\t*/
\tfunction open_menu(id) {
\t\tvar open_menu_link = document.getElementById(id);
\t\tif(open_menu_link.style.display == 'block')
\t\t\topen_menu_link.style.display = 'none';
\t\telse
\t\t\topen_menu_link.style.display = 'block';
\t}
// ]]>
</script>
<script src=\"";
        // line 85
        echo (isset($context["T_SUPER_TEMPLATE_PATH"]) ? $context["T_SUPER_TEMPLATE_PATH"] : null);
        echo "/forum_fn.js\"></script>

<link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,700,700italic\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css\" rel=\"stylesheet\" />

<link href=\"";
        // line 90
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/print.css\" rel=\"stylesheet\" media=\"print\" title=\"printonly\" />
<link href=\"";
        // line 91
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\" media=\"screen, projection\" />

";
        // line 93
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 94
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css\" rel=\"stylesheet\" media=\"screen, projection\" />
";
        }
        // line 96
        echo "
</head>

<body id=\"phpbb\" class=\"section-";
        // line 99
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\">

";
        // line 101
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_NAVIGATION_TYPE", array()) == 1)) {
            // line 102
            echo "\t";
            $location = "custom_navigation_type_first.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_navigation_type_first.html", "overall_header.html", 102)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } elseif (($this->getAttribute(        // line 103
(isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_NAVIGATION_TYPE", array()) == 2)) {
            // line 104
            echo "\t";
            $location = "custom_navigation_type_second.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_navigation_type_second.html", "overall_header.html", 104)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } elseif (($this->getAttribute(        // line 105
(isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_NAVIGATION_TYPE", array()) == 3)) {
            // line 106
            echo "\t";
            $location = "custom_navigation_type_third.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_navigation_type_third.html", "overall_header.html", 106)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 108
        echo "
<main>
\t<a class=\"hidden\"></a>
\t";
        // line 111
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 112
            echo "\t<div id=\"board-disabled\" class=\"wrap\">
\t\t<strong>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo ":</strong>
\t\t";
            // line 114
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 114,  341 => 113,  338 => 112,  336 => 111,  331 => 108,  317 => 106,  315 => 105,  302 => 104,  300 => 103,  287 => 102,  285 => 101,  278 => 99,  273 => 96,  267 => 94,  265 => 93,  260 => 91,  256 => 90,  248 => 85,  205 => 44,  198 => 41,  196 => 40,  189 => 36,  184 => 34,  180 => 33,  176 => 32,  172 => 31,  160 => 21,  142 => 19,  127 => 18,  116 => 17,  105 => 16,  94 => 15,  83 => 14,  72 => 13,  70 => 12,  67 => 11,  55 => 10,  41 => 8,  37 => 7,  32 => 5,  22 => 2,  19 => 1,);
    }
}
