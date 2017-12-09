// troca os itens dos cartões entre os cartões
var d = dragula({
  moves: function (el, cont, handle) {
    if(handle.className == 'dont-drag'){
      return false;
    }
    return handle.className !== 'title'
  }
})
var cs = document.querySelectorAll('.itens')
for (var i in cs) {
  d.containers.push(cs[i])
}
//troca a posição dos cartões
