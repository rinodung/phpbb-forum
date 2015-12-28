<?php

/* forumlist_body.html */
class __TwigTemplate_7791bfc4bca5b029f17465e2613ba3c82feb1bda3bb957e079495a5ca07ab228 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 7
            echo "
\t";
            // line 8
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 9
                echo "\t\t<div class=\"forabg\">
\t\t\t<ul class=\"forabg-header\">
\t\t\t\t<li>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t";
                // line 14
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    // line 15
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t</dt>
\t\t\t\t\t\t<dd class=\"topics-posts\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo " / ";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"forabg-content\">
\t";
            }
            // line 26
            echo "
\t";
            // line 27
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 28
                echo "\t\t<li>
\t\t\t<dl class=\"icon\" style=\"background-image: url(";
                // line 29
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_SRC", array());
                echo ");\">
\t\t\t\t<dt title=\"";
                // line 30
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t";
                // line 31
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" /></a> -->";
                }
                // line 32
                echo "
\t\t\t\t\t";
                // line 33
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 34
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />
\t\t\t\t\t";
                // line 35
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 37
                    echo "\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo ":</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["forumrow"], "SUBFORUMS", array()) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    echo "<br /><i class=\"fa fa-folder-open-o\"></i> ";
                    echo $this->getAttribute($context["forumrow"], "SUBFORUMS", array());
                }
                // line 40
                echo "\t\t\t\t</dt>
\t\t\t\t";
                // line 41
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 42
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo ": ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 43
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 44
                    echo "\t\t\t\t\t<dd class=\"topics-posts\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</dfn> / ";
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 46
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn> ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t";
                        // line 48
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\"><i class=\"fa  fa-chevron-right\"></i></a> ";
                        }
                        echo "<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 51
                echo "\t\t\t</dl>
\t\t</li>
\t";
            }
            // line 54
            echo "
\t";
            // line 55
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 56
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 59
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t<div class=\"panel\">
\t\t<strong>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 62,  232 => 61,  226 => 59,  221 => 56,  219 => 55,  216 => 54,  211 => 51,  195 => 48,  184 => 47,  176 => 46,  164 => 44,  162 => 43,  155 => 42,  153 => 41,  150 => 40,  144 => 39,  136 => 37,  134 => 36,  130 => 35,  123 => 34,  117 => 33,  114 => 32,  96 => 31,  92 => 30,  88 => 29,  85 => 28,  83 => 27,  80 => 26,  71 => 20,  65 => 19,  62 => 18,  56 => 16,  49 => 15,  47 => 14,  40 => 9,  38 => 8,  35 => 7,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
