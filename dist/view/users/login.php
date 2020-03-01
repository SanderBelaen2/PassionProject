<section class="login-container">
      <?php if (empty($_SESSION['user'])): ?>
      <form class="login-form" method="post" action="index.php?page=login">
      <header><p class="login__header__goodmorning"><span class="goodmorning">Hi</span> Log hier in!</p></header>
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
