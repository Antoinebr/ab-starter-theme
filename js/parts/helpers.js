
// Transforme une date au format 20193012 (pour le 30 decembre 2019) en string -> "30/12/2019"
function formateDate(dateSTRING){
  var year = dateSTRING.slice(0,4);
  var month = dateSTRING.slice(4,6);
  var day = dateSTRING.slice(6,8);
  var dateComplete = day+'/'+month+'/'+year;
  return dateComplete;
}


function formateDateVirgule(dateSTRING){
  var year = dateSTRING.slice(0,4);
  var month = dateSTRING.slice(4,6);
  var day = dateSTRING.slice(6,8);
  var dateComplete = year+','+month+','+day;
  return dateComplete;
}


/**
* [Retourne l'index d'un objet à partir d'une clé / valeur]
* @param  {[object]} data [l'objet dans lequel on cherche]
* @param  {[string]} property [la Clé que l'on cherche]
* @param  {[type]} value [la valeur de la clé cherché]
* @return {[int]} [Retourne l'index de l'objet]
*/
function findIndexInData(data, property, value) {
  for(var i = 0, l = data.length ; i < l ; i++) {
    if(data[i][property] === value) {
      return i;
    }
  }
  return -1;
}
