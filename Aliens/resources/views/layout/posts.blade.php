<div>
	<div class="col-sm-8 col-xs-offset-4">
		<a href="new_post">
	   		<button class="col-sm-6"> Criar Post</button>
		</a>
	</div>
	
	<div class="container col-sm-12" style="margin-top: 15px">
		@if($posts->isEmpty())
			<div class="row col-sm-8 col-sm-offset-3">
				<h3>Não há postagens. Clique em 'Criar Post' para adicionar uma nova.</h3>
			</div>
		@endif
		@foreach($posts as $post)
			<div class="row col-sm-8 col-sm-offset-2" style="background-color: 
				@if($loop->iteration % 2 == 0)
					#fff;
				@else
					#ccc;
				@endif
			">	        
	            <h3> {{$post->title}} </h3>
	            <p> {{$post->content}} </p>
	        </div>
		@endforeach
	</div>
</div>
