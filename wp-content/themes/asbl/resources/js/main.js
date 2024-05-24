import {settings} from "./settings.js";

const sef = {

    maxPourcentage: -400,
    minPourcentage: 0,
    pourcentage: 0,

    init() {
        this.addEventListeners();
    },

    addEventListeners() {
        window.addEventListener('scroll', () => {
            this.changeWidthOfProgressBarElement();
        });

        settings.buttonElements.forEach(button => {
            button.addEventListener('click', (e) => {
                this.changeImageInSliderOnClick(e);
            });
        });
    },

    changeWidthOfProgressBarElement() {
        const winScroll = document.documentElement.scrollTop;
        const documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / documentHeight) * settings.multiplicationScrolled;
        settings.progressBarElement.style.width = `${scrolled}%`;
    },

    changeImageInSliderOnClick(e) {
        if (e.currentTarget.id === settings.afterID) {
            if (this.pourcentage === this.maxPourcentage) {
                this.pourcentage = this.minPourcentage;
            } else {
                this.pourcentage -= settings.leftPourcentage;
            }
        } else if (e.currentTarget.id === settings.beforeID) {
            if (this.pourcentage === this.minPourcentage) {
                this.pourcentage = this.maxPourcentage;
            } else {
                this.pourcentage += settings.leftPourcentage;
            }
        }

        settings.sliderElement.style.left = `${this.pourcentage}%`;
    }
}

sef.init();