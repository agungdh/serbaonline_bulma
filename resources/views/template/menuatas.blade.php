<div class="container" style="background-color: #FAFAD2; border-radius: 25px; padding: 0px 10px 0px 10px; margin-top: 10px;">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('main.index')}}">
      <img src="{{asset('')}}storage/assets/images/logo_so.png" alt="Serba Online [dot] COM">
    </a>

    <div class="navbar-burger burger" data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenubd-example" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable is-mega">
        <div class="navbar-link">
          Kategori
        </div>
        <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
          <div class="container is-fluid">
            <div class="columns">
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Sumberdaya Alam</h1>
                <a class="navbar-item " href="#">
                Overview
                </a>
                <a class="navbar-item " href="#">
                Layout
                </a>
              </div>

              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Sumberdaya Manusia</h1>
                <a class="navbar-item " href="#">
                Overview
                </a>
                <a class="navbar-item " href="#">
                Layout
                </a>
              </div>
              
              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Sumberdaya Sosial</h1>
                <a class="navbar-item " href="#">
                Overview
                </a>
                <a class="navbar-item " href="#">
                Layout
                </a>
              </div>

              <div class="column">
                <h1 class="title is-6 is-mega-menu-title">Sumberdaya Ekonomi</h1>
                <a class="navbar-item " href="#">
                Overview
                </a>
                <a class="navbar-item " href="#">
                Layout
                </a>
              </div>
              
            </div>
          </div>

          <hr class="navbar-divider">
          <div class="navbar-item">
            <div class="navbar-content">
              <div class="level is-mobile">
                <div class="level-left">
                  <div class="level-item">
                    <strong>Selalu Update</strong>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <a class="button bd-is-rss is-small" href="http://bulma.io/atom.xml">
                      <span class="icon is-small">
                        <i class="fa fa-rss"></i>
                      </span>
                      <span>Selanjutnya</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">
          More
        </div>
        <div id="moreDropdown" class="navbar-dropdown ">
          <a class="navbar-item " href="http://bulma.io/extensions/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <p>
                    <strong>Extensions</strong>
                    <br>
                    <small>Side projects to enhance Bulma</small>
                  </p>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-plug"></i>
                  </span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <a class="navbar-item " href="http://bulma.io/love/">
        <span class="bd-emoji">❤️</span> &nbsp;Love
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-warning" title="Registrasi" style="border-radius: 30px" href="{{ route('register.index') }}">
            <i class="fas fa-user-plus"></i>
          </a>
          <a class="button is-success" title="Log-in" style="border-radius: 30px" href="{{ route('register.login') }}">
            <i class="fas fa-sign-in-alt"></i>
          </a>
        </div>        
      </div>
    </div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    if ($navbarBurgers.length > 0) {
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {
          var target = $el.dataset.target;
          var $target = document.getElementById(target);
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
        });
      });
    }
  });
</script>