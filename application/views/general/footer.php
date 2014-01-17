	</div>
	<div class="col-md-1"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<?=form_open("login/auth"); ?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Login</h4>
			</div>
			<div class="modal-body">
				<label for="username">Gebruikersnaam</label>
				<input type="text" id="username" class="form-control" name="username" />
				<label for="pass">Wachtwoord</label>
				<input type="password" id="pass" class="form-control" name="pass" />
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" value="Inloggen">
			</div>
			<?=form_close(); ?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Bootstrap core JavaScript ================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?=base_url("stuff/js/bootstrap.js")?>"></script>

<script>

jQuery.expr[':'].containsLower = function(a, i, m, span) {
  return jQuery(a).text().toUpperCase()
      .indexOf(m[3].toUpperCase()) >= 0;
};

$('#filter').keyup(function(){
    $('ul a').hide().filter(':containsLower("'+this.value+'")').show();
});
</script>

</body>
</html>