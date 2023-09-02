<?php $nav_items = array( "skills", "projects", "games", "cv" ) ?>

<header uk-sticky>

    <div class="uk-container header">
      <div class="uk-flex uk-flex-space-between uk-flex-middle" uk-grid>
        <div class="uk-flex-middle uk-width-auto">
          <img src="assets/images/shaun.jpg" class="header__shaun" alt="">
        </div>
        <div class="uk-flex-middle uk-width-auto">
          <h1>Shaun Wall</h1>
          <span>Web Developer</span>
        </div>

        <div class="uk-width-expand uk-visible@m">
          <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
              <div class="uk-navbar-center">
                  <ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true">
                      <?php foreach($nav_items as $item) { ?>
                        <li><a href="#<?php echo $item ?>"><?php echo $item ?></a></li>
                      <?php } ?>
                  </ul>
              </div>
            </nav>
        </div>

        <div class="uk-width-auto uk-visible@m">
          <div class="uk-float-right header__social">
            <a href="mailto:shaunlewiswall@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <a href="https://bitbucket.org/Neromaki/" target="_blank"><i class="fa fa-bitbucket" aria-hidden="true"></i></a>
            <a href="https://github.com/neromaki" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a href="https://twitter.com/Nomaki" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <!--<a href="https://www.facebook.com/nomaki" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
          </div>
        </div>

        <div class="uk-width-expand uk-hidden@m uk-margin-top-remove">
          <a class="uk-navbar-toggle uk-float-right" uk-navbar-toggle-icon uk-toggle="target: #mobile-nav"></a>
        </div>

      </div>
    </div>

    <div id="mobile-nav" class="mobile-nav" uk-offcanvas="flip: true; mode: push; overlay: true">
        <div class="uk-offcanvas-bar">

            <ul class="uk-nav uk-nav-default mobile-nav__nav" uk-scrollspy-nav="closest: li; scroll: true">
              <?php foreach($nav_items as $item) { ?>
                <li><a href="#<?php echo $item ?>" uk-toggle="target: #mobile-nav"><?php echo $item ?></a></li>
              <?php } ?>
            </ul>

            <div class="mobile-nav__social">
              <a href="mailto:shaunlewiswall@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="https://bitbucket.org/Neromaki/" target="_blank"><i class="fa fa-bitbucket" aria-hidden="true"></i></a>
              <a href="https://github.com/neromaki" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
              <a href="https://twitter.com/Nomaki" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <!--<a href="https://www.facebook.com/nomaki" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
            </div>
        </div>
    </div>

</header>
