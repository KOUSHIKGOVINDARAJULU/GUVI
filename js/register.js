jQuery('#form').on('submit',function(e){
    jQuery('#submit').val('Please wait...');
    jQuery('#submit').attr('disabled',true);
    //alert("done");
    jQuery.ajax({
        url:'/GUVI/php/register.php',
        type:'POST',
        data:jQuery('#form').serialize(),
        success:function(result){
            alert("tranfer success and session noted");
            jQuery('#thank_you_msg').html('Thank you');
            jQuery('#form')['0'].reset();
            jQuery('#submit').val('Submit Now');
            jQuery('#submit').attr('disabled',false);
            jQuery('#test').html('completed');
        }
    });
    e.preventDefault();
});
//alert("cleared");
