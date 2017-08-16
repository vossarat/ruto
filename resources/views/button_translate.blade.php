<!-- Button translate Section -->
	<div id="buttonTranslate">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<button id="buttonTranslated" type="button" class="btn btn-lg btn-primary">
					<i class="fa fa-refresh fa-5x"></i>
				</button>
			</div>
		</div>
	</div>

@push('scripts')
<script>
	$('#buttonTranslated').on('click', function()
		{
			$.ajax(
				{
					url:'/translate/' + $('#textrus').val(),
					dataType:'text',
					type:'POST',
					data:
					{
						_token: "{{ csrf_token() }}"
					},
					success:function( response )
					{
						$('#textkaz').val( response );
					},
					error: function ( jqXHR, textStatus, errorThrown )
					{
						$('#textkaz').val( 'error = ' + errorThrown );
					},
				});
		});
</script>
@endpush