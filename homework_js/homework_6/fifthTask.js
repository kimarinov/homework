function listToMatrix(list, elementsPerSubArray) {
    let matrix = [], i, k;

    for (i = 0, k = -1; i < list.length; i++) {
        if (i % elementsPerSubArray == 0) {
            k++;
            matrix[k] = [];
             //console.log(k)
            // console.log(i)
            // console.log(i % elementsPerSubArray)
            // console.log(matrix)
        }
       // console.log(list[i])
        matrix[k].push(list[i]);
    }

    return matrix;
}

console.log(listToMatrix([1, 2, 3, 4, 4, 5, 6, 7, 8,], 3))