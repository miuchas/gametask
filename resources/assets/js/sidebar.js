$("li.sidebar-itens .titulo").click(function(){
  $("ul.itens-lista").slideUp("fast");
  $(this).siblings("ul").slideToggle("fast");
});
