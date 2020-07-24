var jsonStr = '{ "name":"John", "age":30, "city:"New York"}'
//var json = JSON.parse(jsonStr);
try
{
   var json = JSON.parse(jsonStr);
   console.log(23);
   
}
catch(json)
{
   console.log("invalid json");
}
console.log(json);