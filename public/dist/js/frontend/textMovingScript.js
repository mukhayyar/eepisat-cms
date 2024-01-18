let textGen = document.querySelector('.textMove');
let textSlogan = document.querySelector('.textSlogan');
let textGenMobile = document.querySelector('.textMoveMobile');
let textSloganMobile = document.querySelector('.textSloganMobile');

window.onscroll = () => {
	let text1 = window.scrollY - 1340;
	let text2 = window.scrollY - 640;
	let text3 = window.scrollY - 650;
	let text4 = window.scrollY - 1110;
	textGen.style.left = `${text1}px`
	textSlogan.style.left = `${text2}px`
	textGenMobile.style.left = `${text3}px`
	textSloganMobile.style.left = `${text4}px`
}