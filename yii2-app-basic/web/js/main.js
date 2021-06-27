/* function del(){
    let id = $(this).data('id');
    $.ajax({
        data: {id: id},
        url: 'material/delete',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка!')
        },
        error: function(){
            alert('Неверно указан путь!');
        }
    });

} */
$('.del-item').on('click', function () {
    let id = $(this).data('id');
    $.ajax({
        data: {id: id},
        url: 'material/delete',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка!')
        },
        error: function(){
            alert('Неверно указан путь!');
        }
    });
});