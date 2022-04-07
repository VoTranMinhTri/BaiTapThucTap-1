//box scroll
var sliderStageBox = document.querySelector("[data-box-id='boxscroll']");
var sliderItemsBox = sliderStageBox.querySelectorAll(".owl-item");
const next = document.querySelector(".next-btn");
const prev = document.querySelector(".previous-btn");
var sliderItemBoxWidth = sliderItemsBox[0].offsetWidth;
var slidersBoxLength = sliderItemsBox.length;
var X = 0;
var i = 0;
if(slidersBoxLength <= 4){
    next.className += " disabled";
}
next.addEventListener("click", function () {
    changeSlideBox(1);
});
prev.addEventListener("click", function () {
    changeSlideBox(-1);
});



function changeSlideBox(direction) {
    if (direction === 1) {
        X = X - sliderItemBoxWidth - 20;
        sliderStageBox.style = 'transform: translate3d(' + X + 'px, 0px, 0px); transition: all 1.25s ease 0s;';
        i++;
        if (i == slidersBoxLength - 4) {
            next.className += " disabled";
            prev.className = prev.className.replace(" disabled", "");
        }
    } else if (direction === -1) {
        X = X + sliderItemBoxWidth + 20;
        sliderStageBox.style = 'transform: translate3d(' + X + 'px, 0px, 0px); transition: all 1.25s ease 0s;';
        i--;
        if (i == 0) {
            prev.className += " disabled";
            next.className = next.className.replace(" disabled", "");
        }
    }
}
