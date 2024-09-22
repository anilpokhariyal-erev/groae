$(document).ready(function () {
  $('[id^=uploadBtn_]').on('click', function (e) {
    e.preventDefault();
    $('#doc' + this.id).click();
  });

  $('[id^=doc]').on('change', function ({ target: { files } }) {
    const selectedFile = files[0];
    if (selectedFile) {
      $('#uploadForm').submit();
    }
    console.log('Selected file:', selectedFile);
  });
});
