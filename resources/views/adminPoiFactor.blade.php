@extends('layouts.logedBase')

@section('title')
	<title>eAdmin MiRuta | Gestión de Inventario Turístico | Gestión de PoI-Factor</title>
@endsection

@section('style')
	<script src="{{ asset("js/panelShowHide.js") }}"></script>
@endsection

@section('ubication')
	<span class="menuHoriTextN1">&nbsp;|&nbsp;</span><a href="{{ route('home') }}" class="menuHoriTextN1">Inicio</a><span class="menuHoriTextN2">&nbsp;|&nbsp;</span><a href="{{ route('inventary') }}" class="menuHoriTextN2">Gestión de Inventario Turístico</a><span class="menuHoriTextN3">:: Gestión de PoI-Factor</span>
@endsection

@section('secundario')
	@switch($section)
		@case("modificar")
			@include('panels.secundary.selectPoiMod')
			@include('panels.secundary.alertFormFactor')
		@break

		@case("emparejar")
			@include('panels.secundary.alertFormFactor')
		@break

		@case("consultar")

		@break

		@default
		@break
	@endswitch
@endsection

@section('content')
	<div class="panelContenido">
		<div class="panelBotones">
			<a href="{{ route('poiFactorCrud.redirecToSection', "emparejar")}}" class="{{$section=="emparejar" ? 'panelBotonesActived' : 'panelBotonesInactived'}}"><span>Emparejar</span></a>
			<a href="{{ route('poiFactorCrud.redirecToSection', "modificar") }}" class="{{$section=="modificar" ? 'panelBotonesActived' : 'panelBotonesInactived'}}"><span>Modificar</span></a>
			<a href="{{ route('poiFactorCrud.redirecToSection', "consultar") }}" class="{{$section=="consultar" ? 'panelBotonesActived' : 'panelBotonesInactived'}}"><span>Consultar</span></a>
		</div>
		<div class="divForm" id="divFormulario" style="width: 1010px;">
			@switch($section)
				@case("modificar")
					@include('panels.adminPoiFactor.modify')
				@break

				@case("emparejar")
					@include('panels.adminPoiFactor.match')
				@break

				@case("consultar")
					@include('panels.adminPoiFactor.consult')
				@break

				@default
				@break
			@endswitch
		</div>
	</div>
@endsection

@section('script')
	@switch($section)
		@case("emparejar")
			@include('scripts.adminPoiFactor.match.getPoisNoF')
		@break

		@case("modificar")
			@include('scripts.adminPoiFactor.modify.fillNullPoiList')
			@include('scripts.adminPoiFactor.modify.searchPoi')
		@break		

		@case("consultar")
			@include('scripts.adminPoiFactor.consult.searchPoi')
		@break

		@default
		@break
	@endswitch
@endsection