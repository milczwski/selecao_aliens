<div class="container">
	<div class="col-sm-2 col-sm-offset-7">
		@if(Session::has('user'))
		  <p> Seja bem vindo, {{ Session::get('user')[0]->name }}. </p>
		@else

		@endif
	</div>
	<div class="col-sm-1">
        <a href="home">
            <input type="button" name="Cancelar" value="home">
        </a>
    </div>
	<div class="col-sm-1">
		<a href="logout">
	   		<button> Logout</button>
		</a>
	</div>
</div>




