Slider = function(el){
    //object components and main settings
    
    var slider=this;
    var sliderInterval = 8000; //time between changes in miliseconds
    slider.element = el;
    slider.slides = slider.element.getElementsByClassName("slides");//here we get all slides inside our slider as an array
    //methods
    slider.setSlides = function(){
        //set all defaut for each slide...
        for(var i=0; i<slider.slides.length; i++){
            
            //creat a var to have some reference about each slide
            slider.slides[i].position = (Math.floor(slider.slides.length/2)-i); //this formula allow me to be sure that the images as equally distributed as 2, 1, 0, -1, -2....for example.. 
             slider.updateSlide(slider.slides[i],slider.slides[i].position);//to position and resize all slides, create a method because you will need to do it every time that you move the slides
        }
    };
    slider.updateSlide = function(slideElement,slidePosition, slideDirection){
    //here we update the 'infos' about each slide as size, position, hierarchy, zindex, angle....
        // hierarchy will help to have less code using the var position that I create before I can say if the slide is near or far from the center...but somtimes I dont want negative numbers... position 2 and -2 have de same hierarchy so we use their absolute value with "Math.abs(value to convert)"
        var slideHierarchy = Math.abs(slidePosition);
        slideElement.style.zIndex = -1*(slideHierarchy);
        
        //here we will set the Xposition for the slides on the left
        if(slidePosition>0){
            slideElement.style.left = (-100*slideHierarchy)+'%';
        }
        //here we will set the Xposition for the slides on the right
        if(slidePosition<0){
            slideElement.style.left = 100*slideHierarchy+'%';
        }
        //here we will set the Xposition for the slides on center
        if(slidePosition==0){
            slideElement.style.left =0;
        }
    };
    slider.changeSlide = function(direction){
        //here we will set a direction
        if(direction == "next" || !direction){
            direction = 1;
        }
        if(direction == "previous"){
            direction = -1;
        }
        
        //now we need to change the position of all slides inside a for loop 
        for(var i=0; i<slider.slides.length; i++){
            //create a var to reffer to each slide just to save time and typing less
            var thisSlide = slider.slides[i];
            //my max position is the last slide on the right
            var maxPosition = Math.floor(slider.slides.length/2)-(slider.slides.length-1);
            //min position is the last slider on the left
            var minPosition = Math.floor(slider.slides.length/2);
            //now I change the position for eache slide according to my direction
            var newPosition = thisSlide.position + direction;
            
            //if the slide is the last on the right...go to left...
            if(newPosition < maxPosition){
                slider.slides[i].style.opacity = 0;
                newPosition = minPosition;
            }
            //if the slide is the last on the left...go to right...
            else if(newPosition > minPosition){
                slider.slides[i].style.opacity = 0;
                newPosition = maxPosition;
            }
            else{
                slider.slides[i].style.opacity = 1;
            }
            //now I update the position
           thisSlide.position = newPosition;
           //now I just want to upload these changes
            slider.updateSlide(thisSlide,thisSlide.position);
        }
    };
    //this method starts my slider
    slider.startSlider = function(){
        slider.changeSlide('next');
        setSliderInterval = setInterval(slider.changeSlide, sliderInterval);
    };
    //this method stops my slider
    slider.stopSlider = function(){
        clearInterval(setSliderInterval);
    }
    
    //events
    //chenge slide when one of the arrows are clicked
    const arrArrows = [...slider.element.getElementsByClassName('changeSlide')]
    arrArrows.forEach((value) => {
        value.addEventListener('click', function(){
            if(this.classList.contains('next-slide')){
                slider.stopSlider();
                slider.changeSlide('next');
            }
            else if(this.classList.contains('prev-slide')){               
                slider.stopSlider();
                slider.changeSlide('prev');
            }
        });
    });
    //stop my slider when it is hovered
    slider.element.addEventListener("mouseover", function(){
        if(typeof restartSlider !== 'undefined'){
            clearTimeout(restartSlider);
        }
        slider.stopSlider();
    });
    //restart my slider when mouse leave
    slider.element.addEventListener("mouseleave", function(){
        restartSlider = setTimeout(slider.startSlider, 1000);
    });
}

var sliderElement = document.getElementsByClassName("testimonial-slider")[0];

//creating my object
var oSlider = new Slider(sliderElement);

//calling my methods to set and start my slider asa my script is loaded.
oSlider.setSlides();
oSlider.startSlider();