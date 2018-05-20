<?php

/* butik/template/common/header.twig */
class __TwigTemplate_263b6634a6dac8b78aba5727e70edec8db107d8cc885c48bd0954290dd0a89f3 extends Twig_Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/butik/js/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/butik/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 33
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 36
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if ((isset($context["butik_menu_align"]) ? $context["butik_menu_align"] : null)) {
            // line 39
            echo "  <style type=\"text/css\">
    #menu {text-align: center;}
    @media (min-width: 768px) { #menu .navbar-nav {float: none;margin: auto;display: inline-block;margin-bottom: -6px;text-align: left;}}
  </style>
";
        }
        // line 44
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">
    ";
        // line 48
        if ((isset($context["butik_topmenu_status"]) ? $context["butik_topmenu_status"] : null)) {
            // line 49
            echo "    ";
            if ((isset($context["top_link_add"]) ? $context["top_link_add"] : null)) {
                // line 50
                echo "    <span class=\"menu-icon visible-sm visible-xs\"><i class=\"fa fa-bars\"></i></span>
    <div class=\"pull-left left-top\">
      <div class=\"costom-links\">
        <ul>
          ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["top_link_add"]) ? $context["top_link_add"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 55
                    echo "          <li><a href=\"";
                    echo $this->getAttribute($context["value"], "link", array());
                    echo "\">";
                    echo $this->getAttribute($context["value"], "title", array());
                    echo "</a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        </ul>
      </div>
    </div>
    ";
            }
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 63
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
    <button type=\"button\" class=\"btn btn-link pull-right\" onclick=\"signin();\"><i class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></i> ";
        // line 64
        echo (isset($context["text_signin"]) ? $context["text_signin"] : null);
        echo "</button>
    ";
        // line 65
        if ((isset($context["butik_wishlist_status"]) ? $context["butik_wishlist_status"] : null)) {
            // line 66
            echo "    <div class=\"pull-right\">
      <div class=\"btn-group\">
        <a href=\"";
            // line 68
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" class=\"btn btn-link\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</span></a>
      </div>
    </div>
    ";
        }
        // line 72
        echo "    ";
        if ((isset($context["butik_compare_status"]) ? $context["butik_compare_status"] : null)) {
            // line 73
            echo "    <div class=\"pull-right\">
      <div class=\"btn-group\">
        <a href=\"";
            // line 75
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" class=\"btn btn-link\" id=\"compare-total\" >";
            echo (isset($context["butik_compare"]) ? $context["butik_compare"] : null);
            echo "</a>
      </div>
    </div>
    ";
        }
        // line 79
        echo "  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div id=\"logo\">";
        // line 85
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 86
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 87
        echo "</div>
      </div>
      ";
        // line 89
        if (( !twig_test_empty((isset($context["header_phones"]) ? $context["header_phones"] : null)) &&  !twig_test_empty((isset($context["contact_schedule"]) ? $context["contact_schedule"] : null)))) {
            // line 90
            echo "      ";
            $context["class_cont"] = "col-md-3 col-sm-6 col-xs-6 header-cont";
            // line 91
            echo "      ";
        } elseif (( !twig_test_empty((isset($context["header_phones"]) ? $context["header_phones"] : null)) ||  !twig_test_empty((isset($context["contact_schedule"]) ? $context["contact_schedule"] : null)))) {
            // line 92
            echo "      ";
            $context["class_cont"] = "col-md-3 col-sm-12 col-xs-12 header-cont";
            // line 93
            echo "      ";
        }
        // line 94
        echo "      ";
        if ((isset($context["header_phones"]) ? $context["header_phones"] : null)) {
            // line 95
            echo "      <div class=\"";
            echo (isset($context["class_cont"]) ? $context["class_cont"] : null);
            echo "\">
        <div class=\"contacts_header\">
          <div class=\"contacts_icon\">
            <i class=\"fa fa-phone\"></i>
          </div>
          <div class=\"phones\">
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header_phones"]) ? $context["header_phones"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 102
                echo "            <div><a href=\"tel:";
                echo $this->getAttribute($context["value"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["value"], "phone", array());
                echo "</a></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 108
        echo "      ";
        if ((isset($context["contact_schedule"]) ? $context["contact_schedule"] : null)) {
            // line 109
            echo "      <div class=\"";
            echo (isset($context["class_cont"]) ? $context["class_cont"] : null);
            echo "\">
        <div class=\"header_schedule\">
          <div class=\"schedule_icon\">
            <i class=\"fa fa-clock-o\"></i>
          </div>
          <div class=\"schedule\">
            <div>";
            // line 115
            echo (isset($context["contact_schedule"]) ? $context["contact_schedule"] : null);
            echo "</div>
          </div>
        </div>
      </div>
      ";
        }
        // line 120
        echo "      ";
        if ((twig_test_empty((isset($context["header_phones"]) ? $context["header_phones"] : null)) && twig_test_empty((isset($context["contact_schedule"]) ? $context["contact_schedule"] : null)))) {
            // line 121
            echo "      ";
            $context["class_search"] = "col-md-9 col-sm-12 col-xs-12";
            // line 122
            echo "      ";
        } elseif ((twig_test_empty((isset($context["header_phones"]) ? $context["header_phones"] : null)) || twig_test_empty((isset($context["contact_schedule"]) ? $context["contact_schedule"] : null)))) {
            // line 123
            echo "      ";
            $context["class_search"] = "col-md-6 col-sm-12 col-xs-12";
            // line 124
            echo "      ";
        } else {
            // line 125
            echo "      ";
            $context["class_search"] = "col-md-3 col-sm-12 col-xs-12";
            // line 126
            echo "      ";
        }
        // line 127
        echo "      <div class=\"";
        echo (isset($context["class_search"]) ? $context["class_search"] : null);
        echo " box-search\">
        <div class=\"row\">
          <div class=\"col-md-8 col-sm-9 col-xs-9\">";
        // line 129
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
          <div class=\"col-md-4 col-sm-3 col-xs-3\">";
        // line 130
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</header>
";
        // line 136
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo (isset($context["d_ajax_search"]) ? $context["d_ajax_search"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "butik/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 136,  364 => 130,  360 => 129,  354 => 127,  351 => 126,  348 => 125,  345 => 124,  342 => 123,  339 => 122,  336 => 121,  333 => 120,  325 => 115,  315 => 109,  312 => 108,  306 => 104,  295 => 102,  291 => 101,  281 => 95,  278 => 94,  275 => 93,  272 => 92,  269 => 91,  266 => 90,  264 => 89,  260 => 87,  252 => 86,  240 => 85,  232 => 79,  223 => 75,  219 => 73,  216 => 72,  205 => 68,  201 => 66,  199 => 65,  195 => 64,  191 => 63,  186 => 62,  183 => 61,  177 => 57,  166 => 55,  162 => 54,  156 => 50,  153 => 49,  151 => 48,  145 => 44,  138 => 39,  136 => 38,  128 => 36,  124 => 35,  113 => 33,  109 => 32,  100 => 30,  96 => 29,  83 => 27,  79 => 26,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/theme/butik/js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/butik/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* {% if butik_menu_align %}*/
/*   <style type="text/css">*/
/*     #menu {text-align: center;}*/
/*     @media (min-width: 768px) { #menu .navbar-nav {float: none;margin: auto;display: inline-block;margin-bottom: -6px;text-align: left;}}*/
/*   </style>*/
/* {% endif %}*/
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">*/
/*     {% if butik_topmenu_status %}*/
/*     {% if top_link_add %}*/
/*     <span class="menu-icon visible-sm visible-xs"><i class="fa fa-bars"></i></span>*/
/*     <div class="pull-left left-top">*/
/*       <div class="costom-links">*/
/*         <ul>*/
/*           {% for value in top_link_add %}*/
/*           <li><a href="{{ value.link }}">{{ value.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% endif %}*/
/*     {{ currency }}*/
/*     {{ language }}*/
/*     <button type="button" class="btn btn-link pull-right" onclick="signin();"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> {{ text_signin }}</button>*/
/*     {% if butik_wishlist_status %}*/
/*     <div class="pull-right">*/
/*       <div class="btn-group">*/
/*         <a href="{{ wishlist }}" class="btn btn-link" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if butik_compare_status %}*/
/*     <div class="pull-right">*/
/*       <div class="btn-group">*/
/*         <a href="{{ compare }}" class="btn btn-link" id="compare-total" >{{ butik_compare }}</a>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-3 col-sm-12 col-xs-12">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       {% if header_phones is not empty and contact_schedule is not empty %}*/
/*       {% set class_cont = 'col-md-3 col-sm-6 col-xs-6 header-cont' %}*/
/*       {% elseif header_phones is not empty or contact_schedule is not empty %}*/
/*       {% set class_cont = 'col-md-3 col-sm-12 col-xs-12 header-cont' %}*/
/*       {% endif %}*/
/*       {% if header_phones %}*/
/*       <div class="{{ class_cont }}">*/
/*         <div class="contacts_header">*/
/*           <div class="contacts_icon">*/
/*             <i class="fa fa-phone"></i>*/
/*           </div>*/
/*           <div class="phones">*/
/*             {% for key, value in header_phones %}*/
/*             <div><a href="tel:{{ value.link }}">{{ value.phone }}</a></div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if contact_schedule %}*/
/*       <div class="{{ class_cont }}">*/
/*         <div class="header_schedule">*/
/*           <div class="schedule_icon">*/
/*             <i class="fa fa-clock-o"></i>*/
/*           </div>*/
/*           <div class="schedule">*/
/*             <div>{{ contact_schedule }}</div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if header_phones is empty and contact_schedule is empty %}*/
/*       {% set class_search = 'col-md-9 col-sm-12 col-xs-12' %}*/
/*       {% elseif header_phones is empty or contact_schedule is empty %}*/
/*       {% set class_search = 'col-md-6 col-sm-12 col-xs-12' %}*/
/*       {% else %}*/
/*       {% set class_search = 'col-md-3 col-sm-12 col-xs-12' %}*/
/*       {% endif %}*/
/*       <div class="{{ class_search }} box-search">*/
/*         <div class="row">*/
/*           <div class="col-md-8 col-sm-9 col-xs-9">{{ search }}</div>*/
/*           <div class="col-md-4 col-sm-3 col-xs-3">{{ cart }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}{{ d_ajax_search }}*/
/* */
