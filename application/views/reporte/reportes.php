<script type="text/javascript" src="<?=base_url('application/js/reportes/reporte.js')?>"></script>
<section class="panel">
	<header class="panel-heading">
		Reporte
	</header>
	<br>
	<div class="panel-body">
		<form id="reporteForm">
			<div>
				<label>Reporte</label>
				<br>
				<input class="form-control" placeholder="Ingrese algo" name="algoTexto" id="texto" type="text">
			</div>
			<br>
			<div>
				<label>Observaciones</label>
				<br>
				<textarea rows="10" cols="30" class="form-control" id="cajaTX" name="cajaDeTexto" placeholder="Escriba algo"></textarea>
			</div>
			<br>
			<div>
				<label>Tipo de Cuestion</label>
				<br>
				<select class="form-control m-bot15" name="seleccion" id="seleccion">
					<option value="Error en el funcionamiento">Error en el funcionamiento</option>
					<option value="Sugerencia">Sugerencia</option>
					<option value="Reporte de Error">Reporte de Error</option>
					<option value="Informacion inconsistente">Informacion inconsistente (No concuerda)</option>
					<option value="No se visualiza la pagina en mi dispositivo correctamente">No se visualiza la pagina en mi dispositivo correctamente</option>
				</select>
			</div>
			<div>
				<br>
				<button type="submit" class="btn btn-primary" id="Enviar" >Enviar</button>
			</div>
		</form>
		<div id="etiquetaA"></div>
	</div>
</section>