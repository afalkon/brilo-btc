$(document).ready(function(){

    var update_line = $('#exchange__update')
    setInterval(loadRates, 10000)

    function loadRates(){
        $.ajax({
            url: "/ajax-btc-rates",
            type: "GET",
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(data){
                $(update_line).text(data['update_time'])
                $.each(data['currencies'], function(index, value){
                    var rate_line = $('#' + index)
                    $(rate_line).text(data['currencies'][index]['rate_float'])
                })
            }
        })
    }
})