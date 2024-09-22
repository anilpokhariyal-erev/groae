const updateActivitiesList = value => {
  const dom_element = $('#activities');
  dom_element.empty();
  dom_element.append(new Option('Choose an Option', ''));

  if (value)
    fetch(`${url}/api/activity_group/${value}`)
      .then(response => response.json())
      .then(data => {
        data.activities.forEach(({ name, id }) => {
          dom_element.append(new Option(name, `activities|${id}|${name}`));
        });
      });
  dom_element.trigger('change');
};

const refreshSelectionDiv = (div, value) => {
  const display_div = $(`#${div}_display`);
  display_div.html('');
  if (value) {
    let items = value.split('___');

    for (const item of items) {
      const [div_dom_id, div_id, div_value] = item.split('|');
      display_div.append(
        `<div class="activitySelct"><h3>${div_value}</h3><img onclick="removeThis('${div}','${item}')" src="../../images/close-blackicon.png"></div>`
      );
    }
  }
};

const removeThis = (div, item) => {
  const dom_element = $(`#${div}`);
  const new_value = dom_element
    .val()
    .split('___')
    .filter(itm => itm !== item)
    .join('___');
  dom_element.val(new_value);
  dom_element.trigger('change');
};

const handleCheckboxChange = (e, i) => {
  if ($(e).is(':checked')) {
    $(`#visa_type_${i}`).val($(`#visa_type_1`).val());
    $(`#visa_add_on_${i}`).val($(`#visa_add_on_1`).val());
    $(`#location_${i}`).val($(`#location_1`).val());
  } else {
    $(`#visa_type_${i}`).val('');
    $(`#visa_add_on_${i}`).val('');
    $(`#location_${i}`).val('');
  }
};

const regenerateDiv = (visa_secton, div_iteration) => {
  visa_secton.empty();
  if ($('#visa_data').html()) {
    const data = JSON.parse($('#visa_data').html().trim());

    let groupDivs = [];

    for (let i = 1; i <= div_iteration; i++) {
      let visa_types_options = data.visa_types.map(
        visa_type =>
          `<option value="${visa_type.id}">${visa_type.name}</option>`
      );
      visa_types_options.unshift(
        '<option value="" disabled selected>Choose an Option</option>'
      );

      let visa_add_ons_options = data.visa_add_ons.map(
        visa_add_on =>
          `<option value="${visa_add_on.id}">${visa_add_on.name}</option>`
      );
      visa_add_ons_options.unshift(
        '<option value="" disabled selected>Choose an Option</option>'
      );

      let locations_options = data.locations.map(
        location => `<option value="${location.id}">${location.name}</option>`
      );
      locations_options.unshift(
        '<option value="" disabled selected>Choose an Option</option>'
      );

      groupDivs.push(`<div id="visa-group-${i}" class="secondColumn costCalculateForm" style="margin-bottom: 20px; width: 100%; display: flex; flex-direction:column;">
        <div class="visaPackage" style="text-align: center; margin-bottom: 10px;"><h3 class="trendDetails">Visa Package ${i}</h3>
        <div><div class="compareInput">
        <label style="display: ${
          i === 1 ? 'none' : 'block'
        };" class="labelcontainer" id="checkbox_label_${i}">Same as the First one<input type="checkbox" id="visa_package_checkbox_${i}" onchange="handleCheckboxChange(this, ${i});"><span class="checkmark"></span>
        </label></div></div></div>
        <div style="display:flex; gap:15px;">
        <div class="input_wrap w-100">
          <select required name="visa_type[${i}]" id="visa_type_${i}" class="inputField2 cursor arrowPlace" select-id="${i}" onchange="refreshcheckboxes(this);">
              ${visa_types_options.join('')}
          </select>
          <label for="visa_type_${i}">Visa Type</label>
          <p id="visa_type_${i}_error" class="errorMessage"></p>
        </div>
        <div class="input_wrap w-100">
          <select required name="visa_add_on[${i}]" id="visa_add_on_${i}" class="inputField2 cursor arrowPlace" select-id="${i}" onchange="refreshcheckboxes(this);">
              ${visa_add_ons_options.join('')}
          </select>
          <label for="visa_add_on_${i}">Visa Add On</label>
          <p id="visa_add_on_${i}_error" class="errorMessage"></p>
        </div>
        <div class="input_wrap w-100">
          <select required name="location[${i}]" id="location_${i}" class="inputField2 cursor arrowPlace" select-id="${i}" onchange="refreshcheckboxes(this);">
              ${locations_options.join('')}
          </select>
          <label for="location_${i}">Location</label>
          <p id="location_${i}_error" class="errorMessage"></p>
        </div>
        </div>
      </div>`);
    }

    visa_secton.hide().html(groupDivs.join('')).slideDown(500);
  }
};

const refreshcheckboxes = e => {
  const current = $(e);
  const selectedId = current.attr('select-id');
  const firstSelectVal =
    $(`#visa_type_1`).val() +
    $(`#visa_add_on_1`).val() +
    $(`#location_1`).val();

  if (selectedId == 1) {
    const visa_package = $('#visa_package').val();
    for (let i = 1; i <= visa_package; i++) {
      const currentSelectVal =
        $(`#visa_type_${i}`).val() +
        $(`#visa_add_on_${i}`).val() +
        $(`#location_${i}`).val();

      $(`#visa_package_checkbox_${i}`).prop(
        'checked',
        firstSelectVal == currentSelectVal
      );
    }
  } else {
    const currentSelectVal =
      $(`#visa_type_${selectedId}`).val() +
      $(`#visa_add_on_${selectedId}`).val() +
      $(`#location_${selectedId}`).val();

    $(`#visa_package_checkbox_${selectedId}`).prop(
      'checked',
      firstSelectVal == currentSelectVal
    );
  }
};

$(document).ready(function () {
  $(document).on('change', 'select', function () {
    const current = $(this);
    let is_changed = true;
    if (current.attr('data-dependent-selection')) {
      const dependent = $(`#${current.attr('data-dependent-selection')}`);
      if (current.val() == '') {
        dependent.val('');
      } else {
        const oldval = dependent.val();
        const exists = oldval.split('___').find(item => item == current.val());
        if (exists) {
          is_changed = false;
        } else {
          const separator = oldval ? '___' : '';
          dependent.val(oldval + separator + current.val());
        }
      }

      if (is_changed) dependent.trigger('change');
    }
  });

  $('input[type=hidden]').on('change', function () {
    const current = $(this);
    refreshSelectionDiv(current.attr('id'), current.val());
    if (current.attr('id') == 'activity_group_selection') {
      updateActivitiesList(current.val());
    }
  });

  $('#freezone').on('change', function ({ target: { value } }) {
    let { origin, pathname } = location;
    location.href = `${origin.concat(pathname)}?freezone=${value}`;
  });

  $('#visa_package').on('change', function () {
    const visa_secton = $('#visa_section');

    if ($("[id^='visa-group']").length) {
      $("[id^='visa-group']").slideUp(400, () => {
        if (!isNaN(this.value)) regenerateDiv(visa_secton, this.value);
      });
    } else {
      if (!isNaN(this.value)) regenerateDiv(visa_secton, this.value);
    }
  });
});
