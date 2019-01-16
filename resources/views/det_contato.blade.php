@extends('layouts.topo')

@section('content')
	<form id="cadUsuario" method="POST" action="/editar/{{$contato->id}}" enctype="multipart/form-data">
    @csrf 
	  <input type="hidden" name="grava_contato" value="true"> 
	  <div class="right_col" role="main">
	    <div class="">
	      <div class="x_panel">
	        <div class="x_title">
	          <h2>Informações do Contato</h2>
	          <ul class="nav navbar-right panel_toolbox" style="min-width: 0;">
	            <li><a class="btn btn-default" href="/"><i class="fa fa-undo"></i> Voltar</a></li>
	          </ul>
	          <div class="clearfix"></div>
	          </div>
	          <div class="x_content"> 
	            <!-- Tab -->
	            <div class="" role="tabpanel" data-example-id="togglable-tabs">
					<div class="col-md-8 col-sm-8 col-xs-12">
					  <label for="nome">Nome</label>
					  <input type="text" class="form-control" id="nome" name="nome" value="{{ $contato->nome}}" required />
					</div> 
					<div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
						<label for="telefone">Telefone</label>
						<input type="text" class="form-control" id="telefone" name="telefone" value="{{ $contato->telefone}}" required/><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
					</div>   
	            <!-- Tab -->
	            <div class="col-xs-12">&nbsp;</div>
	            <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-6 text-center">
							<a class="btn btn-danger" href="/"><i class="fa fa-close"></i> Cancelar</a>		
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-center">							
							<a onclick="validaTelefone();" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Alterar </a>				
						</div>
					</div>
	            </div>         
	        </div>    
	      </div>
	    </div>      
	  </div>
	</form>
	
	<div class="modal fade" id="ModalMsg" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog modal-xs">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	                <h4 class="modal-title text-center" id="msg" value=""></h4>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo"></i>Voltar</button>
	            </div>
	        </div>
	    </div>
	</div>


	<script type="text/javascript">

		function validaTelefone(){
			var telefone = telefone_validation($('#telefone').val());
			var nome = $('#nome').val();		
			if (telefone && nome != "") {
				document.getElementById('cadUsuario').submit();
			} else {
				$('#msg').text('VERIFIQUE O NÚMERO DO TELEFONE!');
				$('#ModalMsg').modal('show');
			} 
		}

		jQuery("input#telefone").mask("(99) 9999-9999?9").focusout(function (event) {  
	        var target, phone, element;  
	        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
	        phone = target.value.replace(/\D/g, '');
	        element = $(target);  
	        element.unmask();  
	        if(phone.length > 10) {  
	            element.mask("(99) 99999-999?9");  
	        } else {  
	            element.mask("(99) 9999-9999?9");  
	        }  
	    });
	</script>
@endsection