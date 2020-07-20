var arr = [-1, 4, -1, 3, -2, 2, 2, -3, 1, 3, -2];
var len = arr.length;
const sum = 0,
    sum2 = 0,
    count = 0;


for (var i = 0; i < len; i++) {
    sum = 0;
    sum2 = 0;
    sum3 = 0;
    for (var j = i; j < len; j++) {
        sum = arr[j] + sum;

    }
    for (var b = 0; b < i; b++) {
        sum2 = arr[b] + sum2;
    }
    //console.log(sum + " " + i);
    //console.log(sum2 + " " + i )
    sum3 = sum + sum2;
    console.log(sum2);
    //console.log(sum3 + " " + i);
}