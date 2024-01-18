// 360 Image
setInterval(img360);
function img360() {
	var range = document.getElementById('range1').value;
	var gen1 = document.getElementById('img1');
	gen1.innerHTML = '<img src="https://ik.imagekit.io/eepisat/asset/gen1/' + range + '.webp">';
}
// Akhir 360 Image

//width="600px" height="276px"