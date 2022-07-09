$('#search').keyup(function () {
    $('#results').empty();
    $('#results').css('display', 'block');
    var query = $('#search').val();
    var el;

    if (query == '') {
        $('#results').append('<p>No Result</p>');
        $('#results').css('display', 'none');
    } else {
        $.ajax({
            url: 'https://api.tvmaze.com/search/shows',
            type: 'GET',
            data: {q: query},
            success: function (data) {
                $(data).each(function (index, element) {
                    el = '<div class="row" style="display: table; width: 0px" id="'+element.show.id+'">'+
                            '<div style="display: table-cell;">'+
                                '<img src="'+element.show.image.medium+'" style="width: 90px; position: absolute; margin-top: 15px;">'+
                            '</div>'+
                            '<div style="display: table-cell; padding-left: 115px;">'+
                                '<p>'+element.show.name+'</p>'+
                            '</div>'+
                            '<div style="display: table-cell">'+
                                '<p>'+element.show.summary.substr(0,50)+'</p>'+
                            '</div>'+
                            '<div style="display: table-cell">'+
                                '<button class="add_movie" onclick="setMovie('+element.show.externals.thetvdb+')" type="button" style="margin-top: 25px; margin-right: 15px;">+</button>'
                            '</div>'
                        '</div>';

                    $('#results').append(el);
                });
            },
        });
    }
});

function setMovie(id) {
    $.ajax({
        url: 'https://api.tvmaze.com/lookup/shows',
        type: 'GET',
        data: {thetvdb: id},
        success: function (data) {
            console.log(data);
            $('.owl-carousel').trigger('add.owl.carousel', ['<div class="item" style="min-width: 500px;">'+
            '<div>'+
                '<button class="remove_movie" onclick="delMovie('+data.id+')" type="button" style="position: absolute; right: 0; width: 30px; top: 10px; width: 45px; height:48px"><img src="assets/icons/close-black.svg" style="position: absolute; right: 5; width: 30px; top: 10px;"></button>'+
            '</div>'+
            '<img src="'+data.image.original+'" alt="Course #1" style="min-height: 590px; max-width: 500px">'+
            '<div class="down-content" style="min-height: 210px; max-width: 500px">'+
            '<h2 style="font-weight: 900;color: white">'+data.name+'</h2>'+
            '<p style="font-size: 20px; color: white; margin-top: 20px;">'+data.summary+'</p>'+
            '</div>'+
            '</div>']).trigger('refresh.owl.carousel');

        },
    });
}

function delMovie(id) {
    $('.owl-carousel').trigger('remove.owl.carousel', [2]).trigger('refresh.owl.carousel');
}
