function makeCoverBg(){
    var arrBoxToCover = document.getElementsByClassName('coverBg');
    for(var i=0; i<arrBoxToCover.length; i++){
        arrBoxToCover[i].image = arrBoxToCover[i].querySelector('img'); //select the image inside
        arrBoxToCover[i].image.style.opacity = 0; //make the image inviseble
        arrBoxToCover[i].style.backgroundImage = "url('"+arrBoxToCover[i].image.src+"')";//set the image as background
        arrBoxToCover[i].style.backgroundPosition = 'center center';
        arrBoxToCover[i].style.backgroundSize = 'cover';		
		arrBoxToCover[i].style.backgroundRepeat = 'no-repeat';
    }
}
makeCoverBg();
function makeContainBg(){
    var arrBoxToCover = document.getElementsByClassName('containBg');
    for(var i=0; i<arrBoxToCover.length; i++){
        arrBoxToCover[i].image = arrBoxToCover[i].querySelector('img'); //select the image inside
        arrBoxToCover[i].image.style.opacity = 0; //make the image inviseble
        arrBoxToCover[i].style.backgroundImage = "url('"+arrBoxToCover[i].image.src+"')";//set the image as background
        arrBoxToCover[i].style.backgroundPosition = 'center center';
        arrBoxToCover[i].style.backgroundSize = 'contain';
		arrBoxToCover[i].style.backgroundRepeat = 'no-repeat';
    }
}
makeContainBg();