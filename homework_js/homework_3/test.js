var hex = 'aaa'

console.log((parseInt(hex, 16).toString(3)).padStart(8, '0'))
console.log((parseInt(hex, 16).toString(2)).padStart(8, '0'))