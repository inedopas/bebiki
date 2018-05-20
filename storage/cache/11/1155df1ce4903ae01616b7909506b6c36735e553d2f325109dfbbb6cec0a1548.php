<?php

/* butik/template/common/menu.twig */
class __TwigTemplate_53f678ba61a8f195a5f46fb7859283aed256fe27aad7bb0b630a8c6f5539b92d extends Twig_Template
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
        if ((isset($context["butik_fixed_menu"]) ? $context["butik_fixed_menu"] : null)) {
            // line 2
            echo "<div class=\"menu-wrapper\">
";
        }
        // line 4
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 5
            echo "<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 7
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 12
            if ((isset($context["butik_home_link"]) ? $context["butik_home_link"] : null)) {
                // line 13
                echo "        <li><a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\">";
                echo (isset($context["text_home"]) ? $context["text_home"] : null);
                echo "</a></li>
        ";
            }
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 17
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          ";
                    // line 18
                    if (($this->getAttribute($context["category"], "column", array()) == 1)) {
                        // line 19
                        echo "            ";
                        $context["box_child"] = "level2-1";
                        // line 20
                        echo "          ";
                    } elseif (($this->getAttribute($context["category"], "column", array()) >= 2)) {
                        // line 21
                        echo "            ";
                        $context["box_child"] = "level2-2";
                        // line 22
                        echo "          ";
                    }
                    // line 23
                    echo "          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 25
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 27
                            echo "                <li class=\"";
                            echo (isset($context["box_child"]) ? $context["box_child"] : null);
                            echo "\">
                  ";
                            // line 28
                            if (((isset($context["butik_category_thumb"]) ? $context["butik_category_thumb"] : null) && $this->getAttribute($context["child"], "thumb", array()))) {
                                // line 29
                                echo "                    <span class=\"hidden-xs hidden-sm\"><img src=\"";
                                echo $this->getAttribute($context["child"], "thumb", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "\" class=\"category-img\" /></span>
                  ";
                            }
                            // line 31
                            echo "                  ";
                            if ($this->getAttribute($context["child"], "sub_children", array())) {
                                // line 32
                                echo "                    <a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\" class=\"submenu1\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>
                    <ul class=\"list-unstyled level3\">
                      ";
                                // line 34
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "sub_children", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["sub_child"]) {
                                    // line 35
                                    echo "                      <li><a href=\"";
                                    echo $this->getAttribute($context["sub_child"], "href", array());
                                    echo "\" > ";
                                    echo $this->getAttribute($context["sub_child"], "name", array());
                                    echo "</a></li>
                      ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 37
                                echo "                    </ul>
                  ";
                            } else {
                                // line 39
                                echo "                    <a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></a>
                  ";
                            }
                            // line 41
                            echo "                </li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "</div>
            </div>
        </li>
        ";
                } else {
                    // line 48
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
            if ( !twig_test_empty((isset($context["menu_link_add"]) ? $context["menu_link_add"] : null))) {
                // line 52
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["menu_link_add"]) ? $context["menu_link_add"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 53
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["value"], "link", array());
                    echo "\">";
                    echo $this->getAttribute($context["value"], "title", array());
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        ";
            }
            // line 56
            echo "        ";
            if ((isset($context["butik_brands_status"]) ? $context["butik_brands_status"] : null)) {
                // line 57
                echo "        <li class=\"menu-manufacturer dropdown hidden-xs hidden-sm\">
          <a class=\"arrow\" href=\"";
                // line 58
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "\">";
                echo (isset($context["title_brands"]) ? $context["title_brands"] : null);
                echo "</a>
          <div class=\"dropdown-menu menu-manufacturer-dropdown\">
            <div class=\"dropdown-inner\">
              <ul class=\"list-unstyled\">
                ";
                // line 62
                if ((isset($context["manufacturers"]) ? $context["manufacturers"] : null)) {
                    // line 63
                    echo "                ";
                    $context["counter"] = 0;
                    // line 64
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers"]) ? $context["manufacturers"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                        // line 65
                        echo "                <li>
                  <a href=\"";
                        // line 66
                        echo $this->getAttribute($context["manufacturer"], "href", array());
                        echo "\" class=\"menu-manufacturer-img\">
                    <img src=\"";
                        // line 67
                        echo $this->getAttribute($context["manufacturer"], "image", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["manufacturer"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["manufacturer"], "name", array());
                        echo "\" />
                  </a>
                  <a href=\"";
                        // line 69
                        echo $this->getAttribute($context["manufacturer"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["manufacturer"], "name", array());
                        echo "</a>
                </li>
                ";
                        // line 71
                        $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                        // line 72
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "                ";
                }
                // line 74
                echo "              </ul>
            </div>
          </div>
        </li>
        ";
            }
            // line 79
            echo "        ";
            if ((isset($context["butik_html_block_status1"]) ? $context["butik_html_block_status1"] : null)) {
                // line 80
                echo "        <li class=\"dropdown html-block hidden-sm hidden-xs\">
          <a href=\"javascript:void(0);\">";
                // line 81
                echo (isset($context["html_title1"]) ? $context["html_title1"] : null);
                echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\">
              ";
                // line 84
                echo (isset($context["html_content1"]) ? $context["html_content1"] : null);
                echo "
            </div>
          </div>
        </li>
        ";
            }
            // line 89
            echo "        ";
            if ((isset($context["butik_html_block_status2"]) ? $context["butik_html_block_status2"] : null)) {
                // line 90
                echo "        <li class=\"dropdown html-block hidden-sm hidden-xs\">
          <a href=\"javascript:void(0);\">";
                // line 91
                echo (isset($context["html_title2"]) ? $context["html_title2"] : null);
                echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\">
              ";
                // line 94
                echo (isset($context["html_content2"]) ? $context["html_content2"] : null);
                echo "
            </div>
          </div>
        </li>
       ";
            }
            // line 99
            echo "        ";
            if ((isset($context["butik_html_block_status3"]) ? $context["butik_html_block_status3"] : null)) {
                // line 100
                echo "        <li class=\"dropdown html-block hidden-sm hidden-xs\">
          <a href=\"javascript:void(0);\">";
                // line 101
                echo (isset($context["html_title3"]) ? $context["html_title3"] : null);
                echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\">
              ";
                // line 104
                echo (isset($context["html_content3"]) ? $context["html_content3"] : null);
                echo "
            </div>
          </div>
        </li>
        ";
            }
            // line 109
            echo "        ";
            if ((isset($context["butik_information_status"]) ? $context["butik_information_status"] : null)) {
                // line 110
                echo "        ";
                if ((isset($context["informations"]) ? $context["informations"] : null)) {
                    // line 111
                    echo "        <li class=\"dropdown\">
          <a href=\"javascript:void(0);\">";
                    // line 112
                    echo (isset($context["text_information"]) ? $context["text_information"] : null);
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\">
              <ul class=\"list-unstyled\">
                ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                        // line 117
                        echo "                <li><a href=\"";
                        echo $this->getAttribute($context["information"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["information"], "title", array());
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "              </ul>
            </div>
          </div>
        </li>
        ";
                }
                // line 124
                echo "        ";
            }
            // line 125
            echo "        ";
            if ((isset($context["butik_contact_status"]) ? $context["butik_contact_status"] : null)) {
                // line 126
                echo "        <li><a href=\"";
                echo (isset($context["contact"]) ? $context["contact"] : null);
                echo "\">";
                echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
                echo "</a></li>
        ";
            }
            // line 128
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 133
        if ((isset($context["butik_fixed_menu"]) ? $context["butik_fixed_menu"] : null)) {
            // line 134
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "butik/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 134,  386 => 133,  379 => 128,  371 => 126,  368 => 125,  365 => 124,  358 => 119,  347 => 117,  343 => 116,  336 => 112,  333 => 111,  330 => 110,  327 => 109,  319 => 104,  313 => 101,  310 => 100,  307 => 99,  299 => 94,  293 => 91,  290 => 90,  287 => 89,  279 => 84,  273 => 81,  270 => 80,  267 => 79,  260 => 74,  257 => 73,  251 => 72,  249 => 71,  242 => 69,  233 => 67,  229 => 66,  226 => 65,  221 => 64,  218 => 63,  216 => 62,  207 => 58,  204 => 57,  201 => 56,  198 => 55,  187 => 53,  182 => 52,  179 => 51,  173 => 50,  165 => 48,  159 => 44,  152 => 43,  145 => 41,  137 => 39,  133 => 37,  122 => 35,  118 => 34,  110 => 32,  107 => 31,  99 => 29,  97 => 28,  92 => 27,  88 => 26,  85 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  64 => 18,  57 => 17,  54 => 16,  49 => 15,  41 => 13,  39 => 12,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if butik_fixed_menu %}*/
/* <div class="menu-wrapper">*/
/* {% endif %}*/
/* {% if categories %}*/
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% if butik_home_link %}*/
/*         <li><a href="{{ home }}">{{ text_home }}</a></li>*/
/*         {% endif %}*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle">{{ category.name }}</a>*/
/*           {% if category.column == 1 %}*/
/*             {% set box_child = 'level2-1' %}*/
/*           {% elseif category.column >= 2 %}*/
/*             {% set box_child = 'level2-2' %}*/
/*           {% endif %}*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li class="{{ box_child }}">*/
/*                   {% if butik_category_thumb and child.thumb %}*/
/*                     <span class="hidden-xs hidden-sm"><img src="{{ child.thumb }}" alt="{{ child.name }}" class="category-img" /></span>*/
/*                   {% endif %}*/
/*                   {% if child.sub_children %}*/
/*                     <a href="{{ child.href }}" class="submenu1">{{ child.name }}</a>*/
/*                     <ul class="list-unstyled level3">*/
/*                       {% for sub_child in child.sub_children %}*/
/*                       <li><a href="{{ sub_child.href }}" > {{ sub_child.name }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                   {% else %}*/
/*                     <a href="{{ child.href }}">{{ child.name }}</a></a>*/
/*                   {% endif %}*/
/*                 </li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*         {% if menu_link_add is not empty %}*/
/*         {% for key, value in menu_link_add %}*/
/*         <li><a href="{{ value.link }}">{{ value.title }}</a></li>*/
/*         {% endfor %}*/
/*         {% endif %}*/
/*         {% if butik_brands_status %}*/
/*         <li class="menu-manufacturer dropdown hidden-xs hidden-sm">*/
/*           <a class="arrow" href="{{ manufacturer }}">{{ title_brands }}</a>*/
/*           <div class="dropdown-menu menu-manufacturer-dropdown">*/
/*             <div class="dropdown-inner">*/
/*               <ul class="list-unstyled">*/
/*                 {% if manufacturers %}*/
/*                 {% set counter = 0 %}*/
/*                 {% for manufacturer in manufacturers %}*/
/*                 <li>*/
/*                   <a href="{{ manufacturer.href }}" class="menu-manufacturer-img">*/
/*                     <img src="{{ manufacturer.image }}" title="{{ manufacturer.name }}" alt="{{ manufacturer.name }}" />*/
/*                   </a>*/
/*                   <a href="{{ manufacturer.href }}">{{ manufacturer.name }}</a>*/
/*                 </li>*/
/*                 {% set counter = counter + 1 %}*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% if butik_html_block_status1 %}*/
/*         <li class="dropdown html-block hidden-sm hidden-xs">*/
/*           <a href="javascript:void(0);">{{ html_title1 }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner">*/
/*               {{ html_content1 }}*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% if butik_html_block_status2 %}*/
/*         <li class="dropdown html-block hidden-sm hidden-xs">*/
/*           <a href="javascript:void(0);">{{ html_title2 }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner">*/
/*               {{ html_content2 }}*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*        {% endif %}*/
/*         {% if butik_html_block_status3 %}*/
/*         <li class="dropdown html-block hidden-sm hidden-xs">*/
/*           <a href="javascript:void(0);">{{ html_title3 }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner">*/
/*               {{ html_content3 }}*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% if butik_information_status %}*/
/*         {% if informations %}*/
/*         <li class="dropdown">*/
/*           <a href="javascript:void(0);">{{ text_information }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner">*/
/*               <ul class="list-unstyled">*/
/*                 {% for information in informations %}*/
/*                 <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*         {% if butik_contact_status %}*/
/*         <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %}*/
/* {% if butik_fixed_menu %}*/
/* </div>*/
/* {% endif %}*/
