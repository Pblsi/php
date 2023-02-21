tinymce.init({selector:'textarea'});

$(document).ready(function(){

    $('#selectAllBoxes').click(function(event){

        if(this.checked) {

            $('.checkedBoxes').each(function(){

                this.checked = true;
                
            });
        }
    });
});