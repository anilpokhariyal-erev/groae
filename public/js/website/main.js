// slider==============

const email = document.getElementById('email');
const first_name = document.getElementById('first_name');
const last_name = document.getElementById('last_name');
const mobile_number = document.getElementById('mobile_number');
const password = document.getElementById('password');

const msg = document.getElementById('msg');

// Function used to display errors
const generateError = (errorName, errorMsg) => {
  const emailError = document.getElementById('emailError');
  const passwordError = document.getElementById('passwordError');
  if (errorName == 'email') {
    emailError.innerText = errorMsg;
  } else if (errorName == 'password') {
    passwordError.innerText = errorMsg;
  }
};

// <!-- hamburger script -->

// ------------ pagination --------------------

$('ul.pagination').on('click', 'a', function () {
  // listen for click on pagination link
  if ($(this).hasClass('active')) return false;

  var active_elm = $('ul.pagination a.active');

  if (this.id == 'next') {
    var _next = active_elm.parent().next().children('a');
    if ($(_next).attr('id') == 'next') {
      // appending next button if reach end
      var num = parseInt($('a.active').text()) + 1;
      active_elm.removeClass('active');
      $('<li><a class="active" href="#">' + num + '</a></li>').insertBefore(
        $('#next').parent()
      );

      $('#prev').parent().next().remove();
      return;
    }
    _next.addClass('active');
  } else if (this.id == 'prev') {
    var _prev = active_elm.parent().prev().children('a');

    if ($(_prev).attr('id') == 'prev') {
      var num = parseInt($('a.active').text()) - 1;
      active_elm.removeClass('active');
      _prev = $(
        '<li><a class="active" href="#">' + num + '</a></li>'
      ).insertAfter($('#prev').parent());

      $('#next').parent().prev().remove();
    }
    _prev.addClass('active');
  } else {
    $(this).addClass('active');
  }
  active_elm.removeClass('active');
});

// about list scroll colour change

// Add active class to the current button (highlight it)
var header = document.getElementById('myDIV');
if (header) {
  var anc = header.getElementsByClassName('listItemsHeading');
  for (var i = 0; i < anc.length; i++) {
    anc[i].addEventListener('click', function () {
      var current = document.getElementsByClassName('activeList');
      if (current.length > 0) {
        current[0].className = current[0].className.replace(' activeList', '');
      }
      this.className += ' activeList';
    });
  }
}

// active and inactive collapse
var coll = document.getElementsByClassName('collapsible');
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener('click', function () {
    this.classList.toggle('activeCollapse');
    var contentGuide = this.nextElementSibling;
    if (contentGuide.style.maxHeight) {
      contentGuide.style.maxHeight = null;
    } else {
      contentGuide.style.maxHeight = contentGuide.scrollHeight + 'px';
    }
  });
}

// compare=  =================

$('#chkPassport').click(function () {
  if ($(this).is(':checked')) {
    $('#dvPassport').show();
  } else {
    $('#dvPassport').hide();
  }
});

// ====================== profile sidebar change colour
function changeColor1() {
  document.getElementById('download').classList.remove('activeBar2');
  document.getElementById('myprofile').classList.add('activeBar');
  document.getElementById('transaction').classList.remove('activeBar2');
  document.getElementById('license').classList.remove('activeBar2');
  document.getElementById('setting').classList.remove('activeBar2');
}
// function changeColor2() {
//   document.getElementById("myprofile").classList.remove("activeBar");
//   document.getElementById("download").classList.add("activeBar2");
//   document.getElementById("transaction").classList.remove("activeBar2");
//   document.getElementById("license").classList.remove("activeBar2");
//   document.getElementById("setting").classList.remove("activeBar2");
// }
// function changeColor3() {
//   document.getElementById("download").classList.remove("activeBar2");
//   document.getElementById("transaction").classList.add("activeBar2");
//   document.getElementById("myprofile").classList.remove("activeBar");
//   document.getElementById("license").classList.remove("activeBar2");
//   document.getElementById("setting").classList.remove("activeBar2");
// }
// function changeColor4() {
//   document.getElementById("transaction").classList.remove("activeBar2");
//   document.getElementById("license").classList.add("activeBar2");
//   document.getElementById("myprofile").classList.remove("activeBar");
//   document.getElementById("download").classList.remove("activeBar2");
//   document.getElementById("setting").classList.remove("activeBar2");
// }
// function changeColor5() {
//   document.getElementById("license").classList.remove("activeBar2");
//   document.getElementById("setting").classList.add("activeBar2");
//   document.getElementById("myprofile").classList.remove("activeBar");
//   document.getElementById("download").classList.remove("activeBar2");
//   document.getElementById("transaction").classList.remove("activeBar2");
// }

// ================== text transition in home page

consoleText(
  [
    'Set up of your business is just a few steps away',
    'Zero professional fees',
    'Hassle free registration',
    'Transparent process',
  ],
  'text',
  ['#61616b']
);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id);
  if (target) {
    target.setAttribute('style', 'color:' + colors[0]);
    window.setInterval(function () {
      if (letterCount === 0 && waiting === false) {
        waiting = true;
        target.innerHTML = words[0].substring(0, letterCount);
        window.setTimeout(function () {
          var usedColor = colors.shift();
          colors.push(usedColor);
          var usedWord = words.shift();
          words.push(usedWord);
          x = 1;
          target.setAttribute('style', 'color:' + colors[0]);
          letterCount += x;
          waiting = false;
        }, 1000);
      } else if (letterCount === words[0].length + 1 && waiting === false) {
        waiting = true;
        window.setTimeout(function () {
          x = -1;
          letterCount += x;
          waiting = false;
        }, 1000);
      } else if (waiting === false) {
        target.innerHTML = words[0].substring(0, letterCount);
        letterCount += x;
      }
    }, 120);
    window.setInterval(function () {
      if (visible === true) {
        con.className = 'console-underscore hidden';
        visible = false;
      } else {
        con.className = 'console-underscore';

        visible = true;
      }
    }, 400);
  }
}

document.addEventListener('DOMContentLoaded', function () {
  // After Login Name in header open
  $('#showProfileDropDown').on('click', function (event) {
    event.preventDefault();
    $('#myAccount').toggleClass('showTxt');
  });
});

$(document).ready(function () {
  $('#ImgInnrTxt').on('click', function () {
    location.href = location.origin;
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
