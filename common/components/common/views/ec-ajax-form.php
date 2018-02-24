  $('<?=$formId?>').submit(function(){
        var formData=$(this).serialize();
        $.ajax({
            url:'<?=$action?>',
            data:formData,
            type:'post',
            success:function(data){
                alert(data[0]);
            }
        });
         return false;
    });
