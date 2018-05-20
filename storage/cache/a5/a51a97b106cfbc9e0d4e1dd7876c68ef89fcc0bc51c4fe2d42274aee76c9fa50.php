<?php

/* butik/template/product/category.twig */
class __TwigTemplate_890fb1f34e71c07fd9ecf801af96121db683c76974a74c339a7082a65c78b7e3 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 5
            echo "      ";
            if ((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) {
                // line 6
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
      ";
            } else {
                // line 8
                echo "        <li>";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</li>
      ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
  <div class=\"title-category\"><h2>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2></div>
  <div class=\"row\">";
        // line 13
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 22
        if ((isset($context["butik_ctegory_description_status"]) ? $context["butik_ctegory_description_status"] : null)) {
            // line 23
            echo "      ";
            if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
                // line 24
                echo "      <div class=\"row\">
        ";
                // line 25
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 26
                    echo "        ";
                    $context["class_description"] = "col-sm-9 col-xs-12";
                    // line 27
                    echo "        ";
                } else {
                    // line 28
                    echo "        ";
                    $context["class_description"] = "col-sm-12 col-xs-12";
                    // line 29
                    echo "        ";
                }
                // line 30
                echo "        ";
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 31
                    echo "          <div class=\"col-sm-2\"><img src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"img-thumbnail\" /></div>
        ";
                }
                // line 33
                echo "        ";
                if ((isset($context["description"]) ? $context["description"] : null)) {
                    // line 34
                    echo "          <div class=\"";
                    echo (isset($context["class_description"]) ? $context["class_description"] : null);
                    echo "\">";
                    echo (isset($context["description"]) ? $context["description"] : null);
                    echo "</div>
        ";
                }
                // line 36
                echo "      </div>
      <hr>
      ";
            }
            // line 39
            echo "      ";
        }
        // line 40
        echo "      ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 41
            echo "      <h4 class=\"category-refine\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h4>
      <div class=\"category-list\">
        <div class=\"row\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 45
                echo "          <div class=\"col-xs-6 col-sm-3\">
            <div class=\"category-list-block\">
              ";
                // line 47
                if (((isset($context["butik_category_list_thumb"]) ? $context["butik_category_list_thumb"] : null) && $this->getAttribute($context["category"], "image", array()))) {
                    // line 48
                    echo "              <div class=\"image\">
                <a href=\"";
                    // line 49
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["category"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" /></a>
              </div>
              ";
                }
                // line 52
                echo "              <div class=\"name\">
                <a href=\"";
                // line 53
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
              </div>
            </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
      </div>
      ";
        }
        // line 61
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 62
            echo "      <div class=\"product-filter\">
        <div class=\"row\">
          <div class=\"col-md-5 col-sm-5 hidden-xs\">
            <div class=\"btn-group btn-group-sm\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 67
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 col-xs-8\">
            <div class=\"form-group input-group input-group-sm\">
              <label class=\"input-group-addon hidden-xs hidden-sm\" for=\"input-sort\">";
            // line 72
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 75
                echo "                ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 76
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 78
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 80
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-3 col-xs-4\">
            <div class=\"form-group input-group input-group-sm\">
              <label class=\"input-group-addon\" for=\"input-limit\"><span class=\"hidden-xs hidden-sm\">";
            // line 86
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</span></label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 89
                echo "                ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 90
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 92
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 94
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "              </select>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 101
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\">
              <a href=\"";
                // line 104
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
                ";
                // line 105
                if (((isset($context["butik_hover_img_status"]) ? $context["butik_hover_img_status"] : null) && $this->getAttribute($context["product"], "additional_img", array()))) {
                    // line 106
                    echo "                <img src=\"";
                    echo $this->getAttribute($context["product"], "additional_img", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive hover-image\" />
                ";
                }
                // line 108
                echo "              </a>
              <div class=\"button-group sl\">
                ";
                // line 110
                if ((isset($context["butik_quickview_status"]) ? $context["butik_quickview_status"] : null)) {
                    // line 111
                    echo "                <a class=\"quickview\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "\" onclick=\"quickview('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-eye\"></i></a>
                ";
                }
                // line 113
                echo "                ";
                if ((isset($context["butik_wishlist_status"]) ? $context["butik_wishlist_status"] : null)) {
                    // line 114
                    echo "                <a class=\"wishlist\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></a>
                ";
                }
                // line 116
                echo "                ";
                if ((isset($context["butik_compare_status"]) ? $context["butik_compare_status"] : null)) {
                    // line 117
                    echo "                <a class=\"compare\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-clone\"></i></a>
                ";
                }
                // line 119
                echo "              </div>
            </div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 123
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                ";
                // line 124
                if ((isset($context["butik_short_description_status"]) ? $context["butik_short_description_status"] : null)) {
                    // line 125
                    echo "                <p>";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
                ";
                }
                // line 127
                echo "                ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 128
                    echo "                <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 129
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 131
                        echo "                    <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                    ";
                        // line 132
                        if ((isset($context["butik_percentage_status"]) ? $context["butik_percentage_status"] : null)) {
                            // line 133
                            echo "                    <span class=\"percentage\">-";
                            echo $this->getAttribute($context["product"], "percentage", array());
                            echo "<i>%</i></span>
                    ";
                        }
                        // line 135
                        echo "                  ";
                    }
                    // line 136
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 138
                echo "                ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 139
                    echo "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 140
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 141
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 142
                echo " </div>
              <div class=\"button-group\">
                ";
                // line 144
                if ((($this->getAttribute($context["product"], "product_quantity", array()) <= 0) && (isset($context["butik_no_product"]) ? $context["butik_no_product"] : null))) {
                    // line 145
                    echo "                <button type=\"button\" class=\"btn-default\" disabled=\"disabled\"><i class=\"fa fa-warning\"></i> <span class=\"hidden-xs hidden-sm hidden-md disabled\">";
                    echo $this->getAttribute($context["product"], "entry_stock", array());
                    echo "</span></button>
                ";
                } else {
                    // line 147
                    echo "                <button type=\"button\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
                ";
                    // line 148
                    if ((isset($context["butik_fastorder_category"]) ? $context["butik_fastorder_category"] : null)) {
                        // line 149
                        echo "                <button type=\"button\" class=\"btn-fastordercat\" onclick=\"fastorder('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["entry_fastorder_title"]) ? $context["entry_fastorder_title"] : null);
                        echo "\"><i class=\"fa fa-paper-plane\"></i></button>
                ";
                    }
                    // line 151
                    echo "                ";
                }
                // line 152
                echo "              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 158
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 159
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 162
        echo "      <hr>
      ";
        // line 163
        if ( !(isset($context["butik_ctegory_description_status"]) ? $context["butik_ctegory_description_status"] : null)) {
            // line 164
            echo "      ";
            if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
                // line 165
                echo "      <div class=\"row\">
        ";
                // line 166
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 167
                    echo "        ";
                    $context["class_description"] = "col-sm-9 col-xs-12";
                    // line 168
                    echo "        ";
                } else {
                    // line 169
                    echo "        ";
                    $context["class_description"] = "col-sm-12 col-xs-12";
                    // line 170
                    echo "        ";
                }
                // line 171
                echo "        ";
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 172
                    echo "        <div class=\"col-sm-3 col-xs-12 text-center\"><img src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"img-thumbnail\" /></div>
        ";
                }
                // line 174
                echo "        ";
                if ((isset($context["description"]) ? $context["description"] : null)) {
                    // line 175
                    echo "        <div class=\"";
                    echo (isset($context["class_description"]) ? $context["class_description"] : null);
                    echo "\">";
                    echo (isset($context["description"]) ? $context["description"] : null);
                    echo "</div>
        ";
                }
                // line 177
                echo "      </div>
      ";
            }
            // line 179
            echo "      ";
        }
        // line 180
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 181
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 183
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 186
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 187
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 189
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "butik/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 189,  590 => 187,  585 => 186,  577 => 183,  571 => 181,  568 => 180,  565 => 179,  561 => 177,  553 => 175,  550 => 174,  540 => 172,  537 => 171,  534 => 170,  531 => 169,  528 => 168,  525 => 167,  523 => 166,  520 => 165,  517 => 164,  515 => 163,  512 => 162,  506 => 159,  502 => 158,  498 => 156,  488 => 152,  485 => 151,  477 => 149,  475 => 148,  466 => 147,  460 => 145,  458 => 144,  454 => 142,  445 => 141,  438 => 140,  433 => 139,  430 => 138,  418 => 136,  415 => 135,  409 => 133,  407 => 132,  400 => 131,  394 => 129,  391 => 128,  388 => 127,  382 => 125,  380 => 124,  374 => 123,  368 => 119,  360 => 117,  357 => 116,  349 => 114,  346 => 113,  338 => 111,  336 => 110,  332 => 108,  322 => 106,  320 => 105,  310 => 104,  305 => 101,  301 => 100,  294 => 95,  288 => 94,  280 => 92,  272 => 90,  269 => 89,  265 => 88,  260 => 86,  253 => 81,  247 => 80,  239 => 78,  231 => 76,  228 => 75,  224 => 74,  219 => 72,  211 => 67,  207 => 66,  201 => 62,  198 => 61,  193 => 58,  180 => 53,  177 => 52,  167 => 49,  164 => 48,  162 => 47,  158 => 45,  154 => 44,  147 => 41,  144 => 40,  141 => 39,  136 => 36,  128 => 34,  125 => 33,  115 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  92 => 23,  90 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 13,  55 => 12,  52 => 11,  46 => 10,  40 => 8,  32 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for i, breadcrumb in breadcrumbs %}*/
/*       {% if i+1 < breadcrumbs|length %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% else %}*/
/*         <li>{{ breadcrumb.text }}</li>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="title-category"><h2>{{ heading_title }}</h2></div>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       {% if butik_ctegory_description_status %}*/
/*       {% if thumb or description %}*/
/*       <div class="row">*/
/*         {% if thumb %}*/
/*         {% set class_description = 'col-sm-9 col-xs-12' %}*/
/*         {% else %}*/
/*         {% set class_description = 'col-sm-12 col-xs-12' %}*/
/*         {% endif %}*/
/*         {% if thumb %}*/
/*           <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*           <div class="{{ class_description }}">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <hr>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% if categories %}*/
/*       <h4 class="category-refine">{{ text_refine }}</h4>*/
/*       <div class="category-list">*/
/*         <div class="row">*/
/*           {% for category in categories %}*/
/*           <div class="col-xs-6 col-sm-3">*/
/*             <div class="category-list-block">*/
/*               {% if butik_category_list_thumb and category.image %}*/
/*               <div class="image">*/
/*                 <a href="{{ category.href }}"><img src="{{ category.image }}" alt="{{ category.name }}" /></a>*/
/*               </div>*/
/*               {% endif %}*/
/*               <div class="name">*/
/*                 <a href="{{ category.href }}">{{ category.name }}</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <div class="product-filter">*/
/*         <div class="row">*/
/*           <div class="col-md-5 col-sm-5 hidden-xs">*/
/*             <div class="btn-group btn-group-sm">*/
/*               <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*               <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4 col-sm-4 col-xs-8">*/
/*             <div class="form-group input-group input-group-sm">*/
/*               <label class="input-group-addon hidden-xs hidden-sm" for="input-sort">{{ text_sort }}</label>*/
/*               <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                 {% for sorts in sorts %}*/
/*                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                 <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-3 col-sm-3 col-xs-4">*/
/*             <div class="form-group input-group input-group-sm">*/
/*               <label class="input-group-addon" for="input-limit"><span class="hidden-xs hidden-sm">{{ text_limit }}</span></label>*/
/*               <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                 {% for limits in limits %}*/
/*                 {% if limits.value == limit %}*/
/*                 <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row"> {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb">*/
/*             <div class="image">*/
/*               <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                 {% if butik_hover_img_status and product.additional_img %}*/
/*                 <img src="{{ product.additional_img }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive hover-image" />*/
/*                 {% endif %}*/
/*               </a>*/
/*               <div class="button-group sl">*/
/*                 {% if butik_quickview_status %}*/
/*                 <a class="quickview" href="javascript:void(0);" data-toggle="tooltip" title="{{ button_quickview }}" onclick="quickview('{{ product.product_id }}');"><i class="fa fa-eye"></i></a>*/
/*                 {% endif %}*/
/*                 {% if butik_wishlist_status %}*/
/*                 <a class="wishlist" href="javascript:void(0);" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a>*/
/*                 {% endif %}*/
/*                 {% if butik_compare_status %}*/
/*                 <a class="compare" href="javascript:void(0);" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-clone"></i></a>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div>*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 {% if butik_short_description_status %}*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% endif %}*/
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %}*/
/*                     <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                     {% if butik_percentage_status %}*/
/*                     <span class="percentage">-{{ product.percentage }}<i>%</i></span>*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>*/
/*                 {% endif %} </div>*/
/*               <div class="button-group">*/
/*                 {% if product.product_quantity <= 0 and butik_no_product %}*/
/*                 <button type="button" class="btn-default" disabled="disabled"><i class="fa fa-warning"></i> <span class="hidden-xs hidden-sm hidden-md disabled">{{ product.entry_stock }}</span></button>*/
/*                 {% else %}*/
/*                 <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 {% if butik_fastorder_category %}*/
/*                 <button type="button" class="btn-fastordercat" onclick="fastorder('{{ product.product_id }}');" data-toggle="tooltip" title="{{ entry_fastorder_title }}"><i class="fa fa-paper-plane"></i></button>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %} </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       <hr>*/
/*       {% if not butik_ctegory_description_status %}*/
/*       {% if thumb or description %}*/
/*       <div class="row">*/
/*         {% if thumb %}*/
/*         {% set class_description = 'col-sm-9 col-xs-12' %}*/
/*         {% else %}*/
/*         {% set class_description = 'col-sm-12 col-xs-12' %}*/
/*         {% endif %}*/
/*         {% if thumb %}*/
/*         <div class="col-sm-3 col-xs-12 text-center"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="{{ class_description }}">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
