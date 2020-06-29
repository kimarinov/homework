var num = [3, 4, 9, 2, 3, 5, 7, 8, 1, 6]; // Magic square
// var num = [4, 5, 15, 16, 2, 10, 8, 7, 13, 6, 12, 11, 9, 17, 3, 4, 14]; // Magic square
// var num = [2, 1, 8, 0, 2]; // Not a magic square

function isMagicSquare(num) {
    let Diagonal1 = 0,
        Diagonal2 = 0,
        n = num[0],
        sumRows = [],
        sumCols = [];
    let ind = 0;
    for (let i = 0; i <= (2 * n) + 1; i += n) {
        for (let x = i + 1; x <= i + n; x++) {
            ind += num[x];
        }
        sumRows.push(ind);
        ind = 0;
    }
    let indNum = 0;
    for (let l = 1; l <= n; l++) {
        indNum = l;
        for (let z = 1; z <= n; z++) {
            ind += num[indNum];
            indNum += n;
        }
        sumCols.push(ind);
        ind = 0;
    }

    index = 1 + parseInt(n);
    Diagonal1 = num[1];
    while (index < (parseInt(n) * parseInt(n))) {
        Diagonal1 += num[1 + index];
        index += n + 1;
    }

    for (let k = 1; k <= n; k++) {
        for (let j = 0; j < n; j++) {
            Diagonal2 += num[k * n - j];
        }
    }
    for (let p = 0; p < sumRows.length; p++) {
        if (p < (sumRows.length) - 1) {
            if (sumCols[p] != sumCols[p + 1]) {
                return false;

            }
            if (sumRows[p] != sumRows[p + 1]) {
                return false;

            }
        } else if (p >= (sumRows.length) - 1) {
            if (sumCols[p] != sumCols[0]) {
                return false;

            }
            if (sumRows[p] != sumRows[0]) {
                return false;

            }
        }
    }

    if (sumCols[0] != sumRows[0] && sumCols[0] != Diagonal1 && sumCols[0] != Diagonal2) {
        return false;

    }

    return true;
}

// console.log(isMagicSquare(num));

if (isMagicSquare(num)) {
	console.log('This is a magic square');
} else {
	console.log('This is not a magic square');
}