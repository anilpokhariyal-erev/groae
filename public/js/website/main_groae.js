$(document).ready(function () {
  $('#ImgInnrTxt').on('click', function () {
    location.href = location.origin;
  });

  $('#showProfileDropDown').on('click', function (event) {
    event.preventDefault();
    $('#myAccount').toggleClass('showTxt');
  });

  $('#compare-freezone-btn').on('click', function (e) {
    e.preventDefault();
    const exists = localStorage.getItem('compare_freezones');
    window.location.href = exists
      ? `${origin}/compare-freezone?freezones=${exists}`
      : `${origin}/explore-freezone`;
  });

  $('.hamburger').on('click', () => {
    $('.hamburger').toggleClass('active');
    $('.nav-menu').toggleClass('active');
  });

  $('#nav-more-btn').on('click', function () {
    $('#myPopup').toggleClass('show');
  });

  $('#nav-accounting-btn').on('click', function () {
    $('#accountPopup').toggleClass('show');
  });

  $('.preImg').on('click', function () {
    $('#scrollbar').animate({ scrollLeft: '-=150' }, 'fast');
  });

  $('.nxtImg').on('click', function () {
    $('#scrollbar').animate({ scrollLeft: '+=150' }, 'fast');
  });

  $(document).on('click', '.closeImg, .inputCloseIcon', function () {
    window.location.href = `${origin + pathname}`;
  });

  toastr.options.preventDuplicates = true;
});
