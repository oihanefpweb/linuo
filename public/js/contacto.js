$(function(){
    $('.modal-close').on('click', function () {
        $('.modal').hide();
        $('.modal-bg').hide();
        

    })
    $('.contacto').on('click', function (e) {
        e.preventDefault();
        getUserInfo(this.id);
       
    })

    function getUserInfo (id) {
        /* La ruta hay que ponerla asi en laravel 8 {{route('ajax...')}} no funciona si esta en un js externo */
        var title,
            info_data;

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/ajaxRequest",
            type:'POST',
            data: {
                _token: CSRF_TOKEN,
                id:id
            },
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
                for (let index = 0; index < data.length; index++) {
                    var table = $('<table/>'), 
                        tbody= $('<tbody/>'),
                        span = $('<span/>') ;
                    data.index.title
                }
                $('.modal-bg').show().css('display','flex');
                $('.modal').show();
            }
        });
        
    }
})