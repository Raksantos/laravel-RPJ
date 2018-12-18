<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>RPJ Tecnologia</title>

	@include('imports-css')

</head>

<body>
	@include('header')

	@include('nav')

	@include('colecoes')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Novos Produtos</h3>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">

									@foreach ($produtos as $p)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<div class="product-label">
													<span class="new">NOVO</span>
												</div>
												<img src={{ $p->imagem }} alt="">
											</div>
											<div class="product-body">												
												<p class="product-category">{{ $p->categoria }}</p>
												<h3 class="product-name"><a href="#">{{ $p->nome }}</a></h3>
												<h4 class="product-price">R${{ $p->preco }}</h4>
												<div class="product-btns">
													<a href="produto/{{ $p->id }}">Ver Detalhes</a>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <span>adicionar ao carrinho</span></button>
											</div>
										</div>
										<!-- /product -->
									@endforeach

								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('footer')

	@include('imports-js')

</body>

</html>