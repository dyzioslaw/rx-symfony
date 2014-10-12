


//
//function filterUpdate(){
//    $.post('{{path('WarsztatyFilterBundle_ajax_update_mydata')}}',
//    {data1: 'mydata1', data2:'mydata2'},
//        function(response){
//            if(response.code == 100 && response.success){//dummy check
//                //do something
//            }
//
//        }, "json");
//}

$(document).ready(function() {
    $("input[type=checkbox]").switchButton({
        on_label: 'TAK',
        off_label: 'NIE'
    });

    $('.element').change(function() {

        $('#loader').show();
        var formData = $('form.filters').serialize();
        console.log(formData);
        $.ajax({
            type: "POST",
            url: $('.filters').attr('action'),
            data: formData,
            dataType: "json"
        })
            .success(function(response) {
                $('#results-container').html(response.html);
            })
            .done(function() {
                $('#loader').hide();
            });

    });
});