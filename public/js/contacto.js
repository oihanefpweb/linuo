$(function(){
    $('.modal-close').on('click', function () {
        $('.modal').hide();
        $('.modal-bg').hide();
        

    })
    $('.contacto').on('click', function (e) {
        e.preventDefault();
        $('.modal-body').html('')
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
                        space = '<br>',
                        row_content = "";
                    for(let index2 = 0; index2 < data[index].info_data.length; index2++) {
                        
                            $.each(data[index].info_data[index2], function (key, val) {
                                if(val){
                                    if(key.includes('_')){
                                        key = key.replace("_"," ");
                                    }
                                    if(data[index].title == 'skills@info'){
                                        row_content = '<tr><td class="info skills" colspan="2">'+val+'</td></tr>';
                                    } 
                                    else if(key == 'fecha inicio' || key == 'fecha fin'){
                                        row_content = '<tr><td class="info title">'+key+'</td><td class="info">'+getDate(val)+'</td></tr>';
                                    }
                                    else{
                                        row_content = '<tr><td class="info">'+key+'</td><td class="info">'+val+'</td></tr>';
                                    }
                                    if(row_content!="") tbody.append(row_content);
                                }
                            });
                        if(data[index].title == 'estudies@info'){
                            tbody.append(space)
                        }
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
    function getDate(date) { 
        var mes;
        const MESES = [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre",
        ];
        const f = new Date(date);
        
        mes = MESES[f.getMonth()];
        year = f.getFullYear();
        return mes + ' '+ year;

    }
})