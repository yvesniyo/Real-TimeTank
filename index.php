
<?php
require 'includes/header.php';

?>
			<div style="background: green;height: 40px;width: 100%;color: white;padding-top: 10px;padding-left: 15px;">
				<span>Tank level Monitoring</span>
			</div>

			<div class="tank" style="min-height:460px;border-bottom: 1px solid rgb(230,230,230,0.4);background: rgb(255,255,255);border-left: 1px solid green;padding-top: 40px;padding-bottom: 40px;">
				<div id="container" class="w3-green">
					<div id="glass">
						<div id="water" style=""><span class="level" style="color: white;"></span></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-12 col-sm-12 col-lg-12" style="min-height: 40px;">

			</div>
			<?php
				$id=$_SESSION['Userid'];
			?>


			
<?php
require 'includes/loggedFooter.php';

?>

<script type="text/javascript">
setInterval(myTimer, 100);

function myTimer() {

    $.ajax({
        url:'ajax.php',
        method:'GET',
        data:{tank:'',user:'<?=$id?>'},
        success:function(data){

        	$(".level").html(data+" %");
        	data=data;
        	//document.getElementById('water').style.height=data+"%";
        	$("#water").css({"height":data+"%","background-position":"top left","transition":"all 3s ease-out"});

        	if(data<=20){
        		$("#water").css({"background-image":"url('images/waves.png')"});
        	}else{
        		$("#water").css({"background-image":"url('images/waves1.png')"});
        	}
        	
        },
        error:function(data){
          alert(data);
        }

      });
}
</script>