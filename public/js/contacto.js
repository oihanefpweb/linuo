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
                $('.modal-name').text(data[0].info_data[0].nombre);
                for (let index = 0; index < data.length; index++) {
                    var table = $('<table/>'), 
                        tbody= $('<tbody/>'),
                        span = $('<span/>').addClass('table-title').text(data[index].title),
                        row_content;
                    for(let index2 = 0; index2 < data[index].info_data.length; index2++) {
                        $.each(data[index].info_data[index2], function (key, val) {
                            row_content = '<tr><td class="info">'+key+'</td><td class="info">'+val+'</td></tr>';
                                tbody.append(row_content);
                                console.log(row_content)
                        });
                    }
                    table.append(span),
                    table.append(tbody);
                    $('.modal-body').append(table)
                }
                $('.modal-bg').show().css('display','flex');
                $('.modal').show();
            }
        });
        
    }
})