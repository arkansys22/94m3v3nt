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
              <p class="ashade-intro">ANDA BISA KONSULTASIKAN MENGENAI PROJEK SERUPA DENGAN <br>MENGKLIK GAMBAR / JUDUL DIBAWAH.</p>
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
									<a href="https://api.whatsapp.com/send?phone=<?php echo $identitas->whatsapp?>&text=Halo,%20<?php echo $identitas->nama_website?>.%20Saya%20mau%20tanya%20untuk%20<?=$posts->products_cat_judul?>%20<?php echo $post->services_judul ?>.%20Bisa%20bantu%20saya?" class="ashade-album-item__link"></a>
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



    <?php $this->load->view('frontend/bottom_all')?>
    <?php $this->load->view('frontend/js')?>
</body>


</html>
