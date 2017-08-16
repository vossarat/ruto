<!-- Button translate Section -->
<div id="buttonOrder">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center">
			<button id="buttonOrdered" type="button" class="btn btn-lg btn-danger">
				<i class="fa fa-credit-card fa-1x"></i>
				Заказать перевод
			</button>
		</div>
	</div>
</div>

<div id="block">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center">
			<button id="buttonOrdered" type="button" class="btn btn-lg btn-danger">
				<i class="fa fa-credit-card fa-1x"></i>
				Форма
			</button>
		</div>
	</div>
</div>

@push('scripts')
<script>
	$('#buttonOrdered').on('click', function()
		{
			$("#block").fadeIn(500)
		});
</script>
@endpush