@extends('layouts.layout')
@section('corpo')
.cartoes
  %section.list
    %header.title To Do
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
    %header.title To Do
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


@endsection
