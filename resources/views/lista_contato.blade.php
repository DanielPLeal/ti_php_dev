@extends('layouts.topo')

@section('content')
	<div class="right_col" role="main">		
		<div class="x_panel">
			<div class="x_title">
			  	<div class="col-md-8 col-sm-8 col-xs-8">
			  		<h2>Agenda</h2>
			  	</div>
			  	<div class="col-md-4 col-sm-4 col-xs-4 text-right">
			  		<a class="btn btn-primary btn-xs" onclick="abreModalCadastro(-1);">+Incluir Contato</a>
			  	</div> 	
			    <div class="clearfix"></div>
			</div>

			<div class="x_content">
				<div class="table-responsive">
			        <table class="table table-striped jambo_table bulk_action">
			      	    <thead>
			              <tr class="headings">
			                <th class="column-title text-center">Nome </th>
			                <th class="column-title text-center">Telefone</th>	
			                <th></th>                
			              </tr>
			            </thead>
			            <tbody id="">
			            @foreach($contatos as $contato)
			            	<tr>
								<td class='text-center' style='cursor: pointer;'><a href="/det_contato/{{$contato->id}}">{{ $contato->nome}}</a></td>
								<td class='text-center' style='cursor: pointer;'><a href="/det_contato/{{$contato->id}}">{{ $contato->telefone}}</a></td>
								<form id="FormDelete+{{$contato->id}}" method="post" action="/{{$contato->id}}">
	                            @csrf
	                            <input type="hidden" name="_method" value="delete">
								<td data-toggle="tooltip" data-placement="top" title="Excluir" class='text-center' style='cursor: pointer;'><a onclick="abreModalDeleteContato({{ $contato->id }});"><i class='fa fa-trash'></i></a></td> 
								</form>
							</tr>
						@endforeach
			            </tbody>
			        </table>
		        </div>	  	
	 		</div>
	 		<div style="text-align: center;">
				<span style="text-align: center;">Fim das informações</span>
			</div>
		</div>
	</div>

	<div class="modal fade" id="ModalDeleteContato" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog modal-xs">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	                <h4 class="modal-title">EXCLUIR CONTATO?</h4>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<!-- <a onclick="confDeleteContato();" class="btn btn-danger"><i class="fa fa-trash"></i> Sim</a> -->
	                <button type="submit" id="confirmarDel" class="btn btn-danger"><i class="fa fa-trash"></i> Sim</button>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="modal fade" id="ModalCadContato" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	                <h4 class="modal-title">Informações Contato</h4>
	            </div>
	            <form id="cadUsuario" method="POST" action="/" enctype="multipart/form-data">
	            @csrf            
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col-md-8 col-sm-8 col-xs-12">
		    				  <label for="nome">Nome</label>
		    				  <input type="text" class="form-control" id="nome" name="nome" value="" required />
		    				</div> 
		    				<div class="col-md-4 col-sm-8 col-xs-12 form-group has-feedback">
		    					<label for="telefone">Telefone</label>
		    					<input type="text" class="form-control" id="telefone" name="telefone" value="" required/><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
	    					</div> 
		                </div>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		                <a onclick="validaTelefone();" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Cadastrar</a>
		            </div>
		        </form>
	        </div>
	    </div>
	</div>

	<div class="modal fade" id="ModalMsg" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog modal-xs">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
	                <h4 class="modal-title text-center" id="msg" value=""></h4>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	            </div>
	        </div>
	    </div>
	</div>

	<script type="text/javascript">
		
		function abreModalDeleteContato(id){
	        $('#id_contato_delete').val(id);
	        console.log('id_contato '+id);
	        $('#ModalDeleteContato').modal('show');
	        $('#confirmarDel').click(function(){
	        	document.getElementById('FormDelete+'+id).submit();
	        });
		}
		
		function abreModalCadastro(id){
	        $('#nome').val('');
	        $('#telefone').val('');
	        console.log('id '+id);
	        $('#ModalCadContato').modal('show');
		} 

		function validaTelefone(){

			var telefone = telefone_validation($('#telefone').val());
			var nome = $('#nome').val();		
			if (telefone && nome != "") {
				document.getElementById('cadUsuario').submit();
			} else {
				$('#msg').text('VERIFIQUE O NÚMERO DO TELEFONE INFORMADO!');
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