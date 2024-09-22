var url;
const { searchParams, origin, pathname } = new URL(window.location.href);
$(document).ready(function () {
  url = $('#template_data').attr('data-points');
});
