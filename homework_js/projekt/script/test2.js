//var arr = [-1, 4, -1, 3, -2, 2, 2, -3, 1, 3, -2];
var arr = [-2, -1, -7, -10, 3, -3, -6, 13, -10, -6, -10, 15, -5, 14, 9, 3, 8, 15, -8, 2, -3, -8, -7, 9, 7, 1, -9, 3, -1, 3, 10, 14, -8, 15, -4, 14, 9, 6, 5, 12, 9, 4, 6, -10, 8, 0, 10, -9, 4, 2, 0, 8, 8, -6, 15, -3, 13, 8, -4, 6, -3, 14, 4, 13, -9, -4, 12, 9, -2, -10, 7, 8, -1, -1, -3, 10, 9, -3, -5, -1, 10, 8, -2, -8, 11, -7, -9, -7, -9, 8, -1, 10, 1, 7, -7, 13, 2, 0, 4, 14];
var len = arr.length;
let sum = 0,
    sum2 = 0,
    count = 0,
    indexEl = 0;



while (count < len) {

    if (arr[count] > 0) {
        for (var i = count; i < len; i++) {
           sum += arr[i];
           if (sum <= 0) {
           	break;
           }
        }
        for (var i = 0; i < count; i++) {
           sum2 += arr[i];
            if ((sum + sum2) <= 0 ) {
               //	sum2 = 0;
               	break;
            }
           // console.log(sum2);
            
        }
       // console.log((sum + sum2) + " " + count);
       // console.log(sum + " " + sum2 + " count=" + count);
       if ((sum + sum2) > 0) {
       	console.log(count);
       }
        sum = 0;
        sum2 = 0;
    }
    count++;
}
// $each(function(index, el) {
// 	console.log(arr[index]);
// });
// $.each(arr, function(index, val) {
// 	 console.log(index);
// });
//console.log(sum);