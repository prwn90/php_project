<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Udostępnij coś!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Udostępnij tytuł!</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Tekst</label>
    		<textarea name="body" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="link" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Zatwierdź" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Anuluj</a>
    </form>
  </div>
</div>