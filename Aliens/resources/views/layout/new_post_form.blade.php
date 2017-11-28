<div class="jumbotron vertical-center vertical-center col-sm-4 col-sm-offset-4" style="margin-top:10%;">
    <form method="post" action="new_post" id="post_form">
        <div class="form-group">
            <label for="title">Título</label>
            <input type="title" class="form-control" id="title" name="title" placeholder="Título">
            <label for="content">Escreva seu texto:</label>
            <br/>
            <textarea cols="12" class="form-control col-sm-12" name="content" id="content" form="post_form"></textarea>
            <br/>
        </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 15px">Salvar</button>    
    </form>
    <br/>
    <a href="home">Cancelar</a>
</div>