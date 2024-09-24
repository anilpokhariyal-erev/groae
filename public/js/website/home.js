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

      // Get the origin of the URL
      const origin = window.location.origin;

      // Initialize an empty object to store the selected filters
      let filters = {};

      // Iterate over all select elements inside the form with class 'searchingForm'
      $('#searchForm select').each(function () {
          // Get the name and value of each select option
          const name = $(this).attr('name');
          const value = $(this).val();

          // Only add the filter if a value is selected
          if (value) {
              filters[name] = value;  
          }
      });

      // Build the query string
      let queryString = $.param(filters);

      // Redirect to the new URL with the selected filters
      window.location.href = `${origin}/explore-freezone?${queryString}`;
  });

  $('#clearSearchBtn').on('click', function () {
    $('#searchForm').trigger('reset');
  });

  $('#homePageSlider')
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: false,
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
