<section class="pt-3 pb-4 mt-5" id="count-stats">
	<div class="container mt-5">
		<div id="map"></div>
		<h3>Detail Kos</h3>
		<?php foreach ($tb_kos as $detail) { ?>
			<div class="row mt-5">
				<div class="col-6">
					<h6>Nama kos </h4>
				</div>
				<div class="col-6 ">

					<h6 class="rounded"><?= $detail["nama"] ?></h6>

				</div>
			</div>
			<div class="row ">
				<div class="col-6">
					<h6>latitude</h4>
				</div>
				<div class="col-6">
					<h6 class="rounded"><?= $detail["latitude"] ?></h6>
				</div>
			</div>
			<div class="row ">
				<div class="col-6">
					<h6>longitude</h4>
				</div>
				<div class="col-6">
					<h6 class="rounded"><?= $detail["longitude"] ?></h6>
				</div>
			</div>
			<div class="row mt-2">
				
				<small>Foto Kos</small>
				<img src="<?= $detail['foto'] ?>" style="width: 200px;" width="100px">
			</div>
	</div>
</section>



<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin="">

</script>
<script>
	var map = L.map('map', {
		center: [<?php echo $detail['latitude'] ?>, <?php echo $detail['longitude'] ?>],
		zoom: 13

	});
	var rawanmacetMarker = L.marker([<?php echo $detail['latitude'] ?>, <?php echo $detail['longitude'] ?>]).addTo(map);
	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
</script>
<?php } ?>