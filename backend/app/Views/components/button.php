  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
           
              <img src="assets/images/logo no bg.png" alt="" style="width: 158px;">
            </a>
          <ul class="nav">
            <li>
              <a href="<?= base_url('/') ?>" class="<?= (uri_string() == '' ? 'active' : '') ?>">Home</a>
            </li>
            <li>
              <a href="<?= base_url('roadmap') ?>" class="<?= (uri_string() == 'roadmap' ? 'active' : '') ?>">Roadmap</a>
            </li>
            <li>
              <a href="<?= base_url('moodboard') ?>" class="<?= (uri_string() == 'moodboard' ? 'active' : '') ?>">Moodboard</a>
            </li>
            <li>
              <a href="<?= base_url('sign-in') ?>" class="<?= (uri_string() == 'sign-in' ? 'active' : '') ?>">Sign In</a>
            </li>

          </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>