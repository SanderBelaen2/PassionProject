<section class="detail__section__container" id="detail">
  <div class="detail__container">
      <div class="detail__text__container__title">
        <a href="/" class="home__backbutton"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg>Back to Overview</a>
        <h2 class='detail__title'><?php echo $mockup['name'];?></h2>
        </div>
        <div class="detail__text__container__text">
          <p class='detail__text'><?php echo $mockup['text'];?></p>
          <div class="nextX">
            <div class="centerY ">
              <p>Category: </p>
              <p class="detail__category"><?php echo $mockup['category'];?></p>
            </div>
            <div class="centerY">
              <p>Software:</p>
              <p class="item__platform item__platform__<?php echo $mockup['platform'];?>"><?php echo $mockup['platform'];?></p>
            </div>
          </div>
          <div class="detail__ad">
            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CE7I4KQW&placement=malligraphics" id="_carbonads_js"></script>
          </div>
          <div class="detail__download__container">
            <a class="detail__download" rel="nofollow" href="<?php echo $mockup['link'];?>" target="_blank">Download</a>
          </div>
          <div class="responsiveX">
          <div class="detail__share__container centerY">
            <p>Share:</p>
            <div class="nextXclose">
              <a target="_blank" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REDIRECT_URL'];?>" target="_blank"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/></svg></a>
              <a target="_blank" rel="nofollow" onclick="javascript:window.open(this.href)" href="https://twitter.com/intent/tweet?url=<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REDIRECT_URL'];?>&text=<?php echo $mockup['name'];?> #mockup #free #design"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a>
              <a class="native__share"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/></svg></a>
            </div>
          </div>
          <div>
            <p><a class="detail__copyright" href="faq#iownthismockup">I own this mockup?</a></p>
            <p><a class="detail__how" href="blogpost/2">How do I use a mockup?</a></p>
            <p class="detail__report__open">Report</p>
          </div>
          </div>
        </div>
      <div class="detail__imagecontainer">
        <picture>
              <source
                srcset="
                  assets/img/mockupimages/<?php echo $mockup['url'].'_sm.jpg';?>  290w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>  536w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>  1072w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?> 1536w
                "
                sizes="(min-width: 1260px) 55vw,
                (min-width: 992px) 100vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>"
                alt="<?php echo $mockup['name'];?> FREE download"
                title="<?php echo $mockup['name'];?> FREE download"
                draggable="false"
                class="detail__image"
                data-tilt data-tilt-max="1" data-tilt-scale="1.01"
              />
            </picture>
      </div>
    </div>
    <?php if(!empty($randomNextMockup)):?>
    <div class="detail__random__container">
      <div class="home__pagenumber__prev detail__prev">
        <a class="detail__arrows__prev" onclick='(window.history.back())'><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg> Previous Page</a>
      </div>

      <div class="detail__arrows__image__container">
        <p>Explore other mockups</p>
        <div class="detail__arrows__image">
          <img src="assets/img/landing/arrows.gif" alt="right keyboard arrow blinking" title="right keyboard arrow blinking" draggable="false">
        </div>
      </div>

      <div class="home__pagenumber__next detail__next">
        <a class="detail__arrows__next" id="randomMockup" href="/detail/<?php echo $randomNextMockup['url'];?>">Next Mockup <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a>
      </div>
    </div>
    <?php endif;?>
</section>

<section class="detail__suggested__container">
  <h2>You may also like:</h2>
  <?php if(!empty($mockupSuggestions)):?>
    <div class="detail__overzicht__items">

    <?php foreach ($mockupSuggestions as $mockup):?>
      <a data-aos="fade-up" href="/detail/<?php echo $mockup['url'];?>">
        <article class="home__overzicht__items__item" data-tilt data-tilt-max="5" data-tilt-scale="1.02">
          <div class="home__overzicht__items__item__image">
            <?php if(!empty($mostPopulairMockup)){if($mostPopulairMockup['mockup_id'] == $mockup['id']){echo '<p class="home__overzicht__items__item__populair">Most Popular Today</p>';}};?>
            <picture>
              <source
                srcset="
                  assets/img/mockupimages/<?php echo $mockup['url'].'_sm.jpg';?>  290w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>  1072w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>  1536w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?> 1536w
                "
                sizes="(min-width: 1260px) 20vw,
                (min-width: 992px) 33vw,
                (min-width: 768px) 50vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/mockupimages/<?php echo $mockup['url'].'_.jpg';?>"
                alt="<?php echo $mockup['name'];?>"
                title="<?php echo $mockup['name'];?>"
              />
            </picture>
            <div class="home__overzicht__items__item__image__loading"></div>
          </div>
          <div class="home__overzicht__items__item__text">
            <h3><?php echo $mockup['name'];?></h3>
            <div class="nextX">
              <p class="item__category"><?php echo $mockup['category'];?></p>
              <p class="item__platform item__platform__<?php echo $mockup['platform'];?>"><?php echo $mockup['platform'];?></p>
            </div>
          </div>
        </article>
      </a>
    <?php endforeach;?>
    </div>
    <?php endif;?>
</section>

<section class="detail__report__container hide">
  <form class="detail__report__form" action="detail/<?php echo $_GET['url'];?>" method="post">
      <span class="detail__report__close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
      <h2 class="detail__report__title">Report this mockup.</h2>
      <input type="hidden" name="action" value="report__mockup">
      <input type="hidden" name="mockup_url" id="mockup_url" value="<?php echo $_GET['url'];?>">
      <label for="problem">Select the problem - <span>what's up?</span></label>
      <div class="detail__report__select-wrapper">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
        <select class="detail__report__select" name="problem" id="problem" required>
          <option value="" selected="true" disabled="disabled">-- Select the problem --</option>
          <option value="premium_item">mockup isn't free</option>
          <option value="broken_link">download link is broken</option>
          <option value="other">other</option>
        </select>
      </div>
      <p class="submit__input__error"></p>
      <label for="message">Your message - <span>In case you want to add something.</span></label>
      <textarea class="detail__report__textarea" name="message" id="message" cols="30" rows="5"></textarea>
      <div class="submit__input__checkbox">
            <input class="inp-cbx" id='mockup-rules' type="checkbox" required/>
            <label class="cbx" for="mockup-rules"><span>
            <svg width="12px" height="10px"><use xlink:href="#check"></use></svg>
            </span><span>I consent to the rules listed in the <a href="termsandconditions">terms and conditions</a></span></label>
            <svg class="inline-svg"><symbol id="check" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></symbol></svg>
          </div>
          <p class="submit__input__error"></p>
      <div class="detail__report__submit-container">
        <input class="detail__report__submit" type="submit" value="Report Mockup">
      </div>
  </form>
</section>
