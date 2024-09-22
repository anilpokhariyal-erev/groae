$(document).ready(function () {
  const pathSegments = pathname.split('/');
  if (pathSegments.length === 4) {
    const selectedItem = $("[data-item-id='" + pathSegments[3] + "']");
    const scrollbar = $('#scrollbar');

    if (selectedItem.length > 0) {
      // Scroll to the middle of the scrollbar
      scrollbar.scrollLeft(
        selectedItem.offset().left -
          (scrollbar.width() / 2 + selectedItem.width() / 2) -
          scrollbar.width() * 0.15
      );
      const anchorChild = selectedItem.children('a');
      if (anchorChild.length) anchorChild.addClass('activeList');

      $('html, body').animate({ scrollTop: scrollbar.offset().top }, 'slow');
    }
  }
});
