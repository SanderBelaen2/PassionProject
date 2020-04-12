<section class="submit__page" id="submit">

  <div class="submit__container responsiveX">
    <div class="submit__terms__container">
      <h2>We like sharing freebies. You got one?</h2>
      <p>If your mockups gets approved, we'll put it up on our site, with <span>a link right back to your site.</span> This can take a couple of days.</p>
      <p>Also, thanks for being a contributing member of the designer community! <span>You rock!</span></p>

      <h3>Just to be sure we're on the same page.</h3>
      <ul>
        <li>You are the creator or <span>own the copyrights</span> of the freebie.</li>
        <li>The freebie can be used for <span>personal and commercial purposes.</span></li>
        <li>The link <span>doesn't contain ads.</span></li>
        <li>The link doens't lead to another freebie sharing website.</li>
        <li>You don't submit a link which directly downloads the file. Instead, submit a link to your portfolio, Behance or Dribbble page <span>where the item is featured</span> and has a description and/or other additional information.</li>
      </ul>
    </div>

    <div class="submit__forms__container">
      <form action="submit" method="post" class="submit__form">
        <input type="hidden" name="action" value="submit__mockup">
        <p class="submit__input__error"></p>
        <section class='submit__form__section'>
          <div class="submit__forms__title__container">
            <img src="assets/img/landing/submit_you.png" alt="illustration of a person" draggable="false" title="illustration of a person">
            <p class="submit__forms__title">About you</p>
          </div>
          <label for="name">Name <span>– To give you credits, of course</span></label>
          <input type="text" name='name' id='name' placeholder="MrAwesomeDesigner" required>
          <p class="submit__input__error"></p>

          <label for="email">Email <span>– We won't spam you, promsied</span></label>
          <input type="email" name='email' id='email' placeholder="me@awesomedesigner.co" required>
          <p class="submit__input__error"></p>
        </section>

        <section class='submit__form__section'>
          <div class="submit__forms__title__container">
            <img src="assets/img/landing/submit_mockup.png" alt="illustration of a phone" draggable="false" title="illustration of a phone">
            <p class="submit__forms__title">About your Mockup</p>
          </div>
          <label for="mockup-name">Mockup name <span>– Be specific</span></label>
          <input type="text" name='mockup-name' id='mockup-name' placeholder="Male hand holding iPhone X Mockup" required>
          <p class="submit__input__error"></p>

          <label for="mockup-url">URL</label>
          <input type="url" name='mockup-url' id='mockup-url' placeholder="https://behance.net/you/yourmockup" required>
          <p class="submit__input__error"></p>

          <label for="mockup-category">Mockup Category</label>
          <div class="submit__form__section__select-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
            <select name="mockup-category" id="mockup-category">
              <option value="0">-- Choose a category --</option>
              <?php foreach ($categories as $category):?>
                <option value="<?php echo $category['id'];?>"><?php echo $category['category'];?></option>
              <?php endforeach;?>
              </select>
          </div>
          <p class="submit__input__error"></p>

          <div class="submit__input__checkbox">
            <input class="inp-cbx" id='mockup-rules' type="checkbox"/>
            <label class="cbx" for="mockup-rules"><span>
            <svg width="12px" height="10px"><use xlink:href="#check"></use></svg>
            </span><span>I consent to the rules listed on this page</span></label>
            <svg class="inline-svg"><symbol id="check" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></symbol></svg>
          </div>
          <p class="submit__input__error"></p>



        </section>
        <div class="submit__form__submit-container">
          <input class="submit__form__submit" value="Submit Mockup" type="submit">
        </div>

      </form>
    </div>
  </div>
</section>
