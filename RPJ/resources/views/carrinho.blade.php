<!DOCTYPE html>
<html lang="en">
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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row justify-content-center">
					
					<div class="col-md-7">
						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Endereço de Entrega</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Enviar para um endereço diferente?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="Nome">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Sobrenome">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Endereço">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="Cidade">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="CEP">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telefone">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Observações sobre o pedido"></textarea>
						</div>
						<!-- /Order notes -->
						
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Seu Carrinho</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUTO</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								@if(Session::has('itens'))
									@foreach(Session::get('itens') as $item)
										<div class="order-col">
											<div>{{ $item->quantidade }}x {{ $item->produto->nome }}</div>
											<div>{{ $item->quantidade * $item->produto->preco }}</div>
										</div>
									@endforeach
								@endif
							</div>
							<div class="order-col">
								<div>Frete</div>
								<div><strong>GRÁTIS</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{ Session::get('total', 0) }}</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Pagamento via PagSeguro
								</label>
								<div class="caption">
									<p>Você será redirecionado para o site do PagSeguro para concluir sua compra.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Pagamento via Paypal
								</label>
								<div class="caption">
									<p>Você será redirecionado para o site do PayPal para concluir sua compra.</p>
								</div>
							</div>
						</div>
						@if(Session::get('quantidade',0) > 0)
							<a href="#" class="primary-btn order-submit">Finalizar Pedido</a>
						@else
							<a href="#" disabled="true" class="primary-btn order-submit">Finalizar Pedido</a>	
						@endif
					</div>
					<!-- /Order Details -->
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