!!!
%html
  %head
    %meta{:charset => "utf-8"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}

    %link{href: "https://fonts.googleapis.com/css?family=Lato:100", rel: "stylesheet"}
    %link{href: "https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700", rel: "stylesheet", type: "text/css"}
    -# bootstrap
    %link{:crossorigin => "anonymous", :href => "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css", :integrity => "sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb", :rel => "stylesheet"}/

    @include('sidebar/sidebar')
    @include('topbar/topbar')

    @yield('css')

    %title Game of Task
    -# FavIcon
    -# %link{:href => "/favicon.ico", :rel => "icon", :type => "image/x-icon"}

    -# CSS
    %link{:href => "/css/app.css", :rel => "stylesheet", :type => "text/css"}

  %body
    @yield('corpo')

  %script{:crossorigin => "anonymous", :integrity => "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN", :src => "https://code.jquery.com/jquery-3.2.1.slim.min.js"}
  %script{:crossorigin => "anonymous", :integrity => "sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh", :src => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"}
  %script{:crossorigin => "anonymous", :integrity => "sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ", :src => "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"}
  %script{:src => "https://use.fontawesome.com/cb5fd754cf.js"}
  %script{:src => "/js/app.js", :type => "text/javascript"}
  @yield('javascript')
