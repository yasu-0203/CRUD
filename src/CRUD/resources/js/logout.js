require('./bootstrap');

$(function () {
  $('.logout').click(function (e) {
    e.preventDefault();
    $('#logout-form').submit();
  });
});