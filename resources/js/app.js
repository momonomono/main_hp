import './bootstrap';
import '../css/app.css';
import {createApp} from 'vue'
import Top from './Top/Top.vue'
import Test from './Test/Test.vue'
import Signin from './Signin/Signin.vue';

function checkQuerySelecter(name,tag){
    if(document.querySelector(tag)){
        createApp(name).mount(tag)
    }
}

checkQuerySelecter(Signin,"#signin");
checkQuerySelecter(Top,"#top");
checkQuerySelecter(Test,"#test");