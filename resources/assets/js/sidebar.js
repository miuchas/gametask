$("li.sidebar-itens .titulo").click(function(){
  $("ul.itens-lista").css("display", "none");
  $(this).parent().children("ul").toggle();
});
