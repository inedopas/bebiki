<?php

/* butik/template/extension/module/featured.twig */
class __TwigTemplate_42fcfcbaec77e2f7ee6d1789e55885b752da6c85fe74215aea0bc7ed1da0d08a extends Twig_Template
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
        if ((((isset($context["position"]) ? $context["position"] : null) == "content_top") || ((isset($context["position"]) ? $context["position"] : null) == "content_bottom"))) {
            // line 2
            echo "<div class=\"title-module\"><h3>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3></div>
<div class=\"row\">
 ";
            // line 4
            if ((isset($context["butik_module_scroll"]) ? $context["butik_module_scroll"] : null)) {
                // line 5
                echo "  <div id=\"featured\" class=\"owl-carousel product-owl\">
 ";
            }
            // line 7
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "  ";
                if ( !(isset($context["butik_module_scroll"]) ? $context["butik_module_scroll"] : null)) {
                    // line 9
                    echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
  ";
                }
                // line 11
                echo "    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 12
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
        ";
                // line 13
                if (((isset($context["butik_hover_img_status"]) ? $context["butik_hover_img_status"] : null) && $this->getAttribute($context["product"], "additional_img", array()))) {
                    // line 14
                    echo "        <img src=\"";
                    echo $this->getAttribute($context["product"], "additional_img", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive hover-image\" />
        ";
                }
                // line 16
                echo "        </a>
        <div class=\"button-group sl\">
          ";
                // line 18
                if ((isset($context["butik_quickview_status"]) ? $context["butik_quickview_status"] : null)) {
                    // line 19
                    echo "          <a class=\"quickview\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "\" onclick=\"quickview('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-eye\"></i></a>
          ";
                }
                // line 21
                echo "          ";
                if ((isset($context["butik_wishlist_status"]) ? $context["butik_wishlist_status"] : null)) {
                    // line 22
                    echo "          <a class=\"wishlist\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></a>
          ";
                }
                // line 24
                echo "          ";
                if ((isset($context["butik_compare_status"]) ? $context["butik_compare_status"] : null)) {
                    // line 25
                    echo "          <a class=\"compare\" href=\"javascript:void(0);\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-clone\"></i></a>
          ";
                }
                // line 27
                echo "        </div>
      </div>
      <div class=\"caption\">
        <h4><a href=\"";
                // line 30
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
        ";
                // line 31
                if ((isset($context["butik_short_description_status"]) ? $context["butik_short_description_status"] : null)) {
                    // line 32
                    echo "        <p>";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
        ";
                }
                // line 34
                echo "        ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 35
                    echo "        <div class=\"rating\">
          ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(5);
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 37
                        echo "          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 38
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 40
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        }
                        // line 42
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "        </div>
        ";
                }
                // line 45
                echo "        ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 46
                    echo "        <p class=\"price\">
          ";
                    // line 47
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 48
                        echo "          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
          ";
                    } else {
                        // line 50
                        echo "          <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
            ";
                        // line 51
                        if ((isset($context["butik_percentage_status"]) ? $context["butik_percentage_status"] : null)) {
                            // line 52
                            echo "            <span class=\"percentage\">-";
                            echo $this->getAttribute($context["product"], "percentage", array());
                            echo "<i>%</i></span>
            ";
                        }
                        // line 54
                        echo "          ";
                    }
                    // line 55
                    echo "          ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 56
                        echo "          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
          ";
                    }
                    // line 58
                    echo "        </p>
        ";
                }
                // line 60
                echo "      </div>
      <div class=\"button-group\">
        ";
                // line 62
                if ((($this->getAttribute($context["product"], "product_quantity", array()) <= 0) && (isset($context["butik_no_product"]) ? $context["butik_no_product"] : null))) {
                    // line 63
                    echo "        <button type=\"button\" class=\"btn-default\" disabled=\"disabled\"><i class=\"fa fa-warning\"></i> <span class=\"hidden-xs hidden-sm hidden-md disabled\">";
                    echo $this->getAttribute($context["product"], "entry_stock", array());
                    echo "</span></button>
        ";
                } else {
                    // line 65
                    echo "        <button type=\"button\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
        ";
                    // line 66
                    if ((isset($context["butik_fastorder_module"]) ? $context["butik_fastorder_module"] : null)) {
                        // line 67
                        echo "        <button type=\"button\" class=\"btn-fastordercat\" onclick=\"fastorder('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["entry_fastorder_title"]) ? $context["entry_fastorder_title"] : null);
                        echo "\"><i class=\"fa fa-paper-plane\"></i></button>
        ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "      </div>
    </div>
  ";
                // line 72
                if ( !(isset($context["butik_module_scroll"]) ? $context["butik_module_scroll"] : null)) {
                    // line 73
                    echo "  </div>
  ";
                }
                // line 75
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "  ";
            if ((isset($context["butik_module_scroll"]) ? $context["butik_module_scroll"] : null)) {
                // line 77
                echo "  </div>
  ";
            }
            // line 79
            echo "</div>
";
            // line 80
            if ((isset($context["butik_module_scroll"]) ? $context["butik_module_scroll"] : null)) {
                // line 81
                echo "<script type=\"text/javascript\">
    \$('#featured').owlCarousel({
        autoPlay : false,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [991,3],
        itemsTablet: [700,2],
        itemsMobile : [460,1],
        slideSpeed : 200,
        paginationSpeed : 300,
        rewindSpeed : 300,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true
    });
</script>
";
            }
        } else {
            // line 100
            echo "  <div class=\"title-module\"><h3>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3></div>
  <div class=\"row\">
    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 103
                echo "    <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"product-thumb transition\">
        <div class=\"image\">
          <a href=\"";
                // line 106
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
            <img src=\"";
                // line 107
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
          </a>
        </div>
        <div class=\"caption\">
          <h4><a href=\"";
                // line 111
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
          ";
                // line 112
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 113
                    echo "          <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 114
                        echo "            ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 115
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
          ";
                }
                // line 117
                echo "          ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 118
                    echo "          <p class=\"price\">
            ";
                    // line 119
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 120
                        echo "            ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
            ";
                    } else {
                        // line 122
                        echo "            <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
            ";
                    }
                    // line 124
                    echo "            ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 125
                        echo "            <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
            ";
                    }
                    // line 127
                    echo "          </p>
          ";
                }
                // line 129
                echo "        </div>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "butik/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 133,  380 => 129,  376 => 127,  368 => 125,  365 => 124,  357 => 122,  351 => 120,  349 => 119,  346 => 118,  343 => 117,  334 => 115,  327 => 114,  322 => 113,  320 => 112,  314 => 111,  303 => 107,  299 => 106,  294 => 103,  290 => 102,  284 => 100,  263 => 81,  261 => 80,  258 => 79,  254 => 77,  251 => 76,  245 => 75,  241 => 73,  239 => 72,  235 => 70,  232 => 69,  224 => 67,  222 => 66,  215 => 65,  209 => 63,  207 => 62,  203 => 60,  199 => 58,  191 => 56,  188 => 55,  185 => 54,  179 => 52,  177 => 51,  170 => 50,  164 => 48,  162 => 47,  159 => 46,  156 => 45,  152 => 43,  146 => 42,  142 => 40,  138 => 38,  135 => 37,  131 => 36,  128 => 35,  125 => 34,  119 => 32,  117 => 31,  111 => 30,  106 => 27,  98 => 25,  95 => 24,  87 => 22,  84 => 21,  76 => 19,  74 => 18,  70 => 16,  60 => 14,  58 => 13,  48 => 12,  45 => 11,  41 => 9,  38 => 8,  33 => 7,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if position == 'content_top' or position == 'content_bottom' %}*/
/* <div class="title-module"><h3>{{ heading_title }}</h3></div>*/
/* <div class="row">*/
/*  {% if butik_module_scroll %}*/
/*   <div id="featured" class="owl-carousel product-owl">*/
/*  {% endif %}*/
/*  {% for product in products %}*/
/*   {% if not butik_module_scroll %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*   {% endif %}*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*         {% if butik_hover_img_status and product.additional_img %}*/
/*         <img src="{{ product.additional_img }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive hover-image" />*/
/*         {% endif %}*/
/*         </a>*/
/*         <div class="button-group sl">*/
/*           {% if butik_quickview_status %}*/
/*           <a class="quickview" href="javascript:void(0);" data-toggle="tooltip" title="{{ button_quickview }}" onclick="quickview('{{ product.product_id }}');"><i class="fa fa-eye"></i></a>*/
/*           {% endif %}*/
/*           {% if butik_wishlist_status %}*/
/*           <a class="wishlist" href="javascript:void(0);" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a>*/
/*           {% endif %}*/
/*           {% if butik_compare_status %}*/
/*           <a class="compare" href="javascript:void(0);" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-clone"></i></a>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         {% if butik_short_description_status %}*/
/*         <p>{{ product.description }}</p>*/
/*         {% endif %}*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*             {% if butik_percentage_status %}*/
/*             <span class="percentage">-{{ product.percentage }}<i>%</i></span>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-group">*/
/*         {% if product.product_quantity <= 0 and butik_no_product %}*/
/*         <button type="button" class="btn-default" disabled="disabled"><i class="fa fa-warning"></i> <span class="hidden-xs hidden-sm hidden-md disabled">{{ product.entry_stock }}</span></button>*/
/*         {% else %}*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*         {% if butik_fastorder_module %}*/
/*         <button type="button" class="btn-fastordercat" onclick="fastorder('{{ product.product_id }}');" data-toggle="tooltip" title="{{ entry_fastorder_title }}"><i class="fa fa-paper-plane"></i></button>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   {% if not butik_module_scroll %}*/
/*   </div>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/*   {% if butik_module_scroll %}*/
/*   </div>*/
/*   {% endif %}*/
/* </div>*/
/* {% if butik_module_scroll %}*/
/* <script type="text/javascript">*/
/*     $('#featured').owlCarousel({*/
/*         autoPlay : false,*/
/*         items : 4,*/
/*         itemsDesktop : [1199,3],*/
/*         itemsDesktopSmall : [991,3],*/
/*         itemsTablet: [700,2],*/
/*         itemsMobile : [460,1],*/
/*         slideSpeed : 200,*/
/*         paginationSpeed : 300,*/
/*         rewindSpeed : 300,*/
/*         navigation : true,*/
/*         stopOnHover : true,*/
/*         pagination : false,*/
/*         scrollPerPage:true*/
/*     });*/
/* </script>*/
/* {% endif %}*/
/* {% else %}*/
/*   <div class="title-module"><h3>{{ heading_title }}</h3></div>*/
/*   <div class="row">*/
/*     {% for product in products %}*/
/*     <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*       <div class="product-thumb transition">*/
/*         <div class="image">*/
/*           <a href="{{ product.href }}">*/
/*             <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*           </a>*/
/*         </div>*/
/*         <div class="caption">*/
/*           <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*           {% if product.rating %}*/
/*           <div class="rating">{% for i in 1..5 %}*/
/*             {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*             {% endfor %}</div>*/
/*           {% endif %}*/
/*           {% if product.price %}*/
/*           <p class="price">*/
/*             {% if not product.special %}*/
/*             {{ product.price }}*/
/*             {% else %}*/
/*             <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*             {% endif %}*/
/*             {% if product.tax %}*/
/*             <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*             {% endif %}*/
/*           </p>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
