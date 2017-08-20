<!-- Input order section -->
<section id="order">	
	<div class="contanier">
		<div class="row">
			<form class="form-horizontal" role="form" method="POST" action="">
				{{ csrf_field() }}

				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<div class="col-md-6 col-md-offset-3 input-group">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
						<input id="name" type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" placeholder="Напишите Ваше имя" required>

						@if ($errors->has('name'))
						<span class="help-block">
							<strong>
								{{ $errors->first('name') }}
							</strong>
						</span>
						@endif
					</div>
				</div>
				
				<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

					<div class="col-md-6 col-md-offset-3 input-group">
						<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
						<input id="phone" type="text" class="form-control input-lg" name="phone" value="{{ old('phone') }}" placeholder="Номер телефона" required>

						@if ($errors->has('phone'))
						<span class="help-block">
							<strong>
								{{ $errors->first('phone') }}
							</strong>
						</span>
						@endif
					</div>
				</div>
				
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

					<div class="col-md-6 col-md-offset-3 input-group">
						<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
						<input id="email" type="text" class="form-control input-lg" name="email" value="{{ old('phone') }}" placeholder="Email address" required>

						@if ($errors->has('email'))
						<span class="help-block">
							<strong>
								{{ $errors->first('email') }}
							</strong>
						</span>
						@endif
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3 input-group">
						<textarea rows="6" class="form-control" id="translate" placeholder="Введите текст для перевода"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-3 input-group">
						<button type="submit" class="btn btn-info btn-lg btn-block">
							<b><big>Заказать перевод</big></b>
						</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</section>	