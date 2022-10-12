<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
  <meta name="title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
  <meta property="og:title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta name="site_url" content="<?php echo base_url()?>">
  <meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
  <meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
  <meta name="web_author" content="arkansys.com">
  <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
  <link href='<?php echo base_url()?>' rel='canonical'/>
  <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
  <meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
  <meta property="og:url" content="<?php echo base_url()?>">
  <meta property="og:image" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
  <meta property="og:image:url" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
  <meta property="og:type" content="article">
  <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>
<body class="has-spotlight ashade-smooth-scroll">
    <!-- Header -->
	<?php $this->load->view('frontend/menu')?>

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Solusi Untuk Anda</span>
            <?php echo $posts->products_cat_judul ?>
        </h1>
    </div>

  <main class="ashade-content-wrap">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<p class="ashade-intro"><?php echo $posts->products_cat_desk ?></p>
						</div>
					</div><!-- .ashade-row -->
				</section>
        <section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<div class="ashade-gallery-adjusted ashade-grid ashade-grid-2cols">
                <?php $produk = $this->Crud_m->view_where_orderings('services',array('services_status'=>'publish','products_cat_id'=>$posts->products_cat_id),'services_id','ASC'); ?>
                    <?php foreach ($produk as $post) {  ?>
								<div class="ashade-album-item ashade-grid-item">
									<div class="ashade-album-item__image">
                    <?php if(empty($post->services_gambar)) {
                        echo "<img src='".base_url()."bahan/foto_products/noimage.jpg'>";
                      }else {
                        echo " <img src='".base_url('./bahan/foto_products/'.$post->services_gambar)."'>
                        ";}
                     ?>
									</div>
									<h5>
										<span><?php echo $posts->products_cat_judul ?></span>
										<?php echo $post->services_judul ?>
									</h5>
									<a href="<?php echo base_url() ?>layanan/<?php echo $post->services_judul_seo ?>" class="ashade-album-item__link"></a>
								</div><!-- .ashade-album-item -->

              <?php } ?>
							</div><!-- .ashade-albums-grid -->
						</div>
					</div><!-- .ashade-row -->
				</section>


				<section class="ashade-section">
					<div class="ashade-row">
                        <div class="ashade-col col-4">
                            <div class="ashade-contact-details">
                                <h4 class="ashade-contact-details__title">
                                    <span>Berminat Bekerjasama</span>
                                    Hubungi Kami
                                </h4>
                                <ul class="ashade-contact-details__list">
                                    <li>
                                        <i class="ashade-contact-icon la la-map-marker"></i>
                                        <?php echo $identitas->alamat?>
                                    </li>
                                    <li>
                                        <i class="ashade-contact-icon la la-phone"></i>
                                        <a href="tel:<?php echo $identitas->no_telp?>"><?php echo $identitas->no_telp?></a>
                                    </li>
                                    <li>
                                        <i class="ashade-contact-icon la la-envelope"></i>
                                        <a href="mailto:<?php echo $identitas->email?>"><?php echo $identitas->email?></a>
                                    </li>
                                    <li class="ashade-contact-socials">
                                        <i class="ashade-contact-icon la la-share-alt"></i>
                                          <?php if(empty($identitas->instagram)) { ?>
                                          <?php }else{ ?>
                                                <a href="<?php echo $identitas->instagram?>" target="_blank">IG</a>
                                          <?php } ?>
                                          <?php if(empty($identitas->facebook)) { ?>
                                          <?php }else{ ?>
                                                <a href="<?php echo $identitas->facebook?>" target="_blank">FB</a>
                                          <?php } ?>
                                          <?php if(empty($identitas->youtube)) { ?>
                                          <?php }else{ ?>
                                                <a href="<?php echo $identitas->youtube?>" target="_blank">YTB</a>
                                          <?php } ?>

                                    </li>
                                </ul>
                            </div><!-- .ashade-contact-details -->
                        </div><!-- .ashade-col -->
                        <div class="ashade-col col-8">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d495.8336211329709!2d106.9022209735134!3d-6.175053031803609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5231444c088119e!2sJhons%20Photography!5e0!3m2!1sen!2sid!4v1665481138570!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
				</section>
			</div><!-- .ashade-content -->

			<!-- Footer -->
			<footer id="ashade-footer">
				<div class="ashade-footer-inner">
					<div class="ashade-footer__socials">
						<ul class="ashade-socials">
							<li><a href="#">Fb</a></li>
							<li><a href="#">Tw</a></li>
							<li><a href="#">In</a></li>
							<li><a href="#">Yt</a></li>
						</ul>
					</div>
					<div class="ashade-footer__copyright">
						Copyright &copy; 2022. All Rights Reserved.
					</div>
				</div>
			</footer>
		  </div><!-- .ashade-content-scroll -->
	</main>

    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Kembali ke</span>
            <span>Awal</span>
        </div>
    </div>

    <!-- Aside Bar -->
    <aside id="ashade-aside">
       	<a href="#" class="ashade-aside-close">Close Sidebar</a>
        <div class="ashade-aside-inner">
        	<div class="ashade-aside-content">
				<div class="ashade-widget ashade-widget--about">
					<div class="ashade-widget--about__head">
						<img src="img/general/owner-avatar.jpg" alt="Andrew Shade">
						<h5>
							<span>Photographer</span>
							Andrew Shade
						</h5>
					</div>
					<p>Nice to meet you, friend! My name is Andrew Shade. I am from Denver. Photography is my passion. Through the lens the world looks different and I would like to show you this difference.</p>
					<p class="align-right">
						<a href="about.html" class="ashade-learn-more">Learn More</a>
					</p>
				</div><!-- .ashade-widget -->

				<div class="ashade-widget ashade-widget--contacts">
					<h5 class="ashade-widget-title">
						<span>My contacts and socials</span>
						How to find me
					</h5>
					<ul class="ashade-contact-details__list">
						<li>
							<i class="ashade-contact-icon la la-map-marker"></i>
							1250 Welton St, Denver, CO 80204
						</li>
						<li>
							<i class="ashade-contact-icon la la-phone"></i>
							<a href="tel:+11234567890">+1 (123) 456 - 78 - 90</a>
						</li>
						<li>
							<i class="ashade-contact-icon la la-envelope"></i>
							<a href="mailto:a.shade@example.com">a.shade@example.com</a>
						</li>
						<li class="ashade-contact-socials">
							<i class="ashade-contact-icon la la-share-alt"></i>
							<a href="facebook.html" target="_blank">Fb</a>
							<a href="twitter.html" target="_blank">Tw</a>
							<a href="instagram.html" target="_blank">In</a>
							<a href="500px.html" target="_blank">Px</a>
						</li>
					</ul>
					<p class="align-right">
						<a href="contacts.html" class="ashade-learn-more">Get in touch</a>
					</p>
				</div><!-- .ashade-widget -->

        	</div><!-- .ashade-aside-content -->
        </div><!-- .ashade-aside-inner -->
    </aside>

    <!-- UI Elements -->
    <div class="ashade-menu-overlay"></div>
    <div class="ashade-aside-overlay"></div>
    <div class="ashade-cursor is-inactive">
    	<span class="ashade-cursor-circle"></span>
    	<span class="ashade-cursor-slider"></span>
    	<span class="ashade-cursor-close ashade-cursor-label">Close</span>
    	<span class="ashade-cursor-zoom ashade-cursor-label">Zoom</span>
    </div>

    <?php $this->load->view('frontend/js')?>
</body>


</html>
