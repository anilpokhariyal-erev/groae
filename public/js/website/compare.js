$(document).ready(function () {
  if (pathname == '/compare-freezone') {
    if (searchParams.has('freezones')) {
      localStorage.setItem('compare_freezones', searchParams.get('freezones'));
    } else if (localStorage.getItem('compare_freezones')) {
      window.location.href = `${origin}/compare-freezone?freezones=${localStorage.getItem(
        'compare_freezones'
      )}`;
    } else {
      window.location.href = `${origin}/explore-freezone`;
    }
  }

  $('.cutIconDiv').click(function () {
    const uuid = this.id;
    const newParams = searchParams
      .get('freezones')
      .split(',')
      .filter(e => e != uuid)
      .toString();
    window.location.href = `${origin}${pathname}?freezones=${newParams}`;
  });
});
