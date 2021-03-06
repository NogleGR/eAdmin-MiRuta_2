<form method="POST" action="{{ route('administradorCrud.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="monoDiv">
		<h3>Rol</h3>
		<select name="rol" class="select" id="rol" required="">
		</select>
	</div>
	<div class="monoDiv">
		<h3>Alias</h3>
		<input type="text" class="inputSimple" name="alias" placeholder="Ingrese el alias o nombre de usuario" required="" maxlength="30" autocomplete="off" value="{{ old('alias') }}">
	</div>
	<div class="monoDivSep">
		<h3>Nombre</h3>
	</div>
	<div class="rowsForm">
		<input type="text" class="inputSimple" name="frname" maxlength="10" placeholder="Ingrese el primer nombre" required="" autocomplete="off" value="{{ old('frname') }}">
	</div>
	<div class="rowsForm">
		<input type="text" class="inputSimple" name="scname" maxlength="10" placeholder="Ingrese el segundo nombre" required="" autocomplete="off" value="{{ old('scname') }}">
	</div>
	<div class="monoDivSep">
		<h3>Apellidos</h3>
	</div>
	<div class="rowsForm">
		<input type="text" class="inputSimple" name="frsurname" maxlength="10" placeholder="Ingrese el primer apellido" required="" autocomplete="off" value="{{ old('frsurname') }}">
	</div>
	<div class="rowsForm">
		<input type="text" class="inputSimple" name="scsurname" maxlength="10" placeholder="Ingrese el segundo apellido" required="" autocomplete="off" value="{{ old('scsurname') }}">
	</div>
	<div class="monoDiv">
		<h3>Correo eléctronico</h3>
		<input type="text" class="inputSimple" name="email" placeholder="Ingrese el correo eléctronico" required="" maxlength="40" autocomplete="off" value="{{ old('email') }}">
	</div>
	<div class="monoDivSep">
		<h3>Contraseña</h3>
	</div>
	<div class="rowsForm divForPass">
		<input type="password" class="inputSimple" name="pass" id="pass" placeholder="Ingrese la contraseña" required="" maxlength="40">
		<a href="#" class="show" id="showP"><img src="{{ asset("img/icons/showIcon.png") }}"></a>
		<a href="#" class="hide" id="hideP"><img src="{{ asset("img/icons/hideIcon.png") }}"></a>
	</div>
	<div class="rowsForm divForPass">
		<input type="password" class="inputSimple" name="passR" id="passR" placeholder="Confirmar contraseña" required="" maxlength="40">
		<a href="#" class="show" id="showPR"><img src="{{ asset("img/icons/showIcon.png") }}"></a>
		<a href="#" class="hide" id="hidePR"><img src="{{ asset("img/icons/hideIcon.png") }}"></a>
	</div>
	<div class="monoDiv divBottomForm">
		<button class="formAddPoiBtn" type="submit">Guardar</button>
	</div>
</form>