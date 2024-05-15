const observer = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.querySelector('.glow').classList.add("glow-animation");
                console.log(entry.target);
            }
        });
    },
    { rootMargin: "0px 0px -40% 0px" }
);
document.querySelectorAll(".info-half").forEach(infoHalf => {
    observer.observe(infoHalf);
    console.log(infoHalf);
});

const listRecent = document.querySelector(".questions-section .question-list");
let questionRecentPosleft = listRecent.getClientRects()[0].x;

document.querySelector(".controls-recent img:last-child").addEventListener("click", () => {
    if (-listRecent.getClientRects()[0].x  > listRecent.getClientRects()[0].width - innerWidth) {
        return;
    }
    questionRecentPosleft -= 100;
    listRecent.style.left = questionRecentPosleft + "px";
});

document.querySelector(".controls-recent img:first-child").addEventListener("click", () => {
    if (listRecent.getClientRects()[0].x + 100 > 0) {
        listRecent.style.left = 0 + "px";
        return
    }
    questionRecentPosleft += 100;
    listRecent.style.left = questionRecentPosleft + "px";
});

const listAnswered = document.querySelector(".answered-questions .question-list");
let questionAnsweredPosleft = listRecent.getClientRects()[0].x;


document.querySelector(".controls-answered img:last-child").addEventListener("click", () => {
    if (-listAnswered.getClientRects()[0].x  > listAnswered.getClientRects()[0].width - innerWidth) {
        return;
    }
    questionAnsweredPosleft -= 100;
    listAnswered.style.left = questionAnsweredPosleft + "px";
});

document.querySelector(".controls-answered img:first-child").addEventListener("click", () => {
    if (listAnswered.getClientRects()[0].x + 100 > 0) {
        listAnswered.style.left = 0 + "px";
        return
    }
    questionAnsweredPosleft += 100;
    listAnswered.style.left = questionAnsweredPosleft + "px";
});

