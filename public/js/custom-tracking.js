$(document).ready(function($) {
// Track submission events.
  $('#mp-email').onLoad(function() {
      ga('send', {'hitType': 'event', 'eventCategory': 'Politician email forms', 'eventAction': 'Form submitted', 'eventLabel': 'MP email form submitted', 'eventValue': '', 'nonInteraction': 'true' });
  });
  $('#senator-email').submit(function() {
      ga('send', {'hitType': 'event', 'eventCategory': 'Politician email forms', 'eventAction': 'Form submitted', 'eventLabel': 'Senator email form submitted', 'eventValue': '', 'nonInteraction': 'true' });
  });
});
