// Copyright 2018 The Chromium Authors. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.

"use strict";

let tab;

changeColor.onclick = function(element) {
  chrome.tabs.query(
    {
      active: true,
      lastFocusedWindow: true
    },
    function(tabs) {
      // and use that tab to fill in out title and url
      tab = tabs[0];
    }
  );
  chrome.tabs.create({
    url: `http://localhost:8888/src/index.php?page=new&url=${tab.url}`
  });
};
