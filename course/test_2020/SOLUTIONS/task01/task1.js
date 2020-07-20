function uniqueNums(arr) {
    if (arr.length > 0) {
        let count = 1;

        for (var i = 0; i < arr.length; i++) {
            if (isNaN(arr[i])) {
                return "Array must include only numbers!";
            } else {
            	if (arr[i] < arr[i + 1]) {
            		count++
            	}
            	return count;

            }
        }


    } else {
        return 'Enter non empty array!';
    }
}

const str = [-1, 0, 1, 2, 1, 4, 10, 9, 15, 1]

//const str = '-1 0 1 2 1 4 10 9 15 1'
//const str = '-1,4,4,3,2';
//const str = '3, ‘pokughbv’, ‘1’]';
//const str = '3, true';
console.log(uniqueNums(str));