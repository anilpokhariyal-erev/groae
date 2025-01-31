
const generate_visa_package = (value, rowCount) => {
  let token = $('#costCalculatorForm').data('token');
  if (value) {
    fetch(`${url}/api/freezone/${value}/visa_package`, {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json' // Optional, if you want to specify content type
      }
    })
    .then((response) => response.json())
    .then((data) => {
      const visaSection = $('#visa_section');
      visaSection.empty(); // Clear existing content
      // Group data by unique attribute_header_id
      const groupedData = data.reduce((acc, item) => {
        const headerId = item.attribute_header_id;
        if (!acc[headerId]) {
          acc[headerId] = {
            header: item.attribute_header,
            attributes: []
          };
        }
        acc[headerId].attributes.push(item);
        return acc;
      }, {});

      // Create rows based on the specified row count
      for (let i = 0; i < rowCount; i++) {
        const rowContainer = $('<div>', {
          class: 'visa-row secondColumn costCalculateForm',
          style: 'margin-bottom: 20px; position: relative;'
        });

        // Iterate over each unique attribute_header group to generate dropdowns
        Object.values(groupedData).forEach((group) => {
          const { header, attributes } = group;

          // Create a div with class "input_wrap w-100"
          const inputWrap = $('<div>', {
            class: 'input_wrap w-100',
            style: 'margin-top: 3%;'
          });

          // Create a select dropdown for each group
          const select = $('<select>', {
            name: `${header.name}[]`, // Ensure unique names for each row
            id: `${header.name}_${i}`,
            class: 'inputField2 cursor arrowPlace',
            'data-header-id': header.id,
            'data-row-index': i
          });

          // Add a default option
          select.append(
            $('<option>', {
              value: '',
              text: 'Choose an Option',
              disabled: true,
              selected: true
            })
          );

          // Populate the select with attribute values
          attributes.forEach((attr) => {
            const option = $('<option>', {
              value: attr.id,
              text: attr.value,
              description: attr.description
            });
            select.append(option);
          });

          // Create a label for the select dropdown
          const label = $('<label>', {
            for: `visa_package_attributes_${header.id}_${i}`,
            text: header.title
          });

          // Append the label and select to the div
          inputWrap.append(select, label);

          // Append the input wrapper to the row container
          rowContainer.append(inputWrap);
        });

        // Add "Same as First" checkbox for rows other than the first
        if (i > 0 && data.length>0) {
          const divSaveAsFirst = $('<div>', {
            text: 'Same as First',
            class: 'divclass',
            style: 'width: 45%; padding: 2px;text-align: center;color:#7d7d7d;'
          });

          const sameAsFirstCheckbox = $('<input>', {
            type: 'checkbox',
            class: 'same-as-first-checkbox',
            'data-row-index': i,
            text: 'Same as First'
          });

          divSaveAsFirst.append(sameAsFirstCheckbox);
          
          // Append checkbox to the row
          rowContainer.append(divSaveAsFirst);

          // Add change event listener to apply first-row values when checked
          sameAsFirstCheckbox.on('change', function() {
            if ($(this).is(':checked')) {
              applyFirstRowSelection(i);
            }
          });
        }

        // Append the entire row to the visa section
        visaSection.append(rowContainer);
      }
    })
    .catch((error) => {
      console.error('Error fetching visa package attributes:', error);
    });
  }
};

// Function to apply selections from the first row to the current row
const applyFirstRowSelection = (rowIndex) => {
  // Get all selects in the first row (rowIndex 0)
  $('#visa_section .visa-row:eq(0) select').each(function() {
    const headerId = $(this).data('header-id');
    const selectedValue = $(this).val();

    // Set the selected value in the corresponding select of the specified row
    $(`#visa_section .visa-row:eq(${rowIndex}) select[data-header-id="${headerId}"]`).val(selectedValue);
  });
};

// for activities group and activities
const updateActivitiesList = value => {
  const dom_element = $('#activities');
  let token = $('#costCalculatorForm').data('token');
  const activitiesSelection = $('#activities_selection').val(); 
  const selectedValues = activitiesSelection ? activitiesSelection.split('___') : [];
  dom_element.empty().trigger('change');
  dom_element.append(new Option('Loading...', '', true, true)).trigger('change');
  const package_id = $('#package_id').val();
  if (value && package_id) {
    const values = value.split('__');
    const ids = values.map(value => value.split('|')[1]);
    fetch(`${url}/api/package/get-activities?package_id=${package_id}&activityIds=${ids}`, {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`, // Ensure token is correct
            'Content-Type': 'application/json' // Optional but good practice
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`Error: ${response.statusText}`);
        }
        return response.json();
    })
    .then(data => {
        // Clear existing options in the dropdown
        dom_element.empty().trigger('change');

        // Check if activities are returned in the response
        if (data && data.activities && data.activities.length > 0) {
            dom_element.append(new Option('Select an activity', '', false, false));
            // Iterate over the activities and add them as options
            data.activities.forEach(({ id, name, license }) => {
                const optionValue = `activities|${id}|${name}`;
                const isSelected = selectedValues.includes(optionValue); // Check if it should be selected
                const newOption = new Option(`${name} [${license}]`, optionValue, false, isSelected);
                dom_element.append(newOption);
                dom_element.trigger('change');
            });

            // Trigger change to update the dropdown visually
            dom_element.trigger('change');
        } else {
            // Handle no activities case
            dom_element.append(new Option('No activities available', '', true, true)).trigger('change');
        }
    })
    .catch(error => {
        console.error('Error fetching activities:', error);

        // Optionally show an error in the dropdown
        dom_element.empty().trigger('change');
        dom_element.append(new Option('Error loading activities', '', true, true)).trigger('change');
    });
}

  dom_element.trigger('change');
};

const refreshSelectionDiv = (div, value) => {
  const display_div = $(`#${div}_display`);
  display_div.html('');
  if (value) {
    let items = value.split('___');

    for (const item of items) {
      const [div_dom_id, div_id, div_value] = item.split('|');
      if(div_value!==undefined){
        display_div.append(
          `<div class="activitySelct"><h3>${div_value}</h3><img onclick="removeThis('${div}','${item}')" src="../../images/close-blackicon.png"></div>`
        );
      }
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

     $(document).on('change', 'select', function (event) {
        const current = $(this);
        let is_changed = true;

        // Handle dependent selection
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

        // Display description
        const description = $(this).find(':selected').attr('description');
        $(this).closest('div').find('p').remove();
        if (description) {
            $(this).closest('div').append('<p style="font-size:14px;">' + description + '</p>');
        }

        // Validate max allowed activity groups selection
        const maxActivityGroups = $("#max_activity_group_allowed").val(); // Example max value for activity groups
        let selectedActivityGroups = $('#activity_group_selection').val().split('___');

        if (selectedActivityGroups && selectedActivityGroups.length > maxActivityGroups) {
            // Remove the last selected activity group
            selectedActivityGroups.pop();
            $('#activity_group_selection').val(selectedActivityGroups.join('___'));
            // Remove the corresponding activity group display element
            $(`#activity_group_selection_display .activitySelct:last`).remove();
            // Show alert after updating the value
            alert(`You can select a maximum of ${maxActivityGroups} activity groups.`);
            return false;
        }

        // Validate max allowed activities selection
        const maxActivities = $("#max_activity_allowed").val(); // Example max value for activities
        let selectedActivities = $('#activities_selection').val().split('___');

        if (selectedActivities && selectedActivities.length > maxActivities) {
            // Remove the last selected activity
            selectedActivities.pop();
            $('#activities_selection').val(selectedActivities.join('___'));
            // Remove the corresponding activity display element
            $(`#activities_selection_display .activitySelct:last`).remove();
            // Show alert after updating the value
            alert(`You can select a maximum of ${maxActivities} activities.`);
            return false;
        }
    });


  function checkMultipleActivityGroups() {
    const selectedActivityGroups = $('#activity_group_selection_display .activitySelct').length;

    if (selectedActivityGroups > 1) {
      $('#activityGroupNote').show(); // Show the note if multiple groups are selected
    } else {
      $('#activityGroupNote').hide(); // Hide the note if only one or no group is selected
    }
  }
  function checkMultipleActivity() {
    const selectedActivity = $('#activities_selection_display .activitySelct').length;
    if (selectedActivity > 3) {
      $('#activityNote').show(); // Show the note if multiple groups are selected
    } else {
      $('#activityNote').hide(); // Hide the note if only one or no group is selected
    }
  }

  $('input[type=hidden]').on('change', function () {
    const current = $(this);
    refreshSelectionDiv(current.attr('id'), current.val());
    if (current.attr('id') == 'activity_group_selection') {
      updateActivitiesList(current.val());
      checkMultipleActivityGroups();
    }
    checkMultipleActivity();
  });

  $('#freezone').on('change', function ({ target: { value } }) {
    let { origin, pathname } = location;
    location.href = `${origin.concat(pathname)}?freezone=${value}`;
  });

  $('#visa_package').on('change', function () {
    const packageCount = parseInt($(this).val());
    $('#visa_section').empty();
    if (!isNaN(packageCount) && packageCount > 0) {
      const freezoneValue = $('#freezone').val();
      if (freezoneValue) {
        // Generate visa packages based on the selected package count
        generate_visa_package(freezoneValue, packageCount);
      }
    }
  });

});
