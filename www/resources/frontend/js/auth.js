var authTools = {

    switchForm: function(event){
        $this = $(this);
        if($this.is(":checked")){
            $('#form-signin').hide();
            $('#form-register').show();
            $('.option.selected').removeClass('selected');
            $('.option.register').addClass('selected');
        }else{
            $('#form-register').hide();
            $('#form-signin').show();
            $('.option.selected').removeClass('selected');
            $('.option.signin').addClass('selected');
        }

    }
};

$(function(){
    $("#formSelect").on('change', authTools.switchForm);
});