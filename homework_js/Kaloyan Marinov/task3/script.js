$('#btn').on('click', function(event) {
    event.preventDefault();
    $('.error').remove();
    let city = $('#city').val(),
        cityCod = $('#city-code').val(),
        streetName = $('#street-name').val(),
        streetNum = $('#street-num').val(),
        flag = true,
        letters = /^[A-Za-z]+$/;



    if (city.trim().length < 3 || !isNaN(city.match(letters))) {

        $('#city')
            .before('<p class="error">Задалжително поле, над три знака и без цифри</p>');
        flag = false;
    }
    if (!cityCod.trim()) {
        $('#city-code')
            .before('<p class="error">Задалжително поле</p>');
        flag = false;

    }
    if (!streetName.trim()) {
        $('#street-name')
            .before('<p class="error">Задалжително поле</p>');
        flag = false;

    }
    if (!$.isNumeric(streetNum) && streetNum) {
        $('#street-name')
            .before('<p class="error">Полето трябва да съдържа само цифри</p>');
        flag = false;

    }
    if (flag) {
        alert('Успешно записани данни!')
    }



});