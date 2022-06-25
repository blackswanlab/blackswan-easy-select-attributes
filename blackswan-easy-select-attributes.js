jQuery.noConflict();
(function($) {
  $(function() {
    const consloe = "color:cyan; background: #fff linear-gradient(to right, violet, cyan, lightgreen, yellow, orange, red); -webkit-background-clip: text; color: transparent;";
    setTimeout(console.log.bind(console, `%cInitiating BlackSwan Easy-Select Attributes for WooCommerce [developed by https://amirhp.com ]`, consloe));
    $("select.attribute_taxonomy[name=attribute_taxonomy]").selectWoo({width: '300px'}).addClass('enhanced');
    $(".product_attributes").on("click tap", ".remove_row", function () { initEasySearch(); });
    $(document.body).on("woocommerce_added_attribute", function(e){ initEasySearch(); });
    function initEasySearch() {
      setTimeout(console.log.bind(console, `%cRe-initiating BlackSwan Easy-Select Attributes for WooCommerce [developed by https://amirhp.com ]`, consloe));
      try { $("select.attribute_taxonomy[name=attribute_taxonomy]").selectWoo("destroy"); } catch (e) { }
      finally { $("select.attribute_taxonomy[name=attribute_taxonomy]").selectWoo({width: '300px'}).addClass('enhanced'); }
    }
  });
})(jQuery);
