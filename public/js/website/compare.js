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


  // Get all the table rows
  const rows = document.querySelectorAll('tr');

// Loop through each row
  rows.forEach(row => {
    // Check if the row contains any td with class 'blackTxt'
    const cells = row.querySelectorAll('td');
    let hasBlackTxt = false;

    // Check each cell in the row
    cells.forEach(cell => {
      if (cell.classList.contains('blackTxt')) {
        hasBlackTxt = true;
      }
    });

    // If no td contains 'blackTxt', remove the row
    if (!hasBlackTxt) {
      row.remove();
    }
  });

});
