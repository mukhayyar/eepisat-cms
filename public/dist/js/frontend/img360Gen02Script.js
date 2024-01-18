// 360 Image
setInterval(img360, 100);
function img360() {
	var range = document.getElementById('range2').value;
	var gen2 = document.getElementById('img2');
	gen2.innerHTML = '<img src="https://ik.imagekit.io/eepisat/asset/gen2/' + range + '.webp">';
}
// Akhir 360 Image