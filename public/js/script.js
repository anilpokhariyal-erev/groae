// document.addEventListener('DOMContentLoaded', function() {

    var dropdownButton = document.getElementById("dropdownButton");
    var dropdownContent = document.getElementById("dropdownContent");

    dropdownButton.addEventListener("click", function() {
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });

    window.addEventListener('popstate', function(event) {
        if (event.state === null) {
            location.reload();
        }
    });

    document.addEventListener("click", function(event) {
        if (event.target !== dropdownButton) {
            dropdownContent.style.display = "none";
        }
    });

    var successMessage = document.getElementById("successMessage");
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.display = 'none';
        }, 5000);
    }

    if(document.getElementById("close-errorModal")){
        document.getElementById("close-errorModal").addEventListener("click", function() {
            document.getElementById("errorModal").style.display = "none";
        });
    }

    function addLicenses() {
        const licenseContainer = document.getElementById('license');
        const newLicense = document.getElementById('static_field_for_license').innerHTML;
        licenseContainer.insertAdjacentHTML('beforeend', newLicense);
    }

    if(document.getElementById("addLicense")){
        document.getElementById('addLicense').addEventListener('click', addLicenses);
    }

    function baCopyText(id) {
        var copyText = document.getElementById(id);

        copyText.select();
        copyText.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(copyText.value);

        var tooltip = document.querySelector(".copy_"+id+" #copy_"+id+"_tooltip");
        tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function baTextCopied(id) {
        var tooltip = document.querySelector(".copy_"+id+" #copy_"+id+"_tooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }

    function showCopy(id){
        var inputfield = document.getElementById(id);

        if (inputfield.value) {
            document.querySelector(".copy_"+id).style.display = "flex";
        } else {
            document.querySelector(".copy_"+id).style.display = "none";
        }
    }

    function checkMaxLength(input, maxLength) {
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
    }

    function displayImage(input, imageTag) {
        var file = input.files[0];
        var filename = input.files[0].name;

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById(imageTag).src = e.target.result;
                document.querySelector('.'+imageTag).value = filename;
            };

            reader.readAsDataURL(file);

            var ba_dynamic_input_image_name = document.getElementById(imageTag+'_name');

            if(ba_dynamic_input_image_name){
                ba_dynamic_input_image_name.textContent = input.files[0].name;
            } else {
                var ba_input_image_name = document.getElementById('ba_input_image_name');
                ba_input_image_name.textContent = input.files[0].name;
            }

        }

    }

    function confirmDelete(deleteUrl) {
        if (confirm('Are you sure you want to delete?')) {
            window.location.href = deleteUrl;
        }
    }

    function confirmDeleteForm(formId) {
        if (confirm('Are you sure you want to delete?')) {
            $(formId).submit();
        }
    }

// });


$(document).ready(function() {

    $(document).on('change', '.business_license_image_input', function() {

        var businessLicenseBox = $(this).closest('.business_license_box');
        var businessLicenseImage = businessLicenseBox.find('.business_license_image');

        if (this.files && this.files[0]) {
            var filename = this.files[0].name;
            var reader = new FileReader();

            reader.onload = function(e) {
                businessLicenseImage.attr('src', e.target.result);
                businessLicenseBox.find('.business_license_image_hidden').val(e.target.result);
                businessLicenseBox.find('.ba_business_image_name').text(filename);
            };

            reader.readAsDataURL(this.files[0]);
        }
    });

    $(document).on('click', '.delete_business_licenses', function(){
        $(this).parent().hide();
        $(this).append('<input type="hidden" name="license_delete[]" value="'+$(this).parent('.business_license_box').find("input[name='license_id[]']").val()+'">');
    });

    $('.ba_select2').select2();

    $('.ba_select2_without_search').select2({
        minimumResultsForSearch: Infinity
    });

    $('.ba_select2_document_format').select2({
        minimumResultsForSearch: Infinity,
        placeholder: "Select Formats"
    });

    $('.ba_select2_multiselect').select2({
        minimumResultsForSearch: Infinity,
        placeholder: "Select"
    });

    $('.ba_select2_customers').select2({
        ajax: {
            url: '/admin/ajax-select-customer',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    query: params.term
                };
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            id: item.id,
                            text: item.name+' ('+item.email+')'
                        };
                    })
                };
            },
            cache: true
        },
        minimumInputLength: 3
    });

    $('#addAdditions').on('click', function(){
        var additionValue = $('#additions').val();

        if(additionValue != ''){
            $('#additionalList').append('<li class="list-group-item capitalize">'+additionValue+':</li>');
            $('#additions').val('');

            $('#customerRequestDataForm').append('<input name="additions['+additionValue+']" value="" type="hidden">');
        }
    });

    if(document.querySelector('#ckeditor_description')){
        ClassicEditor.create( document.querySelector('#ckeditor_description'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }

    if(document.querySelector('#ckeditor_description1')){
        ClassicEditor.create( document.querySelector('#ckeditor_description1'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }

    if(document.querySelector('#ckeditor_description2')){
        ClassicEditor.create( document.querySelector('#ckeditor_description2'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }
    if(document.querySelector('#ckeditor_description3')){
        ClassicEditor.create( document.querySelector('#ckeditor_description3'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }
    if(document.querySelector('#ckeditor_description4')){
        ClassicEditor.create( document.querySelector('#ckeditor_description4'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }
    if(document.querySelector('#ckeditor_description5')){
        ClassicEditor.create( document.querySelector('#ckeditor_description5'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }
    if(document.querySelector('#ckeditor_description5')){
        ClassicEditor.create( document.querySelector('#ckeditor_description5'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }
    if(document.querySelector('#ckeditor_description6')){
        ClassicEditor.create( document.querySelector('#ckeditor_description6'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }
    if(document.querySelector('#ckeditor_description7')){
        ClassicEditor.create( document.querySelector('#ckeditor_description7'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }

    if(document.querySelector('#ckeditor_description8')){
        ClassicEditor.create( document.querySelector('#ckeditor_description8'), {
            extraPlugins: [CustomAdapterPlugin],
        }).catch( error => {
            console.log( error );
        });
    }

    

    class CustomUploadAdapter {
        constructor( loader ) {
            this.loader = loader;
        }

        upload() {
            return this.loader.file
                .then( file => new Promise( ( resolve, reject ) => {
                    this._initRequest();
                    this._initListeners( resolve, reject, file );
                    this._sendRequest( file );
                } ) );
        }

        abort() {
            if ( this.xhr ) {
                this.xhr.abort();
            }
        }

        _initRequest() {
            const xhr = this.xhr = new XMLHttpRequest();
            xhr.open( 'POST', '/admin/ckeditor-image-upload', true );
            xhr.responseType = 'json';
        }

        _initListeners( resolve, reject, file ) {
            const xhr = this.xhr;
            const loader = this.loader;
            const genericErrorText = `Couldn't upload file: ${ file.name }.`;
    
            xhr.addEventListener( 'error', () => reject( genericErrorText ) );
            xhr.addEventListener( 'abort', () => reject() );
            xhr.addEventListener( 'load', () => {
                const response = xhr.response;

                if ( !response || response.error ) {
                    return reject( response && response.error ? response.error.message : genericErrorText );
                }

                resolve( {
                    default: response.url
                } );
            } );

            if ( xhr.upload ) {
                xhr.upload.addEventListener( 'progress', evt => {
                    if ( evt.lengthComputable ) {
                        loader.uploadTotal = evt.total;
                        loader.uploaded = evt.loaded;
                    }
                } );
            }
        }

        _sendRequest( file ) {
            const data = new FormData();
            data.append( 'upload', file );
            this.xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            this.xhr.send( data );
        }
    }
    
    function CustomAdapterPlugin( editor ) {
        editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
            return new CustomUploadAdapter( loader );
        };
    }

    $('#update_booking_request').on('change', function(){
        var status = $(this).val();
        var bookingId = $(this).data('freezonebookingid');

        $.ajax({
            url: '/admin/update-booking-status',
            method: 'POST',
            data: {
                status: status,
                bookingId: bookingId
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                console.log(response);
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });

});