function listToMatrix(list, elementsPerSubArray) {
    let matrix = [], i, k;

    for (i = 0, k = -1; i < list.length; i++) {
        if (i % elementsPerSubArray == 0) {
            k++;
            matrix[k] = [];

        }
     
        matrix[k].push(list[i]);
    }

    return matrix;
}

console.log(listToMatrix([1, 2, 3, 4, 4, 5, 6, 7, 8,], 3))