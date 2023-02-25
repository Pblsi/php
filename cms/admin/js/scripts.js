$(document).ready (function() {
    $('#summernote').summernote({
    height: 200
});
});

tinymce.init({selector:'textarea'});

$(document).ready(function(){

    $('#selectAllBoxes').click(function(event){

        if(this.checked) {

            $('.checkedBoxes').each(function(){

                this.checked = true;

            });
        } else {
            $('.checkBoxes').each(function(){
                this.checked = false;
            });
        }
    });

    var div_box = "div='load-screen'><div id='loading'></div></div>";
    $("body").prpend(div_box);
    $('#load-screen').delay(700).fadeOut(600, function(){
        $(this).remove();
    });

});


// $(document).ready(function() {
//     $('#summernote').summernote();
//   });