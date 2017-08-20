<!-- Input datebook section -->
<section id="datebook">	
	<div class="contanier">	 
		<div class="row">
			<form class="">
				<div class="col-md-4 col-md-offset-2" >
					<div class = "form-group-textarea">							
						<textarea id="textrus" class = "form-control" rows = "25" name="textrus"></textarea>
					</div>                
				</div>
				<div class="col-md-4" >
					<div class = "form-group-textarea">
						<textarea id="textkaz" class = "form-control" rows = "25" name="textkaz"></textarea>
					</div>
				</div>					
		
				<button id="buttonTranslated" type="button" class="btn btn-lg btn-primary">
					Перевести
				</button>
			</form>
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

</section>	