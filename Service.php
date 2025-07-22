<?php include("Home.html")
?>
<head>
    <style>
        #services{
            height:600px;
            width:100%;
            background-image: linear-gradient(to left, pink, black);
        }
        .row5{
            height:300px;
            width:100%;
        }
        .col6{
            height:220px;
            width:20%;
            float:left;
            top:40px;
            position:relative;
            left:5%;
            border-style: solid;
            border-color: white;
            border-radius: 10px;
            margin-left: 20px;
        
        }
        .col6 h3{
            font-size: 20px;
            text-align: center;
            color:white;
        }
        .col6 h3{
            top:37px;
            position:relative;
            left:20%;

        }
    </style>
</head>
<body>
    <div id="services">
        <div class="row5">
            <div class="col6">
                <h3>BRIDAL <br> MAKEUP</h3>
                <img src="bridal.jpeg" height="100px" width="100px" alt=""  >
                <h3><a href="">Book Now</a></h3>
            </div>
            <div class="col6">
                <h3>HAIR CUT</h3>
                <img src= "haircut.jpg" height="100px" width="100px" alt="">
                <h3><a href="">Book Now</a></h3>
            </div>
            <div class="col6">
                <h3>PEDICURE</h3>
                <img src="pedicure.jpeg" height="100px" width="100px" alt="">
                <h3><a href="">Book Now</a></h3>
            </div>
            <div class="col6">
                <h3>MEHANDI</h3>
                <img src="mehandi.jpg" height="100px" width="100px" alt="">
                <h3><a href="">Book Now</a></h3>
            </div>
        </div>
        <div class="row5">
            <div class="col6">
                <h3>NAILART</h3>
                <img src="nailart.jpeg" height="100px" width="100px" alt="">
                <h3><a href="">Book Now</a></h3>
            </div>
            <div class="col6">
                <h3>FACIAL</h3>
                <img src= "Facial.jpg" height="100px" width="100px" alt="">
                <h3><a href="">Book Now</a></h3>
            </div>
            <div class="col6">
                <h3>LIP <br> COLOURING</h3>
                <img src="lip color.jpeg" height="100px" width="100px" alt="">
                <h3><a href="">Register Now</a></h3>
            </div>
            <div class="col6">
                <h3>HAIR <br>TREATMENT</h3>
                <img src="hair.jpg" height="100px" width="100px" alt="">
                <h3><a href="">Book Now</a></h3>
            </div>
        </div>
    </div>
</body>
<?php include("footer.html")
?>