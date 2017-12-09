@extends('layouts.layout')

@section('javascript')
%script{:src => 'https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.0/dragula.min.js', :type => "text/javascript"}
%script{:src => "/js/gerenciador.js", :type => "text/javascript"}
@endsection

@section('corpo')
.cartoes
  %section.list
    %header.title 1
    .itens
      %article.dont-drag
      %article.card.item
        %header Drag and Drop CSS
        .detail 1/2
      %article.card.item
        %header Maybe something else ?
        .detail 1/2
    .add-new
      %a{ :href => "#"} Adicionar nova tarefa

  %section.list
    %header.title 2
    .itens
      %article.dont-drag
      %article.card.item
        %header Drag and Drop CSS
        .detail 1/2
      %article.card.item
        %header Maybe something else ?
        .detail 1/2
    .add-new
      %a{ :href => "#"} add novo quadro

  %section.list
    %header.title 3
    .itens
      %article.dont-drag
      %article.card.item
        %header Drag and Drop CSS
        .detail 1/2
      %article.card.item
        %header Maybe something else ?
        .detail 1/2
    .add-new{ :onclick => "teste()"}
      %a{ :href => "#"} add novo quadro

%section.dont-drag
  %header Adicionar novo cartão

@endsection
