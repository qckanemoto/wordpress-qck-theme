$(function(){$("h1, h2, h3, h4, h5, h6").each(function(){var a=$(this).attr("id");a&&$(this).append($("<a />").addClass("header-link").attr("href","#"+a).html('<i class="fa fa-link"></i>'))})});