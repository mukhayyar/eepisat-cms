const header = document.querySelectorAll(".header");
const listImg = document.querySelectorAll(".listImg");

header.forEach((btn) => {
	btn.addEventListener("click", (e) => {
		listImg.forEach((acc) => {
			if(e.target.nextElementSibling !== acc && acc.classList.contains("active")) {
				acc.classList.remove("active");
				header.forEach((btn) => btn.classList.remove("active"));
			}
		});

		const panel = btn.nextElementSibling;
		panel.classList.toggle("active");
		btn.classList.toggle("active");
	});
});