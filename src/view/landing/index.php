<div class="landing__container">
  <div class="container">
  <div class="responsiveX">
    <div class="landing__text__container">
      <div class="landing__logo nextXclose">
          <svg width="44px" height="54px" viewBox="0 0 54 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Artboard" transform="translate(-139.000000, -261.000000)">
                      <g id="logo/white" transform="translate(141.000000, 262.000000)">
                          <g id="Group" transform="translate(0.513274, 0.500000)">
                              <g id="Group-10" transform="translate(0.486726, 0.500000)">
                                  <polygon id="Path-3" fill="#FFFFFF" points="0 33.4102564 47.5840708 33.4102564 33.2328906 9.95058005 27.8111527 11.406149 20.9717029 0.91025641 14.1461645 11.406149 10.9809394 10.679828"></polygon>
                                  <polygon id="Stroke-2" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" points="0 33.6893538 11.6410307 10.1976673 14.2261908 11.5634631 20.9717029 0.91025641 27.33553 11.9732018 33.030866 9.3781899 47.5840708 32.5967172 29.2699888 55.2689262 23.7103181 51.0349595 16.515433 58.4102564"></polygon>
                              </g>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
          <h1>Artic.le</h1>
        </div>
        <div class="landing__p">
          <p>Artic.le is an onine tool to store,bundle and conusme articles from <strong>ALL over the internet.</strong></p>
          <p>You can do so by simply <strong>reading</strong> them, or <strong>listening</strong> to them.</p>
        </div>
        <?php if(empty($_SESSION['user'])):?>
          <div class="nextXclose">
            <a class="landing__cta" href="index.php?page=register">
              Try It Now
              <svg width="24px" height="16px" viewBox="0 0 24 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-335.000000, -674.000000)" fill="#9E47EF">
                        <polygon id="Shape" transform="translate(347.000000, 682.000000) scale(-1, 1) translate(-347.000000, -682.000000) " points="359 680.666667 340.106667 680.666667 344.88 675.88 343 674 335 682 343 690 344.88 688.12 340.106667 683.333333 359 683.333333"></polygon>
                    </g>
                </g>
            </svg>
            </a>
            <a class="landing__login" href="index.php?page=login">Or Login</a>
          </div>
        <?php else: ?>
          <div class="nextXclose">
            <a class="landing__cta" href="index.php?page=articles">
            Open app!
            <svg width="24px" height="16px" viewBox="0 0 24 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-335.000000, -674.000000)" fill="#9E47EF">
                        <polygon id="Shape" transform="translate(347.000000, 682.000000) scale(-1, 1) translate(-347.000000, -682.000000) " points="359 680.666667 340.106667 680.666667 344.88 675.88 343 674 335 682 343 690 344.88 688.12 340.106667 683.333333 359 683.333333"></polygon>
                    </g>
                </g>
            </svg>
            </a>
            <a class="landing__login" href="index.php?page=logout">Or Logout</a>
          </div>
        <?php endif;?>
    </div>
    <div class="landing__image__container">
      <img src="./assets/img/landing/headerimage.png" alt="screenshot of the artic.le app" draggable='false'>
    </div>
    </div>
    <div class="landing__footer__container">
      <ul class="landing__footer nextXclose">
        <a href="index.php?page=termsofservice"><li>Terms of Service</li></a>
        <a href="index.php?page=whoweare"><li>Who are we?</li></a>
      </ul>
    </div>
  </div>

  <?php if($_GET['page'] == 'login'):?>
  <section class="login-container">
      <?php if (empty($_SESSION['user'])): ?>
      <form class="login-form" method="post" action="index.php?page=login">
      <header><p class="login__header__goodmorning"><span class="goodmorning">Hi</span>! Login Here!</p></header>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      <a class="login__header__x" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a>
        <input type="hidden" name="action" value="login" />
        <div class="input-container text">
          <label>
          <span class="form-label hidden">
              <svg width="24px" height="16px" viewBox="0 0 24 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="login/listitem-copy-4" transform="translate(0.000000, -2.000000)">
                          <g id="outline-email-24px" transform="translate(-2.000000, -2.000000)">
                              <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                              <path d="M22,6 C22,4.9 21.1,4 20,4 L4,4 C2.9,4 2,4.9 2,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 Z M20,6 L12,11 L4,6 L20,6 Z M20,18 L4,18 L4,8 L12,13 L20,8 L20,18 Z" id="Shape" fill="#A4A1AE" fill-rule="nonzero"></path>
                          </g>
                      </g>
                  </g>
              </svg>
            </span>
            <input type="email" name="email" placeholder="Email" class="form-input" value="<?php if(!empty($_POST['email'])) echo "niet leeg";?>"/>
          </label>
        </div>
        <div class="input-container text">
          <label>
          <span class="form-label hidden">
              <svg width="24px" height="14px" viewBox="0 0 24 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="login/listitem-copy-5" transform="translate(0.000000, -4.000000)">
                          <g id="outline-vpn_key-24px" transform="translate(0.000000, -1.000000)">
                              <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                              <path d="M22,19 L16,19 L16,15 L13.32,15 C12.18,17.42 9.72,19 7,19 C3.14,19 0,15.86 0,12 C0,8.14 3.14,5 7,5 C9.72,5 12.17,6.58 13.32,9 L24,9 L24,15 L22,15 L22,19 Z M18,17 L20,17 L20,13 L22,13 L22,11 L11.94,11 L11.71,10.33 C11.01,8.34 9.11,7 7,7 C4.24,7 2,9.24 2,12 C2,14.76 4.24,17 7,17 C9.11,17 11.01,15.66 11.71,13.67 L11.94,13 L18,13 L18,17 Z M7,15 C5.35,15 4,13.65 4,12 C4,10.35 5.35,9 7,9 C8.65,9 10,10.35 10,12 C10,13.65 8.65,15 7,15 Z M7,11 C6.45,11 6,11.45 6,12 C6,12.55 6.45,13 7,13 C7.55,13 8,12.55 8,12 C8,11.45 7.55,11 7,11 Z" id="Shape" fill="#A4A1AE" fill-rule="nonzero"></path>
                          </g>
                      </g>
                  </g>
              </svg>
            </span>
            <input type="password" name="password" placeholder="Password" class="form-input" />
          </label>
        </div>
          <button type="submit" class="login">Login</button>
          <a class="register" href="index.php?page=register">Create an account</a>
      </form>
      <?php else: ?>
      <header class="hidden"><h1>Logout</h1></header>
      <p><?php echo $_SESSION['user']['email'];?> - <a href="index.php?page=logout" class="logout-button">Logout</a></p>
      <?php endif; ?>
  </section>
<?php endif;?>


</div>

