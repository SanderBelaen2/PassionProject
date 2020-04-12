chrome.runtime.onMessage.addListener(function (request, sender, sendResponse) {
  if (request.msg == `badge`) {
    chrome.browserAction.setBadgeBackgroundColor({ color: `#FD5D7B` });
    chrome.browserAction.setBadgeText({ text: request.amount });
  }
});
