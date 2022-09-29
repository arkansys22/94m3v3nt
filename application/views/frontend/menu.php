<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
<header id="ashade-header">
      <div class="ashade-header-inner">
          <div class="ashade-logo-block">
              <a href="<?php echo base_url() ?>" class="ashade-logo is-retina">
                <img src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>"  width="128" height="110">
              </a>
          </div>
          <div class="ashade-nav-block">
              <nav class="ashade-nav">
                  <ul class="main-menu">
                      <li><a href="<?php echo base_url()?>">Beranda</a></li>
                      <li><a href="<?php echo base_url()?>">Layanan</a></li>
                      <li><a href="<?php echo base_url()?>">Galeri</a></li>
                      <li><a href="<?php echo base_url()?>">Kontak</a></li>
                      <li>
                        <a href="#" class="ashade-aside-toggler">
                          <span class="ashade-aside-toggler__icon01"></span>
                          <span class="ashade-aside-toggler__icon02"></span>
                          <span class="ashade-aside-toggler__icon03"></span>
                        </a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </header>
