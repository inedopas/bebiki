<?php

/* default/template/extension/module/d_ajax_search.twig */
class __TwigTemplate_338a9fa6c68b6877adccfc50506e9350441878975f3e147af46304964f82807d extends Twig_Template
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
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "width", array(), "array")) {
            // line 2
            echo "<style type=\"text/css\">
#d_ajax_search_results{
    width: ";
            // line 4
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "width", array(), "array");
            echo ";
}
</style>
";
        }
        // line 8
        echo "<button type=\"button\" class=\"hidden modal_search btn btn-primary\" data-toggle=\"modal\" data-target=\"#searchModal\">
  Launch Live Ajax Search
</button>
";
        // line 11
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 12
            echo "
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <div id=\"search-autocomplite\"></div>
       <div id=\"search_mobile\" class=\"input-group\">
        <span class=\"pull-left\" data-dismiss=\"modal\"><i class=\"fa fa-arrow-left\"></i></span>
        <input id=\"search_input\" type=\"text\" name=\"search\" autofocus value=\"\" placeholder=\"Search\" class=\"pull-left form-control input-lg\">
        <div class=\"pull-right\">
           <span onclick=\"clearInput()\"><i class=\"fa fa-close\"></i></span>
           <span><i class=\"fa fa-search\"></i></span>
       </div>
   </div>
</div>
<div class=\"modal-body\">
    <div id=\"help\"> ";
            // line 28
            echo (isset($context["search_phase"]) ? $context["search_phase"] : null);
            echo "</div>
</div>
</div>
</div>
</div>
";
        }
        // line 34
        echo "<script>

function text_complite( ev, keywords ){
    if( ev.keyCode == 38 || ev.keyCode == 40 ) {
        return false;
    }
    if( keywords == '' || keywords.length < 1 || keywords.length < ";
        // line 40
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "max_symbols", array(), "array");
        echo " ) {
        return false;
    }

     \$.ajax({
        url: \$('base').attr('href') + 'index.php?route=extension/module/d_ajax_search/getAutocomplite&keyword=' + keywords,
        dataType: 'json',
        beforeSend: function() {},
        success: function(autocomplite) {
            \$('#search-autocomplite').text('');
            \$('#help').hide();
            if ( typeof autocomplite != 'undefined' && autocomplite != null) {
                \$('#search').find(\"";
        // line 52
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").first().val().toLowerCase();
                if(autocomplite != ''){
                    \$('#search-autocomplite').text(autocomplite.toLowerCase());
                }

                \$(\"";
        // line 57
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").keydown(function (event) {
                    if (event.keyCode == 39) {
                        \$(\"";
        // line 59
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").val(autocomplite);
                        \$('#search-autocomplite').text('');
                    } else if (event.keyCode == 08) {
                        \$('#search-autocomplite').text('');
                    }
                });

            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
}

function doquick_search( ev, keywords ) {
    if( ev.keyCode == 38 || ev.keyCode == 40 ) {
        return false;
    }

    // \$('#d_ajax_search_results').remove();
    updown = -1;

    if( keywords == '' || keywords.length < 1 || keywords.length < ";
        // line 82
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "max_symbols", array(), "array");
        echo " ) {
        return false;
    }
    keywords = encodeURI(keywords);

    \$.ajax({
        url: \$('base').attr('href') + 'index.php?route=extension/module/d_ajax_search/searchresults&keyword=' + keywords,
        dataType: 'json',
        beforeSend: function() {
            var html = '<div id=\"d_ajax_search_results\"><div id=\"d_ajax_search_results_body\">';
            html += '<i class=\"fa fa-spinner fa-spin fa-3x fa-fw\"></i>';
            if(";
        // line 93
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "){
                \$('#search_mobile').after(html);
            }else{
                \$('#search').after(html);
                \$('#d_ajax_search_results').css('margin-top', '-' + \$('#search').css('margin-bottom'));
            }
        },
        success: function(results) {
            // \$('#search-autocomplite').text('');
            \$('#d_ajax_search_results').remove();
            \$('#help').hide();
            var result = \$.map(results, function(value, index) {
                return [value];
            });

            if ( typeof result != 'undefined' && result.length>0) {
                // \$('#search-autocomplite').text(result[0].autocomplite);
                if(result[0].keyword !== \$('#search').find(\"";
        // line 110
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").first().val()){
                    // \$('#search').find(\"";
        // line 111
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").first().val(result[0].keyword);
                }
                var html, i,name;
                html = '<div id=\"d_ajax_search_results\"><div id=\"d_ajax_search_results_body\">';

                if(result[0].redirect){
                    html += '<div class=\"redirect hidden\">'+result[0].redirect+'</div>';
                }

                if(result[0].saggestion){
                    html += '<div class=\"saggestion\">";
        // line 121
        echo (isset($context["results_for"]) ? $context["results_for"] : null);
        echo " <span class=\"saggestion-result\">'+result[0].saggestion+'</span></div>';
                }
                for (i=0;i<result.length;i++) {


                    if ( i >= ";
        // line 126
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "all_result_count", array(), "array");
        echo " && ";
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "all_result_status", array(), "array");
        echo "){
                        var addclass = 'hidden';
                    }else{
                        addclass = '';
                    }

                    if(";
        // line 132
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
                         if(i == 0 ){
                            html += '<div id=\"result_block\" class=\"result_block '+addclass+'\"><p class=\"pull-right block-text text-left\">'+result[i].where_find+'</p>';
                        }else if(i !==0 && result[i].where_find !== result[i-1].where_find){
                            html += '<div id=\"result_block\" class=\"result_block '+addclass+'\"><p class=\"block-text text-left\">'+result[i].where_find+'</p>';
                        }
                    }

                    html += '<a class=\"result-link '+ addclass +' sort-item row col-sm-12\" item_data=\"' + result[i].item_data + '\" data-sort-order=\"' + result[i].weight + '\" href=\"' + result[i].href + '\">';

                    if (result[i].image){
                        html += '<div class=\"col pull-left col-sm-2 va-center text-center\"><img src=\"' + result[i].image + '\" /></div>';
                    } else {
                        html += '<div class=\"col col-sm-2 col-xs-2 va-center text-center\"></div>';
                    }

                    if(result[i].name.length > 30){
                        name=result[i].name.slice(0, 40)+'...';
                    }else{
                        name=result[i].name;
                    }
                    html += '<div class=\"col name ";
        // line 153
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            echo " pull-left name ";
        }
        echo " col-sm-7 col-xs-5 va-center text-left\"><span class=\"forkeydon\">' + name + '</span>';
                    html +='";
        // line 154
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "where_search", array(), "array")) {
            echo " <br><span class=\"where-find\">in '+result[i].where_find+' '+result[i].find_by+'</span>";
        }
        echo "';
                    html += '</div>';

                    if (result[i].special){
                        html += '<div class=\"col col-sm-3 col-xs-3 va-center text-center\"><span class=\"old-price\">' + result[i].price + '</span><br>';
                        html += '<span class=\"special\">' + result[i].special + '</span></div>';
                    } else {

                        if (result[i].price){
                            html += '<div class=\"col price col-sm-3 va-center ";
        // line 163
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            echo " pull-right ";
        }
        echo " text-center\">";
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            echo " <br> ";
        }
        echo "<span class=\"\">' + result[i].price + '</span></div>';
                        } else {
                            html += '<div class=\"col col-sm-3 va-center text-center\"></div>';
                        }
                    }

                    html += '</a>';

                    if(";
        // line 171
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
                        if( i < result.length-1 && result[i].where_find == result[i+1].where_find){
                        }else{
                            html += '</div>';
                        }
                    }

                }
                if(addclass == 'hidden'){
                    html += '</div>";
        // line 180
        if (( !(isset($context["mobile"]) ? $context["mobile"] : null) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "all_result_status", array(), "array"))) {
            echo "<a class=\"all_results\">All results <i class=\"fa fa-caret-down\"></i></a>";
        }
        echo "</div>';
                }
                if (\$('#d_ajax_search_results').length > 0) {
                    \$('#d_ajax_search_results').remove();
                }
                if(";
        // line 185
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "){
                    \$('.modal-body').append(html);
            }else{
                \$('#search').after(html);
                \$('#d_ajax_search_results').css('margin-top', '-' + \$('#search').css('margin-bottom'));
            }

            \$(\".result-link\").click(function(ev){
                var json = {};

                var link=ev.currentTarget.attributes.item_data.value;
                    json.type = link.split('=')[0].split('_')[0];
                    json.type_id = link.split('=')[1];

                json.select = \$(ev.currentTarget).find('.forkeydon').html();
                if(";
        // line 200
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "){
                    if(\$('.saggestion-result').text() != ''){
                        json.search = \$('.saggestion-result').text();
                    }else if(\$('.redirect').text() != ''){
                        json.search = \$('.redirect').text();
                    }else{
                        json.search = \$('#search_input').val();
                    }
                }else{
                    if(\$('.saggestion-result').text() != ''){
                        json.search = \$('.saggestion-result').text();
                    }else if(\$('.redirect').text() != ''){
                        json.search = \$('.redirect').text();
                    }else{
                        json.search = \$('#search').find(\"";
        // line 214
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").first().val();
                    }
                }

                write_to_database(json);
            });
            if(";
        // line 220
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
                \$('#d_ajax_search_results_body > .result_block >.sort-item').tsort({attr:'data-sort-order'},{defaults:{order:'desc'}});
            }else{
                \$('#d_ajax_search_results_body >.sort-item').tsort({attr:'data-sort-order'},{defaults:{order:'desc'}});
            }

                

                \$('.all_results').click(function(){
                \$('.result-link').removeClass('hidden');
                \$('.result_block').removeClass('hidden');
                \$('.all_results').addClass('hidden')
            });

        }else{
           \$('#d_ajax_search_results').remove();
           \$('#search-autocomplite').text('');
           var html;
           html = '<div id=\"d_ajax_search_results\"><div id=\"d_ajax_search_results_body\">';
           html += '<a class=\"row col-sm-12\" href=\"#\">';
           html += '<span class=\"no-results\"><i class=\"fa fa-exclamation-circle\"></i> no results</span></a></div></div>';
           if(";
        // line 241
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "){
            \$('.modal-body').append(html);
                    // \$('#d_ajax_search_results').css('margin-top', '-' + \$('#search').css('margin-bottom'));
                }else{
                    \$('#search').after(html);
                    \$('#d_ajax_search_results').css('margin-top', '-' + \$('#search').css('margin-bottom'));
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log('error');
        }
    });
return true;
}

var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
};
})();

function write_to_database(val){
        \$.ajax( {
        type: 'post',
        url: \$('base').attr('href') + 'index.php?route=extension/module/d_ajax_search/write_to_base&json=' + val,
        data: val,
        dataType: 'json',
        beforeSend: function() {
        },
        complete: function() {
        },
        success: function(json) {
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
}

function clearInput (){
    \$('#d_ajax_search_results').remove();
    \$('#search_input').val('');
    \$('#help').show();
}

\$(document).ready(function(){
    if(";
        // line 290
        echo (isset($context["mobile"]) ? $context["mobile"] : null);
        echo "){
        \$(\"#search\").click(function(){
            \$('.modal_search').click();
             \$('#searchModal').on(\"shown.bs.modal\", function() {
                \$('#search_input').focus();
            });


        });
    }else{
        \$(\"";
        // line 300
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").before('<div id=\"search-autocomplite\"></div>');
    }

\$(\"";
        // line 303
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").attr('maxlength','64');

    \$(\"";
        // line 305
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").keyup(function(ev){
        var a= ev;
        var b =this.value;
        text_complite(a,b);
        delay(function() {

            doquick_search(a, b);
        }, 500);
    }).keydown(function(ev){
        upDownEvent(ev);

    });

    \$(\"";
        // line 318
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").blur(function(){
        setTimeout(function() {
            \$('body').click(function (event) {
                if(\$(event.target).attr('class') != 'all_results hidden'){
                    \$('#d_ajax_search_results').remove();
                }
            })

            \$('#help').show();

            if(";
        // line 328
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
                updown = 1;
            }else{
                updown = 0;
            }
        }, 500)
    });

    \$(\"";
        // line 336
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "\").focus(function(ev){
        var a= ev;
        var b =this.value;
        delay(function() {
            doquick_search(a, b);
        }, 500);
    });

    if(";
        // line 344
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){

            var updown = 0;
            var block = 0;
        }else{

            var updown = -1;
        }

    function upDownEvent( ev ) {

        if(";
        // line 355
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
            var check = document.getElementsByClassName('result_block');
            elem=check[block];
            var min_el = 1;
        }else{
            var elem = document.getElementById('d_ajax_search_results_body');
            var min_el = 0;
        }
        var xxx=0;
        var fkey = \$('#search').find('";
        // line 364
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "').first();

        if( elem ) {

            var length = elem.childNodes.length - 1;

            if( updown != -1 && typeof(elem.childNodes[updown]) != 'undefined') {

                \$(elem.childNodes[updown]).removeClass('selected');
            }
            if(";
        // line 374
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
                if(block !=0 && block != block-1 ){
                    \$(check[block-1].childNodes[check[block-1].childNodes.length - 1]).removeClass('selected');
                }
            }

            if( ev.keyCode == 38 ) {
                updown = ( updown > -1 ) ? --updown : updown;
                if(";
        // line 382
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array");
        echo "){
                    if(updown <= 0){
                        updown=(check[block-1].childNodes.length)-1;
                        \$(check[block-1].childNodes[(check[block-1].childNodes.length)-1]).addClass('selected');
                        block--;
                        xxx=5;
                    }
                }

            }
            else if( ev.keyCode == 40 ) {
                updown = ( updown <= length ) ? ++updown : updown;
            }

            if( updown >= min_el && updown <= length ) {

                \$(elem.childNodes[updown]).addClass('selected');

                var text = \$(elem.childNodes[updown]).find('.forkeydon').html();

                \$('#search').find('";
        // line 402
        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
        echo "').first().val(text);
            }
            if(updown >= length && xxx != 5  && typeof(check[block+1]) != 'undefined'){
                block++;
                updown=0;
            }
            if(ev.keyCode == 13){
                if(typeof \$('.result-link.selected').attr('href') != 'undefined'){
                    window.location.replace(\$('.result-link.selected').attr('href'));
                }

            }
        }

        return false;
    }

    \$('.fa-search').bind('click', function() {
        url = 'index.php?route=product/search';
        var search = \$('#search_input').prop('value');
        if (search) {
            url += '&search=' + encodeURIComponent(search);
        }
        location = url;
    });

});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/d_ajax_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 402,  526 => 382,  515 => 374,  502 => 364,  490 => 355,  476 => 344,  465 => 336,  454 => 328,  441 => 318,  425 => 305,  420 => 303,  414 => 300,  401 => 290,  349 => 241,  325 => 220,  316 => 214,  299 => 200,  281 => 185,  271 => 180,  259 => 171,  242 => 163,  228 => 154,  222 => 153,  198 => 132,  187 => 126,  179 => 121,  166 => 111,  162 => 110,  142 => 93,  128 => 82,  102 => 59,  97 => 57,  89 => 52,  74 => 40,  66 => 34,  57 => 28,  39 => 12,  37 => 11,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if (setting['width']) %}*/
/* <style type="text/css">*/
/* #d_ajax_search_results{*/
/*     width: {{setting['width']}};*/
/* }*/
/* </style>*/
/* {% endif %}*/
/* <button type="button" class="hidden modal_search btn btn-primary" data-toggle="modal" data-target="#searchModal">*/
/*   Launch Live Ajax Search*/
/* </button>*/
/* {% if mobile %}*/
/* */
/* <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <div id="search-autocomplite"></div>*/
/*        <div id="search_mobile" class="input-group">*/
/*         <span class="pull-left" data-dismiss="modal"><i class="fa fa-arrow-left"></i></span>*/
/*         <input id="search_input" type="text" name="search" autofocus value="" placeholder="Search" class="pull-left form-control input-lg">*/
/*         <div class="pull-right">*/
/*            <span onclick="clearInput()"><i class="fa fa-close"></i></span>*/
/*            <span><i class="fa fa-search"></i></span>*/
/*        </div>*/
/*    </div>*/
/* </div>*/
/* <div class="modal-body">*/
/*     <div id="help"> {{search_phase}}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endif %}*/
/* <script>*/
/* */
/* function text_complite( ev, keywords ){*/
/*     if( ev.keyCode == 38 || ev.keyCode == 40 ) {*/
/*         return false;*/
/*     }*/
/*     if( keywords == '' || keywords.length < 1 || keywords.length < {{setting['max_symbols']}} ) {*/
/*         return false;*/
/*     }*/
/* */
/*      $.ajax({*/
/*         url: $('base').attr('href') + 'index.php?route=extension/module/d_ajax_search/getAutocomplite&keyword=' + keywords,*/
/*         dataType: 'json',*/
/*         beforeSend: function() {},*/
/*         success: function(autocomplite) {*/
/*             $('#search-autocomplite').text('');*/
/*             $('#help').hide();*/
/*             if ( typeof autocomplite != 'undefined' && autocomplite != null) {*/
/*                 $('#search').find("{{ setting['class'] }}").first().val().toLowerCase();*/
/*                 if(autocomplite != ''){*/
/*                     $('#search-autocomplite').text(autocomplite.toLowerCase());*/
/*                 }*/
/* */
/*                 $("{{ setting['class'] }}").keydown(function (event) {*/
/*                     if (event.keyCode == 39) {*/
/*                         $("{{ setting['class'] }}").val(autocomplite);*/
/*                         $('#search-autocomplite').text('');*/
/*                     } else if (event.keyCode == 08) {*/
/*                         $('#search-autocomplite').text('');*/
/*                     }*/
/*                 });*/
/* */
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* }*/
/* */
/* function doquick_search( ev, keywords ) {*/
/*     if( ev.keyCode == 38 || ev.keyCode == 40 ) {*/
/*         return false;*/
/*     }*/
/* */
/*     // $('#d_ajax_search_results').remove();*/
/*     updown = -1;*/
/* */
/*     if( keywords == '' || keywords.length < 1 || keywords.length < {{setting['max_symbols']}} ) {*/
/*         return false;*/
/*     }*/
/*     keywords = encodeURI(keywords);*/
/* */
/*     $.ajax({*/
/*         url: $('base').attr('href') + 'index.php?route=extension/module/d_ajax_search/searchresults&keyword=' + keywords,*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             var html = '<div id="d_ajax_search_results"><div id="d_ajax_search_results_body">';*/
/*             html += '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>';*/
/*             if({{mobile}}){*/
/*                 $('#search_mobile').after(html);*/
/*             }else{*/
/*                 $('#search').after(html);*/
/*                 $('#d_ajax_search_results').css('margin-top', '-' + $('#search').css('margin-bottom'));*/
/*             }*/
/*         },*/
/*         success: function(results) {*/
/*             // $('#search-autocomplite').text('');*/
/*             $('#d_ajax_search_results').remove();*/
/*             $('#help').hide();*/
/*             var result = $.map(results, function(value, index) {*/
/*                 return [value];*/
/*             });*/
/* */
/*             if ( typeof result != 'undefined' && result.length>0) {*/
/*                 // $('#search-autocomplite').text(result[0].autocomplite);*/
/*                 if(result[0].keyword !== $('#search').find("{{ setting['class'] }}").first().val()){*/
/*                     // $('#search').find("{{ setting['class'] }}").first().val(result[0].keyword);*/
/*                 }*/
/*                 var html, i,name;*/
/*                 html = '<div id="d_ajax_search_results"><div id="d_ajax_search_results_body">';*/
/* */
/*                 if(result[0].redirect){*/
/*                     html += '<div class="redirect hidden">'+result[0].redirect+'</div>';*/
/*                 }*/
/* */
/*                 if(result[0].saggestion){*/
/*                     html += '<div class="saggestion">{{results_for}} <span class="saggestion-result">'+result[0].saggestion+'</span></div>';*/
/*                 }*/
/*                 for (i=0;i<result.length;i++) {*/
/* */
/* */
/*                     if ( i >= {{setting['all_result_count']}} && {{setting['all_result_status']}}){*/
/*                         var addclass = 'hidden';*/
/*                     }else{*/
/*                         addclass = '';*/
/*                     }*/
/* */
/*                     if({{setting['block_result']}}){*/
/*                          if(i == 0 ){*/
/*                             html += '<div id="result_block" class="result_block '+addclass+'"><p class="pull-right block-text text-left">'+result[i].where_find+'</p>';*/
/*                         }else if(i !==0 && result[i].where_find !== result[i-1].where_find){*/
/*                             html += '<div id="result_block" class="result_block '+addclass+'"><p class="block-text text-left">'+result[i].where_find+'</p>';*/
/*                         }*/
/*                     }*/
/* */
/*                     html += '<a class="result-link '+ addclass +' sort-item row col-sm-12" item_data="' + result[i].item_data + '" data-sort-order="' + result[i].weight + '" href="' + result[i].href + '">';*/
/* */
/*                     if (result[i].image){*/
/*                         html += '<div class="col pull-left col-sm-2 va-center text-center"><img src="' + result[i].image + '" /></div>';*/
/*                     } else {*/
/*                         html += '<div class="col col-sm-2 col-xs-2 va-center text-center"></div>';*/
/*                     }*/
/* */
/*                     if(result[i].name.length > 30){*/
/*                         name=result[i].name.slice(0, 40)+'...';*/
/*                     }else{*/
/*                         name=result[i].name;*/
/*                     }*/
/*                     html += '<div class="col name {%if mobile %} pull-left name {%endif%} col-sm-7 col-xs-5 va-center text-left"><span class="forkeydon">' + name + '</span>';*/
/*                     html +='{%if setting['where_search'] %} <br><span class="where-find">in '+result[i].where_find+' '+result[i].find_by+'</span>{%endif%}';*/
/*                     html += '</div>';*/
/* */
/*                     if (result[i].special){*/
/*                         html += '<div class="col col-sm-3 col-xs-3 va-center text-center"><span class="old-price">' + result[i].price + '</span><br>';*/
/*                         html += '<span class="special">' + result[i].special + '</span></div>';*/
/*                     } else {*/
/* */
/*                         if (result[i].price){*/
/*                             html += '<div class="col price col-sm-3 va-center {%if mobile %} pull-right {%endif%} text-center">{%if mobile %} <br> {%endif%}<span class="">' + result[i].price + '</span></div>';*/
/*                         } else {*/
/*                             html += '<div class="col col-sm-3 va-center text-center"></div>';*/
/*                         }*/
/*                     }*/
/* */
/*                     html += '</a>';*/
/* */
/*                     if({{ setting['block_result'] }}){*/
/*                         if( i < result.length-1 && result[i].where_find == result[i+1].where_find){*/
/*                         }else{*/
/*                             html += '</div>';*/
/*                         }*/
/*                     }*/
/* */
/*                 }*/
/*                 if(addclass == 'hidden'){*/
/*                     html += '</div>{%if not mobile and setting['all_result_status'] %}<a class="all_results">All results <i class="fa fa-caret-down"></i></a>{%endif%}</div>';*/
/*                 }*/
/*                 if ($('#d_ajax_search_results').length > 0) {*/
/*                     $('#d_ajax_search_results').remove();*/
/*                 }*/
/*                 if({{mobile}}){*/
/*                     $('.modal-body').append(html);*/
/*             }else{*/
/*                 $('#search').after(html);*/
/*                 $('#d_ajax_search_results').css('margin-top', '-' + $('#search').css('margin-bottom'));*/
/*             }*/
/* */
/*             $(".result-link").click(function(ev){*/
/*                 var json = {};*/
/* */
/*                 var link=ev.currentTarget.attributes.item_data.value;*/
/*                     json.type = link.split('=')[0].split('_')[0];*/
/*                     json.type_id = link.split('=')[1];*/
/* */
/*                 json.select = $(ev.currentTarget).find('.forkeydon').html();*/
/*                 if({{mobile}}){*/
/*                     if($('.saggestion-result').text() != ''){*/
/*                         json.search = $('.saggestion-result').text();*/
/*                     }else if($('.redirect').text() != ''){*/
/*                         json.search = $('.redirect').text();*/
/*                     }else{*/
/*                         json.search = $('#search_input').val();*/
/*                     }*/
/*                 }else{*/
/*                     if($('.saggestion-result').text() != ''){*/
/*                         json.search = $('.saggestion-result').text();*/
/*                     }else if($('.redirect').text() != ''){*/
/*                         json.search = $('.redirect').text();*/
/*                     }else{*/
/*                         json.search = $('#search').find("{{ setting['class'] }}").first().val();*/
/*                     }*/
/*                 }*/
/* */
/*                 write_to_database(json);*/
/*             });*/
/*             if({{ setting['block_result'] }}){*/
/*                 $('#d_ajax_search_results_body > .result_block >.sort-item').tsort({attr:'data-sort-order'},{defaults:{order:'desc'}});*/
/*             }else{*/
/*                 $('#d_ajax_search_results_body >.sort-item').tsort({attr:'data-sort-order'},{defaults:{order:'desc'}});*/
/*             }*/
/* */
/*                 */
/* */
/*                 $('.all_results').click(function(){*/
/*                 $('.result-link').removeClass('hidden');*/
/*                 $('.result_block').removeClass('hidden');*/
/*                 $('.all_results').addClass('hidden')*/
/*             });*/
/* */
/*         }else{*/
/*            $('#d_ajax_search_results').remove();*/
/*            $('#search-autocomplite').text('');*/
/*            var html;*/
/*            html = '<div id="d_ajax_search_results"><div id="d_ajax_search_results_body">';*/
/*            html += '<a class="row col-sm-12" href="#">';*/
/*            html += '<span class="no-results"><i class="fa fa-exclamation-circle"></i> no results</span></a></div></div>';*/
/*            if({{mobile}}){*/
/*             $('.modal-body').append(html);*/
/*                     // $('#d_ajax_search_results').css('margin-top', '-' + $('#search').css('margin-bottom'));*/
/*                 }else{*/
/*                     $('#search').after(html);*/
/*                     $('#d_ajax_search_results').css('margin-top', '-' + $('#search').css('margin-bottom'));*/
/*                 }*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             console.log('error');*/
/*         }*/
/*     });*/
/* return true;*/
/* }*/
/* */
/* var delay = (function(){*/
/*   var timer = 0;*/
/*   return function(callback, ms){*/
/*     clearTimeout (timer);*/
/*     timer = setTimeout(callback, ms);*/
/* };*/
/* })();*/
/* */
/* function write_to_database(val){*/
/*         $.ajax( {*/
/*         type: 'post',*/
/*         url: $('base').attr('href') + 'index.php?route=extension/module/d_ajax_search/write_to_base&json=' + val,*/
/*         data: val,*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         },*/
/*         complete: function() {*/
/*         },*/
/*         success: function(json) {*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* }*/
/* */
/* function clearInput (){*/
/*     $('#d_ajax_search_results').remove();*/
/*     $('#search_input').val('');*/
/*     $('#help').show();*/
/* }*/
/* */
/* $(document).ready(function(){*/
/*     if({{mobile}}){*/
/*         $("#search").click(function(){*/
/*             $('.modal_search').click();*/
/*              $('#searchModal').on("shown.bs.modal", function() {*/
/*                 $('#search_input').focus();*/
/*             });*/
/* */
/* */
/*         });*/
/*     }else{*/
/*         $("{{ setting['class'] }}").before('<div id="search-autocomplite"></div>');*/
/*     }*/
/* */
/* $("{{ setting['class'] }}").attr('maxlength','64');*/
/* */
/*     $("{{ setting['class'] }}").keyup(function(ev){*/
/*         var a= ev;*/
/*         var b =this.value;*/
/*         text_complite(a,b);*/
/*         delay(function() {*/
/* */
/*             doquick_search(a, b);*/
/*         }, 500);*/
/*     }).keydown(function(ev){*/
/*         upDownEvent(ev);*/
/* */
/*     });*/
/* */
/*     $("{{ setting['class'] }}").blur(function(){*/
/*         setTimeout(function() {*/
/*             $('body').click(function (event) {*/
/*                 if($(event.target).attr('class') != 'all_results hidden'){*/
/*                     $('#d_ajax_search_results').remove();*/
/*                 }*/
/*             })*/
/* */
/*             $('#help').show();*/
/* */
/*             if({{setting['block_result']}}){*/
/*                 updown = 1;*/
/*             }else{*/
/*                 updown = 0;*/
/*             }*/
/*         }, 500)*/
/*     });*/
/* */
/*     $("{{ setting['class'] }}").focus(function(ev){*/
/*         var a= ev;*/
/*         var b =this.value;*/
/*         delay(function() {*/
/*             doquick_search(a, b);*/
/*         }, 500);*/
/*     });*/
/* */
/*     if({{setting['block_result']}}){*/
/* */
/*             var updown = 0;*/
/*             var block = 0;*/
/*         }else{*/
/* */
/*             var updown = -1;*/
/*         }*/
/* */
/*     function upDownEvent( ev ) {*/
/* */
/*         if({{setting['block_result']}}){*/
/*             var check = document.getElementsByClassName('result_block');*/
/*             elem=check[block];*/
/*             var min_el = 1;*/
/*         }else{*/
/*             var elem = document.getElementById('d_ajax_search_results_body');*/
/*             var min_el = 0;*/
/*         }*/
/*         var xxx=0;*/
/*         var fkey = $('#search').find('{{ setting['class'] }}').first();*/
/* */
/*         if( elem ) {*/
/* */
/*             var length = elem.childNodes.length - 1;*/
/* */
/*             if( updown != -1 && typeof(elem.childNodes[updown]) != 'undefined') {*/
/* */
/*                 $(elem.childNodes[updown]).removeClass('selected');*/
/*             }*/
/*             if({{setting['block_result']}}){*/
/*                 if(block !=0 && block != block-1 ){*/
/*                     $(check[block-1].childNodes[check[block-1].childNodes.length - 1]).removeClass('selected');*/
/*                 }*/
/*             }*/
/* */
/*             if( ev.keyCode == 38 ) {*/
/*                 updown = ( updown > -1 ) ? --updown : updown;*/
/*                 if({{setting['block_result']}}){*/
/*                     if(updown <= 0){*/
/*                         updown=(check[block-1].childNodes.length)-1;*/
/*                         $(check[block-1].childNodes[(check[block-1].childNodes.length)-1]).addClass('selected');*/
/*                         block--;*/
/*                         xxx=5;*/
/*                     }*/
/*                 }*/
/* */
/*             }*/
/*             else if( ev.keyCode == 40 ) {*/
/*                 updown = ( updown <= length ) ? ++updown : updown;*/
/*             }*/
/* */
/*             if( updown >= min_el && updown <= length ) {*/
/* */
/*                 $(elem.childNodes[updown]).addClass('selected');*/
/* */
/*                 var text = $(elem.childNodes[updown]).find('.forkeydon').html();*/
/* */
/*                 $('#search').find('{{ setting['class'] }}').first().val(text);*/
/*             }*/
/*             if(updown >= length && xxx != 5  && typeof(check[block+1]) != 'undefined'){*/
/*                 block++;*/
/*                 updown=0;*/
/*             }*/
/*             if(ev.keyCode == 13){*/
/*                 if(typeof $('.result-link.selected').attr('href') != 'undefined'){*/
/*                     window.location.replace($('.result-link.selected').attr('href'));*/
/*                 }*/
/* */
/*             }*/
/*         }*/
/* */
/*         return false;*/
/*     }*/
/* */
/*     $('.fa-search').bind('click', function() {*/
/*         url = 'index.php?route=product/search';*/
/*         var search = $('#search_input').prop('value');*/
/*         if (search) {*/
/*             url += '&search=' + encodeURIComponent(search);*/
/*         }*/
/*         location = url;*/
/*     });*/
/* */
/* });*/
/* </script>*/
