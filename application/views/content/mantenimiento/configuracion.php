<?php
 $this->load->view('head');
 $this->load->view('menu');
?>
<div class="page-content">
	<?php 
    $this->load->view('menu_head');
    ?>
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>                    
        <li class="active">Configuración</li>
    </ul>
    <!-- END BREADCRUMB -->
    <div class="row">
    	<div class="col-md-12">    		
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Configuraciones</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Especialidad</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-inline" role="form" id="formEspec">
                                        <label class="control-label col-md-12">Especialidad</label>
                                        <div class="form-group">                                            
                                            <div class="input-group">  
                                            <input type="hidden" name="id" id="idespecialidad" value="">
                                            <input type="hidden" name="status" id="statusespecialidad" value="save">                           
                                                <input class="form-control" type="text" id="especialidad" name="especialidad" placeholder="" onkeyup="busqueda(this.value,'tblEspecialidad')"/>
                                            </div>
                                        </div> 
                                        <span id="btnespecialidad">
                                            <button type="button" class="btn btn-primary" id="btnsaveEspec" onclick="guardarConfiguracion('formEspec','especialidad','save_select','tbl_espec()')"><i class="fa fa-save"></i></button>
                                        <!-- <button type="button" class="btn btn-danger"><i class="fa fa-save"></i></button> -->
                                        </span>                                   
                                        
                                    </form> 
                                    
                                    <table class="table display">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblEspecialidad">                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Formación</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-inline" role="form" id="formForma">
                                        <label class="col-md-12">Formación</label>
                                        <div class="form-group">                                            
                                            <div class="input-group">
                                            <input type="hidden" name="id" id="idformacion" value="">
                                            <input type="hidden" name="status" id="statusformacion" value="save">                                          
                                                <input class="form-control" type="text" id="formacion" placeholder="" onkeyup="busqueda(this.value,'tblForma')"/>
                                            </div>
                                        </div> 
                                        <span id="btnformacion">
                                            <button type="button" class="btn btn-primary" id="btnsaveForma" onclick="guardarConfiguracion('formForma','formacion','save_select','tbl_forma()')"><i class="fa fa-save"></i></button>

                                        </span>                                   
                                        
                                    </form> 
                                    
                                    <table class="table display">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblForma">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Estado</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-inline" role="form" id="formEsta">
                                        <label class="col-md-12">Estado</label>
                                        <div class="form-group">                                            
                                            <div class="input-group">
                                            <input type="hidden" name="id" id="idestado" value="">
                                            <input type="hidden" name="status" id="statusestado" value="save">                                           
                                                <input class="form-control" type="text" id="estado" placeholder="" onkeyup="busqueda(this.value,'tblEstado')"/>
                                            </div>
                                        </div> 
                                        <span id="btnestado">
                                            <button type="button" class="btn btn-primary" id="btnsaveEsta" onclick="guardarConfiguracion('formEsta','estado','save_select','tbl_estado()')"><i class="fa fa-save"></i></button>
                                        </span>                                   
                                        
                                    </form> 
                                    
                                    <table class="table display" id="tbldatos">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblEstado">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Cargo</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-inline" role="form" id="formCargo">
                                        <label class="col-md-12">Cargo</label>
                                        <div class="form-group">                                            
                                            <div class="input-group">  
                                            <input type="hidden" name="id" id="idcargo" value="">
                                            <input type="hidden" name="status" id="statuscargo" value="save">                                         
                                                <input class="form-control" type="text" id="cargo" placeholder="" onkeyup="busqueda(this.value,'tblCargo')" />
                                            </div>
                                        </div> 
                                        <span id="btncargo">
                                            <button type="button" class="btn btn-primary" id="btnsaveCargo" onclick="guardarConfiguracion('formCargo','cargo','save_select','tbl_cargo()')"><i class="fa fa-save"></i></button>
                                        </span>                                   
                                        
                                    </form> 
                                    
                                    <table class="table display" id="tbldatos">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblCargo">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Asignaturas</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-inline" role="form" id="formAsignatura">
                                        <label class="col-md-12">Asignaturas</label>
                                        <div class="form-group">                                            
                                            <div class="input-group">  
                                            <input type="hidden" name="id" id="idasignatura" value="">
                                            <input type="hidden" name="status" id="statusasignatura" value="save">                                         
                                                <input class="form-control" type="text" id="asignatura" placeholder="" onkeyup="busqueda(this.value,'tblAsignatura')" />
                                            </div>
                                        </div> 
                                        <span id="btnasignatura">
                                            <button type="button" class="btn btn-primary" id="btnsaveCargo" onclick="guardarConfiguracion('formAsignatura','asignatura','save_select','tbl_asignatura()')"><i class="fa fa-save"></i></button>
                                        </span>                                   
                                        
                                    </form> 
                                    
                                    <table class="table display" id="tbldatos">
                                        <thead>
                                            <tr>
                                                <th>Asignatura</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblAsignatura">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Nivel</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-inline" role="form" id="formNivel">
                                        <label class="col-md-12">Nivel</label>
                                        <div class="form-group">                                            
                                            <div class="input-group">  
                                            <input type="hidden" name="id" id="idnivel" value="">
                                            <input type="hidden" name="status" id="statusnivel" value="save">                                         
                                                <input class="form-control" type="text" id="nivel" placeholder="" onkeyup="busqueda(this.value,'tblAsignatura')" />
                                            </div>
                                        </div> 
                                        <span id="btnasignatura">
                                            <button type="button" class="btn btn-primary" id="btnsaveCargo" onclick="guardarConfiguracion('formNivel','nivel','save_select','tbl_nivel()')"><i class="fa fa-save"></i></button>
                                        </span>                                   
                                        
                                    </form> 
                                    
                                    <table class="table display" id="">
                                        <thead>
                                            <tr>
                                                <th>Nivel</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblNivel">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
    
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/mantenimiento.js"></script>
<?php
 $this->load->view('content/modales/modales');
 $this->load->view('foot');
?>