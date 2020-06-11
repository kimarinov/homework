function ConvertToMatrix(n,arr) {
	let newArr = [], k = -1;
	for (var i = 0; i < arr.length ; i++) {
	if (i % n == 0) {
		k++;
		newArr[k]= []
	}	
	newArr[k].push(arr[i]);
 	}	
 	return newArr;
}

var n = 3;
newArr = ConvertToMatrix(3,[4, 9, 2, 3, 5, 7, 8, 1, 6]);

// for (var i = 0; i < n; i++) {
// 	while(i < n){
// 		if (newArr[i]) {}

// 	}
// }

console.log(newArr[1])