<?php

/* viewforum_body.html */
class __TwigTemplate_f860f26ebb733dfa68c8a85d9067a501b3b1b0ad695d90ec716b11bcd5fdec28 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 4
            echo "<div id=\"second-menu\">
<div class=\"wrap\">
\t<ul>
\t\t<li>
\t\t\t<a href=\"";
            // line 8
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" accesskey=\"h\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a>
\t\t</li>
\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 11
                echo "\t\t<li class=\"legend\">
\t\t\t<a href=\"";
                // line 12
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
\t\t";
            // line 16
            if ((((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || ((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)))) {
                // line 17
                echo "\t\t<li class=\"right\">
\t\t\t<a href=\"";
                // line 18
                echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                echo "\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 21
            echo "
\t\t";
            // line 22
            if (((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null) && (isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null))) {
                // line 23
                echo "\t\t<li class=\"right\">
\t\t\t<a href=\"";
                // line 24
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 27
            echo "\t</ul>
</div>
</div>
";
        }
        // line 31
        echo "
<div id=\"page-body\" class=\"wrap\">

<h2><a href=\"";
        // line 34
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a></h2>

";
        // line 36
        if ((((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null) || (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null))) {
            // line 37
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 39
            if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
                echo "<div style=\"display: none !important;\">";
                echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
                echo "<br /></div>";
            }
            // line 40
            echo "\t";
            if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
                echo "<p><strong>";
                if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo ":</strong> ";
                echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
                echo "</p>";
            }
            // line 41
            echo "</div>
";
        }
        // line 43
        echo "
";
        // line 44
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 45
            echo "\t<div class=\"info-block\">
\t\t";
            // line 46
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 47
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 49
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 50
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t";
            }
            // line 52
            echo "\t</div>
";
        }
        // line 54
        echo "
";
        // line 55
        if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 56
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 56)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 58
        echo "
";
        // line 59
        if (((((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || (isset($context["PAGINATION"]) ? $context["PAGINATION"] : null)) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 60
            echo "\t<div class=\"topic-actions\">

\t";
            // line 62
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 63
                echo "\t\t<div class=\"btn ";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo "btn-locked";
                } else {
                    echo "btn-post";
                }
                echo "\" title=\"";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t<a href=\"";
                // line 64
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\">";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo "<i class=\"fa fa-lock\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo "<i class=\"fa fa-reply\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                // line 65
                echo "\t\t\t</a>
\t\t</div>
\t";
            }
            // line 68
            echo "
\t";
            // line 69
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 70
                echo "\t\t<div class=\"search\">
\t\t\t<form method=\"get\" action=\"";
                // line 71
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input name=\"keywords\" class=\"keywords\" type=\"text\" size=\"20\" placeholder=\"";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<input value=\"&#xf002;\" class=\"button\" type=\"submit\" />
\t\t\t\t";
                // line 75
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 80
            echo "
\t";
            // line 81
            if ((((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
                // line 82
                echo "\t\t<div class=\"pagination\">
\t\t\t";
                // line 83
                if ((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null)) {
                    // line 84
                    echo "\t\t\t<span class=\"total\">";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</span>
\t\t\t";
                }
                // line 86
                echo "\t\t\t";
                if ((isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null)) {
                    // line 87
                    echo "\t\t\t";
                    if ((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null)) {
                        // line 88
                        echo "\t\t\t<a href=\"#\" onclick=\"jumpto(); return false;\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                        echo "\">";
                        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                        echo "</a>
\t\t\t<span class=\"count\">";
                        // line 89
                        echo (isset($context["PAGINATION"]) ? $context["PAGINATION"] : null);
                        echo "</span>
\t\t\t";
                    } else {
                        // line 91
                        echo "\t\t\t<span>";
                        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                        echo "</span>
\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t";
                }
                // line 94
                echo "\t\t</div>
\t";
            }
            // line 96
            echo "\t</div>
";
        }
        // line 98
        echo "
";
        // line 99
        if ((isset($context["S_NO_READ_ACCESS"]) ? $context["S_NO_READ_ACCESS"] : null)) {
            // line 100
            echo "
\t<div class=\"panel\">
\t\t<div class=\"content\">
\t\t\t<strong>";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 107
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 108
                echo "
\t\t<form action=\"";
                // line 109
                echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 113
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

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 117
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo ":</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 118
                echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 121
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo ":</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t\t";
                // line 123
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 124
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 128
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 130
                echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 138
            echo "
";
        }
        // line 140
        echo "
";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 142
            echo "
\t";
            // line 143
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 144
                echo "\t\t</ul>
\t</div>
\t";
            }
            // line 147
            echo "
\t";
            // line 148
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 149
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t<ul class=\"forumbg-header\">
\t\t\t<li>
\t\t\t\t<dl>
\t\t\t\t\t<dt>";
                // line 153
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                echo "</dt>
\t\t\t\t\t<dd class=\"posts-views\">";
                // line 154
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo " / ";
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\">";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"forumbg-content\">
\t";
            }
            // line 161
            echo "
\t\t<li class=\"row";
            // line 162
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t<dl class=\"icon\" style=\"background-image: url(";
            // line 163
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_SRC", array());
            echo "); background-repeat: no-repeat;\">
\t\t\t\t<dt";
            // line 164
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                echo " style=\"background-image: url(";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" class=\"new-post\"><i class=\"fa fa-file-o\"></i></a> ";
            }
            echo "<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t\t";
            // line 165
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a class=\"unapproved-link\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\"><i class=\"fa fa-question\"></i></a> ";
            }
            // line 166
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo "<a class=\"reported-link\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\"><i class=\"fa fa-exclamation\"></i></a>";
            }
            echo "<br />
\t\t\t\t\t";
            // line 167
            if ($this->getAttribute($context["topicrow"], "PAGINATION", array())) {
                echo "<strong class=\"pagination\"><span>";
                echo $this->getAttribute($context["topicrow"], "PAGINATION", array());
                echo "</span></strong>";
            }
            // line 168
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"fa fa-paperclip\"></i>";
            }
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts-views\">";
            // line 170
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dfn> / ";
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 171
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t";
            // line 172
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"><i class=\"fa fa-chevron-right\"></i></a> ";
            }
            echo "<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>

\t";
            // line 177
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 178
                echo "\t\t\t</ul>
\t</div>
\t";
            }
            // line 181
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 183
            echo "\t";
            if ((isset($context["S_IS_POSTABLE"]) ? $context["S_IS_POSTABLE"] : null)) {
                // line 184
                echo "\t<div class=\"panel\">
\t\t<div class=\"content\">
\t\t\t<strong>";
                // line 186
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
";
        // line 192
        if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 193
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
            echo "\" class=\"display-options\">
\t\t<fieldset>
\t\t\t";
            // line 195
            if ((isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box ";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 196
            echo "\t\t\t";
            if ((isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null);
                echo "\" class=\"right-box ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a>";
            }
            // line 197
            echo "\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 198
                echo "\t\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
                echo ": ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label><label>";
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label><label><input type=\"submit\" name=\"sort\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button\" /></label>
\t";
            }
            // line 200
            echo "\t\t</fieldset>
\t</form>
";
        }
        // line 203
        echo "
";
        // line 204
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 205
            echo "\t<div class=\"topic-actions\">

\t\t";
            // line 207
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 208
                echo "\t\t<div class=\"btn ";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo "btn-locked";
                } else {
                    echo "btn-post";
                }
                echo "\" title=\"";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t<a href=\"";
                // line 209
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\">";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo "<i class=\"fa fa-lock\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo "<i class=\"fa fa-reply\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                // line 210
                echo "\t\t\t</a>
\t\t</div>
\t\t";
            }
            // line 213
            echo "
\t\t";
            // line 214
            if ((((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
                // line 215
                echo "\t\t<div class=\"pagination\">
\t\t\t";
                // line 216
                if (((isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                    // line 217
                    echo "\t\t\t<span class=\"total\">";
                    echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
                    echo "</span>
\t\t\t";
                } elseif ((                // line 218
(isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                    // line 219
                    echo "\t\t\t<span class=\"total\">";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</span>
\t\t\t";
                }
                // line 221
                echo "\t\t\t";
                if ((isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null)) {
                    // line 222
                    echo "\t\t\t<span class=\"total\">";
                    echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
                    echo "</span>
\t\t\t";
                }
                // line 224
                echo "\t\t\t";
                if ((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null)) {
                    // line 225
                    echo "\t\t\t<a href=\"#\" onclick=\"jumpto(); return false;\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                    echo "\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t<span class=\"count\">";
                    // line 226
                    echo (isset($context["PAGINATION"]) ? $context["PAGINATION"] : null);
                    echo "</span>
\t\t\t";
                } else {
                    // line 228
                    echo "\t\t\t<span>";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</span>
\t\t\t";
                }
                // line 230
                echo "\t\t</div>
\t\t";
            }
            // line 232
            echo "\t</div>
";
        }
        // line 234
        echo "
";
        // line 235
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 235)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 236
        echo "
";
        // line 237
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 238
            echo "<div class=\"secondary-block\">
\t<div class=\"secondary-block-header\">
\t\t<h3>
\t\t";
            // line 241
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                // line 242
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>
\t\t";
            } else {
                // line 244
                echo "\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "
\t\t";
            }
            // line 246
            echo "\t\t</h3>
\t</div>
\t<div class=\"secondary-block-content\">
\t\t<p>
\t\t\t";
            // line 250
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "
\t\t</p>
\t</div>
</div>
";
        }
        // line 255
        echo "
";
        // line 256
        if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
            // line 257
            echo "<div class=\"secondary-block\">
\t<div class=\"secondary-block-header\">
\t\t<h3>
\t\t\t";
            // line 260
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "
\t\t</h3>
\t</div>
\t<div class=\"secondary-block-content\">
\t\t<p>
\t\t";
            // line 265
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                // line 266
                echo "\t\t\t";
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "<br />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "\t\t</p>
\t</div>
</div>
";
        }
        // line 272
        echo "
</div>

";
        // line 275
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 275)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 275,  861 => 272,  855 => 268,  846 => 266,  842 => 265,  834 => 260,  829 => 257,  827 => 256,  824 => 255,  816 => 250,  810 => 246,  804 => 244,  796 => 242,  794 => 241,  789 => 238,  787 => 237,  784 => 236,  772 => 235,  769 => 234,  765 => 232,  761 => 230,  755 => 228,  750 => 226,  743 => 225,  740 => 224,  734 => 222,  731 => 221,  725 => 219,  723 => 218,  718 => 217,  716 => 216,  713 => 215,  711 => 214,  708 => 213,  703 => 210,  693 => 209,  678 => 208,  676 => 207,  672 => 205,  670 => 204,  667 => 203,  662 => 200,  648 => 198,  645 => 197,  634 => 196,  624 => 195,  618 => 193,  616 => 192,  613 => 191,  602 => 186,  598 => 184,  595 => 183,  589 => 181,  584 => 178,  582 => 177,  568 => 172,  560 => 171,  550 => 170,  537 => 168,  531 => 167,  522 => 166,  516 => 165,  495 => 164,  491 => 163,  471 => 162,  468 => 161,  459 => 155,  453 => 154,  443 => 153,  433 => 149,  431 => 148,  428 => 147,  423 => 144,  421 => 143,  418 => 142,  413 => 141,  410 => 140,  406 => 138,  395 => 130,  390 => 128,  382 => 124,  376 => 123,  371 => 121,  365 => 118,  361 => 117,  344 => 113,  337 => 109,  334 => 108,  332 => 107,  325 => 103,  320 => 100,  318 => 99,  315 => 98,  311 => 96,  307 => 94,  304 => 93,  298 => 91,  293 => 89,  286 => 88,  283 => 87,  280 => 86,  274 => 84,  272 => 83,  269 => 82,  267 => 81,  264 => 80,  256 => 75,  251 => 73,  246 => 71,  243 => 70,  241 => 69,  238 => 68,  233 => 65,  223 => 64,  208 => 63,  206 => 62,  202 => 60,  200 => 59,  197 => 58,  183 => 56,  181 => 55,  178 => 54,  174 => 52,  169 => 50,  164 => 49,  156 => 47,  154 => 46,  151 => 45,  149 => 44,  146 => 43,  142 => 41,  129 => 40,  123 => 39,  119 => 37,  117 => 36,  110 => 34,  105 => 31,  99 => 27,  91 => 24,  88 => 23,  86 => 22,  83 => 21,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  56 => 12,  53 => 11,  49 => 10,  42 => 8,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
