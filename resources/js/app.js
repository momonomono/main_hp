import './bootstrap';
import '../css/app.css';
import {createApp} from 'vue'
import Top from './Top/Top.vue'
import Test from './Test/Test.vue'

function checkQuerySelecter(name,tag){
    if(document.querySelector(tag)){
        createApp(name).mount(tag)
    }
}

checkQuerySelecter(Top,"#top");
// checkQuerySelecter(Test,"#test");

class Animal {
    constructor(name,img){
        this.name = name;
        this.img = img;
    }
}

const inu = new Animal("犬","img/inu.webp");
const neko = new Animal("猫","img/neko.webp");

document.querySelectorAll(".p-text__slider-item").forEach((item)=>{
    item.addEventListener("click",function(e){
        const image = document.querySelector(".p-image__slider");
        
        if(e.target.innerText === "犬"){
            image.src = inu.img;
        }else{
            image.src = neko.img;
        }
    });
});

// document.querySelectorAll(".p-image__slideshow").forEach((item)=>{
//     item.addEventListener("click",function(e){
//         
//         const container = document.querySelector('.p-gird__slideshow-container');
//         const child_count = container.childElementCount;
//         const child_width = container.firstElementChild.getBoundingClientRect().width;
//         const max_width = child_count * child_width;

//         let current_position = currentX;
//         console.log(child_width);
        
//         if(icon_name == "left"){
//             current_position += child_width;
//             if(current_position > 0){
//                 current_position = 0;
//             }
//         }else if(icon_name == "right"){
//             current_position -= child_width; 
//         }
    
//         slideshow.style.transition = "all 1s";
//         slideshow.style.transform = `translateX(${current_position}px)`;
//     });
// });

document.querySelectorAll('.p-gird__slideshow-item').forEach((target)=>{
    target.addEventListener('click',(e)=>{
        const slideshow = document.querySelector('#js-container');
        let currentX = getCurrentTranslateX(slideshow);
        console.log(currentX);


    });
});

function checkIconName(e){
    const icon_name = e.target.id;

}

function getContainerWidth(){
    const 
}

function getCurrentTranslateX(slideshow){
    if(!slideshow){
        return;
    }

    const currentTransform = window.getComputedStyle(slideshow).transform;
    let currentX = 0;
    
    if(currentTransform == "none"){
        let matrix = new DOMMatrix(currentTransform);
        currentX = matrix.m41;
    }
    
    return currentX;
}

