<?php slot('titulo', 'Movimientos') ?>
<?php slot('porcion_css') ?>
        <style type="text/css">
            /*
             * Style tweaks
             * -------------------------------------------------- */
            html,
            body {
              overflow-x: hidden; /* Prevent scroll on narrow devices */
            }
            body {
              padding-top: 70px;
            }
            footer {
              padding: 30px 0;
            }
            .bs-example:after {
                position: absolute;
                top: 15px;
                left: 15px;
                font-size: 12px;
                font-weight: bold;
                color: #959595;
                text-transform: uppercase;
                letter-spacing: 1px;
                content: "Movimientos Bancarios";
            }
        </style>
<?php end_slot() ?>
<?php include_partial('navbar', array('ruta' => '@homepage')) ?>
        <div class="container">
            <div class="row/* row-offcanvas row-offcanvas-right*/">
                <div class="col-xs-12/* col-sm-10*/">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div class="bs-example" data-example-id="simple-table">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">Brand</a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">Link</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <form class="navbar-form navbar-left">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#">Link</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                        <table class="table table-striped table-bordered table-condensed table-hover responsive-utilities">                            
                            <caption>Optional table caption.</caption>
                            <thead>
                                <tr>
                                    <th>Fecha<small>movimiento</small></th>
                                    <th>Concepto<small>detalle/transacci&oacute;n</small></th>
                                    <th>Tipo<small>D/C</small></th>
                                    <th>Documento<small>identificador</small></th>
                                    <th>Monto<small>$ 0,01</small></th>
                                    <th>Saldo<small>$ 1,00</small></th>
                                </tr>
                            </thead>
                            <tbody>
<?php foreach ($obj->data as $k => $v): ?>
                                <tr>
                                    <td><?=$v->date?></td>
                                    <td><?=$v->subject?></td>
                                    <td><?=$v->type?></td>
                                    <td><?=$v->document?></td>
                                    <td><?=$v->amount?></td>
                                    <td><?=$v->balance?></td>
                                </tr>
<?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <figure class="highlight">
                        <pre>
                            <code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
 ...
<span class="nt">&lt;/table&gt;</span></code>
                        </pre>
                    </figure>
                </div><!--/.col-xs-12.col-sm-10-->
                <?php //include_partial('sidebar') ?>
            </div><!--/row-->
            <?php include_partial('footer') ?>
        </div><!--/.container-->
<?php slot('porcion_js') ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="offcanvas"]').click(function () {
                    $('.row-offcanvas').toggleClass('active');
                });
            });
        </script>
<?php end_slot() ?>