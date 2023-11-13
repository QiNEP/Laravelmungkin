function listMusic(id){
    var audio = new Audio('adu/click1.wav');
    audio.play();
    var doc = document.getElementById(id);
    if(doc.classList.contains("opacity-0")){
        doc.classList.remove("opacity-0")
        doc.classList.remove("hidden")
    }else{
        doc.classList.add("opacity-0")
        doc.classList.add("hidden")
    }
}