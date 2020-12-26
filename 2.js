function isiArray(baris, kolom){

    var arr = [];
  
    for(var i=0; i < baris; i++){
        arr.push([]);
        arr[i].push( new Array(kolom));
  
        for(var j=0; j < kolom; j++){
            arr[i][j] = random(2, 86);
        }
    }
  
  return arr;
}

function random(min, max){
    return Math.floor(Math.random() * (max - min) + min);
}

console.table(isiArray(3,5))