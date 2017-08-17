<br><br>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">CONTACTO</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="<?php echo base_url('')?>">CONSTRUCCIONES NEA</a></li>
		  <li class="active">Contacto</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>


<!-- Contact with Map - START -->
<div id="bannerB">
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
						<legend class="text-center header">Envíenos su consulta</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                	<input id="fname" name="name" type="text" placeholder="Nombre y apellido" class="form-control">
								</div>
							</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									   <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
									</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input id="email" name="email" type="text" placeholder="Email" class="form-control">
								</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                                	<textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje. El equipo de CONSTRUCCIONES NEA se comunicara con usted a la brevedad." rows="7"></textarea>
								</div>
							</div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <legend class="text-center header">Nuestras oficinas</legend>
                    <div class="panel-body text-center">
                        <h4>Puedes encontrarnos en</h4>
                        <div>
                        Santa Fé 1455<br />
                        Corrientes - Capital<br />
                        379 4038840 / 379 4706071<br />
                        corrientes@construccionesnea.com<br />
                        </div>
						<hr />
                        	<div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBWeHN_4mlppEIVp0RZegfNpmjSvAPe7Vw'></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(-27.4743647,-58.831085299999984);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "CONSTRUCCIONES NEA"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>


<style>
    .map {
        min-width: 300px;
		min-height: 280px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #194C85;
        height: 70px;
        font-size: 27px;
        padding: 10px;
	}
	
</style>

<!-- Contact with Map - END -->