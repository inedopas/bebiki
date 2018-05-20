<?php

/* default/template/extension/module/brainyfilter.twig */
class __TwigTemplate_61e6b6ad6bb96d215335cf9300857f37aece021a3e954a8976b687ea9dc2f1b4 extends Twig_Template
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
        // line 7
        $context["isHorizontal"] = (((isset($context["layout_position"]) ? $context["layout_position"] : null) === "content_top") || ((isset($context["layout_position"]) ? $context["layout_position"] : null) === "content_bottom"));
        // line 8
        $context["isResponsive"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "enabled", array(), "array")) ? (true) : (false));
        // line 9
        $context["responsivePos"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "position", array(), "array") === "right")) ? ("bf-right") : ("bf-left"));
        // line 10
        echo "
<style type=\"text/css\">
    .bf-responsive.bf-active.bf-layout-id-";
        // line 12
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-check-position {
        top: ";
        // line 13
        echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "offset", array(), "array"));
        echo "px;
    }
    .bf-responsive.bf-active.bf-layout-id-";
        // line 15
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-btn-show, 
    .bf-responsive.bf-active.bf-layout-id-";
        // line 16
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-btn-reset {
        top: ";
        // line 17
        echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "offset", array(), "array"));
        echo "px;
    }
    .bf-layout-id-";
        // line 19
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-btn-show {
        ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "resp_show_btn_color", array(), "array", false, true), "val", array(), "array", true, true)) {
            // line 21
            echo "            background: ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "resp_show_btn_color", array(), "array"), "val", array(), "array");
            echo ";
        ";
        }
        // line 23
        echo "    }
    .bf-layout-id-";
        // line 24
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-btn-reset {
        ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "resp_reset_btn_color", array(), "array", false, true), "val", array(), "array", true, true)) {
            // line 26
            echo "            background: ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "resp_reset_btn_color", array(), "array"), "val", array(), "array");
            echo ";
        ";
        }
        // line 28
        echo "    }
    .bf-layout-id-";
        // line 29
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-attr-header{
        ";
        // line 30
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "block_header_background", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("background: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "block_header_background", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo "
        ";
        // line 31
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "block_header_text", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("color: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "block_header_text", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
    }
    .bf-layout-id-";
        // line 33
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-count{
        ";
        // line 34
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "product_quantity_background", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("background: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "product_quantity_background", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
        ";
        // line 35
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "product_quantity_text", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("color: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "product_quantity_text", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
    }
   .bf-layout-id-";
        // line 37
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .ui-widget-header {
        ";
        // line 38
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "price_slider_area_background", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("background: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "price_slider_area_background", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
    }
   .bf-layout-id-";
        // line 40
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .ui-widget-content {
        ";
        // line 41
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "price_slider_background", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("background: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "price_slider_background", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
        ";
        // line 42
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "price_slider_border", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("border:1px solid" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "price_slider_border", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
    }
    .bf-layout-id-";
        // line 44
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .ui-state-default {
        ";
        // line 45
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "price_slider_handle_background", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("background:" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "price_slider_handle_background", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
        ";
        // line 46
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "price_slider_handle_border", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("border:1px solid" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "price_slider_handle_border", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
   }
    .bf-layout-id-";
        // line 48
        echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
        echo " .bf-attr-group-header{
        ";
        // line 49
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "group_block_header_background", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("background:" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "group_block_header_background", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
        ";
        // line 50
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array", false, true), "group_block_header_text", array(), "array", false, true), "val", array(), "array", true, true)) ? ((("color:" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "group_block_header_text", array(), "array"), "val", array(), "array")) . ";")) : (""));
        echo " 
    }
    ";
        // line 52
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "hide_empty", array(), "array")) {
            echo ">
        .bf-layout-id-";
            // line 53
            echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
            echo " .bf-row.bf-disabled, 
        .bf-layout-id-";
            // line 54
            echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
            echo " .bf-horizontal .bf-row.bf-disabled {
            display: none;
        }
    ";
        }
        // line 58
        echo "</style>
";
        // line 59
        if (twig_length_filter($this->env, (isset($context["filters"]) ? $context["filters"] : null))) {
            // line 60
            echo "<div class=\"bf-panel-wrapper";
            if ((isset($context["isResponsive"]) ? $context["isResponsive"] : null)) {
                echo " bf-responsive ";
            }
            echo " ";
            echo (isset($context["responsivePos"]) ? $context["responsivePos"] : null);
            echo " bf-layout-id-";
            echo (isset($context["layout_id"]) ? $context["layout_id"] : null);
            echo "\">
    <div class=\"bf-btn-show\"></div>
    <a class=\"bf-btn-reset\" onclick=\"BrainyFilter.reset();\"></a>
    <div class=\"box bf-check-position ";
            // line 63
            if ((isset($context["isHorizontal"]) ? $context["isHorizontal"] : null)) {
                echo " bf-horizontal ";
            }
            echo "\">
        <div class=\"box-heading\">";
            // line 64
            echo (isset($context["lang_block_title"]) ? $context["lang_block_title"] : null);
            echo " ";
            if ((isset($context["isHorizontal"]) ? $context["isHorizontal"] : null)) {
                echo " <a class=\"bf-toggle-filter-arrow\"></a><input type=\"reset\" class=\"bf-buttonclear\" onclick=\"BrainyFilter.reset();\" value=\"";
                echo (isset($context["reset"]) ? $context["reset"] : null);
                echo "\" /> ";
            }
            echo "</div>
        <div class=\"brainyfilter-panel box-content ";
            // line 65
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "hide_panel", array(), "array")) {
                echo " bf-hide-panel ";
            }
            echo "\">
            <form class=\"bf-form 
                    ";
            // line 67
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "product_count", array(), "array")) {
                echo " bf-with-counts ";
            }
            echo " 
                    ";
            // line 68
            if ((isset($context["sliding"]) ? $context["sliding"] : null)) {
                echo " bf-with-sliding ";
            }
            // line 69
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_type", array(), "array") === "button") && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_button_type", array(), "array") === "float"))) {
                echo " bf-with-float-btn ";
            }
            // line 70
            echo "                    ";
            if ((isset($context["limit_height"]) ? $context["limit_height"] : null)) {
                echo " bf-with-height-limit ";
            }
            echo "\"
                    data-height-limit=\"";
            // line 71
            echo (isset($context["limit_height_opts"]) ? $context["limit_height_opts"] : null);
            echo "\"
                    data-visible-items=\"";
            // line 72
            echo (isset($context["slidingOpts"]) ? $context["slidingOpts"] : null);
            echo "\"
                    data-hide-items=\"";
            // line 73
            echo (isset($context["slidingMin"]) ? $context["slidingMin"] : null);
            echo "\"
                    data-submit-type=\"";
            // line 74
            echo $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_type", array(), "array");
            echo "\"
                    data-submit-delay=\"";
            // line 75
            echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_delay_time", array(), "array"));
            echo "\"
                    data-submit-hide-panel =\"";
            // line 76
            echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "hide_panel", array(), "array"));
            echo "\"
                    data-resp-max-width=\"";
            // line 77
            echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "max_width", array(), "array"));
            echo "\"
                    data-resp-collapse=\"";
            // line 78
            echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "collapsed", array(), "array"));
            echo "\"
                    data-resp-max-scr-width =\"";
            // line 79
            echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "style", array(), "array"), "responsive", array(), "array"), "max_screen_width", array(), "array"));
            echo "\"
                    method=\"get\" action=\"index.php\">
                ";
            // line 81
            if (((isset($context["currentRoute"]) ? $context["currentRoute"] : null) === "product/search")) {
                // line 82
                echo "                    <input type=\"hidden\" name=\"route\" value=\"product/search\" />
                ";
            } else {
                // line 84
                echo "                    <input type=\"hidden\" name=\"route\" value=\"product/category\" />
                ";
            }
            // line 86
            echo "                ";
            if ((isset($context["currentPath"]) ? $context["currentPath"] : null)) {
                // line 87
                echo "                    <input type=\"hidden\" name=\"path\" value=\"";
                echo (isset($context["currentPath"]) ? $context["currentPath"] : null);
                echo "\" />
                ";
            }
            // line 89
            echo "                ";
            if ((isset($context["manufacturerId"]) ? $context["manufacturerId"] : null)) {
                // line 90
                echo "                    <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
                echo (isset($context["manufacturerId"]) ? $context["manufacturerId"] : null);
                echo "\" />
                ";
            }
            // line 92
            echo "
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["section"]) {
                // line 94
                echo "                        
                    ";
                // line 95
                if (($this->getAttribute($context["section"], "type", array(), "array") == "price")) {
                    // line 96
                    echo "                        ";
                    $context["sliderType"] = ((($this->getAttribute($context["section"], "control", array(), "array") === "slider_lbl_inp")) ? (3) : (((($this->getAttribute($context["section"], "control", array(), "array") === "slider_lbl")) ? (2) : (1))));
                    // line 97
                    echo "                        ";
                    $context["inputType"] = ((twig_in_filter((isset($context["sliderType"]) ? $context["sliderType"] : null), array(0 => 1, 1 => 3))) ? ("text") : ("hidden"));
                    // line 98
                    echo "                        <div class=\"bf-attr-block bf-price-filter ";
                    if ((((isset($context["isHorizontal"]) ? $context["isHorizontal"] : null) && $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), ($context["i"] + 1), array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), ($context["i"] + 1), array(), "array"), "type", array(), "array") === "search"))) {
                        echo "bf-left-half";
                    }
                    echo "\">
                        <div class=\"bf-attr-header ";
                    // line 99
                    if ($this->getAttribute($context["section"], "collapsed", array(), "array")) {
                        echo " bf-collapse ";
                    }
                    echo " ";
                    if ( !$context["i"]) {
                        echo " bf-w-line ";
                    }
                    echo "\">
                            ";
                    // line 100
                    echo (isset($context["lang_price"]) ? $context["lang_price"] : null);
                    echo "<span class=\"bf-arrow\"></span>
                        </div>
                        <div class=\"bf-attr-block-cont\">
                            <div class=\"bf-price-container box-content bf-attr-filter\">
                                ";
                    // line 104
                    if (twig_in_filter((isset($context["sliderType"]) ? $context["sliderType"] : null), array(0 => 1, 1 => 3))) {
                        // line 105
                        echo "                                <div class=\"bf-cur-symb\">
                                    <span class=\"bf-cur-symb-left\">";
                        // line 106
                        echo (isset($context["currency_symbol"]) ? $context["currency_symbol"] : null);
                        echo "</span>
                                    <input type=\"text\" class=\"bf-range-min\" name=\"bfp_price_min\" value=\"";
                        // line 107
                        echo (isset($context["lowerlimit"]) ? $context["lowerlimit"] : null);
                        echo "\" size=\"4\" />
                                    <span class=\"ndash\">&#8211;</span>
                                    <span class=\"bf-cur-symb-left\">";
                        // line 109
                        echo (isset($context["currency_symbol"]) ? $context["currency_symbol"] : null);
                        echo "</span>
                                    <input type=\"text\" class=\"bf-range-max\" name=\"bfp_price_max\" value=\"";
                        // line 110
                        echo (isset($context["upperlimit"]) ? $context["upperlimit"] : null);
                        echo "\" size=\"4\" /> 
                                </div>
                                ";
                    } else {
                        // line 113
                        echo "                                <input type=\"hidden\" class=\"bf-range-min\" name=\"bfp_price_min\" value=\"";
                        echo (isset($context["lowerlimit"]) ? $context["lowerlimit"] : null);
                        echo "\" />
                                <input type=\"hidden\" class=\"bf-range-max\" name=\"bfp_price_max\" value=\"";
                        // line 114
                        echo (isset($context["upperlimit"]) ? $context["upperlimit"] : null);
                        echo "\" /> 
                                ";
                    }
                    // line 116
                    echo "                                <div class=\"bf-price-slider-container ";
                    if ((((isset($context["sliderType"]) ? $context["sliderType"] : null) === 2) || ((isset($context["sliderType"]) ? $context["sliderType"] : null) === 3))) {
                        echo " bf-slider-with-labels ";
                    }
                    echo "\">
                                    <div class=\"bf-slider-range\" data-slider-type=\"";
                    // line 117
                    echo (isset($context["sliderType"]) ? $context["sliderType"] : null);
                    echo "\"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                
                    ";
                } elseif (($this->getAttribute(                // line 123
$context["section"], "type", array(), "array") == "search")) {
                    // line 124
                    echo "                
                        <div class=\"bf-attr-block bf-keywords-filter ";
                    // line 125
                    if ((((isset($context["isHorizontal"]) ? $context["isHorizontal"] : null) && $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), ($context["i"] + 1), array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), ($context["i"] + 1), array(), "array"), "type", array(), "array") === "price"))) {
                        echo " bf-left-half ";
                    }
                    echo "\">
                        <div class=\"bf-attr-header";
                    // line 126
                    if ($this->getAttribute($context["section"], "collapsed", array(), "array")) {
                        echo " bf-collapse ";
                    }
                    echo " ";
                    if ( !$context["i"]) {
                        echo " bf-w-line ";
                    }
                    echo "\">
                            ";
                    // line 127
                    echo (isset($context["lang_search"]) ? $context["lang_search"] : null);
                    echo "<span class=\"bf-arrow\"></span>
                        </div>
                        <div class=\"bf-attr-block-cont\">
                            <div class=\"bf-search-container bf-attr-filter\">
                                <div>
                                    <input type=\"text\" class=\"bf-search\" name=\"bfp_search\" value=\"";
                    // line 132
                    echo (isset($context["bfSearch"]) ? $context["bfSearch"] : null);
                    echo "\" /> 
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    ";
                } elseif (($this->getAttribute(                // line 138
$context["section"], "type", array(), "array") == "category")) {
                    // line 139
                    echo "                        
                        <div class=\"bf-attr-block\">
                        <div class=\"bf-attr-header";
                    // line 141
                    if ($this->getAttribute($context["section"], "collapsed", array(), "array")) {
                        echo " bf-collapse ";
                    }
                    echo " ";
                    if ( !$context["i"]) {
                        echo " bf-w-line ";
                    }
                    echo "\">
                            ";
                    // line 142
                    echo (isset($context["lang_categories"]) ? $context["lang_categories"] : null);
                    echo "<span class=\"bf-arrow\"></span>
                        </div>
                        <div class=\"bf-attr-block-cont\">
                            ";
                    // line 145
                    $context["groupUID"] = "c0";
                    // line 146
                    echo "
                            ";
                    // line 147
                    if (($this->getAttribute($context["section"], "control", array(), "array") == "select")) {
                        // line 148
                        echo "                            <div class=\"bf-attr-filter bf-attr-";
                        echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                        echo " bf-row\">
                                <div class=\"bf-cell\">
                                    <select name=\"bfp_";
                        // line 150
                        echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                        echo "\">
                                        <option value=\"\" class=\"bf-default\">";
                        // line 151
                        echo (isset($context["default_value_select"]) ? $context["default_value_select"] : null);
                        echo "</option>
                                        ";
                        // line 152
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "values", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                            // line 153
                            echo "                                            ";
                            $context["catId"] = $this->getAttribute($context["cat"], "id", array(), "array");
                            // line 154
                            echo "                                            ";
                            $context["isSelected"] = ($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter((isset($context["catId"]) ? $context["catId"] : null), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")));
                            // line 155
                            echo "                                            <option value=\"";
                            echo (isset($context["catId"]) ? $context["catId"] : null);
                            echo "\" class=\"bf-attr-val\" ";
                            if ((isset($context["isSelected"]) ? $context["isSelected"] : null)) {
                                echo " selected=\"true\" ";
                            }
                            echo ">
                                                ";
                            // line 156
                            $context["level"] = "";
                            // line 157
                            echo "                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["cat"], "level", array(), "array")));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 158
                                echo "                                                    ";
                                if ($context["i"]) {
                                    // line 159
                                    echo "                                                        ";
                                    $context["level"] = ((isset($context["level"]) ? $context["level"] : null) . "-");
                                    // line 160
                                    echo "                                                    ";
                                }
                                // line 161
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 162
                            echo "                                                ";
                            echo (((isset($context["level"]) ? $context["level"] : null) . " ") . $this->getAttribute($context["cat"], "name", array(), "array"));
                            echo "
                                            </option>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 165
                        echo "                                    </select>
                                </div>
                            </div>
                            ";
                    } else {
                        // line 169
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "values", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                            // line 170
                            echo "                                    ";
                            $context["catId"] = $this->getAttribute($context["cat"], "id", array(), "array");
                            // line 171
                            echo "                                    <div class=\"bf-attr-filter bf-attr-";
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo " bf-row
                                        ";
                            // line 172
                            if ((array_key_exists("totals", $context) && $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "hide_empty", array(), "array"))) {
                                // line 173
                                echo "                                            ";
                                $context["inStock"] = ((isset($context["postponedCount"]) ? $context["postponedCount"] : null) || ($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), (isset($context["catId"]) ? $context["catId"] : null), array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), (isset($context["catId"]) ? $context["catId"] : null), array(), "array")));
                                // line 174
                                echo "                                            ";
                                $context["inSelected"] = ($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter((isset($context["catId"]) ? $context["catId"] : null), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")));
                                // line 175
                                echo "                                            ";
                                if (( !(isset($context["inStock"]) ? $context["inStock"] : null) &&  !(isset($context["inSelected"]) ? $context["inSelected"] : null))) {
                                    // line 176
                                    echo "                                                bf-disabled
                                            ";
                                }
                                // line 178
                                echo "                                        ";
                            }
                            echo "\">
                                    <span class=\"bf-cell bf-c-1\">
                                        <input id=\"bf-attr-";
                            // line 180
                            echo (((((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["catId"]) ? $context["catId"] : null)) . "_") . (isset($context["layout_id"]) ? $context["layout_id"] : null));
                            echo "\"
                                               data-filterid=\"bf-attr-";
                            // line 181
                            echo (((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["catId"]) ? $context["catId"] : null));
                            echo "\"
                                               type=\"";
                            // line 182
                            echo $this->getAttribute($context["section"], "control", array(), "array");
                            echo "\" 
                                               name=\"bfp_";
                            // line 183
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            if (($this->getAttribute($context["section"], "control", array(), "array") === "checkbox")) {
                                echo ("_" . (isset($context["catId"]) ? $context["catId"] : null));
                            }
                            echo "\"
                                               value=\"";
                            // line 184
                            echo (isset($context["catId"]) ? $context["catId"] : null);
                            echo "\" 
                                               ";
                            // line 185
                            if (($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter((isset($context["catId"]) ? $context["catId"] : null), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")))) {
                                echo " checked=\"true\" ";
                            }
                            echo " />
                                    </span>
                                    <span class=\"bf-cell bf-c-2 bf-cascade-";
                            // line 187
                            echo $this->getAttribute($context["cat"], "level", array(), "array");
                            echo "\">
                                        <span class=\"bf-hidden bf-attr-val\">";
                            // line 188
                            echo (isset($context["catId"]) ? $context["catId"] : null);
                            echo "</span>
                                        <label for=\"bf-attr-";
                            // line 189
                            echo (((((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["catId"]) ? $context["catId"] : null)) . "_") . (isset($context["layout_id"]) ? $context["layout_id"] : null));
                            echo "\">
                                            ";
                            // line 190
                            echo $this->getAttribute($context["cat"], "name", array(), "array");
                            echo "
                                        </label>
                                    </span>
                                            <span class=\"bf-cell bf-c-3\">
                                                ";
                            // line 194
                            if (array_key_exists("totals", $context)) {
                                // line 195
                                echo "                                                    ";
                                if (( !$this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), (isset($context["catId"]) ? $context["catId"] : null), array(), "array", true, true) &&  !$this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true))) {
                                    // line 196
                                    echo "                                                        ";
                                    echo "";
                                    echo "
                                                    ";
                                } else {
                                    // line 198
                                    echo "                                                        ";
                                    $context["total"] = (($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), (isset($context["catId"]) ? $context["catId"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), (isset($context["catId"]) ? $context["catId"] : null), array(), "array")) : (0));
                                    // line 199
                                    echo "                                                        ";
                                    $context["addPlusSign"] = $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true);
                                    // line 200
                                    echo "                                                        <span class=\"bf-count ";
                                    echo (( !(isset($context["total"]) ? $context["total"] : null)) ? ("bf-empty") : (""));
                                    echo "\">";
                                    echo (((isset($context["addPlusSign"]) ? $context["addPlusSign"] : null)) ? ("+") : (""));
                                    echo (isset($context["total"]) ? $context["total"] : null);
                                    echo "</span>
                                                    ";
                                }
                                // line 202
                                echo "                                                ";
                            }
                            // line 203
                            echo "                                            </span>
                                </div>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 206
                        echo "                            ";
                    }
                    // line 207
                    echo "                        </div>
                        </div>
                
                    ";
                } else {
                    // line 211
                    echo "                        
                        ";
                    // line 212
                    $context["curGroupId"] = null;
                    // line 213
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "array", array(), "array"));
                    foreach ($context['_seq'] as $context["groupId"] => $context["group"]) {
                        // line 214
                        echo "                            ";
                        if (($this->getAttribute($context["group"], "group_id", array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "attribute_groups", array(), "array"))) {
                            // line 215
                            echo "                                ";
                            if (((isset($context["curGroupId"]) ? $context["curGroupId"] : null) != $this->getAttribute($context["group"], "group_id", array(), "array"))) {
                                // line 216
                                echo "                                    <div class=\"bf-attr-group-header\">";
                                echo $this->getAttribute($context["group"], "group", array(), "array");
                                echo "</div>
                                    ";
                                // line 217
                                $context["curGroupId"] = $this->getAttribute($context["group"], "group_id", array(), "array");
                                // line 218
                                echo "                                ";
                            }
                            // line 219
                            echo "                            ";
                        }
                        // line 220
                        echo "                            ";
                        $context["collapsedGroup"] = false;
                        // line 221
                        echo "                            ";
                        if (($this->getAttribute($context["group"], "attr_id", array(), "array") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "attribute", array(), "array"), $this->getAttribute($context["group"], "attr_id", array(), "array"), array(), "array"))) {
                            // line 222
                            echo "                                ";
                            $context["collapsedGroup"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "attribute", array(), "array"), $this->getAttribute($context["group"], "attr_id", array(), "array"), array(), "array"), "collapsed", array(), "array");
                            // line 223
                            echo "                            ";
                        } elseif (($this->getAttribute($context["group"], "option_id", array(), "array") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "options", array(), "array"), $this->getAttribute($context["group"], "option_id", array(), "array"), array(), "array"))) {
                            // line 224
                            echo "                                ";
                            $context["collapsedGroup"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "options", array(), "array"), $this->getAttribute($context["group"], "option_id", array(), "array"), array(), "array"), "collapsed", array(), "array");
                            // line 225
                            echo "                            ";
                        } elseif (($this->getAttribute($context["group"], "filter_id", array(), "array") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "filter", array(), "array"), $this->getAttribute($context["group"], "filter_id", array(), "array"), array(), "array"))) {
                            // line 226
                            echo "                                ";
                            $context["collapsedGroup"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "filter", array(), "array"), $this->getAttribute($context["group"], "filter_id", array(), "array"), array(), "array"), "collapsed", array(), "array");
                            // line 227
                            echo "                            ";
                        }
                        // line 228
                        echo "                            ";
                        $context["groupUID"] = (twig_slice($this->env, $this->getAttribute($context["section"], "type", array(), "array"), 0, 1) . $context["groupId"]);
                        // line 229
                        echo "                            <div class=\"bf-attr-block";
                        if (twig_in_filter($this->getAttribute($context["group"], "type", array(), "array"), array(0 => "slider", 1 => "slider_lbl", 2 => "slider_lbl_inp"))) {
                            echo " bf-slider ";
                        }
                        echo "\">
                            <div class=\"bf-attr-header";
                        // line 230
                        if (($this->getAttribute($context["section"], "collapsed", array(), "array") || (isset($context["collapsedGroup"]) ? $context["collapsedGroup"] : null))) {
                            echo " bf-collapse ";
                        }
                        if ( !$context["i"]) {
                            echo " bf-w-line ";
                        }
                        echo "\">
                                ";
                        // line 231
                        echo ($this->getAttribute($context["group"], "name", array(), "array") . " ");
                        echo "<span class=\"bf-arrow\"></span>
                            </div>
                            <div class=\"bf-attr-block-cont\">
                                    ";
                        // line 234
                        $context["group"] = (($this->getAttribute($context["group"], "type", array(), "array", true, true)) ? (twig_array_merge($context["group"], array("type" => $this->getAttribute($context["group"], "type", array(), "array")))) : (twig_array_merge($context["group"], array("type" => "checkbox"))));
                        // line 235
                        echo "                                
                                ";
                        // line 236
                        if (($this->getAttribute($context["group"], "type", array(), "array") == "select")) {
                            // line 237
                            echo "                                
                                    <div class=\"bf-attr-filter bf-attr-";
                            // line 238
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo " bf-row\">
                                        <div class=\"bf-cell\">
                                            <select name=\"bfp_";
                            // line 240
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo "\">
                                                <option value=\"\" class=\"bf-default\">";
                            // line 241
                            echo (isset($context["default_value_select"]) ? $context["default_value_select"] : null);
                            echo "</option>
                                                ";
                            // line 242
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "values", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                                // line 243
                                echo "                                                    ";
                                $context["isSelected"] = ($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter($this->getAttribute($context["value"], "id", array(), "array"), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")));
                                // line 244
                                echo "                                                    <option value=\"";
                                echo $this->getAttribute($context["value"], "id", array(), "array");
                                echo "\" class=\"bf-attr-val\" ";
                                if ((isset($context["isSelected"]) ? $context["isSelected"] : null)) {
                                    echo " selected=\"true\" ";
                                }
                                // line 245
                                echo "                                                        ";
                                if ((((isset($context["totals"]) ? $context["totals"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), $this->getAttribute($context["value"], "id", array(), "array"), array(), "array", true, true)) &&  !(isset($context["isSelected"]) ? $context["isSelected"] : null))) {
                                    // line 246
                                    echo "                                                            disabled=\"disabled\"
                                                        ";
                                }
                                // line 248
                                echo "                                                        ";
                                if (($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), $this->getAttribute($context["value"], "id", array(), "array"), array(), "array", true, true) &&  !(isset($context["isSelected"]) ? $context["isSelected"] : null))) {
                                    // line 249
                                    echo "                                                            data-totals=\"";
                                    echo (($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), $this->getAttribute($context["value"], "id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), $this->getAttribute($context["value"], "id", array(), "array"), array(), "array")) : (0));
                                    echo "\"
                                                        ";
                                }
                                // line 250
                                echo " >
                                                        ";
                                // line 251
                                echo $this->getAttribute($context["value"], "name", array(), "array");
                                echo "
                                                    </option>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 254
                            echo "                                            </select>
                                        </div>
                                    </div>
                                
                                ";
                        } elseif (twig_in_filter($this->getAttribute(                        // line 258
$context["group"], "type", array(), "array"), array(0 => "slider", 1 => "slider_lbl", 2 => "slider_lbl_inp"))) {
                            // line 259
                            echo "                                
                                <div class=\"bf-attr-filter bf-attr-";
                            // line 260
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo " bf-row\">
                                    <div class=\"bf-cell\">
                                        <div class=\"bf-slider-inputs\">
                                            ";
                            // line 263
                            $context["isMinSet"] = $this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), "min", array(), "array", true, true);
                            // line 264
                            echo "                                            ";
                            $context["isMaxSet"] = $this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), "max", array(), "array", true, true);
                            // line 265
                            echo "                                            ";
                            $context["sliderType"] = ((($this->getAttribute($context["group"], "type", array(), "array") === "slider_lbl_inp")) ? (3) : (((($this->getAttribute($context["group"], "type", array(), "array") === "slider_lbl")) ? (2) : (1))));
                            // line 266
                            echo "                                            <input type=\"hidden\" name=\"bfp_min_";
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo "\" value=\"";
                            echo (((isset($context["isMinSet"]) ? $context["isMinSet"] : null)) ? ($this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), "min", array(), "array")) : ("na"));
                            echo "\" class=\"bf-attr-min-";
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo "\" data-min-limit=\"";
                            echo $this->getAttribute($this->getAttribute($context["group"], "min", array(), "array"), "s", array(), "array");
                            echo "\" />
                                            <input type=\"hidden\" name=\"bfp_max_";
                            // line 267
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo "\" value=\"";
                            echo (((isset($context["isMaxSet"]) ? $context["isMaxSet"] : null)) ? ($this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), "max", array(), "array")) : ("na"));
                            echo "\" class=\"bf-attr-max-";
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo "\" data-max-limit=\"";
                            echo $this->getAttribute($this->getAttribute($context["group"], "max", array(), "array"), "s", array(), "array");
                            echo "\" /> 
                                            ";
                            // line 268
                            if (($this->getAttribute($context["group"], "type", array(), "array") != "slider_lbl")) {
                                // line 269
                                echo "                                                ";
                                $context["minLbl"] = "";
                                // line 270
                                echo "                                                ";
                                $context["maxLbl"] = "";
                                // line 271
                                echo "                                                ";
                                if ((isset($context["isMinSet"]) ? $context["isMinSet"] : null)) {
                                    // line 272
                                    echo "                                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "values", array(), "array"));
                                    foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                                        // line 273
                                        echo "                                                        ";
                                        if (($this->getAttribute($context["v"], "s", array(), "array") == $this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), "min", array(), "array"))) {
                                            // line 274
                                            echo "                                                            ";
                                            $context["minLbl"] = $this->getAttribute($context["v"], "n", array(), "array");
                                            // line 275
                                            echo "                                                            ";
                                            echo (isset($context["break"]) ? $context["break"] : null);
                                            echo "
                                                        ";
                                        }
                                        // line 277
                                        echo "                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 278
                                    echo "                                                ";
                                }
                                // line 279
                                echo "                                                ";
                                if ((isset($context["isMaxSet"]) ? $context["isMaxSet"] : null)) {
                                    // line 280
                                    echo "                                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "values", array(), "array"));
                                    foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                                        // line 281
                                        echo "                                                        ";
                                        if (($this->getAttribute($context["v"], "s", array(), "array") == $this->getAttribute($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), "max", array(), "array"))) {
                                            // line 282
                                            echo "                                                            ";
                                            $context["maxLbl"] = $this->getAttribute($context["v"], "n", array(), "array");
                                            // line 283
                                            echo "                                                            ";
                                            echo (isset($context["break"]) ? $context["break"] : null);
                                            echo "
                                                        ";
                                        }
                                        // line 285
                                        echo "                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 286
                                    echo "                                                ";
                                }
                                // line 287
                                echo "                                            <input type=\"text\" name=\"\" class=\"bf-slider-text-inp-min bf-slider-input\" value=\"";
                                echo (isset($context["minLbl"]) ? $context["minLbl"] : null);
                                echo "\" placeholder=\"";
                                echo (isset($context["lang_empty_slider"]) ? $context["lang_empty_slider"] : null);
                                echo "\" />
                                            <span class=\"ndash\">&#8211;</span>
                                            <input type=\"text\" name=\"\" class=\"bf-slider-text-inp-max bf-slider-input\" value=\"";
                                // line 289
                                echo (isset($context["maxLbl"]) ? $context["maxLbl"] : null);
                                echo "\" placeholder=\"";
                                echo (isset($context["lang_empty_slider"]) ? $context["lang_empty_slider"] : null);
                                echo "\" />
                                            ";
                            }
                            // line 291
                            echo "                                        </div>
                                        <div class=\"bf-slider-container-wrapper ";
                            // line 292
                            if ((((isset($context["sliderType"]) ? $context["sliderType"] : null) === 2) || ((isset($context["sliderType"]) ? $context["sliderType"] : null) === 3))) {
                                echo " bf-slider-with-labels ";
                            }
                            echo "\">
                                            <div class=\"bf-slider-container\" data-slider-group=\"";
                            // line 293
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo "\" data-slider-type=\"";
                            echo (isset($context["sliderType"]) ? $context["sliderType"] : null);
                            echo "\"></div>
                                        </div>
                                    </div>  
                                </div>
                                
                                ";
                        } elseif (($this->getAttribute(                        // line 298
$context["group"], "type", array(), "array") === "grid")) {
                            // line 299
                            echo "                                
                                <div class=\"bf-attr-filter bf-attr-";
                            // line 300
                            echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                            echo " bf-row\">
                                    <div class=\"bf-grid\">
                                        ";
                            // line 302
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "values", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                                // line 303
                                echo "                                            ";
                                $context["valueId"] = $this->getAttribute($context["value"], "id", array(), "array");
                                // line 304
                                echo "                                        <div class=\"bf-grid-item\">
                                            <input id=\"bf-attr-";
                                // line 305
                                echo (((((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["valueId"]) ? $context["valueId"] : null)) . "_") . (isset($context["layout_id"]) ? $context["layout_id"] : null));
                                echo "\" class=\"bf-hidden\"
                                                    data-filterid=\"bf-attr-";
                                // line 306
                                echo (((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["valueId"]) ? $context["valueId"] : null));
                                echo "\"
                                                    type=\"radio\" 
                                                    name=\"\"bfp_";
                                // line 308
                                echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                                echo "\"
                                                    value=\"";
                                // line 309
                                echo (isset($context["valueId"]) ? $context["valueId"] : null);
                                echo "\" 
                                                    ";
                                // line 310
                                if (($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter((isset($context["valueId"]) ? $context["valueId"] : null), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")))) {
                                    echo " checked=\"true\" ";
                                }
                                echo " />
                                            <label for=\"bf-attr-";
                                // line 311
                                echo (((((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["valueId"]) ? $context["valueId"] : null)) . "_") . (isset($context["layout_id"]) ? $context["layout_id"] : null));
                                echo "\">
                                                <img src=\"image/";
                                // line 312
                                echo $this->getAttribute($context["value"], "image", array(), "array");
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["value"], "name", array(), "array");
                                echo "\" />
                                            </label>
                                            <span class=\"bf-hidden bf-attr-val\">";
                                // line 314
                                echo (isset($context["valueId"]) ? $context["valueId"] : null);
                                echo "</span>
                                        </div>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 317
                            echo "                                    </div>
                                </div>
                                
                                ";
                        } else {
                            // line 321
                            echo "                                
                                    ";
                            // line 322
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "values", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                                // line 323
                                echo "                                        ";
                                $context["valueId"] = $this->getAttribute($context["value"], "id", array(), "array");
                                // line 324
                                echo "                                    <div class=\"bf-attr-filter bf-attr-";
                                echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                                echo " bf-row
                                        ";
                                // line 325
                                if ((array_key_exists("totals", $context) && $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "hide_empty", array(), "array"))) {
                                    // line 326
                                    echo "                                            ";
                                    $context["inStock"] = ((isset($context["postponedCount"]) ? $context["postponedCount"] : null) || ($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), (isset($context["valueId"]) ? $context["valueId"] : null), array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), (isset($context["valueId"]) ? $context["valueId"] : null), array(), "array")));
                                    // line 327
                                    echo "                                            ";
                                    $context["inSelected"] = ($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter((isset($context["valueId"]) ? $context["valueId"] : null), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")));
                                    // line 328
                                    echo "                                            ";
                                    if (( !(isset($context["inStock"]) ? $context["inStock"] : null) &&  !(isset($context["inSelected"]) ? $context["inSelected"] : null))) {
                                        // line 329
                                        echo "                                                bf-disabled
                                            ";
                                    }
                                    // line 331
                                    echo "                                        ";
                                }
                                echo "\">
                                        <span class=\"bf-cell bf-c-1\">
                                            <input id=\"bf-attr-";
                                // line 333
                                echo (((((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["valueId"]) ? $context["valueId"] : null)) . "_") . (isset($context["layout_id"]) ? $context["layout_id"] : null));
                                echo "\"
                                                   data-filterid=\"bf-attr-";
                                // line 334
                                echo (((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["valueId"]) ? $context["valueId"] : null));
                                echo "\"
                                                   type=\"";
                                // line 335
                                echo $this->getAttribute($context["group"], "type", array(), "array");
                                echo "\" 
                                                   name=\"bfp_";
                                // line 336
                                echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                                if (($this->getAttribute($context["group"], "type", array(), "array") === "checkbox")) {
                                    echo ("_" . (isset($context["valueId"]) ? $context["valueId"] : null));
                                    echo " ";
                                }
                                echo "\"
                                                   value=\"";
                                // line 337
                                echo (isset($context["valueId"]) ? $context["valueId"] : null);
                                echo "\" 
                                                   ";
                                // line 338
                                if (($this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true) && twig_in_filter((isset($context["valueId"]) ? $context["valueId"] : null), $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array")))) {
                                    echo " checked=\"true\" ";
                                }
                                echo " />
                                        </span>
                                        <span class=\"bf-cell bf-c-2 ";
                                // line 340
                                if (($this->getAttribute($context["section"], "type", array(), "array") == "rating")) {
                                    echo " ";
                                    echo ("bf-rating-" . (isset($context["valueId"]) ? $context["valueId"] : null));
                                    echo " ";
                                }
                                echo "\">
                                            <span class=\"bf-hidden bf-attr-val\">";
                                // line 341
                                echo (isset($context["valueId"]) ? $context["valueId"] : null);
                                echo "</span>
                                            <label for=\"bf-attr-";
                                // line 342
                                echo (((((isset($context["groupUID"]) ? $context["groupUID"] : null) . "_") . (isset($context["valueId"]) ? $context["valueId"] : null)) . "_") . (isset($context["layout_id"]) ? $context["layout_id"] : null));
                                echo "\">
                                                ";
                                // line 343
                                if (($this->getAttribute($context["section"], "type", array(), "array") === "option")) {
                                    // line 344
                                    echo "                                                    ";
                                    if ((($this->getAttribute($context["group"], "mode", array(), "array") === "img") || ($this->getAttribute($context["group"], "mode", array(), "array") === "img_label"))) {
                                        // line 345
                                        echo "                                                        <img src=\"image/";
                                        echo $this->getAttribute($context["value"], "image", array(), "array");
                                        echo "\" alt=\"";
                                        echo $this->getAttribute($context["value"], "name", array(), "array");
                                        echo "\" />
                                                    ";
                                    }
                                    // line 347
                                    echo "                                                    ";
                                    if ((($this->getAttribute($context["group"], "mode", array(), "array") === "label") || ($this->getAttribute($context["group"], "mode", array(), "array") === "img_label"))) {
                                        // line 348
                                        echo "                                                        ";
                                        echo $this->getAttribute($context["value"], "name", array(), "array");
                                        echo "
                                                    ";
                                    }
                                    // line 350
                                    echo "                                                ";
                                } else {
                                    // line 351
                                    echo "                                                    ";
                                    echo $this->getAttribute($context["value"], "name", array(), "array");
                                    echo "
                                                ";
                                }
                                // line 353
                                echo "                                            </label>
                                        </span>
                                        <span class=\"bf-cell bf-c-3\">
                                            ";
                                // line 356
                                if (array_key_exists("totals", $context)) {
                                    // line 357
                                    echo "                                                ";
                                    if (array_key_exists("totals", $context)) {
                                        // line 358
                                        echo "                                                    ";
                                        if (( !$this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), (isset($context["valueId"]) ? $context["valueId"] : null), array(), "array", true, true) &&  !$this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true))) {
                                            // line 359
                                            echo "                                                        ";
                                            echo "";
                                            echo "
                                                    ";
                                        } else {
                                            // line 361
                                            echo "                                                        ";
                                            $context["total"] = (($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", false, true), (isset($context["valueId"]) ? $context["valueId"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array"), (isset($context["valueId"]) ? $context["valueId"] : null), array(), "array")) : (0));
                                            // line 362
                                            echo "                                                        ";
                                            $context["addPlusSign"] = $this->getAttribute((isset($context["selected"]) ? $context["selected"] : null), (isset($context["groupUID"]) ? $context["groupUID"] : null), array(), "array", true, true);
                                            // line 363
                                            echo "                                                        <span class=\"bf-count ";
                                            echo (( !(isset($context["total"]) ? $context["total"] : null)) ? ("bf-empty") : (""));
                                            echo "\">";
                                            echo (((isset($context["addPlusSign"]) ? $context["addPlusSign"] : null)) ? ("+") : (""));
                                            echo (isset($context["total"]) ? $context["total"] : null);
                                            echo "</span>
                                                    ";
                                        }
                                        // line 365
                                        echo "                                                ";
                                    }
                                    // line 366
                                    echo "                                            ";
                                }
                                // line 367
                                echo "                                        </span>
                                    </div>
                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 370
                            echo "                                ";
                        }
                        // line 371
                        echo "                            </div>
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['groupId'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "                    ";
                }
                // line 375
                echo "                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "                ";
            if (( !(isset($context["isHorizontal"]) ? $context["isHorizontal"] : null) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_type", array(), "array") == "button"))) {
                echo " <div class=\"bf-buttonclear-box\"";
                if (((isset($context["isHorizontal"]) ? $context["isHorizontal"] : null) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_button_type", array(), "array") == "float"))) {
                    echo " style=\"display:none;\" ";
                }
                echo ">
                         <input type=\"button\" value=\"";
                // line 378
                echo (isset($context["lang_submit"]) ? $context["lang_submit"] : null);
                echo "\" class=\"btn btn-primary bf-buttonsubmit\" onclick=\"BrainyFilter.sendRequest(jQuery(this));BrainyFilter.loadingAnimation();return false;\" ";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_button_type", array(), "array") != "fix") && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "submission", array(), "array"), "submit_type", array(), "array") != "button"))) {
                    echo "style=\"display:none;\" ";
                }
                echo " />
                   ";
                // line 379
                if ( !(isset($context["isHorizontal"]) ? $context["isHorizontal"] : null)) {
                    echo "<input type=\"reset\" class=\"bf-buttonclear\" onclick=\"BrainyFilter.reset();return false;\" value=\"";
                    echo (isset($context["reset"]) ? $context["reset"] : null);
                    echo "\" />";
                }
                echo "  
                </div> ";
            }
            // line 381
            echo "            </form>
        </div>
    </div>
</div>
<script>
var bfLang = {
    show_more : '";
            // line 387
            echo (isset($context["lang_show_more"]) ? $context["lang_show_more"] : null);
            echo "',
    show_less : '";
            // line 388
            echo (isset($context["lang_show_less"]) ? $context["lang_show_less"] : null);
            echo "',
    empty_list : '";
            // line 389
            echo (isset($context["lang_empty_list"]) ? $context["lang_empty_list"] : null);
            echo "'
};
BrainyFilter.requestCount = BrainyFilter.requestCount || ";
            // line 391
            echo (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "product_count", array(), "array")) ? ("true") : ("false"));
            echo ";
BrainyFilter.requestPrice = BrainyFilter.requestPrice || ";
            // line 392
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "sections", array(), "array"), "price", array(), "array"), "enabled", array(), "array")) ? ("true") : ("false"));
            echo ";
BrainyFilter.separateCountRequest = BrainyFilter.separateCountRequest || ";
            // line 393
            echo (((isset($context["postponedCount"]) ? $context["postponedCount"] : null)) ? ("true") : ("false"));
            echo ";
BrainyFilter.min = BrainyFilter.min || ";
            // line 394
            echo (isset($context["priceMin"]) ? $context["priceMin"] : null);
            echo ";
BrainyFilter.max = BrainyFilter.max || ";
            // line 395
            echo (isset($context["priceMax"]) ? $context["priceMax"] : null);
            echo ";
BrainyFilter.lowerValue = BrainyFilter.lowerValue || ";
            // line 396
            echo (isset($context["lowerlimit"]) ? $context["lowerlimit"] : null);
            echo "; 
BrainyFilter.higherValue = BrainyFilter.higherValue || ";
            // line 397
            echo (isset($context["upperlimit"]) ? $context["upperlimit"] : null);
            echo ";
BrainyFilter.currencySymb = BrainyFilter.currencySymb || '";
            // line 398
            echo (isset($context["currency_symbol"]) ? $context["currency_symbol"] : null);
            echo "';
BrainyFilter.hideEmpty = BrainyFilter.hideEmpty || ";
            // line 399
            echo twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "hide_empty", array(), "array"));
            echo ";
BrainyFilter.baseUrl = BrainyFilter.baseUrl || \"";
            // line 400
            echo (isset($context["base"]) ? $context["base"] : null);
            echo "\";
BrainyFilter.currentRoute = BrainyFilter.currentRoute || \"";
            // line 401
            echo (isset($context["currentRoute"]) ? $context["currentRoute"] : null);
            echo "\";
BrainyFilter.selectors = BrainyFilter.selectors || {
    'container' : '";
            // line 403
            echo $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "containerSelector", array(), "array");
            echo "',
    'paginator' : '";
            // line 404
            echo $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "behaviour", array(), "array"), "paginatorSelector", array(), "array");
            echo "'
};
";
            // line 406
            if ((isset($context["redirectToUrl"]) ? $context["redirectToUrl"] : null)) {
                // line 407
                echo "BrainyFilter.redirectTo = BrainyFilter.redirectTo || \"";
                echo (isset($context["redirectToUrl"]) ? $context["redirectToUrl"] : null);
                echo "\";
";
            }
            // line 409
            echo "jQuery(function() {
    if (!BrainyFilter.isInitialized) {
        BrainyFilter.isInitialized = true;
        var def = jQuery.Deferred();
        def.then(function() {
            if('ontouchend' in document && jQuery.ui) {
                jQuery('head').append('<script src=\"catalog/view/javascript/jquery.ui.touch-punch.min.js\"></script' + '>');
            }
        });
        if (typeof jQuery.fn.slider === 'undefined') {
            jQuery.getScript('catalog/view/javascript/jquery-ui.slider.min.js', function(){
                def.resolve();
                jQuery('head').append('<link rel=\"stylesheet\" href=\"catalog/view/theme/default/stylesheet/jquery-ui.slider.min.css\" type=\"text/css\" />');
                BrainyFilter.init();
            });
        } else {
            def.resolve();
            BrainyFilter.init();
        }
    }
});
BrainyFilter.sliderValues = BrainyFilter.sliderValues || {};
";
            // line 431
            if (twig_length_filter($this->env, (isset($context["filters"]) ? $context["filters"] : null))) {
                // line 432
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
                foreach ($context['_seq'] as $context["i"] => $context["section"]) {
                    // line 433
                    echo "        ";
                    if (($this->getAttribute($context["section"], "array", array(), "array", true, true) && twig_length_filter($this->env, $this->getAttribute($context["section"], "array", array(), "array")))) {
                        // line 434
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "array", array(), "array"));
                        foreach ($context['_seq'] as $context["groupId"] => $context["group"]) {
                            // line 435
                            echo "                ";
                            $context["groupUID"] = (twig_slice($this->env, $this->getAttribute($context["section"], "type", array(), "array"), 0, 1) . $context["groupId"]);
                            // line 436
                            echo "                ";
                            if (twig_in_filter($this->getAttribute($context["group"], "type", array(), "array"), array(0 => "slider", 1 => "slider_lbl", 2 => "slider_lbl_inp"))) {
                                // line 437
                                echo "                    BrainyFilter.sliderValues['";
                                echo (isset($context["groupUID"]) ? $context["groupUID"] : null);
                                echo "'] = ";
                                echo twig_jsonencode_filter($this->getAttribute($context["group"], "values", array(), "array"));
                                echo ";
                ";
                            }
                            // line 439
                            echo "            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['groupId'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 440
                        echo "        ";
                    }
                    // line 441
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 443
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/brainyfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1376 => 443,  1369 => 441,  1366 => 440,  1360 => 439,  1352 => 437,  1349 => 436,  1346 => 435,  1341 => 434,  1338 => 433,  1333 => 432,  1331 => 431,  1307 => 409,  1301 => 407,  1299 => 406,  1294 => 404,  1290 => 403,  1285 => 401,  1281 => 400,  1277 => 399,  1273 => 398,  1269 => 397,  1265 => 396,  1261 => 395,  1257 => 394,  1253 => 393,  1249 => 392,  1245 => 391,  1240 => 389,  1236 => 388,  1232 => 387,  1224 => 381,  1215 => 379,  1207 => 378,  1198 => 377,  1191 => 375,  1188 => 374,  1180 => 371,  1177 => 370,  1169 => 367,  1166 => 366,  1163 => 365,  1154 => 363,  1151 => 362,  1148 => 361,  1142 => 359,  1139 => 358,  1136 => 357,  1134 => 356,  1129 => 353,  1123 => 351,  1120 => 350,  1114 => 348,  1111 => 347,  1103 => 345,  1100 => 344,  1098 => 343,  1094 => 342,  1090 => 341,  1082 => 340,  1075 => 338,  1071 => 337,  1063 => 336,  1059 => 335,  1055 => 334,  1051 => 333,  1045 => 331,  1041 => 329,  1038 => 328,  1035 => 327,  1032 => 326,  1030 => 325,  1025 => 324,  1022 => 323,  1018 => 322,  1015 => 321,  1009 => 317,  1000 => 314,  993 => 312,  989 => 311,  983 => 310,  979 => 309,  975 => 308,  970 => 306,  966 => 305,  963 => 304,  960 => 303,  956 => 302,  951 => 300,  948 => 299,  946 => 298,  936 => 293,  930 => 292,  927 => 291,  920 => 289,  912 => 287,  909 => 286,  903 => 285,  897 => 283,  894 => 282,  891 => 281,  886 => 280,  883 => 279,  880 => 278,  874 => 277,  868 => 275,  865 => 274,  862 => 273,  857 => 272,  854 => 271,  851 => 270,  848 => 269,  846 => 268,  836 => 267,  825 => 266,  822 => 265,  819 => 264,  817 => 263,  811 => 260,  808 => 259,  806 => 258,  800 => 254,  791 => 251,  788 => 250,  782 => 249,  779 => 248,  775 => 246,  772 => 245,  765 => 244,  762 => 243,  758 => 242,  754 => 241,  750 => 240,  745 => 238,  742 => 237,  740 => 236,  737 => 235,  735 => 234,  729 => 231,  720 => 230,  713 => 229,  710 => 228,  707 => 227,  704 => 226,  701 => 225,  698 => 224,  695 => 223,  692 => 222,  689 => 221,  686 => 220,  683 => 219,  680 => 218,  678 => 217,  673 => 216,  670 => 215,  667 => 214,  662 => 213,  660 => 212,  657 => 211,  651 => 207,  648 => 206,  640 => 203,  637 => 202,  628 => 200,  625 => 199,  622 => 198,  616 => 196,  613 => 195,  611 => 194,  604 => 190,  600 => 189,  596 => 188,  592 => 187,  585 => 185,  581 => 184,  574 => 183,  570 => 182,  566 => 181,  562 => 180,  556 => 178,  552 => 176,  549 => 175,  546 => 174,  543 => 173,  541 => 172,  536 => 171,  533 => 170,  528 => 169,  522 => 165,  512 => 162,  506 => 161,  503 => 160,  500 => 159,  497 => 158,  492 => 157,  490 => 156,  481 => 155,  478 => 154,  475 => 153,  471 => 152,  467 => 151,  463 => 150,  457 => 148,  455 => 147,  452 => 146,  450 => 145,  444 => 142,  434 => 141,  430 => 139,  428 => 138,  419 => 132,  411 => 127,  401 => 126,  395 => 125,  392 => 124,  390 => 123,  381 => 117,  374 => 116,  369 => 114,  364 => 113,  358 => 110,  354 => 109,  349 => 107,  345 => 106,  342 => 105,  340 => 104,  333 => 100,  323 => 99,  316 => 98,  313 => 97,  310 => 96,  308 => 95,  305 => 94,  301 => 93,  298 => 92,  292 => 90,  289 => 89,  283 => 87,  280 => 86,  276 => 84,  272 => 82,  270 => 81,  265 => 79,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  241 => 73,  237 => 72,  233 => 71,  226 => 70,  221 => 69,  217 => 68,  211 => 67,  204 => 65,  194 => 64,  188 => 63,  175 => 60,  173 => 59,  170 => 58,  163 => 54,  159 => 53,  155 => 52,  150 => 50,  146 => 49,  142 => 48,  137 => 46,  133 => 45,  129 => 44,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  107 => 37,  102 => 35,  98 => 34,  94 => 33,  89 => 31,  85 => 30,  81 => 29,  78 => 28,  72 => 26,  70 => 25,  66 => 24,  63 => 23,  57 => 21,  55 => 20,  51 => 19,  46 => 17,  42 => 16,  38 => 15,  33 => 13,  29 => 12,  25 => 10,  23 => 9,  21 => 8,  19 => 7,);
    }
}
/* {#*/
/*  * Brainy Filter Pro 5.1.3 OC3, September 18, 2017 / brainyfilter.com */
/*  * Copyright 2015-2017 Giant Leap Lab / www.giantleaplab.com */
/*  * License: Commercial. Reselling of this software or its derivatives is not allowed. You may use this software for one website ONLY including all its subdomains if the top level domain belongs to you and all subdomains are parts of the same OpenCart store. */
/*  * Support: http://support.giantleaplab.com */
/* #}*/
/* {% set isHorizontal = layout_position is same as ('content_top') or layout_position is same as ('content_bottom') %}*/
/* {% set isResponsive = settings['style']['responsive']['enabled'] ? true : false %}*/
/* {% set responsivePos = settings['style']['responsive']['position'] is same as ('right') ? 'bf-right' : 'bf-left' %}*/
/* */
/* <style type="text/css">*/
/*     .bf-responsive.bf-active.bf-layout-id-{{ layout_id }} .bf-check-position {*/
/*         top: {{ settings['style']['responsive']['offset']|number_format }}px;*/
/*     }*/
/*     .bf-responsive.bf-active.bf-layout-id-{{ layout_id }} .bf-btn-show, */
/*     .bf-responsive.bf-active.bf-layout-id-{{ layout_id }} .bf-btn-reset {*/
/*         top: {{ settings['style']['responsive']['offset']|number_format }}px;*/
/*     }*/
/*     .bf-layout-id-{{ layout_id }} .bf-btn-show {*/
/*         {% if settings['style']['resp_show_btn_color']['val'] is defined %}*/
/*             background: {{ settings['style']['resp_show_btn_color']['val'] }};*/
/*         {% endif %}*/
/*     }*/
/*     .bf-layout-id-{{ layout_id }} .bf-btn-reset {*/
/*         {% if settings['style']['resp_reset_btn_color']['val'] is defined %}*/
/*             background: {{ settings['style']['resp_reset_btn_color']['val'] }};*/
/*         {% endif %}*/
/*     }*/
/*     .bf-layout-id-{{ layout_id }} .bf-attr-header{*/
/*         {{ settings['style']['block_header_background']['val'] is defined  ? 'background: ' ~ settings['style']['block_header_background']['val'] ~ ';':'' }}*/
/*         {{ settings['style']['block_header_text']['val'] is defined ? 'color: ' ~ settings['style']['block_header_text']['val'] ~ ';':'' }} */
/*     }*/
/*     .bf-layout-id-{{ layout_id }} .bf-count{*/
/*         {{ settings['style']['product_quantity_background']['val'] is defined ? 'background: ' ~ settings['style']['product_quantity_background']['val'] ~ ';':'' }} */
/*         {{ settings['style']['product_quantity_text']['val'] is defined ? 'color: ' ~ settings['style']['product_quantity_text']['val'] ~ ';':'' }} */
/*     }*/
/*    .bf-layout-id-{{ layout_id }} .ui-widget-header {*/
/*         {{ settings['style']['price_slider_area_background']['val'] is defined ? 'background: ' ~ settings['style']['price_slider_area_background']['val'] ~ ';':'' }} */
/*     }*/
/*    .bf-layout-id-{{ layout_id }} .ui-widget-content {*/
/*         {{ settings['style']['price_slider_background']['val'] is defined ? 'background: ' ~ settings['style']['price_slider_background']['val'] ~ ';':'' }} */
/*         {{ settings['style']['price_slider_border']['val'] is defined ? 'border:1px solid' ~ settings['style']['price_slider_border']['val'] ~ ';':'' }} */
/*     }*/
/*     .bf-layout-id-{{ layout_id }} .ui-state-default {*/
/*         {{ settings['style']['price_slider_handle_background']['val'] is defined ? 'background:' ~ settings['style']['price_slider_handle_background']['val'] ~ ';':'' }} */
/*         {{ settings['style']['price_slider_handle_border']['val'] is defined ? 'border:1px solid' ~ settings['style']['price_slider_handle_border']['val'] ~ ';':'' }} */
/*    }*/
/*     .bf-layout-id-{{ layout_id }} .bf-attr-group-header{*/
/*         {{ settings['style']['group_block_header_background']['val'] is defined ? 'background:' ~ settings['style']['group_block_header_background']['val'] ~ ';':'' }} */
/*         {{ settings['style']['group_block_header_text']['val'] is defined ? 'color:' ~ settings['style']['group_block_header_text']['val'] ~ ';':'' }} */
/*     }*/
/*     {% if settings['behaviour']['hide_empty'] %}>*/
/*         .bf-layout-id-{{ layout_id }} .bf-row.bf-disabled, */
/*         .bf-layout-id-{{ layout_id }} .bf-horizontal .bf-row.bf-disabled {*/
/*             display: none;*/
/*         }*/
/*     {% endif %}*/
/* </style>*/
/* {% if filters|length %}*/
/* <div class="bf-panel-wrapper{% if isResponsive %} bf-responsive {% endif %} {{ responsivePos }} bf-layout-id-{{ layout_id }}">*/
/*     <div class="bf-btn-show"></div>*/
/*     <a class="bf-btn-reset" onclick="BrainyFilter.reset();"></a>*/
/*     <div class="box bf-check-position {% if isHorizontal %} bf-horizontal {% endif %}">*/
/*         <div class="box-heading">{{ lang_block_title }} {% if isHorizontal %} <a class="bf-toggle-filter-arrow"></a><input type="reset" class="bf-buttonclear" onclick="BrainyFilter.reset();" value="{{ reset }}" /> {% endif %}</div>*/
/*         <div class="brainyfilter-panel box-content {% if settings['submission']['hide_panel'] %} bf-hide-panel {% endif %}">*/
/*             <form class="bf-form */
/*                     {% if settings['behaviour']['product_count'] %} bf-with-counts {% endif %} */
/*                     {% if sliding %} bf-with-sliding {% endif %}*/
/*                     {% if settings['submission']['submit_type'] is same as ('button') and settings['submission']['submit_button_type'] is same as ('float') %} bf-with-float-btn {% endif %}*/
/*                     {% if limit_height %} bf-with-height-limit {% endif %}"*/
/*                     data-height-limit="{{ limit_height_opts }}"*/
/*                     data-visible-items="{{ slidingOpts }}"*/
/*                     data-hide-items="{{ slidingMin }}"*/
/*                     data-submit-type="{{ settings['submission']['submit_type'] }}"*/
/*                     data-submit-delay="{{ settings['submission']['submit_delay_time']|number_format }}"*/
/*                     data-submit-hide-panel ="{{ settings['submission']['hide_panel']|number_format }}"*/
/*                     data-resp-max-width="{{ settings['style']['responsive']['max_width']|number_format }}"*/
/*                     data-resp-collapse="{{ settings['style']['responsive']['collapsed']|number_format }}"*/
/*                     data-resp-max-scr-width ="{{ settings['style']['responsive']['max_screen_width']|number_format }}"*/
/*                     method="get" action="index.php">*/
/*                 {% if currentRoute is same as ('product/search') %}*/
/*                     <input type="hidden" name="route" value="product/search" />*/
/*                 {% else %}*/
/*                     <input type="hidden" name="route" value="product/category" />*/
/*                 {% endif %}*/
/*                 {% if currentPath %}*/
/*                     <input type="hidden" name="path" value="{{ currentPath }}" />*/
/*                 {% endif %}*/
/*                 {% if manufacturerId %}*/
/*                     <input type="hidden" name="manufacturer_id" value="{{ manufacturerId }}" />*/
/*                 {% endif %}*/
/* */
/*                 {% for i, section in filters %}*/
/*                         */
/*                     {% if section['type'] == 'price' %}*/
/*                         {% set sliderType = section['control'] is same as ('slider_lbl_inp') ? 3 : (section['control'] is same as ('slider_lbl') ? 2 : 1) %}*/
/*                         {% set inputType  = sliderType in [1, 3] ? 'text' : 'hidden' %}*/
/*                         <div class="bf-attr-block bf-price-filter {% if isHorizontal and filters[i + 1] is defined and filters[i + 1]['type'] is same as ('search') %}bf-left-half{% endif %}">*/
/*                         <div class="bf-attr-header {% if section['collapsed'] %} bf-collapse {% endif %} {% if not i %} bf-w-line {% endif %}">*/
/*                             {{ lang_price }}<span class="bf-arrow"></span>*/
/*                         </div>*/
/*                         <div class="bf-attr-block-cont">*/
/*                             <div class="bf-price-container box-content bf-attr-filter">*/
/*                                 {% if sliderType in [1, 3] %}*/
/*                                 <div class="bf-cur-symb">*/
/*                                     <span class="bf-cur-symb-left">{{ currency_symbol }}</span>*/
/*                                     <input type="text" class="bf-range-min" name="bfp_price_min" value="{{ lowerlimit }}" size="4" />*/
/*                                     <span class="ndash">&#8211;</span>*/
/*                                     <span class="bf-cur-symb-left">{{ currency_symbol }}</span>*/
/*                                     <input type="text" class="bf-range-max" name="bfp_price_max" value="{{ upperlimit }}" size="4" /> */
/*                                 </div>*/
/*                                 {% else %}*/
/*                                 <input type="hidden" class="bf-range-min" name="bfp_price_min" value="{{ lowerlimit }}" />*/
/*                                 <input type="hidden" class="bf-range-max" name="bfp_price_max" value="{{ upperlimit }}" /> */
/*                                 {% endif %}*/
/*                                 <div class="bf-price-slider-container {% if sliderType is same as (2) or sliderType is same as (3) %} bf-slider-with-labels {% endif %}">*/
/*                                     <div class="bf-slider-range" data-slider-type="{{ sliderType }}"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         </div>*/
/*                 */
/*                     {% elseif section['type'] == 'search' %}*/
/*                 */
/*                         <div class="bf-attr-block bf-keywords-filter {% if isHorizontal and filters[i + 1] is defined and filters[i + 1]['type'] is same as ('price') %} bf-left-half {% endif %}">*/
/*                         <div class="bf-attr-header{% if section['collapsed'] %} bf-collapse {% endif %} {% if not i %} bf-w-line {% endif %}">*/
/*                             {{ lang_search }}<span class="bf-arrow"></span>*/
/*                         </div>*/
/*                         <div class="bf-attr-block-cont">*/
/*                             <div class="bf-search-container bf-attr-filter">*/
/*                                 <div>*/
/*                                     <input type="text" class="bf-search" name="bfp_search" value="{{ bfSearch }}" /> */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         </div>*/
/*                         */
/*                     {% elseif section['type'] == 'category' %}*/
/*                         */
/*                         <div class="bf-attr-block">*/
/*                         <div class="bf-attr-header{% if section['collapsed'] %} bf-collapse {% endif %} {% if not i %} bf-w-line {% endif %}">*/
/*                             {{ lang_categories }}<span class="bf-arrow"></span>*/
/*                         </div>*/
/*                         <div class="bf-attr-block-cont">*/
/*                             {% set groupUID = 'c0' %}*/
/* */
/*                             {% if section['control'] == 'select' %}*/
/*                             <div class="bf-attr-filter bf-attr-{{ groupUID }} bf-row">*/
/*                                 <div class="bf-cell">*/
/*                                     <select name="bfp_{{ groupUID }}">*/
/*                                         <option value="" class="bf-default">{{ default_value_select }}</option>*/
/*                                         {% for cat in section['values'] %}*/
/*                                             {% set catId = cat['id'] %}*/
/*                                             {% set isSelected = selected[groupUID] is defined and catId in selected[groupUID] %}*/
/*                                             <option value="{{ catId }}" class="bf-attr-val" {% if isSelected %} selected="true" {% endif %}>*/
/*                                                 {% set level = '' %}*/
/*                                                 {% for i in 0..cat['level'] %}*/
/*                                                     {% if i %}*/
/*                                                         {% set level  = level ~ '-' %}*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                                 {{level ~ ' ' ~ cat['name']}}*/
/*                                             </option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {% else %}*/
/*                                 {% for cat in section['values'] %}*/
/*                                     {% set catId = cat['id'] %}*/
/*                                     <div class="bf-attr-filter bf-attr-{{ groupUID }} bf-row*/
/*                                         {% if totals is defined and settings['behaviour']['hide_empty'] %}*/
/*                                             {% set inStock = postponedCount or (totals[groupUID][catId] is defined and totals[groupUID][catId]) %}*/
/*                                             {% set inSelected = selected[groupUID] is defined and catId in selected[groupUID] %}*/
/*                                             {% if not inStock and not inSelected %}*/
/*                                                 bf-disabled*/
/*                                             {% endif %}*/
/*                                         {% endif %}">*/
/*                                     <span class="bf-cell bf-c-1">*/
/*                                         <input id="bf-attr-{{ groupUID ~ '_' ~ catId ~ '_' ~ layout_id }}"*/
/*                                                data-filterid="bf-attr-{{ groupUID ~ '_' ~ catId }}"*/
/*                                                type="{{ section['control'] }}" */
/*                                                name="bfp_{{ groupUID }}{% if section['control'] is same as ('checkbox') %}{{ '_' ~ catId }}{% endif %}"*/
/*                                                value="{{ catId }}" */
/*                                                {% if selected[groupUID] is defined and catId in selected[groupUID] %} checked="true" {% endif %} />*/
/*                                     </span>*/
/*                                     <span class="bf-cell bf-c-2 bf-cascade-{{ cat['level'] }}">*/
/*                                         <span class="bf-hidden bf-attr-val">{{ catId }}</span>*/
/*                                         <label for="bf-attr-{{ groupUID ~ '_' ~ catId ~ '_' ~ layout_id }}">*/
/*                                             {{ cat['name'] }}*/
/*                                         </label>*/
/*                                     </span>*/
/*                                             <span class="bf-cell bf-c-3">*/
/*                                                 {% if totals is defined %}*/
/*                                                     {% if totals[groupUID][catId] is not defined and selected[groupUID] is not defined %}*/
/*                                                         {{ '' }}*/
/*                                                     {% else %}*/
/*                                                         {% set total = totals[groupUID][catId] is defined ? totals[groupUID][catId] : 0 %}*/
/*                                                         {% set addPlusSign = selected[groupUID] is defined %}*/
/*                                                         <span class="bf-count {{ not total ? 'bf-empty' : '' }}">{{ addPlusSign ? '+' : '' }}{{ total }}</span>*/
/*                                                     {% endif %}*/
/*                                                 {% endif %}*/
/*                                             </span>*/
/*                                 </div>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         </div>*/
/*                 */
/*                     {% else %}*/
/*                         */
/*                         {% set curGroupId = null %}*/
/*                         {% for groupId, group in section['array'] %}*/
/*                             {% if group['group_id'] is defined and settings['behaviour']['attribute_groups'] %}*/
/*                                 {% if curGroupId != group['group_id'] %}*/
/*                                     <div class="bf-attr-group-header">{{ group['group'] }}</div>*/
/*                                     {% set curGroupId = group['group_id'] %}*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                             {% set collapsedGroup = false %}*/
/*                             {% if group['attr_id'] and settings['behaviour']['sections']['attribute'][group['attr_id']] %}*/
/*                                 {% set collapsedGroup = settings['behaviour']['sections']['attribute'][group['attr_id']]['collapsed'] %}*/
/*                             {% elseif group['option_id'] and settings['behaviour']['sections']['options'][group['option_id']] %}*/
/*                                 {% set collapsedGroup = settings['behaviour']['sections']['options'][group['option_id']]['collapsed'] %}*/
/*                             {% elseif group['filter_id'] and settings['behaviour']['sections']['filter'][group['filter_id']] %}*/
/*                                 {% set collapsedGroup = settings['behaviour']['sections']['filter'][group['filter_id']]['collapsed'] %}*/
/*                             {% endif %}*/
/*                             {% set groupUID = section['type']|slice(0, 1) ~ groupId %}*/
/*                             <div class="bf-attr-block{% if group['type'] in ['slider', 'slider_lbl', 'slider_lbl_inp'] %} bf-slider {% endif %}">*/
/*                             <div class="bf-attr-header{% if section['collapsed']  or collapsedGroup %} bf-collapse {% endif %}{% if not i %} bf-w-line {% endif %}">*/
/*                                 {{ group['name'] ~ ' ' }}<span class="bf-arrow"></span>*/
/*                             </div>*/
/*                             <div class="bf-attr-block-cont">*/
/*                                     {% set group = group['type'] is defined ? group|merge({'type': group['type']}) : group|merge({'type': 'checkbox'}) %}*/
/*                                 */
/*                                 {% if group['type'] == 'select' %}*/
/*                                 */
/*                                     <div class="bf-attr-filter bf-attr-{{ groupUID }} bf-row">*/
/*                                         <div class="bf-cell">*/
/*                                             <select name="bfp_{{groupUID}}">*/
/*                                                 <option value="" class="bf-default">{{ default_value_select }}</option>*/
/*                                                 {% for value in group['values'] %}*/
/*                                                     {% set isSelected = selected[groupUID] is defined and value['id'] in selected[groupUID] %}*/
/*                                                     <option value="{{ value['id'] }}" class="bf-attr-val" {% if isSelected %} selected="true" {% endif %}*/
/*                                                         {% if totals and totals[groupUID][value['id']] is not defined and  not isSelected %}*/
/*                                                             disabled="disabled"*/
/*                                                         {% endif %}*/
/*                                                         {% if totals[groupUID][value['id']] is defined and not isSelected %}*/
/*                                                             data-totals="{{ totals[groupUID][value['id']] is defined ? totals[groupUID][value['id']] : 0 }}"*/
/*                                                         {% endif %} >*/
/*                                                         {{ value['name'] }}*/
/*                                                     </option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 */
/*                                 {% elseif group['type'] in ['slider', 'slider_lbl', 'slider_lbl_inp'] %}*/
/*                                 */
/*                                 <div class="bf-attr-filter bf-attr-{{ groupUID }} bf-row">*/
/*                                     <div class="bf-cell">*/
/*                                         <div class="bf-slider-inputs">*/
/*                                             {% set isMinSet = selected[groupUID]['min'] is defined %}*/
/*                                             {% set isMaxSet = selected[groupUID]['max'] is defined %}*/
/*                                             {% set sliderType = group['type'] is same as ('slider_lbl_inp') ? 3 : (group['type'] is same as ('slider_lbl') ? 2 : 1) %}*/
/*                                             <input type="hidden" name="bfp_min_{{ groupUID }}" value="{{ isMinSet ? selected[groupUID]['min'] : 'na' }}" class="bf-attr-min-{{ groupUID }}" data-min-limit="{{ group['min']['s'] }}" />*/
/*                                             <input type="hidden" name="bfp_max_{{ groupUID }}" value="{{ isMaxSet ? selected[groupUID]['max'] : 'na' }}" class="bf-attr-max-{{ groupUID }}" data-max-limit="{{ group['max']['s'] }}" /> */
/*                                             {% if group['type'] != 'slider_lbl' %}*/
/*                                                 {% set minLbl = '' %}*/
/*                                                 {% set maxLbl = '' %}*/
/*                                                 {% if isMinSet %}*/
/*                                                     {% for v in group['values'] %}*/
/*                                                         {% if v['s'] == selected[groupUID]['min'] %}*/
/*                                                             {% set minLbl = v['n'] %}*/
/*                                                             {{ break }}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                                 {% if isMaxSet %}*/
/*                                                     {% for v in group['values'] %}*/
/*                                                         {% if v['s'] == selected[groupUID]['max'] %}*/
/*                                                             {% set maxLbl = v['n'] %}*/
/*                                                             {{ break }}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             <input type="text" name="" class="bf-slider-text-inp-min bf-slider-input" value="{{ minLbl }}" placeholder="{{ lang_empty_slider }}" />*/
/*                                             <span class="ndash">&#8211;</span>*/
/*                                             <input type="text" name="" class="bf-slider-text-inp-max bf-slider-input" value="{{ maxLbl }}" placeholder="{{ lang_empty_slider }}" />*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                         <div class="bf-slider-container-wrapper {% if sliderType is same as(2) or sliderType is same as (3) %} bf-slider-with-labels {% endif %}">*/
/*                                             <div class="bf-slider-container" data-slider-group="{{ groupUID }}" data-slider-type="{{ sliderType }}"></div>*/
/*                                         </div>*/
/*                                     </div>  */
/*                                 </div>*/
/*                                 */
/*                                 {% elseif group['type'] is same as ('grid') %}*/
/*                                 */
/*                                 <div class="bf-attr-filter bf-attr-{{ groupUID }} bf-row">*/
/*                                     <div class="bf-grid">*/
/*                                         {% for value in group['values'] %}*/
/*                                             {% set valueId  = value['id'] %}*/
/*                                         <div class="bf-grid-item">*/
/*                                             <input id="bf-attr-{{ groupUID ~ '_' ~ valueId ~ '_' ~ layout_id }}" class="bf-hidden"*/
/*                                                     data-filterid="bf-attr-{{ groupUID ~ '_' ~ valueId }}"*/
/*                                                     type="radio" */
/*                                                     name=""bfp_{{ groupUID }}"*/
/*                                                     value="{{ valueId }}" */
/*                                                     {% if selected[groupUID] is defined and valueId in selected[groupUID] %} checked="true" {% endif %} />*/
/*                                             <label for="bf-attr-{{ groupUID ~ '_' ~ valueId ~ '_' ~ layout_id }}">*/
/*                                                 <img src="image/{{ value['image'] }}" alt="{{ value['name'] }}" />*/
/*                                             </label>*/
/*                                             <span class="bf-hidden bf-attr-val">{{ valueId }}</span>*/
/*                                         </div>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 {% else %}*/
/*                                 */
/*                                     {% for value in group['values'] %}*/
/*                                         {% set valueId  = value['id'] %}*/
/*                                     <div class="bf-attr-filter bf-attr-{{ groupUID }} bf-row*/
/*                                         {% if totals is defined and settings['behaviour']['hide_empty'] %}*/
/*                                             {% set inStock = postponedCount or (totals[groupUID][valueId] is defined and totals[groupUID][valueId]) %}*/
/*                                             {% set inSelected = selected[groupUID] is defined and valueId in selected[groupUID] %}*/
/*                                             {% if not inStock and not inSelected %}*/
/*                                                 bf-disabled*/
/*                                             {% endif %}*/
/*                                         {% endif %}">*/
/*                                         <span class="bf-cell bf-c-1">*/
/*                                             <input id="bf-attr-{{ groupUID ~ '_' ~ valueId ~ '_' ~ layout_id }}"*/
/*                                                    data-filterid="bf-attr-{{ groupUID ~ '_' ~ valueId }}"*/
/*                                                    type="{{ group['type'] }}" */
/*                                                    name="bfp_{{ groupUID }}{% if group['type'] is same as ('checkbox') %}{{ '_' ~ valueId }} {% endif %}"*/
/*                                                    value="{{ valueId }}" */
/*                                                    {% if selected[groupUID] is defined and valueId in selected[groupUID] %} checked="true" {% endif %} />*/
/*                                         </span>*/
/*                                         <span class="bf-cell bf-c-2 {% if section['type'] == 'rating' %} {{ 'bf-rating-' ~ valueId }} {% endif %}">*/
/*                                             <span class="bf-hidden bf-attr-val">{{ valueId }}</span>*/
/*                                             <label for="bf-attr-{{ groupUID ~ '_' ~ valueId ~ '_' ~ layout_id }}">*/
/*                                                 {% if section['type'] is same as ('option') %}*/
/*                                                     {% if group['mode'] is same as ('img') or group['mode'] is same as('img_label') %}*/
/*                                                         <img src="image/{{ value['image'] }}" alt="{{ value['name'] }}" />*/
/*                                                     {% endif %}*/
/*                                                     {% if group['mode'] is same as ('label') or group['mode'] is same as ('img_label') %}*/
/*                                                         {{ value['name'] }}*/
/*                                                     {% endif %}*/
/*                                                 {% else %}*/
/*                                                     {{ value['name'] }}*/
/*                                                 {% endif %}*/
/*                                             </label>*/
/*                                         </span>*/
/*                                         <span class="bf-cell bf-c-3">*/
/*                                             {% if totals is defined %}*/
/*                                                 {% if totals is defined %}*/
/*                                                     {% if totals[groupUID][valueId] is not defined and selected[groupUID] is not defined %}*/
/*                                                         {{ '' }}*/
/*                                                     {% else %}*/
/*                                                         {% set total = totals[groupUID][valueId] is defined ? totals[groupUID][valueId] : 0 %}*/
/*                                                         {% set addPlusSign = selected[groupUID] is defined %}*/
/*                                                         <span class="bf-count {{ not total ? 'bf-empty' : '' }}">{{ addPlusSign ? '+' : '' }}{{ total }}</span>*/
/*                                                     {% endif %}*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </span>*/
/*                                     </div>*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     */
/*                 {% endfor %}*/
/*                 {% if not isHorizontal or settings['submission']['submit_type'] == 'button' %} <div class="bf-buttonclear-box"{% if isHorizontal and settings['submission']['submit_button_type'] == 'float' %} style="display:none;" {% endif %}>*/
/*                          <input type="button" value="{{ lang_submit }}" class="btn btn-primary bf-buttonsubmit" onclick="BrainyFilter.sendRequest(jQuery(this));BrainyFilter.loadingAnimation();return false;" {% if settings['submission']['submit_button_type'] != 'fix' and settings['submission']['submit_type'] != 'button' %}style="display:none;" {% endif %} />*/
/*                    {% if not isHorizontal %}<input type="reset" class="bf-buttonclear" onclick="BrainyFilter.reset();return false;" value="{{ reset }}" />{% endif %}  */
/*                 </div> {% endif %}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/* var bfLang = {*/
/*     show_more : '{{ lang_show_more }}',*/
/*     show_less : '{{ lang_show_less }}',*/
/*     empty_list : '{{ lang_empty_list }}'*/
/* };*/
/* BrainyFilter.requestCount = BrainyFilter.requestCount || {{ settings['behaviour']['product_count'] ? 'true' : 'false' }};*/
/* BrainyFilter.requestPrice = BrainyFilter.requestPrice || {{ settings['behaviour']['sections']['price']['enabled'] ? 'true' : 'false' }};*/
/* BrainyFilter.separateCountRequest = BrainyFilter.separateCountRequest || {{ postponedCount ? 'true' : 'false' }};*/
/* BrainyFilter.min = BrainyFilter.min || {{ priceMin }};*/
/* BrainyFilter.max = BrainyFilter.max || {{ priceMax }};*/
/* BrainyFilter.lowerValue = BrainyFilter.lowerValue || {{ lowerlimit }}; */
/* BrainyFilter.higherValue = BrainyFilter.higherValue || {{ upperlimit }};*/
/* BrainyFilter.currencySymb = BrainyFilter.currencySymb || '{{ currency_symbol }}';*/
/* BrainyFilter.hideEmpty = BrainyFilter.hideEmpty || {{ settings['behaviour']['hide_empty']|number_format }};*/
/* BrainyFilter.baseUrl = BrainyFilter.baseUrl || "{{ base }}";*/
/* BrainyFilter.currentRoute = BrainyFilter.currentRoute || "{{ currentRoute }}";*/
/* BrainyFilter.selectors = BrainyFilter.selectors || {*/
/*     'container' : '{{ settings['behaviour']['containerSelector'] }}',*/
/*     'paginator' : '{{ settings['behaviour']['paginatorSelector'] }}'*/
/* };*/
/* {% if redirectToUrl %}*/
/* BrainyFilter.redirectTo = BrainyFilter.redirectTo || "{{ redirectToUrl }}";*/
/* {% endif %}*/
/* jQuery(function() {*/
/*     if (!BrainyFilter.isInitialized) {*/
/*         BrainyFilter.isInitialized = true;*/
/*         var def = jQuery.Deferred();*/
/*         def.then(function() {*/
/*             if('ontouchend' in document && jQuery.ui) {*/
/*                 jQuery('head').append('<script src="catalog/view/javascript/jquery.ui.touch-punch.min.js"></script' + '>');*/
/*             }*/
/*         });*/
/*         if (typeof jQuery.fn.slider === 'undefined') {*/
/*             jQuery.getScript('catalog/view/javascript/jquery-ui.slider.min.js', function(){*/
/*                 def.resolve();*/
/*                 jQuery('head').append('<link rel="stylesheet" href="catalog/view/theme/default/stylesheet/jquery-ui.slider.min.css" type="text/css" />');*/
/*                 BrainyFilter.init();*/
/*             });*/
/*         } else {*/
/*             def.resolve();*/
/*             BrainyFilter.init();*/
/*         }*/
/*     }*/
/* });*/
/* BrainyFilter.sliderValues = BrainyFilter.sliderValues || {};*/
/* {% if filters|length %}*/
/*     {% for i, section in filters %}*/
/*         {% if section['array'] is defined and section['array']|length %}*/
/*             {% for groupId, group in section['array'] %}*/
/*                 {% set groupUID = section['type']|slice(0, 1) ~ groupId %}*/
/*                 {% if group['type'] in ['slider', 'slider_lbl', 'slider_lbl_inp'] %}*/
/*                     BrainyFilter.sliderValues['{{ groupUID }}'] = {{ group['values']|json_encode() }};*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* </script>*/
/* {% endif %}*/
