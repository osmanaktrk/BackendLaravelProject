let cover = document.querySelector("#cover");
let img = document.querySelector('#cover-img');

cover.addEventListener('change', ()=>{
    let files = cover.files;
    if(files){
        const fileReader = new FileReader();
        
        fileReader.onload = (e) =>{
            img.src = e.target.result;
        };
        fileReader.readAsDataURL(files[0]);
    }
});