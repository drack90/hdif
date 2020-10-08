//минуты=[60*(десятичные градусы-градусы)]


let coordinate = {
	lat: '63.421323',
  long: '78.524771'
};

//выделяем дробную и целую часть (DD целая)
let latDD = coordinate.lat |0;
let latTT = coordinate.lat - latDD;

let latGraduse = coordinate.lat | 0;

let latMin = (latTT * 60);
latMin = String(latMin)
latMin = latMin.substring(0, 2);


let latSecond = latGraduse * 3600 - latMin * 60;

let longDD = coordinate.long |0;
let longTT = coordinate.long - longDD;


//если минуты меньше 100 добавляем в начало ноль. что бы 
//отображалось согласно ФАП
let longGraduse = coordinate.long | 0;
if (longGraduse < 100){
longGraduse = "0" + longGraduse
}

let longMinut = (longTT * 60) | 0;
longMinut = String(longMinut);
//longMinut = String(longMinut.substring(0, 2));

let DMGCoordinate = latGraduse + latMin + "N" + longGraduse + longMinut + "E";

console.log(DMGCoordinate);
