<?php
/* Smarty version 3.1.31-dev/1, created on 2017-10-16 23:55:58
  from "C:\xampp\htdocs\WebLostPeople\views\RegistrarPublicacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_59e52aee15c572_97148918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2873e3bf5de35fec12915afba9df4c65a434800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebLostPeople\\views\\RegistrarPublicacion.tpl',
      1 => 1508190952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e52aee15c572_97148918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '829359e52aee0ad979_81503876';
?>
<section class="content-header">
    <h1>
        Registrar 
        <small> Publicacion</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<section class="content">
<div class="row">
    <div class="col-md-12">
            <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Registrar Publicacion</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Datos Adicionales</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Contactos</a></li>

                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                
            <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputApellido" class="col-sm-2 control-label">Apellido</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEdad" class="col-sm-2 control-label">Edad</label>

                                    <div class="col-sm-10">
                                        <input type="numeric" class="form-control" id="inputEdad" placeholder="Edad">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstatura" class="col-sm-2 control-label">Estatura</label>

                                    <div class="col-sm-10">
                                        <input type="numeric" class="form-control" id="inputEstatura" placeholder="Estatura">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSexo" class="col-sm-2 control-label">Sexo</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAlias" placeholder="Sexo">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputcolorpelo" class="col-sm-2 control-label">Color de cabello</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputcolorpelo" placeholder="Color de cabello">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputcolorpiel" class="col-sm-2 control-label">Color de piel</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputcolorpiel" placeholder="Color de piel">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputvestimenta" class="col-sm-2 control-label">Vestimenta</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputvestimenta" placeholder="Vestimenta">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputconstitucion" class="col-sm-2 control-label">Constitucion corporal</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEstatura" placeholder="Constitucion corporal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputotros" class="col-sm-2 control-label">Informacion adicional</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputotros" placeholder="Informacion adicional">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                         <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputnombre" class="col-sm-2 control-label">Nombre</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputnombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputapellido" class="col-sm-2 control-label">Apellido</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputapellido" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputsexo" class="col-sm-2 control-label">Sexo</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputsexo" placeholder="Sexo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputparentesco" class="col-sm-2 control-label">Parentesco</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputparentesco" placeholder="Parentesco">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputtelefono" class="col-sm-2 control-label">Telefono</label>

                                    <div class="col-sm-10">
                                        <input type="numeric" class="form-control" id="inputTelefono" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputemail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputemail" placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <!-- /.tab-pane -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
</div>

</section><?php }
}
