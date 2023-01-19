function showChief() {
    const org = document.getElementsByClassName("organisasi")[0];
    const chief = org.getElementsByClassName("card");
    for(let i = 3; i < chief.length; i++){
        chief[i].classList.toggle("hide")
    }
    org.getElementsByClassName("button-txt")[0].getElementsByTagName("h4")[0].classList.toggle("active");
    org.getElementsByClassName("row-btn")[0].classList.toggle("active");
} 
