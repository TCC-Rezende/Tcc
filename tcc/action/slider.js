function slide(){

    let count = 1
    document.getElementById("radio1").checked=true
    setInterval(function(){
        nextImage()
    }, 10000)
    function nextImage(){
        count += 1 
        if(count>3){
            count=1
        }
        document.getElementById("radio"+count).checked=true
    }
}
slide()