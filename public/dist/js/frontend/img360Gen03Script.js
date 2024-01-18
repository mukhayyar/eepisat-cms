// 360 Image
setInterval(img360, 100);
function img360() {
	var range = document.getElementById('range3').value;
	var gen3 = document.getElementById('img3');
	gen3.innerHTML = '<img src="https://ik.imagekit.io/eepisat/asset/gen3/' + range + '.webp">';
}
// Akhir 360 Image