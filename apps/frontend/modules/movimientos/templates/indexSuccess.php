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
            .tbl-movimientos thead th {
                text-align: center;
            }
            .banking_accounts {
                margin: 8px 0;
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
                                    <a class="navbar-brand" href="<?php echo url_for("@homepage") ?>">Home</a>
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
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </form>
                                    <select class="banking_accounts selectpicker"<?php if (count($obj_ba) > 3): ?> data-live-search="true"<?php endif; ?>>
<?php foreach ($obj_ba as $kog => $vog): ?>
                                        <optgroup label="<?php echo $vog->bank_name ?>">
<?php   foreach ($vog->numbers_accounts as $k => $v): ?>
                                            <option><?=$v?></option>
<?php   endforeach; ?>
                                        </optgroup>
<?php endforeach; ?>
                                    </select>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                        <table class="tbl-movimientos table table-striped table-bordered table-hover responsive-utilities">
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
<?php foreach ($obj_bt->pager->data_pager as $k => $v): ?>
                                <tr>
                                    <td><?=$v->mo_fecha?></td>
                                    <td><?=$v->mo_concepto?></td>
                                    <td><?=$v->mo_tipo?></td>
                                    <td><?=$v->mo_documento?></td>
                                    <td><?=$v->mo_monto?></td>
                                    <td><?=$v->mo_saldo?></td>
                                </tr>
<?php endforeach; ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
<?php if ($obj_bt->pager->have_to_paginate): ?>
                                <li<?php if ($obj_bt->pager->get_page == $obj_bt->pager->get_previous_page): ?> class="disabled"<?php endif; ?>>
                                    <a href="<?php echo url_for("@movimientos?page=1") ?>" aria-label="Init">
                                        <span aria-hidden="true">&larr;</span>
                                    </a>
                                </li>
                                <li<?php if ($obj_bt->pager->get_page == $obj_bt->pager->get_previous_page): ?> class="disabled"<?php endif; ?>>
                                    <a href="<?php echo url_for("@movimientos?page=".$obj_bt->pager->get_previous_page) ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
<?php   foreach ($obj_bt->pager->get_links as $v): ?>
<?php       if ($obj_bt->pager->get_page == $v): ?>
                                <li class="active"><a href="javascript:void(0)"><?=$v?></a></li>
<?php       else: ?>
                                <li><a href="<?php echo url_for("@movimientos?page=".$v) ?>"><?=$v?></a></li>
<?php       endif; ?>
<?php   endforeach; ?>
                                <li<?php if ($obj_bt->pager->get_page == $obj_bt->pager->get_next_page): ?> class="disabled"<?php endif; ?>>
                                    <a href="<?php echo url_for("@movimientos?page=".$obj_bt->pager->get_next_page) ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                                <li<?php if ($obj_bt->pager->get_page == $obj_bt->pager->get_last_page): ?> class="disabled"<?php endif; ?>>
                                    <a href="<?php echo url_for("@movimientos?page=".$obj_bt->pager->get_last_page) ?>" aria-label="Last">
                                        <span aria-hidden="true">&rarr;</span>
                                    </a>
                                </li>
<?php else: ?>
                                <li class="disabled">
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="disabled"><span aria-hidden="true">&laquo;</span></li>
                                <li class="disabled">1</li>
                                <li class="disabled"><span aria-hidden="true">&raquo;</span></li>
                                <li class="disabled">
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
<?php endif; ?>
                            </ul>
                        </nav>
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