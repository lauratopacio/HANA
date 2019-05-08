
<div class="modal fade" id="addDireccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">    
           <b for="tel" id="textos">Agregar dirección</b>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     {!! Form::open(['route' => 'direccion.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <div class="modal-body ">
          <div class="row" >
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" >        
                    <div class="form-group">
                      <p for="estado" id="textos">Estado:</p>
                      <input type="text" class="input_form" id="estado" name="estado">
                    </div>
                    <div class="form-group">
                      <p for="municipio" id="textos">Municipio:</p>
                      <input type="text" class="input_form" id="municipio" name="municipio">
                    </div>
                    <div class="form-group">
                      <p for="cp" id="textos">Código postal</p>
                      <input type="text" class="input_form" id="cp" name="cp">
                    </div>
                    <div class="form-group">
                      <p for="colonia" id="textos">Colonia:</p>
                       <input type="text" class="input_form" id="colonia" name="colonia">  
                    </div>               
            </div>   
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="marg" >
                      <div class="form-group">
                        <p for="calle" id="textos">Calle:</p>
                         <input type="text" class="input_form" id="calle" name="calle"  >  
                      </div>
                      <div class="form-group">
                        <p for="numero" id="textos">No.:</p>
                         <input type="text" class="input_form" id="numero" name="numero"  >  
                      </div>
                      <div class="form-group">
                       <p for="tel" id="textos">Teléfono celular 10 dígitos</p>
                        <input type="text" class="input_form" id="tel" name="tel">  
                      </div>             
                      <button type="submit" class="boton_enviar">Agregar</button>
            </div>   
          </div> 
      </div>
    {!! Form::close() !!}



    </div>
  </div>
</div>