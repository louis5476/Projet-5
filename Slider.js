class Slider {
	constructor() {
		this.boutonGauche = document.getElementById("boutongauche");
		this.boutonDroite = document.getElementById("boutondroite");
		this.images = document.getElementById("images_slider");
		this.slideList = document.getElementsByClassName("photos_slider");
		
		this.currentSlide = 0;
		this.clickEvent()
		
	};

	previousSlide(){ // Methode pour aller Ã  gauche
		this.slideList[this.currentSlide].classList.add('hidden')
		this.currentSlide--;
		if (this.currentSlide < 0)
		{
			this.currentSlide = this.slideList.length -1
		}
		this.slideList[this.currentSlide].classList.remove('hidden')
	};

	nextSlide(){ // Methode pour aller Ã  droite
		this.slideList[this.currentSlide].classList.add('hidden')
		this.currentSlide++;
		if (this.currentSlide >= this.slideList.length)
		{
			this.currentSlide = 0
		}
		this.slideList[this.currentSlide].classList.remove('hidden')
	};

	touchSlide(e) {  // Methode qui traite des touches clavier
		if (e.key === "ArrowLeft") {
		this.previousSlide();
		} else if (e.key === "ArrowRight") {
		this.nextSlide();
		}
	};

	clickEvent() { // Methode pour tous les evenements possibles (2 boutons + les deux touches de clavier)
		this.boutonDroite.addEventListener('click', () => this.nextSlide());
        this.boutonGauche.addEventListener('click', () => this.previousSlide());
		document.addEventListener("keydown", this.touchSlide.bind(this));
	};
};