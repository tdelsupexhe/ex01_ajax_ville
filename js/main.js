$('#pays').on('change',function() {
    var idPays = $('#pays')[0].value;
    console.log(idPays);

    $.ajax({
        url: 'list.php',
        type: 'GET',
        dataType: 'json',
        data: {select: 'region',id : idPays},
        success: function (data) {

            var options = '<option value="0">Sélectionner votre région</option>';
            console.log(data);
            $.each(data, function(key, value){
                options += '<option value="'+key+'">'+value+'</option>';
            });
            $('#region').html(options);
        },
        error: function () {
            console.log('erreur');
        }
    })
});

$('#region').on('change',function() {
    var idRegion = $('#region')[0].value;
    console.log(idRegion);

    $.ajax({
        url: 'list.php',
        type: 'GET',
        dataType: 'json',
        data: {select: 'ville', id: idRegion},
        success: function (data) {

            var options = '<option value="0">Sélectionner votre ville</option>';
            console.log(data);
            $.each(data, function(value){
                options += '<option value="'+value+'">'+value+'</option>';
            });
            $('#ville').html(options);
        },
        error: function () {
            console.log('erreur');
        }
    })
});






