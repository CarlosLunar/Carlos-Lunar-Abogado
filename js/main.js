	// MODAL WHATSAPP
	const openModal = document.querySelector('.hero__cta');
	const modal = document.querySelector('.modal');
	const closeModal = document.querySelector('.modal__close');
	
	openModal.addEventListener('click', (e)=>{
		e.preventDefault();
		modal.classList.add('modal--show');
	});
	
	closeModal.addEventListener('click', (e)=>{
		e.preventDefault();
		modal.classList.remove('modal--show');
	});

		// MODAL REGISTRO DE CLIENTE 

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})


