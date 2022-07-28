$('.count').click(function () {
    event.preventDefault()
    let number1 = $('#number1').val();
    let number2 = $('#number2').val();
    let operation = $('option:selected').val();
    $.ajax({
        url: "calculate.php",
        method: 'post',
        data: {
            number1: number1,
            number2: number2,
            operation: operation,
        }
    }).done(function(data) {
            $('.result').append('<p>' + data + '</p>');
    })
});