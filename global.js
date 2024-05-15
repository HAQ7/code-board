if(document.querySelector(".modal")) {
    document.querySelector(".cancel").addEventListener("click", (e) => { 
        document.querySelector('.backdrop').style.opacity = 0;
        setTimeout(() => {
            document.querySelector('.backdrop').remove();
        }, 500);
    });
}