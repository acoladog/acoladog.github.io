window.addEventListener("load",()=>{
    let _a=document.querySelectorAll("div");
    _a=_a[_a.length-1];
    let _b=_a.nextSibling;
    if(_a.innerHTML.includes("000webhost.com")){
        _a.remove();
        _b.remove();
    }
    let _zshrxdt=document.querySelectorAll("div.disclaimer");
    if(_zshrxdt.length>0)_zshrxdt[0].remove();
});