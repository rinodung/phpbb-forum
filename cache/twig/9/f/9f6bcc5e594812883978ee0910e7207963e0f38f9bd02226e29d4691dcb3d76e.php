<?php

/* index_body.html */
class __TwigTemplate_9f6bcc5e594812883978ee0910e7207963e0f38f9bd02226e29d4691dcb3d76e extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 4
            echo "<div id=\"second-menu\">
<div class=\"wrap\">
<ul>
\t";
            // line 7
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 8
                echo "\t<li>
\t\t<a href=\"";
                // line 9
                echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
                echo "</a>
\t</li>
\t";
                // line 11
                if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                    // line 12
                    echo "\t<li>
\t\t<a href=\"";
                    // line 13
                    echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                    echo "</a>
\t</li>
\t";
                }
                // line 16
                echo "\t";
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 17
                    echo "\t<li>
\t\t<a href=\"";
                    // line 18
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a>
\t</li>
\t";
                }
                // line 21
                echo "\t<li>
\t\t<a href=\"";
                // line 22
                echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a>
\t</li>
\t";
            }
            // line 25
            echo "\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 26
                echo "\t<li class=\"right\">
\t\t<a href=\"";
                // line 27
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
                echo "</a>
\t</li>
\t";
            }
            // line 30
            echo "\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
                // line 31
                echo "\t<li class=\"right\">
\t\t<a href=\"";
                // line 32
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a>
\t</li>
\t";
            }
            // line 35
            echo "</ul>
</div>
</div>
";
        }
        // line 39
        echo "
<div id=\"page-body\" class=\"wrap\">

";
        // line 42
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_SIDEBAR", array())) {
            // line 43
            echo "\t<div class=\"c-wrap\">
\t\t<div class=\"c8\">
\t\t\t";
            // line 45
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "index_body.html", 45)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 47
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "index_body.html", 47)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 49
        echo "
";
        // line 50
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 51
            echo "<div class=\"secondary-block\">
\t<div class=\"secondary-block-header\">
\t\t";
            // line 53
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                // line 54
                echo "\t\t<h3>
\t\t\t<a href=\"";
                // line 55
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>
\t\t</h3>
\t\t";
            } else {
                // line 58
                echo "\t\t<h3>
\t\t\t";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "
\t\t</h3>
\t\t";
            }
            // line 62
            echo "\t</div>
\t<div class=\"secondary-block-content\">
\t\t<p>
\t\t\t";
            // line 65
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> <br />";
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "
\t\t\t";
            // line 66
            if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                // line 67
                echo "\t\t\t<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo ": ";
                echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                echo "</em>
\t\t\t";
            }
            // line 69
            echo "\t\t</p>
\t</div>
</div>
";
        }
        // line 73
        echo "
";
        // line 74
        if (((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null) && (isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null))) {
            // line 75
            echo "<div class=\"secondary-block\">
\t<div class=\"secondary-block-header\">
\t\t<h3>
\t\t\t";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "
\t\t</h3>
\t</div>
\t<div class=\"secondary-block-content\">
\t\t<p>
\t\t\t";
            // line 83
            if ((isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo ": <strong>";
                echo (isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null);
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 84
            echo "\t\t</p>
\t</div>
</div>
";
        }
        // line 88
        echo "
";
        // line 89
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 90
            echo "<div class=\"secondary-block\">
\t<div class=\"secondary-block-header\">
\t\t<h3>
\t\t\t";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "
\t\t</h3>
\t</div>
\t<div class=\"secondary-block-content\">
\t\t<p>
\t\t\t";
            // line 98
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t</p>
\t</div>
</div>
";
        }
        // line 103
        echo "
";
        // line 104
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_SIDEBAR", array())) {
            // line 105
            echo "\t\t</div>

\t\t<div class=\"c2\">
\t\t\t";
            // line 108
            $location = "custom_sidebar.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom_sidebar.html", "index_body.html", 108)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 109
            echo "\t\t</div>
\t</div>
";
        }
        // line 112
        echo "

</div>

";
        // line 116
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 116)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 116,  317 => 112,  312 => 109,  300 => 108,  295 => 105,  293 => 104,  290 => 103,  276 => 98,  268 => 93,  263 => 90,  261 => 89,  258 => 88,  252 => 84,  243 => 83,  235 => 78,  230 => 75,  228 => 74,  225 => 73,  219 => 69,  211 => 67,  209 => 66,  199 => 65,  194 => 62,  188 => 59,  185 => 58,  177 => 55,  174 => 54,  172 => 53,  168 => 51,  166 => 50,  163 => 49,  149 => 47,  136 => 45,  132 => 43,  130 => 42,  125 => 39,  119 => 35,  111 => 32,  108 => 31,  105 => 30,  97 => 27,  94 => 26,  91 => 25,  83 => 22,  80 => 21,  72 => 18,  69 => 17,  66 => 16,  58 => 13,  55 => 12,  53 => 11,  46 => 9,  43 => 8,  41 => 7,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
