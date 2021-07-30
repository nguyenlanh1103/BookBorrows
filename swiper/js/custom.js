$( document ).ready(function() {
    $('.product-item').hover(function() {
        var itemTitle = $(this).data('title');
        var itemContent = $(this).data('content');
        $('.item-title-hover').html(itemTitle);
        $('.item-content-hover').html(itemContent);
      });
});