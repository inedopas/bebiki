<?php

/* butik/template/common/footer.twig */
class __TwigTemplate_1b9032b9705e10b3127864eae99ad790094061ead552144021f32c723cb1f97d extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "        <div class=\"col-md-3 col-sm-6 col-xs-6\">
          <h5>";
            // line 6
            echo (((isset($context["footer_column1"]) ? $context["footer_column1"] : null)) ? ((isset($context["footer_column1"]) ? $context["footer_column1"] : null)) : ((isset($context["text_information"]) ? $context["text_information"] : null)));
            echo "</h5>
          <ul class=\"list-unstyled footer-link\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
            if ((isset($context["butik_footer_contact_status"]) ? $context["butik_footer_contact_status"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["contact"]) ? $context["contact"] : null);
                echo "\">";
                echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
                echo "</a></li>";
            }
            // line 12
            echo "
\t\t\t\t<li><a href=\"";
            // line 13
            echo (isset($context["testimonial"]) ? $context["testimonial"] : null);
            echo "\">";
            echo (isset($context["text_testimonial"]) ? $context["text_testimonial"] : null);
            echo "</a></li>
\t\t\t
            ";
            // line 15
            if ((isset($context["butik_footer_sitemap_status"]) ? $context["butik_footer_sitemap_status"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
                echo "\">";
                echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
                echo "</a></li>";
            }
            // line 16
            echo "            ";
            if ( !twig_test_empty((isset($context["footer1_link_add"]) ? $context["footer1_link_add"] : null))) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["footer1_link_add"]) ? $context["footer1_link_add"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 18
                    echo "            <li><a href=\"";
                    echo $this->getAttribute($context["value"], "link", array());
                    echo "\">";
                    echo $this->getAttribute($context["value"], "title", array());
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            // line 21
            echo "          </ul>
        </div>
      ";
        }
        // line 24
        echo "      <div class=\"col-md-3 col-sm-6 col-xs-6\">
        <h5>";
        // line 25
        echo (((isset($context["footer_column2"]) ? $context["footer_column2"] : null)) ? ((isset($context["footer_column2"]) ? $context["footer_column2"] : null)) : ((isset($context["text_extra"]) ? $context["text_extra"] : null)));
        echo "</h5>
        <ul class=\"list-unstyled footer-link\">
          ";
        // line 27
        if ((isset($context["butik_footer_account_status"]) ? $context["butik_footer_account_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>";
        }
        // line 28
        echo "          ";
        if ((isset($context["butik_footer_order_status"]) ? $context["butik_footer_order_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>";
        }
        // line 29
        echo "          ";
        if ((isset($context["butik_footer_wishlist_status"]) ? $context["butik_footer_wishlist_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>";
        }
        // line 30
        echo "          ";
        if ((isset($context["butik_footer_newsletter_status"]) ? $context["butik_footer_newsletter_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "\">";
            echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
            echo "</a></li>";
        }
        // line 31
        echo "          ";
        if ((isset($context["butik_footer_return_status"]) ? $context["butik_footer_return_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>";
        }
        // line 32
        echo "          ";
        if ((isset($context["butik_footer_manufacturer_status"]) ? $context["butik_footer_manufacturer_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</a></li>";
        }
        // line 33
        echo "          ";
        if ((isset($context["butik_footer_voucher_status"]) ? $context["butik_footer_voucher_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["voucher"]) ? $context["voucher"] : null);
            echo "\">";
            echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
            echo "</a></li>";
        }
        // line 34
        echo "          ";
        if ((isset($context["butik_footer_affiliate_status"]) ? $context["butik_footer_affiliate_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</a></li>";
        }
        // line 35
        echo "          ";
        if ((isset($context["butik_footer_special_status"]) ? $context["butik_footer_special_status"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "\">";
            echo (isset($context["text_special"]) ? $context["text_special"] : null);
            echo "</a></li>";
        }
        // line 36
        echo "          ";
        if ( !twig_test_empty((isset($context["footer2_link_add"]) ? $context["footer2_link_add"] : null))) {
            // line 37
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer2_link_add"]) ? $context["footer2_link_add"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 38
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["value"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["value"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          ";
        }
        // line 41
        echo "        </ul>
      </div>
      <div class=\"col-md-3 col-sm-6 col-xs-6\">
        <h5>";
        // line 44
        echo (((isset($context["footer_column3"]) ? $context["footer_column3"] : null)) ? ((isset($context["footer_column3"]) ? $context["footer_column3"] : null)) : ((isset($context["text_footer_title"]) ? $context["text_footer_title"] : null)));
        echo "</h5>
        <ul class=\"list-unstyled footer-cont\">
          ";
        // line 46
        if (((isset($context["butik_footer_phone1"]) ? $context["butik_footer_phone1"] : null) != "")) {
            // line 47
            echo "          <li><i class=\"fa fa-phone\"></i> <a href=\"tel:";
            echo (isset($context["w_footer_phone1"]) ? $context["w_footer_phone1"] : null);
            echo "\">";
            echo (isset($context["butik_footer_phone1"]) ? $context["butik_footer_phone1"] : null);
            echo "</a></li>
          ";
        }
        // line 49
        echo "          ";
        if (((isset($context["butik_footer_phone2"]) ? $context["butik_footer_phone2"] : null) != "")) {
            // line 50
            echo "          <li><i class=\"fa fa-phone\"></i> <a href=\"tel:";
            echo (isset($context["w_footer_phone2"]) ? $context["w_footer_phone2"] : null);
            echo "\">";
            echo (isset($context["butik_footer_phone2"]) ? $context["butik_footer_phone2"] : null);
            echo "</a></li>
          ";
        }
        // line 52
        echo "          ";
        if (((isset($context["butik_footer_phone3"]) ? $context["butik_footer_phone3"] : null) != "")) {
            // line 53
            echo "          <li><i class=\"fa fa-phone\"></i> <a href=\"tel:";
            echo (isset($context["w_footer_phone3"]) ? $context["w_footer_phone3"] : null);
            echo "\">";
            echo (isset($context["butik_footer_phone3"]) ? $context["butik_footer_phone3"] : null);
            echo "</a></li>
          ";
        }
        // line 55
        echo "          ";
        if (((isset($context["butik_footer_phone4"]) ? $context["butik_footer_phone4"] : null) != "")) {
            // line 56
            echo "          <li><i class=\"fa fa-phone\"></i> <a href=\"tel:";
            echo (isset($context["w_footer_phone4"]) ? $context["w_footer_phone4"] : null);
            echo "\">";
            echo (isset($context["butik_footer_phone4"]) ? $context["butik_footer_phone4"] : null);
            echo "</a></li>
          ";
        }
        // line 58
        echo "          ";
        if (((isset($context["butik_footer_email"]) ? $context["butik_footer_email"] : null) != "")) {
            // line 59
            echo "          <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:";
            echo (isset($context["butik_footer_email"]) ? $context["butik_footer_email"] : null);
            echo "\">";
            echo (isset($context["butik_footer_email"]) ? $context["butik_footer_email"] : null);
            echo "</a></li>
          ";
        }
        // line 61
        echo "          ";
        if (((isset($context["butik_footer_skype"]) ? $context["butik_footer_skype"] : null) != "")) {
            // line 62
            echo "          <li><i class=\"fa fa-skype\"></i> <a href=\"skype:";
            echo (isset($context["butik_footer_skype"]) ? $context["butik_footer_skype"] : null);
            echo "\">";
            echo (isset($context["butik_footer_skype"]) ? $context["butik_footer_skype"] : null);
            echo "</a></li>
          ";
        }
        // line 64
        echo "          ";
        if (((isset($context["footer_schedule"]) ? $context["footer_schedule"] : null) != "")) {
            // line 65
            echo "          <li><i class=\"fa fa-clock-o\"></i> ";
            echo (isset($context["footer_schedule"]) ? $context["footer_schedule"] : null);
            echo "</li>
          ";
        }
        // line 67
        echo "          ";
        if (((isset($context["footer_location"]) ? $context["footer_location"] : null) != "")) {
            // line 68
            echo "          <li><i class=\"fa fa-map-marker\"></i> ";
            echo (isset($context["footer_location"]) ? $context["footer_location"] : null);
            echo "</li>
          ";
        }
        // line 70
        echo "        </ul>
      </div>
      <div class=\"col-md-3 col-sm-6 col-xs-6\">
        ";
        // line 73
        if ((isset($context["butik_footer_logo"]) ? $context["butik_footer_logo"] : null)) {
            // line 74
            echo "        <div id=\"logo-footer\">
          <img src=\"";
            // line 75
            echo (isset($context["butik_footer_logo"]) ? $context["butik_footer_logo"] : null);
            echo "\" title=\"\" alt=\"\" class=\"img-responsive\" />
        </div>
        ";
        }
        // line 78
        echo "        ";
        if (((isset($context["footer_about_us"]) ? $context["footer_about_us"] : null) != "")) {
            // line 79
            echo "        <div class=\"footer-about\">";
            echo (isset($context["footer_about_us"]) ? $context["footer_about_us"] : null);
            echo "</div>
        ";
        }
        // line 81
        echo "        ";
        if ( !twig_test_empty((isset($context["soc_footer"]) ? $context["soc_footer"] : null))) {
            // line 82
            echo "        <div class=\"soc\">
          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["soc_footer"]) ? $context["soc_footer"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 84
                echo "          <a href=\"";
                echo $this->getAttribute($context["value"], "link", array());
                echo "\" rel=\"nofollow noopener\" target=\"_blank\"> <img src=\"";
                echo $this->getAttribute($context["value"], "image", array());
                echo "\" alt=\"\" title=\"\"></a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </div>
        ";
        }
        // line 88
        echo "      </div>
    </div>
    <hr>
    <div class=\"col-md-6 col-sm-6 col-xs-12\">";
        // line 91
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</div>
    <div class=\"payments-metods col-md-6 col-sm-6 col-xs-12 text-right\">
      ";
        // line 93
        if ( !twig_test_empty((isset($context["payments_metods"]) ? $context["payments_metods"] : null))) {
            // line 94
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payments_metods"]) ? $context["payments_metods"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 95
                echo "      <a href=\"";
                echo $this->getAttribute($context["value"], "link", array());
                echo "\" rel=\"nofollow noopener\" target=\"_blank\"> <img src=\"";
                echo $this->getAttribute($context["value"], "image", array());
                echo "\" alt=\"\" title=\"\"></a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "      ";
        }
        // line 98
        echo "    </div>
  </div>
  ";
        // line 100
        if ((isset($context["butik_callback_status"]) ? $context["butik_callback_status"] : null)) {
            // line 101
            echo "  <div id=\"callphone\"><a href=\"javascript:void(0)\" data-toggle=\"modal\" class=\"btn-callback\"><i class=\"fa fa-phone\"></i></a></div>
  ";
        }
        // line 103
        echo "  ";
        if ((isset($context["butik_backtotop_status"]) ? $context["butik_backtotop_status"] : null)) {
            // line 104
            echo "  <div id=\"back-top\"><a href=\"javascript:void(0)\" class=\"backtotop\"><i class=\"fa fa-chevron-up\"></i></a></div>
  ";
        }
        // line 106
        echo "</footer>
";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 108
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "<script src=\"catalog/view/theme/butik/js/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/butik/js/custom.js\" type=\"text/javascript\"></script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "butik/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 110,  411 => 108,  407 => 107,  404 => 106,  400 => 104,  397 => 103,  393 => 101,  391 => 100,  387 => 98,  384 => 97,  373 => 95,  368 => 94,  366 => 93,  361 => 91,  356 => 88,  352 => 86,  341 => 84,  337 => 83,  334 => 82,  331 => 81,  325 => 79,  322 => 78,  316 => 75,  313 => 74,  311 => 73,  306 => 70,  300 => 68,  297 => 67,  291 => 65,  288 => 64,  280 => 62,  277 => 61,  269 => 59,  266 => 58,  258 => 56,  255 => 55,  247 => 53,  244 => 52,  236 => 50,  233 => 49,  225 => 47,  223 => 46,  218 => 44,  213 => 41,  210 => 40,  199 => 38,  194 => 37,  191 => 36,  182 => 35,  173 => 34,  164 => 33,  155 => 32,  146 => 31,  137 => 30,  128 => 29,  119 => 28,  111 => 27,  106 => 25,  103 => 24,  98 => 21,  95 => 20,  84 => 18,  79 => 17,  76 => 16,  68 => 15,  61 => 13,  58 => 12,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*         <div class="col-md-3 col-sm-6 col-xs-6">*/
/*           <h5>{{ footer_column1 ? footer_column1 : text_information }}</h5>*/
/*           <ul class="list-unstyled footer-link">*/
/*             {% for information in informations %}*/
/*             <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*             {% endfor %}*/
/*             {% if butik_footer_contact_status %}<li><a href="{{ contact }}">{{ text_contact }}</a></li>{% endif %}*/
/* */
/* 				<li><a href="{{ testimonial }}">{{ text_testimonial }}</a></li>*/
/* 			*/
/*             {% if butik_footer_sitemap_status %}<li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>{% endif %}*/
/*             {% if footer1_link_add is not empty %}*/
/*             {% for key, value in footer1_link_add %}*/
/*             <li><a href="{{ value.link }}">{{ value.title }}</a></li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="col-md-3 col-sm-6 col-xs-6">*/
/*         <h5>{{ footer_column2 ? footer_column2 : text_extra }}</h5>*/
/*         <ul class="list-unstyled footer-link">*/
/*           {% if butik_footer_account_status %}<li><a href="{{ account }}">{{ text_account }}</a></li>{% endif %}*/
/*           {% if butik_footer_order_status %}<li><a href="{{ order }}">{{ text_order }}</a></li>{% endif %}*/
/*           {% if butik_footer_wishlist_status %}<li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>{% endif %}*/
/*           {% if butik_footer_newsletter_status %}<li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>{% endif %}*/
/*           {% if butik_footer_return_status %}<li><a href="{{ return }}">{{ text_return }}</a></li>{% endif %}*/
/*           {% if butik_footer_manufacturer_status %}<li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>{% endif %}*/
/*           {% if butik_footer_voucher_status %}<li><a href="{{ voucher }}">{{ text_voucher }}</a></li>{% endif %}*/
/*           {% if butik_footer_affiliate_status %}<li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>{% endif %}*/
/*           {% if butik_footer_special_status %}<li><a href="{{ special }}">{{ text_special }}</a></li>{% endif %}*/
/*           {% if footer2_link_add is not empty %}*/
/*           {% for key, value in footer2_link_add %}*/
/*           <li><a href="{{ value.link }}">{{ value.title }}</a></li>*/
/*           {% endfor %}*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-3 col-sm-6 col-xs-6">*/
/*         <h5>{{ footer_column3 ? footer_column3 : text_footer_title }}</h5>*/
/*         <ul class="list-unstyled footer-cont">*/
/*           {% if butik_footer_phone1 != '' %}*/
/*           <li><i class="fa fa-phone"></i> <a href="tel:{{ w_footer_phone1 }}">{{ butik_footer_phone1 }}</a></li>*/
/*           {% endif %}*/
/*           {% if butik_footer_phone2 != '' %}*/
/*           <li><i class="fa fa-phone"></i> <a href="tel:{{ w_footer_phone2 }}">{{ butik_footer_phone2 }}</a></li>*/
/*           {% endif %}*/
/*           {% if butik_footer_phone3 != '' %}*/
/*           <li><i class="fa fa-phone"></i> <a href="tel:{{ w_footer_phone3 }}">{{ butik_footer_phone3 }}</a></li>*/
/*           {% endif %}*/
/*           {% if butik_footer_phone4 != '' %}*/
/*           <li><i class="fa fa-phone"></i> <a href="tel:{{ w_footer_phone4 }}">{{ butik_footer_phone4 }}</a></li>*/
/*           {% endif %}*/
/*           {% if butik_footer_email != '' %}*/
/*           <li><i class="fa fa-envelope"></i> <a href="mailto:{{ butik_footer_email }}">{{ butik_footer_email }}</a></li>*/
/*           {% endif %}*/
/*           {% if butik_footer_skype != '' %}*/
/*           <li><i class="fa fa-skype"></i> <a href="skype:{{ butik_footer_skype }}">{{ butik_footer_skype }}</a></li>*/
/*           {% endif %}*/
/*           {% if footer_schedule != '' %}*/
/*           <li><i class="fa fa-clock-o"></i> {{ footer_schedule }}</li>*/
/*           {% endif %}*/
/*           {% if footer_location != '' %}*/
/*           <li><i class="fa fa-map-marker"></i> {{ footer_location }}</li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-3 col-sm-6 col-xs-6">*/
/*         {% if butik_footer_logo %}*/
/*         <div id="logo-footer">*/
/*           <img src="{{ butik_footer_logo }}" title="" alt="" class="img-responsive" />*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if footer_about_us != '' %}*/
/*         <div class="footer-about">{{ footer_about_us }}</div>*/
/*         {% endif %}*/
/*         {% if soc_footer is not empty %}*/
/*         <div class="soc">*/
/*           {% for key, value in soc_footer %}*/
/*           <a href="{{ value.link }}" rel="nofollow noopener" target="_blank"> <img src="{{ value.image }}" alt="" title=""></a>*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <div class="col-md-6 col-sm-6 col-xs-12">{{ powered }}</div>*/
/*     <div class="payments-metods col-md-6 col-sm-6 col-xs-12 text-right">*/
/*       {% if payments_metods is not empty %}*/
/*       {% for key, value in payments_metods %}*/
/*       <a href="{{ value.link }}" rel="nofollow noopener" target="_blank"> <img src="{{ value.image }}" alt="" title=""></a>*/
/*       {% endfor %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   {% if butik_callback_status %}*/
/*   <div id="callphone"><a href="javascript:void(0)" data-toggle="modal" class="btn-callback"><i class="fa fa-phone"></i></a></div>*/
/*   {% endif %}*/
/*   {% if butik_backtotop_status %}*/
/*   <div id="back-top"><a href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>*/
/*   {% endif %}*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/butik/js/common.js" type="text/javascript"></script>*/
/* <script src="catalog/view/theme/butik/js/custom.js" type="text/javascript"></script>*/
/* </body></html>*/
