<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
    <meta name="title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta property="og:title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
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

<body class="ashade-home-template has-spotlight ashade-smooth-scroll">
  <!-- Header -->
<?php $this->load->view('frontend/menu')?>
  <div class="ashade-home-background ashade-page-background is-slider">
    <div class="ashade-kenburns-slider" id="ashade-kenburns01" data-delay="4000" data-zoom="1.2" data-transition="2000">
      <div class="ashade-kenburns-slide" data-src="<?php echo base_url()?>bahan/frontend/img/kenburns/01.jpg"></div>
      <div class="ashade-kenburns-slide" data-src="<?php echo base_url()?>bahan/frontend/img/kenburns/02.jpg"></div>
      <div class="ashade-kenburns-slide" data-src="<?php echo base_url()?>bahan/frontend/img/kenburns/03.jpg"></div>
      <div class="ashade-kenburns-slide" data-src="<?php echo base_url()?>bahan/frontend/img/kenburns/04.jpg"></div>
      <div class="ashade-kenburns-slide" data-src="<?php echo base_url()?>bahan/frontend/img/kenburns/05.jpg"></div>
      <div class="ashade-kenburns-slide" data-src="<?php echo base_url()?>bahan/frontend/img/kenburns/06.jpg"></div>
    </div>
  </div>

<!-- Home Links and Titles -->
<div class="ashade-home-link--works ashade-home-link-wrap">
  <div class="ashade-home-link is-link">
    <span>My Photo Portfolio</span>
    <span>Explore Works</span>
  </div>
</div><!-- .ashade-home-link-wrap -->
<div class="ashade-home-link--contacts ashade-home-link-wrap">
  <div class="ashade-home-link is-link">
    <span>How to find me</span>
    <span>Contact Me</span>
  </div>
</div><!-- .ashade-home-link-wrap -->

 <!-- Home Title and Back Button -->
  <div class="ashade-page-title-wrap is-inactive ">
      <h1 class="ashade-page-title">&nbsp;</h1>
  </div><!-- .ashade-page-title-wrap -->

  <div class="ashade-home-return ashade-back-wrap is-inactive">
      <div class="ashade-back is-home-return">
          <span>Return</span>
          <span>Back</span>
      </div>
  </div><!-- .ashade-to-top-wrap -->

  <!-- Home Contacts Block -->
  <div id="ashade-home-contacts">
  <div class="ashade-row">
    <div class="ashade-col col-12">
      <p class="ashade-intro">Nice to meet you, friend! My name is Adrew Shade. I’m a professional photographer from Denver, Colorado. If you have any questions, suggestions or you just want to book a photo session feel free to use the contact form below. Lets make something great together!</p>
    </div>
  </div><!-- .ashade-row -->
  <div class="ashade-row">
    <div class="ashade-col col-4">
      <div class="ashade-contact-details">
        <h4 class="ashade-contact-details__title">
          <span>My Contacts and Socials</span>
          How to Find Me
        </h4>
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
            <a href="#" target="_blank">Fb</a>
            <a href="#" target="_blank">Ig</a>
          </li>
        </ul>
      </div><!-- .ashade-contact-details -->
    </div>
    <div class="ashade-col col-8">
      <form action="https://demo.shadow-themes.com/html/ashade/mail.html" method="post" class="ashade-contact-form">
        <div class="ashade-row ashade-small-gap">
          <div class="ashade-col col-4">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
          </div>
          <div class="ashade-col col-4">
            <input type="email" id="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="ashade-col col-4">
            <input type="tel" id="phone" name="phone" placeholder="Your Phone" required>
          </div>
        </div>
        <textarea name="message" id="message" placeholder="Your Message" required></textarea>
        <div class="ashade-contact-form__footer">
          <div class="ashade-contact-form__response"></div>
          <div class="ashade-contact-form__submit">
            <input type="submit" value="Send Message">
          </div>
        </div>
      </form>
    </div>
  </div>
  </div><!-- #ashade-home-contacts -->

  <!-- Home Works Block -->
  <div id="ashade-home-works">
    <div class="ashade-row">
      <div class="ashade-col col-12">
        <p class="ashade-intro">Photography is my passion. Through the lens the world looks different and i would like to show you this difference. You can see it in my albums that are presented here.</p>
      <div class="ashade-albums-grid ashade-grid ashade-grid-3cols is-masonry">
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album01.jpg" alt="My Special Day">
          </div>
          <h5>
            <span>Wedding Photos</span>
            My Special Day
          </h5>
          <a href="gallery-slider-parallax.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album02.jpg" alt="Harley Davidson">
          </div>
          <h5>
            <span>Commercial Photos</span>
            Harley Davidson
          </h5>
          <a href="gallery-bricks-1x2.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album03.jpg" alt="Together Forever">
          </div>
          <h5>
            <span>Love Story</span>
            Together Forever
          </h5>
          <a href="gallery-grid-3columns.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album05.jpg" alt="Sunset Nature">
          </div>
          <h5>
            <span>Nature Photos</span>
            Sunset Nature
          </h5>
          <a href="gallery-masonry-4columns.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album04.jpg" alt="Girl on Farm">
          </div>
          <h5>
            <span>Personal Session</span>
            Girl on Farm
          </h5>
          <a href="gallery-ribbon-large.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album06.jpg" alt="City Tour">
          </div>
          <h5>
            <span>Travel Photos</span>
            City Tour
          </h5>
          <a href="gallery-masonry-3columns.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album08.jpg" alt="Colors of Nature">
          </div>
          <h5>
            <span>Nature Photos</span>
            Colors of Nature
          </h5>
          <a href="gallery-justified.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album07.jpg" alt="Auto Showroom">
          </div>
          <h5>
            <span>Commercial Photo</span>
            Auto Showroom
          </h5>
          <a href="gallery-adjusted-3columns.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album09.jpg" alt="Abandoned">
          </div>
          <h5>
            <span>Travel Photos</span>
            Abandoned
          </h5>
          <a href="gallery-ribbon-medium.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album11.jpg" alt="Let's Play">
          </div>
          <h5>
            <span>Personal Session</span>
            Let's Play
          </h5>
          <a href="gallery-ribbon-vertical.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album10.jpg" alt="True Love">
          </div>
          <h5>
            <span>Love Story</span>
            True Love
          </h5>
          <a href="gallery-slider-fade.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img src="img/albums/masonry/album12.jpg" alt="New Family">
          </div>
          <h5>
            <span>Wedding Photos</span>
            New Family
          </h5>
          <a href="gallery-bricks-2x3.html" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
      </div><!-- .ashade-albums-grid -->
    </div><!-- .ashade-col -->
  </div><!-- .ashade-row -->
  </div><!-- #ashade-home-works -->

  <!-- Footer -->
<footer id="ashade-footer">
  <div class="ashade-footer-inner">
    <div class="ashade-footer__socials">
      <ul class="ashade-socials">
        <li><a href="#">Fb</a></li>
        <li><a href="#">Ig</a></li>
        <li><a href="#">Yt</a></li>
      </ul>
    </div>
    <div class="ashade-footer__copyright">
      Copyright &copy; 2022. All Rights Reserved.
    </div>
  </div>
</footer>

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
  <div class="ashade-home-block-overlay"></div>
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