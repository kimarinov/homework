let erroMsg = "Please fill corrct JSON input: {   'input': {'values': [value1, value2, value3, ...},'output': ['value1, value2, ...']";

$('#btn').on('click', function(event) {
    event.preventDefault();

    //remove <p> elements
    $('#error').remove();
    $('#project p:nth-child(2)').remove();
    $('#test p:nth-child(2)').remove();

    let jsonArr = $('#textarea').val(),
        flag = true;
    //check for valid Json input
    try {
        let objArr = JSON.parse(jsonArr);
    } catch (objArr) {
        $('#btn').after('<p id="error">' +erroMsg+'</p>');
        flag = false;
    }
    let objArr = JSON.parse(jsonArr);

    //check for json array with input,values and output key
    if (!objArr.input || !objArr.input.values || !objArr.output) {
        $('#btn').after('<p id="error">' +erroMsg+'</p>');
        flag = false;
    }

    let arr = objArr.input.values;
    var arrOutput = [];
    var len = arr.length;
    let sum = 0,
        sum2 = 0,
        count = 0;

    while (count < len) {
        //calculations only for positive elements
        if (arr[count] > 0) {
            //sum from N-th elements to the end of the array
            for (var i = count; i < len; i++) {
                sum += arr[i];
                // if sum of array <= 0 the game is over, go in next cycle
                if (sum <= 0) {
                    break;
                }
            }
            //check for game over
            if (sum > 0) {
                //sum from 0-th element to N-th element
                for (var i = 0; i < count; i++) {
                    sum2 += arr[i];
                    //if sum of first cycle + sum from second cycle
                    // <= 0, the game is over, go in next cycle
                    if ((sum + sum2) <= 0) {
                        break;
                    }
                }
            }
            //if sum of two cicles is above 0 push the number in arrOutput array 
            if ((sum + sum2) > 0) {
                arrOutput.push(count);
            }
            //reset sum for two cycles
            sum = 0;
            sum2 = 0;
        }
        count++;
    }
    //if have valid input print arrOutput and output from JSON input in new <p> elements
    if (flag = true) {

        $('#project p').after('<p>Lenth of output is: ' + objArr.output.length + ' The values is/are:  </p>');
        $.each(arrOutput, function(index, val) {
            $('#project p:nth-child(2)').append(val + " ");
        });
        $('#test p').after('<p>Lenth of output is: ' + objArr.output.length + ' The values is/are:  </p>');
        $.each(arrOutput, function(index, val) {
            $('#test p:nth-child(2)').append(val + " ");
        });
    }
});