function uniqueNums(arr) {
    if (arr.length > 0) {
        let count = 1;

        for (var i = 0; i < arr.length; i++) {
            if (!isNaN(arr[i])) {
                if (arr[i + 1] > arr[i]) {
                    if (arr[i + 1] < arr[i + 2]) {
                        count++
                    }
                }

            } else {
                return "Array must include only numbers!";
            }
        }
        return count;


    } else {
        return 'Enter non empty array!';
    }
}

//const str = [-1, 0, 1, 2, 1, 4, 10, 9, 15, 1]
//const str = [0]

//const str = ["Fefse", "fee"]
const str = ['3', 0, '0', 1, 3, 4, '0'];

console.log(uniqueNums(str));