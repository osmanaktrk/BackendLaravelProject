let categories = document.querySelector("#categories");
let writers = document.querySelector("#writers");



categories.addEventListener("change", () => {
    let news = document.querySelectorAll(".news-all");

    news.forEach((e) => {
        e.style.display = "none";

        if (categories.value == 0) {
            if (writers.value == 0) {
                e.style.display = "flex";
            } else if (e.getAttribute("writer") == writers.value) {
                e.style.display = "flex";
            }
        } else if (e.getAttribute("category") == categories.value) {
            if (writers.value == 0) {
                e.style.display = "flex";
            } else if (e.getAttribute("writer") == writers.value) {
                e.style.display = "flex";
            }
        }
    });
});

writers.addEventListener("change", () => {
    let news = document.querySelectorAll(".news-all");

    news.forEach((e) => {
        e.style.display = "none";

        if (categories.value == 0) {
            if (writers.value == 0) {
                e.style.display = "flex";
            } else if (e.getAttribute("writer") == writers.value) {
                e.style.display = "flex";
            }
        } else if (e.getAttribute("category") == categories.value) {
            if (writers.value == 0) {
                e.style.display = "flex";
            } else if (e.getAttribute("writer") == writers.value) {
                e.style.display = "flex";
            }
        }
    });
});






// categories.addEventListener('change', ()=>{
//     let news = document.querySelectorAll(".news-all");

//     if(categories.value == 0){
//         news.forEach((e)=>{
//             e.style.display = 'flex';
//         });

//     }else{
//         // writers.value = 0
//         news.forEach((e)=>{
//             e.style.display = 'none';
//         });

//         document.querySelectorAll(`div[category="${categories.value}"]`).forEach((e)=>{
//             e.style.display = 'flex';
//         });
//     }

// });

// writers.addEventListener('change', ()=>{
//     let news = document.querySelectorAll(".news-all");

//     if(writers.value == 0){
//         news.forEach((e)=>{
//             e.style.display = 'flex';
//         });

//     }else{
//         // categories.value = 0
//         news.forEach((e)=>{
//             e.style.display = 'none';
//         });

//         document.querySelectorAll(`div[writer="${writers.value}"]`).forEach((e)=>{
//             e.style.display = 'flex';
//         });
//     }

// });
