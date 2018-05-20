<?php

/* butik/template/extension/module/category.twig */
class __TwigTemplate_3ddb217946348ddd2fffe0e989a85b104122b6a7260666318d62e16293cab417 extends Twig_Template
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
        echo "<div class=\"box-category\">
  <div class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"box-content\">
    <ul class=\"category-menu\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "      ";
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 7
                echo "      ";
                if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 8
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"active\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
      ";
                } else {
                    // line 10
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" >";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</i></a>
      ";
                }
                // line 12
                echo "        <ul>
          ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 14
                    echo "          ";
                    if ($this->getAttribute($context["child"], "children2", array())) {
                        // line 15
                        echo "          ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 16
                            echo "          <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
          ";
                        } else {
                            // line 18
                            echo "          <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" >&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
          ";
                        }
                        // line 20
                        echo "            ";
                        if ($this->getAttribute($context["child"], "children2", array())) {
                            // line 21
                            echo "            <ul>
              ";
                            // line 22
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "children2", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 23
                                echo "              <li class=\"level-item\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 25
                            echo "            </ul>
            ";
                        }
                        // line 27
                        echo "          </li>
          ";
                    } else {
                        // line 29
                        echo "          ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 30
                            echo "          <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
          ";
                        } else {
                            // line 32
                            echo "          <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" >&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
          ";
                        }
                        // line 34
                        echo "          ";
                    }
                    // line 35
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "        </ul>
      </li>
      ";
            } else {
                // line 39
                echo "      ";
                if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 40
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"active\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
      ";
                } else {
                    // line 42
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" >";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
      ";
                }
                // line 44
                echo "      ";
            }
            // line 45
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
      ";
        // line 47
        if (( !twig_test_empty((isset($context["menu_link_add"]) ? $context["menu_link_add"] : null)) && (isset($context["butik_category_link_left"]) ? $context["butik_category_link_left"] : null))) {
            // line 48
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu_link_add"]) ? $context["menu_link_add"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["key"]) {
                // line 49
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["value"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["value"], "title", array());
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      ";
        }
        // line 52
        echo "      ";
        if (((isset($context["butik_information_left"]) ? $context["butik_information_left"] : null) && (isset($context["informations"]) ? $context["informations"] : null))) {
            // line 53
            echo "      <li class=\"dropdown\">
        <a href=\"javascript:void(0);\">";
            // line 54
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</a>
        <ul>
          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 57
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">&nbsp;&nbsp;&nbsp;- ";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </ul>
      </li>
      ";
        }
        // line 62
        echo "      ";
        if ((isset($context["butik_contact_left"]) ? $context["butik_contact_left"] : null)) {
            // line 63
            echo "      <li><a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
      ";
        }
        // line 65
        echo "    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "butik/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 65,  231 => 63,  228 => 62,  223 => 59,  212 => 57,  208 => 56,  203 => 54,  200 => 53,  197 => 52,  194 => 51,  183 => 49,  178 => 48,  176 => 47,  173 => 46,  167 => 45,  164 => 44,  156 => 42,  148 => 40,  145 => 39,  140 => 36,  134 => 35,  131 => 34,  123 => 32,  115 => 30,  112 => 29,  108 => 27,  104 => 25,  93 => 23,  89 => 22,  86 => 21,  83 => 20,  75 => 18,  67 => 16,  64 => 15,  61 => 14,  57 => 13,  54 => 12,  46 => 10,  38 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="box-category">*/
/*   <div class="box-heading">{{ heading_title }}</div>*/
/*   <div class="box-content">*/
/*     <ul class="category-menu">*/
/*       {% for category in categories %}*/
/*       {% if category.children %}*/
/*       {% if category.category_id == category_id %}*/
/*       <li><a href="{{ category.href }}" class="active">{{ category.name }}</a>*/
/*       {% else %}*/
/*       <li><a href="{{ category.href }}" >{{ category.name }}</i></a>*/
/*       {% endif %}*/
/*         <ul>*/
/*           {% for child in category.children %}*/
/*           {% if child.children2 %}*/
/*           {% if child.category_id == child_id %}*/
/*           <li><a href="{{ child.href }}" class="active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*           {% else %}*/
/*           <li><a href="{{ child.href }}" >&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*           {% endif %}*/
/*             {% if child.children2 %}*/
/*             <ul>*/
/*               {% for child in child.children2 %}*/
/*               <li class="level-item"><a href="{{ child.href }}" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ child.name }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*             {% endif %}*/
/*           </li>*/
/*           {% else %}*/
/*           {% if child.category_id == child_id %}*/
/*           <li><a href="{{ child.href }}" class="active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*           {% else %}*/
/*           <li><a href="{{ child.href }}" >&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </li>*/
/*       {% else %}*/
/*       {% if category.category_id == category_id %}*/
/*       <li><a href="{{ category.href }}" class="active">{{ category.name }}</a></li>*/
/*       {% else %}*/
/*       <li><a href="{{ category.href }}" >{{ category.name }}</a></li>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/* */
/*       {% if menu_link_add is not empty and butik_category_link_left %}*/
/*       {% for value, key in menu_link_add %}*/
/*         <li><a href="{{ value.link }}">{{ value.title }}</a></li>*/
/*       {% endfor %}*/
/*       {% endif %}*/
/*       {% if butik_information_left and informations %}*/
/*       <li class="dropdown">*/
/*         <a href="javascript:void(0);">{{ text_information }}</a>*/
/*         <ul>*/
/*           {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">&nbsp;&nbsp;&nbsp;- {{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </li>*/
/*       {% endif %}*/
/*       {% if butik_contact_left %}*/
/*       <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
