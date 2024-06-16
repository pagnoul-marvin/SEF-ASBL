import {settings} from "./settings.js";

const sef = {

    maxPourcentage: -400,
    minPourcentage: 0,
    pourcentage: 0,

    init() {
        this.addEventListeners();
        this.formDivElementsDisappearAfter10seconds();
        this.noJs();
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

    noJs() {
        settings.noJsBannerElement.classList.add(settings.noDisplayClass);
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
    },

    formDivElementsDisappearAfter10seconds() {
        setTimeout(function () {

            if (settings.validateDiv) {
                settings.validateDiv.classList.add(settings.translatedClass);
            }
            if (settings.notValidateDiv) {
                settings.notValidateDiv.classList.add(settings.translatedClass);
            }
        }, settings.timeBeforeDivElementsDisappear);
    }
}

sef.init();