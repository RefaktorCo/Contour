<section class="row">
	<!-- project planner right side -->
	<div class="seven columns planner-webform">
	  <?php $block = module_invoke('webform', 'block_view', 'client-block-58'); ?>   
<?php print $block['content']; ?>	
	</div>
	
	<!-- sidebar right side -->
	<div class="four columns push_one">
		<h6 class="text-color bold">COME FIND US</h6>
		<p class="midtoppadding meta">
			 786 Some Place Nice, Rd Nice <br/>
			State, Big Country 7860<br/><br/>
			<span class="bold">p:</span> (786) 9876 543 210 <br/>
			<span class="bold">e:</span><span class="blacktext">contact@youragency.com</span>
		</p>
		<!-- display map -->
		<div id="map">
		</div>
	</div>
	</section>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true">
</script>
<script src="<?php global $theme_root; echo $theme_root;?>/js/maps.js">
</script>
<script type="text/javascript">
//<![CDATA[
    var map;
    jQuery(document).ready(function ($) {
    prettyPrint();
    map = new GMaps({
    div: '#map',
    lat: 48.8584,
    lng: 2.2946,
    });
    map.addMarker({
    lat: 48.8584,
    lng: 2.2946,
    title: 'MONTREAL Html Template',
    click: function(e){
    if(console.log)
    console.log(e);
    alert('You clicked in this marker');
    }
    });
    });
    //]]>
    </script>