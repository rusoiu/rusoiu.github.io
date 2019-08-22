<?php
    header('Content-type: text/css; charset:UTF-8');
?>


html, body{
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
}


 
.post{
    padding: 5px;
    
    margin-right: 10%;
    margin-left: 5%;
    /* background-color:black;
    border-radius: 15px;
    opacity: 0.8; */

    padding-bottom: 20px;
    
}
.content{
    font-size: 18px;
    font-family: 'Roboto', sans-serif;
}
.titlu{
    font-size: 24px;
    font-family: 'Oswald', sans-serif;
}

img{
    height: 400px;
    width: 100%;
    position: relative;
    
}
.login{
    position: relative;
    padding-right: 10%;
    
}

a.log{
    text-decoration: none;
    color:black;
    padding: 10px;
    background-color: black;
    color: aliceblue;
    border-radius: 5px;
}
.blogtitle{
    background-color: black;
    color: white;
    position: absolute;
    padding: 5px;
    top: -1px;
    left: 40px;
    font-family: 'Roboto', sans-serif;
    font-size:30px; 
}

a{ 
    text-decoration: none;
    border-radius: 5px;
    padding: 5px;
    background-color: black;
    color: aliceblue;
}

footer{
    padding: 30px;
    background-color: black;
    

}
.fot{
   
    color:white;
    font-family: 'Roboto', sans-serif;
    
}

.but{
    background-color: black;
    color: white;
    text-decoration:none;
    border: none;
    padding: 5px;
    border-radius: 5px;
}

.formi{
    background-color: black;
    color: white;
    text-decoration: none;
    border:none;
    padding: 30 px;
    margin: 10px;
}
.forma{
    position: relative;
    top: 20%;
}


.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #16151A;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
    height: 100px;
    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.log{
    font-family: 'Roboto', sans-serif;
}

