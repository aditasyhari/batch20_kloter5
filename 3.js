function horizontal(angka) {
    var stars = "";
    for (var i = 0; i < angka; i++) {
        stars = stars + " *";
    }

    return stars;
}
  
function cetakPola(angka) {
    var stars = "";
    var arr = [];

    for(var a = 0; a < angka * 2; a++){
        if(a % 2 != 0){
            arr.push([a]);
        }
    }

    for (var i = angka; i > 0; i--) {
        stars = stars + horizontal(arr[i-1]) + "\n";
    }
    
    return stars;
}
  
console.log(cetakPola(7));