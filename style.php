<?php
$images = ['bg1', 'bg2','bg3','bg4', 'bg5', 'bg6', 'bg7','bg8'];

$imageIndex = array_rand($images);

$backgroundImage = $images[$imageIndex];

$backgroundImageURL = 'images/' . $backgroundImage . '.jpg';
?>

<style>*{
    margin: 0%;
    padding: 0%;
}
{
    transition: ease-in-out
}
.header{
    
    width: 100%;
    /* min-height: 60vh; */
    background-color: lightgreen;
    padding: 2em;
    text-align: center;
    /* position: fixed; */
    /* background-image: url('https://images.unsplash.com/photo-1468689210283-44a1b8ba20ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); */
    background-image: url(<?= $backgroundImageURL; ?>);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border-bottom: 2px solid yellow;
    box-sizing: border-box;
    
    
}
.logo-img{
    margin-top: 0px;
    margin-left: 0px;
}

.nav-bar{
    text-align: end;
    flex: -1;
}
.nav-div{
    display: flex;
    justify-content: space-between;
}
.nav-item{
    display: inline;
    list-style: none;
    color: white;
    letter-spacing: 3px;
    /* margin-right: 2%; */
    font-weight: bold;
    padding: 1em;
    padding-top: 1em;
    text-align: center;
    /* margin-top: 23px; */
}
.nav-bar a{
    text-decoration: none;
  
}
.nav-bar a :hover{
    background-color: yellow;
    color: green;
    border-bottom: 3px solid white;
    /* transition: 1000ms; */
    transform-origin:  0% 50%;
    
}
.nav-bar a :active{
    border-bottom: 3px solid white;
}
.text-light{
    color: white;
}

.header-text{
    width: 90%;
    /* border: 2px solid yellow; */
    margin: auto;
    text-align: center;
    margin-top: 3em;
    padding: 2%;
    margin-bottom: 3em;
    line-height: 3em;
    /* background-color: rgba(0,0, 0, 0.8); */
}
.header p{
    font-size: 2em;
}
/*........... css for the main body............. */
.main{
    display: flex;
    flex-wrap:wrap; 
    
      
}
.second-section{
    display: flex;
}
.card{
    flex-shrink:1;
    flex-basis:30%;
    min-width:5%;

    /* height: 20vh; */
    /* background-color: green; */
    border: 1px solid gainsboro;
    margin: 1em;
    box-shadow: 0 .15rem 1.75rem 0 rgba(68, 78, 184, 0.15)!important;
    text-align: center;
    box-sizing: border-box;
    border-radius: 10px;
    border-bottom: 4px solid green;
   

}
.card span{
    font-weight: bold;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.card img{
    /* width: 50%; */
    height: 200px;
    margin: auto;
    width: 100%;
    border: 1px solid yellow;
    box-sizing: border-box;
    border-radius: 10px;
    /* border-radius: 50%; */
    /* margin-top: -20px; */
}
.card-body{
    
}
/* .card-body ul li{
    list-style: none;
    
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
} */

.table{
    width: 100%;
    text-align: justify;
    line-height: 2em; 
}
.btn{
    width: 40%;
    padding: 4%;
    text-align: center;
    display: inline-block;
   /* margin-left: 25%; */
    background-color: white;
    border: 1px solid yellow;
    border-radius: 25px;
  
    
}
.btn-link :hover{
     background-color: yellow;
     color: white;
     font-weight: bold;
     border:0;
     transition: 1000ms;
     
}

.board{
    width: 20%;
    background-color: white;
    padding: 10px;
    border: 2px solid green;
    border-radius: 20px;
    color: grey;
    display:block;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 50px;

}
.board:hover{
    background-color: green;
    border:2px solid white;
    color: white;
    transition:1000ms;
   
}

.box{
    display: flex;
    flex-wrap: wrap;
}
.item1{
    flex-grow:1;
    width: 50%;
    min-width:300px;
    flex-shrink:2;
}
.form-overlaye{
    width: 50%;
    min-width:300px;
    /* height: 60vh; */
    flex-grow:1;
    background-color: rgba(143, 143, 143, 0.6);
    margin-top: -35px;
    flex-shrink: 1;
    
   
}
.form{
    width: 80%;
    height: 100%;
    margin-right: 5%;
    display: block;
    margin: auto;
   /* border:2px solid red; */
   box-sizing: content-box;
   padding: 10px
  

}
.form-group{
    margin-bottom: 1rem;
    width: 100%;
    display: block;
}

.form-control{
    width: 100%;
    padding: 7px;
    width: 100%;
    padding: 7px;
    border-radius: 5px;
    border: none;
    line-height: 2;
    color: #b1adad;
}
label{
    color: rgb(66, 66, 66);
}
/* ........pricing table css............ */
.table-card{
    width: 90%;
    margin: 2em;
    box-shadow: 0 .15rem 1.75rem 0 rgba(68, 78, 184, 0.15)!important;
    text-align: center;
    box-sizing: border-box;
    border-radius: 10px;
    /* border-bottom: 4px solid green; */
    margin: auto;
    margin-top: 20px;

}
.table{
   
  
    margin-top: 20px;
    text-align: center;
}
table,tr,th,td{
    border: 1px solid rgb(161, 159, 159);
    border-collapse: collapse;
}
tr:nth-child(even) {background: rgb(231, 227, 227)}
tr:nth-child(odd) {background: #FFF}
footer{
    width: 100%;
    height: 23vh;
    background-color: #3b3a3a;
    /* display: flex; */
}
.footer-content{
    width: 100%;
     height: 18vh;
     display: flex;
}
footer a{
    color:lightskyblue;
    text-align: center;
    text-decoration: none;
}
/* utility css classes */
.text-auto{
    text-align: center;
}
.text-light{
    color: white;
}
.ml{
  margin: 2%;
}
.mr{
  margin: 2%;
}
.mt{
  margin: 0%;
}
.bg-primary{
    background-color: yellow;
}
.text-primary{
    color: yellow;
}
.text-secondary{
    color:green;
}
.bg-secondray{
   background-color: green;
}




iframe{
  display:flex;
   width: 100%;
    
    margin: auto;
}
.h3{
    text-align:center;
    width: 20%;
    background-color: white;
    padding: 10px;
    border: 2px solid green;
    border-radius: 20px;
    color: grey;
    display:block;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 50px;
}
.radio{
    margin:3px;
    color:yellow;
}
.rad{
    margin:6% 0;
}


