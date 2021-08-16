<?php 
$giris_yazisi_arkaplan = get_field('giris_yazisi_arkaplan', 'option');  
$iletisim_rezervasyon_arkaplan = get_field('iletisim_bolumu_gorseli', 'option');

?>

<style type="text/css">
	#top .left-content {
		background-image: url(<?php echo $giris_yazisi_arkaplan['url']; ?>);
	}

	#reservation {
		background-image: url(<?php echo $iletisim_rezervasyon_arkaplan['url']; ?>);
	}
</style>

<?php  ?>