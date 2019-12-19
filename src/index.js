require("./style.css");

const goodmorning = document.querySelector(`.goodmorning`);
const startButton = document.querySelector(`#play`);
const stopButton = document.querySelector(`#stop`);
const msg = new SpeechSynthesisUtterance();
let origText = "";
let scrollPercent = 0;
let wordIndex = 1;

{
  const init = () => {
    //General
    changeDocumentTitleOnBlur();
    adaptGoodmorning();
    articleScroll();
    TTS();
    // AddArticleAJAX();
    startLoadingAnimation();
    autoScrollToProc();
    newBundle();
    checkBundle();
    checkContent();
  };

  // GENERAL

  const TTS = () => {
    if (startButton && stopButton) {
      startButton.addEventListener(`click`, handleStartTalking);
      stopButton.addEventListener(`click`, handleStopTalking);
    }
  };

  const handleStartTalking = () => {
    origText = document.querySelector(`#textDefault`).innerHTML;
    const textPlay = document.querySelector(`#textToRead`).innerHTML;
    const textShow = document.querySelector(`#textToRead`).textContent;
    msg.lang = "en-UK";
    msg.rate = 0.9;

    const panel = document.getElementById("textDefault");
    panel.innerHTML = textPlay;
    msg.text = textShow;
    msg.addEventListener(`boundary`, handleMsgBoundary);
    msg.addEventListener(`end`, handleStopTalking);

    window.speechSynthesis.speak(msg);
    startButton.classList.add(`hide`);
    stopButton.classList.remove(`hide`);
  };

  const handleStopTalking = () => {
    stopButton.classList.add(`hide`);
    startButton.classList.remove(`hide`);
    const panel = document.getElementById("textDefault");
    panel.innerHTML = `${origText}`;
    wordIndex = 1;
    window.speechSynthesis.cancel();
  };

  const handleMsgBoundary = () => {
    try {
      if (document.getElementById("word_span_" + wordIndex)) {
        const word = document.getElementById("word_span_" + wordIndex);
        word.classList.add("highlightedText");
        window.scrollTo(0, word.offsetTop);
      }
    } catch (e) {}

    wordIndex++;
  };

  const changeDocumentTitleOnBlur = () => {
    const currentTitle = document.title;
    window.addEventListener("focus", () => {
      document.title = currentTitle;
    });
    window.addEventListener("blur", () => {
      document.title = "Hey! Come Back!";
    });
  };

  const adaptGoodmorning = () => {
    if (goodmorning) {
      const hr = new Date().getHours();

      if (hr >= 6) {
        if (hr < 12) {
          goodmorning.textContent = `Good Morning`;
        }
      }
      if (hr >= 12) {
        if (hr < 18) {
          goodmorning.textContent = `Good Afternoon`;
        } else if (hr < 21) {
          goodmorning.textContent = `Good Evening`;
        }
      }
      if (hr >= 21) {
        goodmorning.textContent = `Good Night`;
      }
      if (hr < 6) {
        goodmorning.textContent = `Good Night`;
      }
    }
  };

  const articleScroll = () => {
    document.addEventListener(
      "scroll",
      function() {
        const scrollTop =
          document.documentElement["scrollTop"] || document.body["scrollTop"];
        const scrollBottom =
          (document.documentElement["scrollHeight"] ||
            document.body["scrollHeight"]) -
          document.documentElement.clientHeight;
        scrollPercent = (scrollTop / scrollBottom) * 100 + "%";
        const progressBar = document.querySelector(".progressbar");
        if (progressBar) {
          progressBar.style.setProperty("--scroll", scrollPercent);
        }
      },
      { passive: true }
    );

    let proc = document.querySelector(`.article__read__container`);
    if (proc) {
      proc = proc.dataset.procent;
    }

    const backbutton = document.querySelector(`.article__read__backbutton`);
    if (backbutton) {
      backbutton.addEventListener(`click`, handleClickBackButton);
    }
  };

  const handleClickBackButton = e => {
    e.preventDefault();
    handleStopTalking();

    const formData = new FormData();
    formData.append("action", "readProc");
    formData.append("value", parseInt(scrollPercent));

    fetch(``, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: "post",
      body: formData
    }).then((window.location = "index.php?page=articles"));
  };

  const checkBundle = () => {
    const $submitButton = document.querySelector(`.submitArticleLink`);
    if ($submitButton) {
      $submitButton.addEventListener(`click`, e => {
        if (document.querySelector(`.new__input__select`).value == 0) {
          document.querySelector(
            `.new__input__select`
          ).nextSibling.nextSibling.textContent =
            "You have to choose a bundle first";
        }
      });
    }
  };

  const startLoadingAnimation = () => {
    const submitButton = document.querySelector(`.submitArticleLink`);
    if (submitButton) {
      if (document.querySelector(`.newArticleLink`).value !== "") {
        submitButton.addEventListener(`click`, () => {
          document
            .querySelector(`.pageloadingContainer`)
            .classList.toggle(`hide`);
        });
        ``;
      }
    }
  };

  const autoScrollToProc = () => {
    const urlString = window.location.href;
    const url = new URL(urlString);
    const page = url.searchParams.get("page");

    if (page == "article-read") {
      let proc = document.querySelector(`.article__read__container`);
      proc = parseInt(proc.dataset.procent);

      window.scrollBy(
        0,
        (parseInt(document.body.scrollHeight) / 100) * proc - screen.height / 2
      );
      console.log((document.body.scrollHeight / 100) * proc);
    }
  };

  const newBundle = () => {
    const newBundleButton = document.querySelector(`.home__new__bundle`);
    console.log("test");
    if (newBundleButton) {
      newBundleButton.addEventListener(`click`, () => {
        document.querySelector(`.newBundle`).classList.remove(`hide`);
        document.querySelector(`#bundleName`).focus();
      });
    }
    const newBundleX = document.querySelector(`.newBundle__x`);
    if (newBundleX) {
      newBundleX.addEventListener(`click`, () => {
        document.querySelector(`.newBundle`).classList.add(`hide`);
      });
    }
    const newBundleForm = document.querySelector(`.newBundleForm`);
    if (newBundleForm) {
      newBundleForm.addEventListener(`submit`, () => {
        document.querySelector(`.newBundle`).classList.add(`hide`);
      });
    }
  };

  const checkContent = () => {
    const ptags = document.querySelectorAll(`.article__new__textCheckable`);
    if (ptags.length !== 0) {
      ptags.forEach($p => {
        $p.addEventListener(`click`, e => {
          e.target.classList.toggle(`article__new__unCheck`);
          if (e.target.dataset.active === "1") {
            e.target.dataset.active = "0";
          } else {
            e.target.dataset.active = "1";
          }
        });
      });
      document
        .querySelector(`#submitCheckedArticle`)
        .addEventListener(`click`, handleClickSubmitCheckedArticle);
    }
  };

  const handleClickSubmitCheckedArticle = () => {
    let body = "";
    let bodyToRead = "";
    const title = document.querySelector(`.article__new__title`).textContent;
    const img = document.querySelector(`.article__read__img`).src;
    const bundleId = document.querySelector(`.article__new__bundle_id`)
      .textContent;
    const url = document.querySelector(`.article__new__domain`).href;
    const domain = document.querySelector(`.article__new__domain`).textContent;

    const ptags = document.querySelectorAll(`[data-active="1"]`);
    ptags.forEach($p => {
      body = `${body} <p>${$p.textContent.trim()}</p>`;
      bodyToRead = `${bodyToRead} ${$p.textContent.trim()}</br></br>`;
    });

    console.log(body.trim());

    const formData = new FormData();
    formData.append("title", title);
    formData.append("action", "submitArticle");
    formData.append("body", body);
    formData.append("image", img);
    formData.append("url", url);
    formData.append("domain", domain);
    formData.append("bundle_id", bundleId);
    formData.append("bodyToRead", bodyToRead);

    fetch(``, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: "post",
      body: formData
    }).then(
      (setTimeout(() => {
        window.location.href = "index.php?page=articles";
      }),
      1000)
    );
  };

  init();
}
