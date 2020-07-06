var arr =  [-1, 4, -1, 3, -2, 2, 2, -3, 1, 3, -2];
var len = arr.length, sum = 0, count = 0;


for (var i = 0; i < len; i++) {
	sum = arr[i] + arr[i+1];
	count++;
	if (sum == 0) { break}

}
console.log(sum + " " +count)