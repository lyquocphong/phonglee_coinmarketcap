define(['jquery'], function($){
    $(function () {
        $('#refreshBtn').click(function() {
            $.ajax({
              url: "index/refreshlist",
              method: "GET"
            })
            .done(function(res) {
                $('#listSection').html(res);
                console.warn('List loaded');
            })
            .fail(function() {
                alert( "error" );
            });
        })
    }); 
});  