<style type="text/css">
#ads {
    margin: 30px 0 30px 0;
   
}

#ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px; 
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

#ads .card-notify-year {
        position: absolute;
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;      
        font-size: 14px;      
        width: 50px;
        height: 50px;    
        padding: 15px 0 0 0;
}
#ads .card-detail-badge {      
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;        
    }
#ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

#ads .card-image-overlay {
        font-size: 20px;     
    }
#ads .card-image-overlay span {
            display: inline-block;              
        }


#ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;        
        position: relative;
        background-color: #e6de08;
    }

#ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

#ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 14px;
	}
	.card{
		height:350px;
	}

</style>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
    </div>
  </div>
</div>

<div class="container-fluid">
	<div class="row">
        <div class="col-lg-6">
        <section class="full-width header-well">
		<div class="full-width header-well-icon">
			<i class="zmdi zmdi-car"> </i>
		</div>
		<div class="full-width header-well-text">
			<h4>Datos de la Sucursal</h4>					
			<p><?=  "Sucursal: ".$sucursal->nombre?> <br><?= "Direccion: ".$sucursal->direccion?><br><?= "Gerente: ".$sucursal->nombreG?></p><br>
	    </div>
	</section>
        </div>
        <div class="col-lg-6 text-center">
        <div class="h3">Empresa:</div>
         <div class="display-4">Grupo Q</div>
        
        </div>
    
    </div>

	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <i class="zmdi zmdi-collection-item zmdi-hc-2x"></i>
                    Catalogo
                </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="zmdi zmdi-chart zmdi-hc-2x text-dark"></i>
                    Ventas
                </a>
				</li>			
			</ul>

			<div class="tab-content" id="myTabContent">
				<!--=======================================================================-->
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="row" id="ads">

<?php foreach($carros as $key): $img = $key['uno'];?>
<div class="col-md-4">
    <div class="card rounded my-3">
        <div class="card-image">
            <span class="card-notify-badge"><?php echo $key['Modelo'];?></span>
            <span class="card-notify-year"><?php echo $key['año'];?></span>
            <img class="img-fluid" src="<?php echo base_url($img)?>" alt="Alternate Text" />
            </div>

            <div class="card-image-overlay m-auto">
            <span class="card-detail-badge"><?php echo $key['Monto'];?></span>
            <span class="card-detail-badge">Cantidad</span>
            <span class="card-detail-badge"><?php echo $key['unidades'];?></span>
            </div>
            
            <div class="card-body text-center">
            <div class="ad-title m-auto">
            <h5><?php echo $key['marca'];?></h5>
            </div>
            <a  data-toggle="modal" data-target=".bd-example-modal-lg" onclick="mostrarModal('<?php echo base_url();?>loadSucursal/AusDetallesAuto/<?=$key['id_auto']?>/<?=$sucursal->id_sucursal?>')" class="ad-btn">Explorar</a>
            </div>
        </div>
    </div>
<?php endforeach;?>
					</div>
				</div>
				<!--==================================================================-->
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!----->
                <!--AQUI SE MUESTRA LAS GRAFICAS DE LAS SUCURSALES-->

    <div class="container">
    <div class="row">
        <div class="col-lg-12">
         <div class="card-header text-center">
        <p class="h3">Vendedores campeones en ventas</p>
    </div> 
    </div>
</div>
        <div class="row justify-content-md-center">
        <div class="col-lg-6 ">
            <br>
            <div id="contenedor_grafico" >
                 <canvas id="myChart" width="50" height="35"> </canvas>
            </div>
        </div>

        
        </div>

    </div>



                <!----->
                
                </div>		  
			</div>
		</div>
	</div>
	<script type="text/javascript">
		    
            function mostrarModal(dir){
          $('.modal-content').load(dir, function () {
                     $('.modal fade bd-example-modal-lg').modal({show: true});
           });
        }

//*************************************************
var paramNombres = [];
var paramEdades = [];

$(document).ready(function(){

//-----tremos la informacion del modelo y la interpretamos por json
    $.post("<?php echo base_url();?>GraficasCtr/GetVentas",
        
        function(data){
            //en estos array alamacenamos la informacion
            var obj = JSON.parse(data);

            paramNombres = [];
            paramEdades = [];
            bgColor = [];
            bgBorder = [];

//american prade allamerican
            //con esta funcion se genera los codigos de los colores
            $.each(obj, function(i,item){
                var r = Math.random() * 255;
                r = Math.round(r);

                var g = Math.random() * 255;
                g = Math.round(g);

                var b = Math.random() * 255;
                b = Math.round(b);

                paramNombres.push(item.nombre);
                paramEdades.push(item.fa);
                bgColor.push('rgba('+r+','+g+','+b+', 0.4)');
                bgBorder.push('rgba('+r+','+g+','+b+', 1)');

            });
 
            //Eliminamos y creamos la etiqueta canvas
            $('#myChart').remove();

            $('#contenedor_grafico').append("<canvas id='myChart' width='50' height='35'></canvas>");
            var ctx = $("#myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: paramNombres,
                    datasets: [{
                        label: 'Numero de Ventas por vendedor',
                        data: paramEdades,
                        backgroundColor: bgColor,
                        borderColor: bgBorder,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            
            
        });
    //-----------------fin de la funcion--------------------
});

	</script>


