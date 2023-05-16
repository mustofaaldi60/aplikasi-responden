function showPreview(objFileInput) {
  if (objFileInput.files[0]) {
      var fileReader = new FileReader();
      fileReader.onload = function (e) {
          $('#blah').attr('src', e.target.result);
          $("#targetLayer").html('<img src="'+e.target.result+'" class="img-fluid w-25 h-25 m-md-2" />');
          $("#targetLayer").css('opacity','0.7');
          $(".icon-choose-image").css('opacity','0.5');
      }
      fileReader.readAsDataURL(objFileInput.files[0]);
  }
}