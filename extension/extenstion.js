'use strict';

let tab;

const links = [
  'malli.graphics/category/all/1',
  'malli.graphics/category/mobile/1',
  'malli.graphics/category/desktop/1',
  'malli.graphics/category/paper/1',
  'malli.graphics/category/packaging/1',
  'malli.graphics/category/food/1',
  'malli.graphics/category/branding/1',
  'malli.graphics/category/fashion/1',
  'malli.graphics/category/clay/1',
  'malli.graphics/category/other/1'
];

submit.onclick = function () {
  const q = search.value;

  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/all/1/${q}`
  });
};

homeButton.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/`
  });
};

categoryButton0.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/all/1`
  });
};

categoryButton1.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/mobile/1`
  });
};

categoryButton2.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/desktop/1`
  });
};

categoryButton3.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/paper/1`
  });
};

categoryButton4.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/packaging/1`
  });
};

categoryButton5.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/food/1`
  });
};

categoryButton6.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/branding/1`
  });
};

categoryButton7.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/fashion/1`
  });
};

categoryButton8.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/clay/1`
  });
};

categoryButton9.onclick = function () {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function (tabs) {
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `https://malli.graphics/category/other/1`
  });
};
