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
                $('.modal-bg').show().css('display','flex');
                $('.modal').show();
            }
        });
        
    }
})