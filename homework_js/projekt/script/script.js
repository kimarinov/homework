$('#btn').on('click', function(event) {
    event.preventDefault();
    let jsonArr = $('#textarea').val()
    let objArr = JSON.parse(jsonArr);
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
    console.log(arrOutput);
});