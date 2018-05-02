$.ajax({
    url: 'list.php',
    type: 'GET',
    dataType: 'json',
    data: {select: 'pays', id:'0'},
    success: function (data) {
        var options = '<option value="0">Sélectionner votre pays</option>';
        $.each(data, function(key, value){
            options += '<option value="'+key+'">'+value+'</option>';
        });
        $('#pays').html(options);
    },
    error: function () {
        console.log('erreur_pays');
    }
});

$('#pays').on('change',function() {
    var idPays = $('#pays')[0].value;

    $.ajax({
        url: 'list.php',
        type: 'GET',
        dataType: 'json',
        data: {select: 'region',id : idPays},
        success: function (data) {

            var options = '<option value="0">Sélectionner votre région</option>';
            $.each(data, function(key, value){
                options += '<option value="'+key+'">'+value+'</option>';
            });
            $('#region').html(options);
        },
        error: function () {
            console.log('erreur_region');
        }
    })
});

$('#region').on('change',function() {
    var idRegion = $('#region')[0].value;

    $.ajax({
        url: 'list.php',
        type: 'GET',
        dataType: 'json',
        data: {select: 'ville', id: idRegion},
        success: function (data) {

            var options = '<option value="0">Sélectionner votre ville</option>';

            $.each(data, function(value){
                options += '<option value="'+data[value]+'">'+data[value]+'</option>';
            });
            $('#ville').html(options);
        },
        error: function () {
            console.log('erreur_ville');
        }
    })
});






