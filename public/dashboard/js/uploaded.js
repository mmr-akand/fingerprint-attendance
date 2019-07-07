
$(".file-input").change(function(){
	var input = this,
		$this = $(this);
	
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			console.log(e);
			$this.closest('.upload-styled-image').find('.uploaded-here').css('background-image', 'url(' + e.target.result + ')');
		}
		
		reader.readAsDataURL(input.files[0]);
	}
});
