var  num = 4, arr = [], k = 0, count = 1;

for (var i = 0; i < num; i++) {
	arr[i] = [];
	for (var j = count; j < (num + count); j++) {
		arr[i].push(j);
	}
	count++;
}

console.log(arr)