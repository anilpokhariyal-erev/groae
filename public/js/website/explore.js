let selectedExploreCompareItems = [];

const addItemToFvPassport = item => {
  const items = item.split('|');

  const html = `
                <div class="compareItemWrapper" id="txtPassportNumber_${items[0]}">
                  <div class="compareItem">
                      <img class="itemImg-1" src="${items[items.length -1]}" alt="">
                      <h3>${items[1]}</h3>
                  </div>
                  <div><img class="cutImg" onclick="clearSelection('txtPassportNumber_${items[0]}')" src="/images/cut-icon.png" alt=""></div>
                </div>
            `;

  $('#txtPassportNumber').append(html);
};

const removeItemFromFvPassport = item => {
  const items = item.split('|');
  $(`#txtPassportNumber_${items[0]}`).remove();
};

const clearSelection = id => {
  if (id) {
    const item = $(`input:checkbox[id=package_${id.split('_')[1]}]`);
    item.prop('checked', false);
    console.log(item);
    const data = item.attr('data-checkbox');
    console.log(data);
    
    if (data) {  // Ensure data is not undefined before proceeding
      selectedExploreCompareItems = selectedExploreCompareItems.filter(
        item => item != data
      );
      removeItemFromFvPassport(data);
    }
    
    if (selectedExploreCompareItems.length == 0) {
      $('#dvPassport').hide();
    }
  } else {
    for (const data of selectedExploreCompareItems) {
      $(`#package_${data.split('|')[0]}`).prop('checked', false);
    }
    selectedExploreCompareItems.length = 0;
    $('#dvPassport > .compareSelctorContnt').empty();
    $('#dvPassport').hide();
  }
};

const compareNow = () => {
  if (selectedExploreCompareItems.length > 1) {
    const freezone_scompare_id = pathname.split('/')[2]
      ? `&freezone_compare_id=${pathname.split('/')[2]}`
      : '';

    open(
      `${origin}/compare-packages?packages=${selectedExploreCompareItems
        .map(item => item.split('|')[0])
        .toString()}${freezone_scompare_id}`
    );
  } else {
    toastr.error('Please choose one more freezone to compare');
  }
};

$(document).ready(function () {
  $('#compareNowBtn').on('click', function (e) {
    e.preventDefault();
    compareNow();
  });

  $('#compareNowClear').on('click', function (e) {
    clearSelection();
  });

  $('#clearSearchBtn').on('click', function () {
      window.location.href = `${origin}${pathname}`;
  });

  $('.checkbox').on('click', function (e) {
    const data = e.target.getAttribute('data-checkbox');

    if (selectedExploreCompareItems.length == 4 && e.target.checked) {
      e.target.checked = false;
      toastr.error('You can only choose atmost 4 freezones to compare');
    }

    if (e.target.checked) {
      selectedExploreCompareItems.push(data);
      addItemToFvPassport(data);
    } else {
      selectedExploreCompareItems = selectedExploreCompareItems.filter(
        item => item != data
      );
      removeItemFromFvPassport(data);
      if (selectedExploreCompareItems.length == 0) {
        $('#dvPassport').hide();
      }
    }

    if (selectedExploreCompareItems.length) {
      $('#dvPassport').show();
    } else {
      $('#dvPassport').hide();
    }
  });

  const selected_freezone = $('#selected_freezone').html().trim();
  if (selected_freezone !== '') {
    $(`#freezone_${selected_freezone}`).trigger('click');
  }

  const ref = searchParams.get('ref');
  if (ref) $(`#freezone_${ref}`).trigger('click');
});
