// troca os itens dos cartões entre os cartões
var d_container = dragula({
  moves: function (el, cont, handle) {
    if(handle.className == 'dont-drag'){
      return false;
    }
    return handle.className !== 'title'
  }
})
var itens_container = document.querySelectorAll('.itens')
for (var i in itens_container) {
  d_container.containers.push(itens_container[i])
}

//troca a posição dos cartões
var d_sup_container = dragula({
  moves: function (el, cont, handle) {
    if( handle.className === 'list'){
      return handle.className === 'list'
    }
    if( handle.className === 'title' ){
      return handle.className === 'title'
    }
  }
})
// var sup_container = vardragula([document.querySelector('.cartoes')])
var sup_container = document.querySelectorAll('.cartoes')
for (var i in sup_container) {
  d_sup_container.containers.push(sup_container[i])
}

//cria novo quadro
$("section.dont-drag").click(function(){
  $(".cartoes").append('<section class="list"><header class="title">Titulo</header><div class="itens"><article class="dont-drag"></article></div><div class="add-new"><a href="#">Adicionar novo quadro</a></div></section>');
});

// cria nova tarefa
$(".add-new").click(function(){
  $(this).parent().find(".itens").append('<article class="card item"><header>Titulo</header><div class="detail">Descricao</div></article>');
});

function teste(){
  alert("oi");
}
