<?php include("Home.html")
?>
<head>
    <style>
        #home{
            height:400px;
            width:100%;
            background-image: linear-gradient(to left blue,yellow);
            background-color: black;
            
        }
        .row5{
            height:200px;
            width:100%;
        }
        .col6{
            height:200px;
            width:50%;
            float:left;
        }
        .col7{
            height:200px;
            width:50%;
            float:left;
        }
        .col6 img{
            top:60px;
            position: relative;
            left:30%;
            border-radius:200px;
            box-shadow: white 0px 0px 10px 8px;
        }
        .col7 p{
            font-size: 20px;
            right:10%;
            top:40%;
            position: relative;
            
            font-weight: bold;
            color: white;
        }
        .row6 pre{
            font-size: 20px;
            top:30%;
            position:relative;
    
            color: whitesmoke;
            left:10%;
            position:relative;
        }
    </style>
</head>
<body>
    <div id="home">
        <div class="row5">
            <div class="col6">
                <img src= "makeup.jpg" height="150px: "width=300px" alt="">
            </div>
            <div class="col7">
                <p> Welcome to our GLAM TOUCH BEAUTY SPOT, where beauty meets expertise.<br>We offer a range of personalized makeup an beauty services tailored to your Unique style and skin type. We promise a luxurious beauty experience <br>that leaves a lasting impression.</p>
            </div>
        </div>
        <div class="row6">
            <pre>                           
                
            
                           Contact : Gopika.   
                           Mobile : 044-798547631 / 7904908441
                           website: www.theglamtouchbeautyspot.com         
                </pre>

        </div>
    </div>
</body>
<?php include("footer.html")
?>
