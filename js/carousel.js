var galeryIndex = 1;

var galery = document.getElementById("carousel-galery");
var galeryImg = document.getElementsByClassName("galery-img");

function scrollGalery(n){
    galeryIndex += n;

    if (galeryIndex > galeryImg.length) {galeryIndex = 1} 
    if (galeryIndex < 1) {galeryIndex = galeryImg.length}
    
    galeryImg[galeryIndex - 1].scrollIntoView({
        behavior: 'smooth',
        block: 'center',
        inline: 'center'});
}