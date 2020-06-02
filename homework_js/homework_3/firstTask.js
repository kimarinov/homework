var arr = [3.00, 6.00],min = arr[0], max = arr[0], sum = 0, avg=0;
var INTarr = arr.map(Number, 0);
var len = arr.length;
for (var i = arr.length - 1; i >= 0; i--) {
	if (arr[i] < min) {
		min = arr[i];
	}if (arr[i] > max){
		max = arr[i]
	}
	sum +=arr[i];
	avg++;
}

console.log(min);
console.log(max);
console.log(sum);
console.log(sum/avg);