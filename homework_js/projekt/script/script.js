let erroMsg = "Please fill corrct JSON input: {   'input': {'values': [value1, value2, value3, ...},'output': ['value1, value2, ...']";

$('#btn').on('click', function(event) {
    event.preventDefault();
    //delete text from <p>
    $('#error').text(null);
    $('#project p:nth-child(2)').text(null)
    $('#test p:nth-child(2)').text(null)

    let jsonArr = $('#textarea').val(),
        flag = true;

    //check for valid Json input
    try {
        let objArr = JSON.parse(jsonArr)
    } catch (objArr) {
        $('#error').text(erroMsg);
        flag = false;
    }
    let objArr = JSON.parse(jsonArr)

    //check for json array with input,values and output key
    if (!objArr.input.values || !objArr.input || !objArr || !objArr.output) {
        $('#error').text(erroMsg);
        flag = false;
    }

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

                arrOutput.push(count);
            }
            sum = 0;
            sum2 = 0;
        }
        count++;
    }

    if (flag = true) {
        $('#project p:nth-child(2)').text('lenth of output: ' + arrOutput.length + " the values is/are: ")
        $.each(arrOutput, function(index, val) {
            $('#project p:nth-child(2)').append(val + " ")
        });
        $('#test p:nth-child(2)').text('lenth of output: ' + objArr.output.length + " the values is/are: ")
        $.each(objArr.output, function(index, val) {
            $('#test p:nth-child(2)').append(val + " ")
        });

    }


});