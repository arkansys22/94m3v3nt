
  <!-- Footer -->
<footer id="ashade-footer">
  <div class="ashade-footer-inner">
    <div class="ashade-footer__socials">
      <ul class="ashade-socials">
        <?php if(empty($identitas->instagram)) { ?>
        <?php }else{ ?>
              <li><a href="<?php echo $identitas->instagram?>" target="_blank">IG</a></li>
        <?php } ?>
        <?php if(empty($identitas->facebook)) { ?>
        <?php }else{ ?>
              <li><a href="<?php echo $identitas->facebook?>" target="_blank">FB</a></li>
        <?php } ?>
        <?php if(empty($identitas->youtube)) { ?>
        <?php }else{ ?>
              <li><a href="<?php echo $identitas->youtube?>" target="_blank">YTB</a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="ashade-footer__copyright">
      Hak Cipta &copy; 2022
    </div>
  </div>
</footer>


  <!-- Aside Bar -->
  <aside id="ashade-aside">
      <a href="#" class="ashade-aside-close">Tutup Sidebar</a>
      <div class="ashade-aside-inner">
        <div class="ashade-aside-content">
      <div class="ashade-widget ashade-widget--about">
        <div class="ashade-widget--about__head">
          <img src="<?php echo base_url()?>bahan/frontend/img/general/owner-avatar.jpg" alt="Andrew Shade">
          <h5>
            <span>Tentang Kami</span>
            9amevent
          </h5>
        </div>
        <p>9amevent merupakan suatu blablabla blabla</p>
        <p class="align-right">
          <a href="https://api.whatsapp.com/send?phone=<?php echo $identitas->whatsapp?>&text=Halo,%20<?php echo $identitas->nama_website?>.%20Saya%20perlu%20bantuan%209amevent.%20Bisa%20bantu%20saya?" class="ashade-learn-more">Chat Whatsapp</a>
        </p>
      </div><!-- .ashade-widget -->

      <div class="ashade-widget ashade-widget--contacts">
        <h5 class="ashade-widget-title">
          <span>Berminat Bekerjasama</span>
          Hubungi Kami
        </h5>
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
        <p class="align-right">
          <a href="https://api.whatsapp.com/send?phone=<?php echo $identitas->whatsapp?>&text=Halo,%20<?php echo $identitas->nama_website?>.%20Saya%20perlu%20bantuan%209amevent.%20Bisa%20bantu%20saya?" class="ashade-learn-more">Chat Whatsapp</a>
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
