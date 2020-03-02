<section class="submit__page">
  <h2 class="hide">submit your mockup</h2>

  <div class="submit__container responsiveX">
    <div class="submit__terms__container">
      <h3>About you</h3>
      <p>Cras rutrum neque quis libero <span>aliquet gravida</span>. Phasellus sed lectus dolor. Sed convallis malesuada tincidunt. </br></br> Sed nec nulla id lacus auctor tincidunt. Cras rutrum neque quis libero <span>aliquet gravida</span>. </p>
      <h3>About your mockup</h3>
      <p>Cras rutrum neque quis libero aliquet gravida. Phasellus sed lectus dolor. Sed convallis malesuada tincidunt. <span>Sed nec nulla id lacus</span> auctor tincidunt. Nullam sit amet ex magna. Sed sed vulputate enim. Suspendisse aliquet a sem eget hendrerit. </p>
    </div>

    <div class="submit__forms__container">
      <form action="">
        <section class='submit__form__section'>
          <div class="submit__forms__title__container">
            <img src="assets/img/landing/submit_you.png" alt="illustration of a person" draggable="false" title="illustration of a person">
            <p class="submit__forms__title">About you</p>
          </div>
          <label for="name">Name <span>– To give you credits, of course</span></label>
          <input type="text" name='name' id='name' placeholder="MrAwesomeDesigner">

          <label for="email">Email <span>– We won't spam you, promsied</span></label>
          <input type="email" name='email' id='email' placeholder="me@awesomedesigner.co" required>
        </section>

        <section class='submit__form__section'>
          <div class="submit__forms__title__container">
            <img src="assets/img/landing/submit_mockup.png" alt="illustration of a phone" draggable="false" title="illustration of a phone">
            <p class="submit__forms__title">About your Mockup</p>
          </div>
          <label for="mockup-name">Mockup name <span>– Be specifid</span></label>
          <input type="text" name='mockup-name' id='mockup-name' placeholder="Male hand holding iPhone X Mockup" required>

          <label for="mockup-url">URL</label>
          <input type="text" name='mockup-url' id='mockup-url' placeholder="behance.net/you/yourmockup" required>

          <label for="mockup-category">Mockup Category</label>
          <div class="submit__form__section__select-wrapper">
            <select name="mockup-category" id="mockup-category">
              <?php foreach ($categories as $category):?>
                <option value="<?php echo $category['id'];?>"><?php echo $category['category'];?></option>
              <?php endforeach;?>
            </select>
          </div>
        </section>
        <div class="submit__form__submit-container">
          <input class="submit__form__submit" value="Submit Mockup" type="submit">
        </div>

      </form>
    </div>
  </div>
</section>
