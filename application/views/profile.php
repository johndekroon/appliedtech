<h1>Profiel</h1>

<form role="form">
  <div class="form-group">
    <label>Gebruikersnaam</label>
    <p><?=$username?></p>
  </div>
  
  <div class="form-group">
    <label>Laatst Bezocht</label>
    <p><?=date('Y-m-d h:i:s')?></p>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" value="****************" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <h3>Ik ben ge&iuml;ntereseerd in:</h3>
  <div class="checkbox">
  	
    <label><input type="checkbox" checked> Kunst &amp; cultuur <br></label>
	<label><input type="checkbox" checked> Techniek <br></label>
	<label><input type="checkbox" checked> Winkels <br></label>
	<label><input type="checkbox" checked> Sport <br></label>
	<label><input type="checkbox" checked> Uitgaan <br></label>
	<label><input type="checkbox" checked> Restaurants <br></label>
    </label>
  </div>
  <a href="<?=site_url("proto")?>" type="submit" class="btn btn-default">Voorkeuren opslaan</a>
</form>