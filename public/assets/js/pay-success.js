var sliderStageBox = document.querySelector("[data-box-id='boxscroll']");
var sliderItemsBox = sliderStageBox.querySelectorAll(".owl-item-ve");
const next = document.querySelector(".next-btn");
const prev = document.querySelector(".previous-btn");
var sliderItemBoxWidth = sliderItemsBox[0].offsetWidth;
var slidersBoxLength = sliderItemsBox.length;
var trang = document.querySelector('.text-trang');
var X = 0;
var i = 0;
var sotrang =1;
var soluongtrang = Math.ceil(slidersBoxLength/4);
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
        X = (X - sliderItemBoxWidth - 20)*4;
        sliderStageBox.style = 'transform: translate3d(' + X + 'px, 0px, 0px); transition: all 1.25s ease 0s;';
        i++;
        if (i == slidersBoxLength - 4) {
            next.className += " disabled";
            prev.className = prev.className.replace(" disabled", "");
        }
        sotrang+=1;
        trang.innerHTML = "Trang "+sotrang+"/"+soluongtrang;
    } else if (direction === -1) {
        X = X + (sliderItemBoxWidth + 20)*4;
        sliderStageBox.style = 'transform: translate3d(' + X + 'px, 0px, 0px); transition: all 1.25s ease 0s;';
        i--;
        if (i == 0) {
            prev.className += " disabled";
            next.className = next.className.replace(" disabled", "");
        }
        sotrang-=1;
        trang.innerHTML = "Trang "+sotrang+"/"+soluongtrang;
    }
}
