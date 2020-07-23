$('#btn').on('click', function(event) {
    event.preventDefault();
    let jsonArr = $('#textarea').val();
    if (SyntaxError){
        console.log(1);
        $('#error').text("Please");

    }
    let objArr = JSON.parse(jsonArr);

    // if (!objArr.input.values || !objArr.output) {
    //     $('#error').text("Please")

    // }
    //console.log(JSON.parse(jsonArr));
    let arr = objArr.input.values
    var arrOutput = [];
    var len = arr.length;
    let sum = 0,
        sum2 = 0,
        count = 0;
    while (count < len) {
        if (arr[count] > 0) {
            for (var i = count; i < len; i++) {
                sum += arr[i];
                if (sum <= 0) {
                    break;
                }
            }
            if (sum > 0) {
                for (var j = 0; j < count; j++) {
                    sum2 += arr[j];
                    if ((sum + sum2) <= 0) {
                        break;
                    }
                }
            }

            if ((sum + sum2) > 0) {
                //console.log(count);
                arrOutput.push(count);
            }
            sum = 0;
            sum2 = 0;
        }
        count++;
    }
    //console.log(arrOutput);
    //console.log(objArr.output.length);
    $('#project').text('lenth of output: ' + arrOutput.length + " the values is/are: ")
    $.each(arrOutput, function(index, val) {
        $('#project').append(val + " ")
    });
     $('#test').text('lenth of output: ' + objArr.output.length + " the values is/are: ")
    $.each(objArr.output, function(index, val) {
        $('#test').append(val + " ")
    });

});