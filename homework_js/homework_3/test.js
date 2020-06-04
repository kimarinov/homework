var hex = 'aa'

function HexToBin(str){
	var hex = str;
	console.log((parseInt(hex, 16).toString(2)).padStart(8, '0'))
	return str;
}

HexToBin('aa')
HexToBin('AA')
HexToBin('234')
HexToBin('F')
