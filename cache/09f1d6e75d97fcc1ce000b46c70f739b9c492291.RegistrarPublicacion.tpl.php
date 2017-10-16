<?php
/* Smarty version 3.1.31-dev/1, created on 2017-10-16 20:45:36
  from "C:\xampp\htdocs\DistribuidosWeb\views\RegistrarPublicacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_59e4fe5003f032_69752021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7b62b867c490db813515719f25e6aaa706b8ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DistribuidosWeb\\views\\RegistrarPublicacion.tpl',
      1 => 1508179532,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_59e4fe5003f032_69752021 (Smarty_Internal_Template $_smarty_tpl) {
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
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->


    </div>
</div>

</section><?php }
}