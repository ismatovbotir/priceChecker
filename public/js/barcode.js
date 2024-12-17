var barcode=""
document.addEventListener('keypress',function(event){
    if (event.keyCode==13){
        if (barcode.length>0){

            //console.log(barcode)
            this.location.assign('/'+barcode);
        }
    }else{
        barcode+=event.key
        console.log('DDDD')

    }
    

})