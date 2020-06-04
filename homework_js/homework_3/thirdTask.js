var arr = [7, 1, 2, -3, 4, 4,5,6, 0, 1,], count = 1, count2 = 1;
var len = arr.length;

for (var i = 0; i < len; i++) {
	if (arr[i] > arr[i + 1]) {
		count2++
		if (arr[i] < arr[i + 1 ] ) {
			count++
		}
	}
}
console.log(count2)
console.log(count)