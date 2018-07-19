var output = []; //sortie

for (var iter = 1; iter <= 100; iter++) {
   
    if(iter % 3 !=0 && iter % 5 !=0){
        output.push(iter);
    }
    else{
    if(iter % 3 ==0 && iter % 5 ==0){
        output.push(' Babasport');
        }
    //console.log('Itération n°' + iter);
    if( iter % 3 == 0 && iter % 5 !=0){
        output.push(' Baba');
    }
    if(iter % 3 !=0 && iter % 5 ==0){
        output.push(' Sport');
    }
}
}
for(var iter = 0; iter<100; iter++){
    console.log(output[iter]);
}
