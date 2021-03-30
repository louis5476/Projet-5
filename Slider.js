class Slider {
	constructor() {
		this.boutonGauche = document.getElementById("boutongauche");
		this.boutonDroite = document.getElementById("boutondroite");
		this.images = document.getElementById("images_slider");
		this.slideList = document.getElementsByClassName("photos_slider");
		this.legendList = document.getElementsByClassName("legende");
		
		this.currentSlide = 0;
		this.currentLegend = 0;
		this.clickEvent()
		
	};

	previousLegend(){ // Methode pour aller Ã  gauche
		this.legendList[this.currentLegend].classList.add('hidden')
		this.currentLegend--;
		if (this.currentLegend < 0)
		{
			this.currentLegend = this.legendList.length -1
		}
		this.legendList[this.currentLegend].classList.remove('hidden')
	};

	nextLegend(){ // Methode pour aller Ã  droite
		this.legendList[this.currentLegend].classList.add('hidden')
		this.currentLegend++;
		if (this.currentLegend >= this.legendList.length)
		{
			this.currentLegend = 0
		}
		this.legendList[this.currentLegend].classList.remove('hidden')
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
		this.previousLegend();
		} else if (e.key === "ArrowRight") {
		this.nextSlide();
		this.nextLegend();
		}
	};

	clickEvent() { // Methode pour tous les evenements possibles (2 boutons + les deux touches de clavier)
		this.boutonDroite.addEventListener('click', () => this.nextSlide());
        this.boutonGauche.addEventListener('click', () => this.previousSlide());
		this.boutonDroite.addEventListener('click', () => this.nextLegend());
        this.boutonGauche.addEventListener('click', () => this.previousLegend());
		document.addEventListener("keydown", this.touchSlide.bind(this));
	};
};