// $(document).ready(function () {
//     var modal = document.getElementById("myModal");
//     var img = document.getElementById("myImage");
//     var modalImg = document.getElementById("img01");
//     var span = document.getElementsByClassName("close")[0];
//     var zoomInButton = document.getElementById("zoomIn");
//     var zoomOutButton = document.getElementById("zoomOut");

//     $("#openModal").click(function () {
//         modal.style.display = "block";
//         modalImg.src = img.src;
//         return false;
//     });

//     span.onclick = function () {
//         modal.style.display = "none";
//         modalImg.style.transform = "scale(1)"; // Reset the modal size
//     }

//     var zoom = 1;
//     zoomInButton.addEventListener('click', function (event) {
//         zoom += 0.1;
//         modalImg.style.transform = `scale(${zoom})`;
//     });

//     zoomOutButton.addEventListener('click', function (event) {
//         zoom -= 0.1;
//         modalImg.style.transform = `scale(${zoom})`;
//     });

//     modalImg.addEventListener('click', function (event) {
//         zoom += 0.1;
//         modalImg.style.transform = `scale(${zoom})`;
//     });

//     modalImg.addEventListener('contextmenu', function (event) {
//         event.preventDefault();
//         zoom -= 0.1;
//         modalImg.style.transform = `scale(${zoom})`;
//     });

//     window.onclick = function (event) {
//         if (event.target == modal) {
//             modal.style.display = "none";
//             modalImg.style.transform = "scale(1)"; // Reset the modal size
//         }
//     }
// });