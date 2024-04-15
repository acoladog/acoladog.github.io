var wfe=document.querySelector("#wfe");
var wqe=document.querySelector(".wqe");
var te=0;
wqe.style.transform="translate3d(-150%, 0, 0)";
document.addEventListener('click', function() {
    if (te) {
        const wqe = document.querySelector('.wqe'); // 請替換'.your-class-name'為你要操作的元素的選擇器
        wqe.style.transform = "translate3d(-150%, 0, 0)";
        te = 0;
    }
});
wfe.onclick=(e)=>{
    e.stopPropagation();
    if(te){
        wqe.style.transform="translate3d(-150%, 0, 0)";
    }
    else{
        wqe.style.transform="translate3d(0, 0, 0)";
    }
    te^=1;
};
