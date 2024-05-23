import {settings} from "./settings.js";

const sef = {

    init() {
        this.addEventListeners();
    },

    addEventListeners() {
        window.addEventListener('scroll', ()=>{
            this.changeWidthOfProgressBarElement();
        });
    },

    changeWidthOfProgressBarElement() {
        const winScroll = document.documentElement.scrollTop;
        const documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / documentHeight) * settings.multiplicationScrolled;
        settings.progressBarElement.style.width = `${scrolled}%`;
    }
}

sef.init();