<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Código</label>
							<input type="text" name="edit_code"  id="edit_code" class="form-control" required>
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
						<div class="form-group">
							<label>Producto</label>
							<input type="text" name="edit_name" id="edit_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Referencia</label>
							<input type="text" name="edit_referencia" id="edit_referencia" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Costo</label>
							<input type="text" name="edit_costo" id="edit_costo" class="form-control">
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="edit_price" id="edit_price" class="form-control" required>
						</div>						
					</div>
					<div class="modal-footer">

						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="button" id="imprimir" class="btn btn-success" value="Imprimir">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="jspdf/dist/jspdf.min.js"></script>
<script>
	$("#imprimir").click(function(){
  
	var code = document.getElementById("edit_code").value;
	var name = document.getElementById("edit_name").value;
	var referencia = document.getElementById("edit_referencia").value;
	var costo = document.getElementById("edit_costo").value;
	var price = document.getElementById("edit_price").value;

	var pdf = new jsPDF(
	{
		orientation: 'p',
		unit: 'mm',
		format: [150, 300],
		putOnlyUsedFonts:true
	}
  );
  pdf.setFontSize(8);
  pdf.text(3,5,"ALBERTO ARNAUD AUTO PARTS");
  pdf.text(3,9,name);
  pdf.text(3,13,code);  
  pdf.text(3,17,referencia);
  pdf.setFontSize(20);
  pdf.text(5,24,costo);
  pdf.text(30,24,price);
  window.open(URL.createObjectURL(pdf.output("blob")));
  //pdf.save('producto.pdf')
});
	
</script>