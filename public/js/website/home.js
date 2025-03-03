const text = [
  'Zero professional fees',
  'Hassle free registration',
  'Transparent process',
  'GROAE, for all your business needs',
];

let counter = 0;
const changeSubText = () => {
  const elem = $('#greeting');
  elem.fadeOut(() => {
    elem.html(text[counter]);
    counter++;
    if (counter >= text.length) {
      counter = 0;
    }
    elem.fadeIn();
  });
};
$(document).ready(function () {
  $('#searchBtn').on('click', function (e) {
      e.preventDefault();
      $('#searchForm').trigger('submit');
  });

  $('#clearSearchBtn').on('click', function () {
    $('#searchForm').trigger('reset');
  });

  $('#homePageSlider')
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      dots: true,
      loop: true,
      responsiveRefreshRate: 200,
      navText: [
        '<img src="../../images/previous-arrow.png"/>',
        '<img src="../../images/next-arrow.png"/>',
      ],
    })
    .on('changed.owl.carousel');

  setInterval(changeSubText, 2000);
});
