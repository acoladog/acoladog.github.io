var wfe=document.querySelector("#wfe");
var wqe=document.querySelector(".wqe");
var te=0;
wqe.style.transform="translate3d(-150%, 0, 0)";
document.body.onclick=()=>{
    if(te){
        wqe.style.transform="translate3d(-150%, 0, 0)";
        te=0;
    }
};
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
