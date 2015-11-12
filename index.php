<?php
include_once "template/top.php";
include_once "template/modal.php";
?>

<div class="section tarja-section">
    <div class="container tarja-container">
        <div class="row tarja-linha">
            <div class="col-md-12 tarja-box-all">
                <h3><span> </span> VAGAS</h3>
            </div>
        </div>
    </div>
</div>

<div class="section paines-menu-not-pub-vagas">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Menu vagas</h3>
                                </div>
                                <div class="panel-body painel-menu">
                                    <ul class="nav">
                                        <li><a href="#">Por Data</a></li>
                                        <li><a href="#">Por Cargo</a></li>
                                        <li><a href="#">Por Area</a></li>
                                        <li><a href="#">Por Tipo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Noticias</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget purus mauris. Maecenas id quam porttitor, dictum turpis id, molestie felis. Vivamus dapibus libero sit amet consectetur mattis. Praesent porttitor consequat nisi, eget luctus ipsum rhoncus id. Fusce sed tincidunt sem. Donec hendrerit justo sit amet felis fermentum faucibus. Duis feugiat nibh augue, sit amet consequat nulla pharetra sit amet. Phasellus eget lacus laoreet, condimentum dolor rutrum, commodo risus. Proin vitae nulla eu nisl vulputate tristique. Sed gravida augue in diam mattis porttitor. Nunc fringilla, risus ut feugiat dictum, arcu sem molestie ante, sed pharetra nunc felis quis tortor. Donec vulputate erat consectetur, scelerisque eros sit amet, eleifend sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary dicas-pub-box-all">
                                <div class="panel-heading dicas-pub-box-titulo">
                                    <h3 class="panel-title">Publicidade</h3>
                                </div>
                                <div class="panel-body dicas-pub-box-corpo">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol  class="carousel-indicators">
                                            <li  data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li  data-target="#myCarousel" data-slide-to="1"></li>
                                            <li  data-target="#myCarousel" data-slide-to="2"></li>
                                            <li  data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner dicas-pub-box-img" role="listbox">
                                            <div class="item active">
                                                <img class="img-responsive" src="img/plogo.png" alt="Publicidade">
                                            </div>

                                            <div class="item">
                                                <img class="img-responsive" src="img/plogo.png"  alt="Publicidade">
                                            </div>

                                            <div class="item">
                                                <img class="img-responsive" src="img/plogo.png"  alt="Publicidade">
                                            </div>

                                            <div class="item">
                                                <img class="img-responsive" src="img/plogo.png"  alt="Publicidade">
                                            </div>
                                        </div>
                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span style="font-size: 15px" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span style="font-size: 15px" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vagas do dia </h3>
                        </div>
                        <div class="panel-body">
                         <h1>Área em desenvolvimento, quando a mesma estiver pronta será anunciada no grupo do Facebook EOM Manaus</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "template/rodape.php";
?>
