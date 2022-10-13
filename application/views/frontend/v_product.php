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
            <span>Layanan - layanan</span>
            Layanan Terbaik
        </h1>
    </div>

  <main class="ashade-content-wrap">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="ashade-section">
					<div class="ashade-row">
						<div class="ashade-col col-12">
							<p class="ashade-intro">9amevent menawarkan berbagai layanan yang dapat menjawab kebutuhan Anda. Dengan kemampuan dan pengalaman yang 9amevent miliki antara lain :</p>
						</div>
					</div><!-- .ashade-row -->
				</section>

				<section class="ashade-section">
					<div class="ashade-row">
                        <div class="ashade-col col-12">
							<div class="ashade-service-card-grid">
                <?php $produk_kategori = $this->Crud_m->view_where_orderings('products_category',array('products_cat_status'=>'publish'),'products_cat_id','ASC'); ?>
                  <?php foreach ($produk_kategori as $post) {  ?>
      								<div class="ashade-service-card">
      									<div class="ashade-service-card__head">
      										<div class="ashade-service-card__image">
                            <?php if(empty($post->products_cat_gambar)) {
                                echo "<img src='".base_url()."bahan/foto_products/noimage.jpg'>";
                              }else {
                                echo " <img src='".base_url('./bahan/foto_products/'.$post->products_cat_gambar)."'>
                                ";}
                             ?>
      										</div>
      										<div class="ashade-service-card__label">
      											<h4>
      												<?php echo $post->products_cat_judul?>
      											</h4>
      										</div>
      									</div><!-- .ashade-service-card__head -->
      									<div class="ashade-service-card__content">
      										<p><?php echo $post->products_cat_desk?></p>
      										<div class="align-right">
      											<a href="<?php echo base_url() ?>layanan/<?php echo $post->products_cat_judul_seo?>" class="ashade-learn-more">Selengkapnya</a>
      										</div>
      									</div>
      								</div>
                  <?php } ?>

							</div><!-- .ashade-service-card-grid -->
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
				</section>

			</div><!-- .ashade-content -->

    <?php $this->load->view('frontend/bottom_all')?>
    <?php $this->load->view('frontend/js')?>
</body>

</html>
