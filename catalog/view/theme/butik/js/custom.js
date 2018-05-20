$('.menu-icon').click(function () {
    $('#top').find('.left-top').slideToggle('fast');
});
$window = $(window);
$(window).scroll(function () {
    $('.menu-wrapper').toggleClass('fixed', $window.scrollTop() >= 200);
});
$(function () {
    $(window).scroll(function () {
        $(this).scrollTop() > 150 ? $("#back-top").fadeIn() : $("#back-top").fadeOut()
    })
}), jQuery(".backtotop").click(function () {
    jQuery("html, body").animate({scrollTop: 0}, "slow")
}), $("#menu .nav > li").mouseover(function () {
    $screensize = $(window).width(), $screensize > 991 && $(this).find("> div").stop(!0, !0).slideDown("fast"), $(this).bind("mouseleave", function () {
        $screensize = $(window).width(), $screensize > 991 && $(this).find("> div").stop(!0, !0).css("display", "none")
    })
});
$('#menu .nav > li > div').closest("li").addClass('sub');
$('#menu .navbar-header > span').click(function () {
    $(this).toggleClass("active");
    $("#menu .navbar-collapse").slideToggle('medium');
});
$('#menu .nav > li > div, #menu .nav > li > div > .dropdown-inner > ul > li > ul').before('<span class="submore"></span>');
$('span.submore').click(function () {
    $(this).next().slideToggle('fast');
    $(this).toggleClass('plus');
});
$('.box-category .category-menu > li > ul').closest("li").addClass('sub');
$('.box-category .category-menu > li > ul, .box-category .category-menu > li > ul > li > ul').before('<span class="subcat"></span>');
$('span.subcat').click(function () {
    $(this).next().slideToggle('fast');
    $(this).toggleClass('plus');
});
$('.qty-plus').click(function () {
    var $input = $(this).parent().find('#input-quantity');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});
$('.qty-minus').click(function () {
    var $input = $(this).parent().find('#input-quantity');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});
$('.btn-callback').on('click', function () {
    $('#modal-callback').remove();
    $.ajax({
        url: 'index.php?route=extension/module/butik_callback',
        type: 'get',
        dataType: 'html',
        success: function (data) {
            $('#modal-callback .modal-content').prepend(data);
            html = '<div id="modal-callback" class="modal fade">';
            html += '  <div class="modal-dialog modal-sm">';
            html += '    <div class="modal-content">' + data + '</div>';
            html += '  </div>';
            html += '</div>';
            $('body').append(html);
            $('#modal-callback').modal('show');
        }
    });
});
var fastorder = function (product_id) {
    $('#modal-fastorder').remove();
    $.ajax({
        url: 'index.php?route=extension/module/butik_fastorder&product_id=' + product_id,
        type: 'get',
        dataType: 'html',
        success: function (data) {
            $('#modal-fastorder .modal-content').prepend(data);
            html = '<div id="modal-fastorder" class="modal fade">';
            html += '  <div class="modal-dialog">';
            html += '    <div class="modal-content">' + data + '</div>';
            html += '  </div>';
            html += '</div>';
            $('body').append(html);
            $('#modal-fastorder').modal('show');
        }
    });
};
var signin = function () {
    $('#modal-signin').remove();
    $.ajax({
        url: 'index.php?route=extension/module/butik_login',
        type: 'get',
        dataType: 'html',
        success: function (data) {
            $('#modal-signin .modal-content').prepend(data);
            html = '<div id="modal-signin" class="modal fade">';
            html += '  <div class="modal-dialog modal-sm">';
            html += '    <div class="modal-content">' + data + '</div>';
            html += '  </div>';
            html += '</div>';
            $('body').append(html);
            $('#modal-signin').modal('show');
        }
    });
};
var quickview = function (product_id) {
    $('#modal-quickview').remove();
    $.ajax({
        url: 'index.php?route=extension/module/butik_quickview&product_id=' + product_id,
        type: 'get',
        dataType: 'html',
        success: function (data) {
            $('#modal-quickview .modal-content').prepend(data);
            html = '<div id="modal-quickview" class="modal fade">';
            html += '  <div class="modal-dialog modal-lg">';
            html += '    <div class="modal-content">' + data + '</div>';
            html += '  </div>';
            html += '</div>';
            $('body').append(html);
            $('#modal-quickview').modal('show');
        }
    });
};
var cheaper = function (product_id) {
    $('#modal-cheaper').remove();
    $.ajax({
        url: 'index.php?route=extension/module/butik_cheaper&product_id=' + product_id,
        type: 'get',
        dataType: 'html',
        success: function (data) {
            $('#modal-cheaper .modal-content').prepend(data);
            html = '<div id="modal-cheaper" class="modal fade">';
            html += '  <div class="modal-dialog">';
            html += '    <div class="modal-content">' + data + '</div>';
            html += '  </div>';
            html += '</div>';
            $('body').append(html);
            $('#modal-cheaper').modal('show');
        }
    });
};