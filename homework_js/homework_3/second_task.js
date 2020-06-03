function checkPalindrom (str) {
  return str == str.split('').reverse().join('');
};

string_to_array = function (str) {
     return str.trim().split(" ");
};

var str = 'There is a man, his name was Bob. His favorite group is absba';
var str = str.replace( /[,./]/gi , "");
var str = string_to_array(str);

for (var i = 0; i < str.length; i++) {
	if (checkPalindrom(str[i]) == true) {
		console.log(str[i]);
	}
}