var barcode=""

console.log(document.windowState )
document.addEventListener('keypress',function(event){
    if (event.keyCode==13){
        if (barcode.length>0){

            //console.log(barcode)
            this.location.assign('/'+barcode);
            //this.location.assign
        }
    }else{
        barcode+=event.key
        //console.log('DDDD')

    }
    

})
