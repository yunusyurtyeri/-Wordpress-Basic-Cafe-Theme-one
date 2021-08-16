<?php get_header(); ?>

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<div class="left-content">
					<div class="inner-content">
						<h4><?php the_field('giris_yazisi_buyuk','option'); ?></h4>
						<h6><?php the_field('giris_yazisi_kucuk','option'); ?></h6>
						<div class="main-white-button scroll-to-section">
							<a href="<?php the_field('giris_yazisi_link','option'); ?>"><?php the_field('giris_yazisi_buton','option'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="main-banner header-text">
					<div class="Modern-Slider">
						<?php $slider_icerikleri = get_field('slider_icerikleri','option');
						if( $slider_icerikleri ) {
							foreach( $slider_icerikleri as $slider_icerigi ) { 

									//$slider_gorseli = get_sub_field('slider_gorseli');
								$slider_gorseli_alternatif = $slider_icerigi['slider_gorseli'];
								?>


								<?php //echo "<pre>"; print_r($slider_icerigi); echo "</pre>";?>
								<div class="item">
									<div class="img-fill">
										<img src="<?php echo $slider_gorseli_alternatif['url'];?>" alt="<?php echo $slider_gorseli_alternatif['alt'];?>">
									</div>
								</div>
							<?php	}
						} ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="left-text-content">
					<div class="section-heading">
						<h6><?php the_field('hakkimizda_bolum_basligi','option');?></h6>
						<h2><?php the_field('hakkimizda_basligi','option');?></h2>
					</div>
					<?php the_field('hakkimizda_icerigi','option');?>

					<div class="row">
						<?php $hakkimizda_gorselleri = get_field('hakkimizda_gorselleri','option');
						if( $hakkimizda_gorselleri ) {
							foreach( $hakkimizda_gorselleri as $hakkimizda_gorseli ) { 

								$hakkimizda_gorseli_alternatif = $hakkimizda_gorseli['hakkimizda_gorseli'];
								?>


								<?php //echo "<pre>"; print_r($slider_icerigi); echo "</pre>";?>
								<div class="col-4">
									<img src="<?php echo $hakkimizda_gorseli_alternatif['sizes']['thumbnail'];?>" alt="">
								</div>
								
							<?php	}
						} ?>


					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="right-content">
					<div class="thumb">
						<div class="embed-container"><?php the_field('hakkimizda_videosu','option');?></div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="section-heading">
					<h6><?php the_field('sizin_icin_sectiklerimiz_bolumu_basligi','option');?></h6>
					<h2><?php the_field('sizin_icin_sectiklerimiz_basligi','option');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-item-carousel">
		<div class="col-lg-12">
			<div class="owl-menu-item owl-carousel">

				<?php $sizin_icin_sectiklerimiz_icerikleri = get_field('sizin_icin_sectiklerimiz_icerikleri','option');
				if( $sizin_icin_sectiklerimiz_icerikleri ) {
					foreach( $sizin_icin_sectiklerimiz_icerikleri as $sizin_icin_sectiklerimiz_icerik ) { 

									//$slider_gorseli = get_sub_field('slider_gorseli');
						$icerik_gorseli = $sizin_icin_sectiklerimiz_icerik['icerik_gorseli'];
						$icerik_basligi = $sizin_icin_sectiklerimiz_icerik['icerik_basligi'];
						$icerik_aciklamasi = $sizin_icin_sectiklerimiz_icerik['icerik_aciklamasi'];
						$icerik_fiyati = $sizin_icin_sectiklerimiz_icerik['icerik_fiyati'];
						?>


						<?php //echo "<pre>"; print_r($slider_icerigi); echo "</pre>";?>

						<div class="item">
							<div class="card" style="background-image: url(<?php echo $icerik_gorseli['url'];?>);">
								<div class="price"><h6><?php echo $icerik_fiyati; ?> &#x20BA;</h6></div>
								<div class="info">
									<h1 class="title"><?php echo $icerik_basligi; ?></h1>
									<p class="description"><?php echo $icerik_aciklamasi; ?></p>
									<div class="main-text-button">
										<div class="scroll-to-section"><a href="#reservation">Rezarvasyon Yap <i class="fa fa-angle-down"></i></a></div>
									</div>
								</div>
							</div>
						</div>
						
					<?php	}
				} ?>
			</div>
		</div>
	</div>
</section>
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6><?php the_field('menumuz_bolum_basligi','option');?></h6>
                        <h2><?php the_field('menumuz_basligi','option');?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
										<?php $menu_icerikleri_gruplar = get_field('menu_icerikleri','option');
										if( $menu_icerikleri_gruplar ) {
											$benzersiz = array();
											foreach( $menu_icerikleri_gruplar as $menu_icerikleri_grup ) { 
											$benzersiz[$menu_icerikleri_grup['menu_grubu']['value']] = $menu_icerikleri_grup;
											$grup_basligi = $menu_icerikleri_grup['menu_grubu'];
										
										}
										$benzersize_degerler = array_values($benzersiz);
										//echo "<pre>"; print_r($benzersize_degerler); echo "</pre>";
										} 
										?>
										<?php 
										$sayac = 1;
										foreach($benzersize_degerler as $benzersiz_deger):?>
										<?php //echo "<pre>"; print_r($grup_basligi); echo "</pre>";?>
										<li><a href='#tabs-<?php echo $sayac;?>'>
											<!-- İkonları daha sonra panelden eklettirilecek -->
										<?php if($benzersiz_deger['menu_grubu']['label']=="Başlangıç"):?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/tab-icon-01.png" alt="">
										<?php elseif($benzersiz_deger['menu_grubu']['label']=="Vegan"):?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/tab-icon-02.png" alt="">
										<?php elseif($benzersiz_deger['menu_grubu']['label']=="Paylaşmalık"):?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/tab-icon-03.png" alt="">
										<?php elseif($benzersiz_deger['menu_grubu']['label']!="Paylaşmalık" && $benzersiz_deger['menu_grubu']['label']!="Başlangıç" && $benzersiz_deger['menu_grubu']['label']!="Vegan"):?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/tab-icon-04.png" alt="">
										<?php endif;?>	
										<?php echo $benzersiz_deger['menu_grubu']['label'];?></a></li>
										<?php $sayac++; endforeach;?>
										</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
								<?php $sayac = 1;
									  foreach($benzersize_degerler as $benzersiz_deger):?>
								<article id='tabs-<?php echo $sayac;?>'>
                                    <div class="row">
										
										<?php $menu_icerikleri = get_field('menu_icerikleri','option');
										if( $menu_icerikleri ) {
											foreach( $menu_icerikleri as $menu_icerigi ) { 
											$menu_grubu = $menu_icerigi['menu_grubu']['label'];		
											$menu_ogesi_gorsel = $menu_icerigi['menu_ogesi_gorsel'];
											$menu_ogesi_baslik = $menu_icerigi['menu_ogesi_baslik'];
											$menu_ogesi_aciklama = $menu_icerigi['menu_ogesi_aciklama'];
											$menu_ogesi_fiyat = $menu_icerigi['menu_ogesi_fiyat'];

										?>
										
										<?php if($benzersiz_deger['menu_grubu']['label']==$menu_grubu): ?>
										
										
										<div class="col-lg-6">
							
										<div class="tab-item">
											<img src="<?php echo $menu_ogesi_gorsel['url'];?>" alt="">
											<h4><?php echo $menu_ogesi_baslik;?></h4>
											<p><?php echo $menu_ogesi_aciklama;?></p>
											<div class="price">
												<h6><?php echo $menu_ogesi_fiyat;?></h6>
											</div>
										</div>
										
                       
                                        </div>
										
										<?php endif; ?>
										<?php } } ?>
                                        
                                        
                                  </div>
                                </article>
								<?php $sayac++; endforeach;?>
								
                                  
                                  
                                   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6><?php the_field('iletisim_bolum_basligi','option');?></h6>
                            <h2><?php the_field('iletisim_basligi','option');?></h2>
                        </div>
                        <p><?php the_field('iletisim_aciklamasi','option');?></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Telefon Numaralarımız</h4>
                                    <span><?php the_field('telefon_numaralari','option');?></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>E-mail Adresimiz</h4>
                                    <span><?php the_field('e-mail','option');?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                    	<?php echo do_shortcode('[contact-form-7 id="84" title="İletişim formu 1"]'); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6><?php the_field('seflerimiz_bolum_basligi','option');?></h6>
                        <h2><?php the_field('seflerimiz_baslik','option');?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php $seflerimiz = get_field('seflerimiz','option');
				if( $seflerimiz ) {
					foreach( $seflerimiz as $sef ) { 
					$sef_adi = $sef['sef_adi'];		
					$sef_unvani = $sef['sef_unvani'];
					$sef_fotografi = $sef['sef_fotografi'];
					$sef_instagram = $sef['sef_instagram'];
					$sef_twitter = $sef['sef_twitter'];
					$sef_facebook = $sef['sef_facebook'];		
				?>

				


				<div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="<?php echo $sef_facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $sef_twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $sef_instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="<?php echo $sef_fotografi['url'];?>" alt="<?php echo $sef_adi;?>">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $sef_adi;?></h4>
                            <span><?php echo $sef_unvani;?></span>
                        </div>
                    </div>
                </div>

				
				<?php } } ?>
                
                
                
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    

<?php get_footer(); ?>