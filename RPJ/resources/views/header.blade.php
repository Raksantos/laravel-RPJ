<!DOCTYPE html>
<html>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                    <li><a target="_blank" rel="noopner noreferrer" href="https://www.google.com.br/maps/@-9.6030508,-35.7591262,3a,75y,91.68h,95.4t/data=!3m6!1e1!3m4!1s9_G1gG0GkP6WUYF7acdIAg!2e0!7i13312!8i6656"><i class="fa fa-map-marker"></i>João Sampaio, Maceió-AL</a></li>
                    <li id="#telefone-header"><a href="#telefone-header"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                    <li id="#email-header"><a href="#email-header"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> R$</a></li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-o"></i>
                        @if(Session::has('user'))
                            {{ Session::get('user')->nome }}
                        @else
                            Usuário
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="/" class="logo">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <input class="input" placeholder="Busque aqui">
                            <button class="search-btn">Buscar</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Carrinho</span>
                                <div class="qty">{{ Session::get('quantidade', 0) }}</div>
                            </a>
                            <div class="cart-dropdown">
                                @if(Session::has('itens'))
                                    <div class="cart-list">
                                        @foreach(Session::get('itens') as $item)
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="{{ asset($item->produto->imagem) }}" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="/produto/{{ $item->produto->id }}">{{ $item->produto->nome }}</a></h3>
                                                    <h4 class="product-price">
                                                        <span class="qty">
                                                            {{ $item->quantidade }}x
                                                        </span>
                                                        {{ $item->produto->preco }}
                                                    </h4>
                                                </div>
                                                <form action="/removerProduto" method="POST">
                                                    <input hidden="true" name="id" value="{{ $item->produto->id }}" />
                                                    <input hidden="true" name="preco" type="number" value="{{ $item->produto->preco }}" />
                                                    <input hidden="true" name="quantidade" type="number" value="{{ $item->quantidade }}" />
                                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                    <button class="delete" type="submit"><i class="fa fa-close"></i></button>
                                                </form>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                
                                <div class="cart-summary">
                                    <small>{{ Session::get('quantidade', 0) }} Produto(s) selecionado(s)</small>
                                    <h5>SUBTOTAL: R$ {{ Session::get('total', 0) }}</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">Ver carrinho</a>
                                    <a href="#">Finalizar  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
</html>