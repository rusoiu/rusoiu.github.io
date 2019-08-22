function randomImg(){
    var myImages = new Array();

    myImages[1] = "media/1.png";
    myImages[2] = "media/2.png";
    myImages[3] = "media/3.png";

    var rnd = Math.floor(Math.random() * myImages.lenght);
    if(rnd == 0){
        rnd = 1;
    }
    document.write('<img src="'+myImages[rnd]+'"');
}

function w4(){
    console.log("nigga wtf");   
}


window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});