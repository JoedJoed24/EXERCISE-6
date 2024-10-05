<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Our Team</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;      
    margin: 0;
    padding: 0;
}
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}
header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}
.team-member {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    padding: 15px;
    margin: 15px 0;
    text-align: left;
}
.team-member img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
}
.team-member h3 {
    margin: 10px 0 5px;
    font-size: 1.2em;
}
.team-member p {
    margin: 0;
    color: #666;
}
footer{
        background: #343434;
        padding-top: 50px;
}
.footer-container{
        width: 1140px;
        margin: auto;
        display: flex;
        justify-content: center;
}
.footer-content{
        width: 33.3%;
}
.footer-h3{
        font-size: 28px;
        margin-bottom: 15px;
        text-align: center;
}
.footer-content p{
        width:190px;
        margin: auto;
        padding: 7px;
}
.footer-content ul{
        text-align: center;
}
.list{
        padding: 0;
}
.list li{
        width: auto;
        text-align: center;
        list-style-type:none;
        padding: 7px;
        position: relative;
}
.list li::before{
        content: '';
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 100%;
        width: 0;
        height: 2px;
        background: #f18930;
        transition-duration: .5s;
}
.list li:hover::before{
        width: 70px;
}
.social-icons{
        text-align: center;
        padding: 0;
}
.social-icons li{
        display: inline-block;
        text-align: center;
        padding: 5px;
}
.social-icons i{
        color: white;
        font-size: 25px;
}
a{
        text-decoration: none;
}
a:hover{
        color: #f18930;
}
.social-icons i:hover{
        color: #f18930;
}
.bottom-bar{
        background: #f18930;
        text-align: center;
        padding: 10px 0;
        margin-top: 50px;
    }
.bottom-bar p{
        color: #343434;
        margin: 0;
        font-size: 16px;
        padding: 7px;
}
    </style>
</head>
<body>
    <header>
        <h1>Meet Our Team</h1>
    </header>
    <div class="container">
        <div class="team-member">
            <img src="Tristan.jpg" alt="Tristan">
            <h3>Tristan Joed Abar</h3>
            <p>Nickname:Tris</p>
            <p>Birthdate:Dec.24,2002</p>
            <p>Age:21</p>
            <p>Address:Paranaque City</p>
            <div class="container">
             <div class="border-box">
              </p>"Kung d ako ang para sa kanya,kawawa naman sya"</p>
              </div>
            </div>
        </div>
        <div class="team-member">
            <img src="Dan.jpg" alt="Dan Joseph">
            <h3>Dan Joseph Divina</h3>
            <p>Nickname:Ej</p>
            <p>Birthdate:</p>
            <p>Age:22</p>
            <p>Address:Tunasan, Muntinlupa</p>
            <div class="container">
        <div class="border-box">
            <p>"Lagi mong tatandaan na kapag nag iisa ka, wala kang kasama"</p>
        </div>
          </div>
        </div>
        <div class="team-member">
            <img src="ian..jpg" alt="Ian Gabriel">
            <h3>Ian Gabriel Magpantay</h3>
            <p>Nickname:Gabo</p>
            <p>Birthdate:July 25,2003</p>
            <p>Age:21</p>
            <p>Address:Poblacion,Muntinlupa</p>
            <div class="container">
         <div class="border-box">
            <p>"Don't make the same mistake twice,marami pang kasalanan try mo naman"</p>
          </div>
           </div>
        </div>
        <div class="team-member">
          <img src="Jer.jpg" alt="Jerrel">
          <h3>Jerrel Perez</h3>
          <p>Nickname:Rel</p>
          <p>Birthdate:December 16,2003</p>
          <p>Age:21</p>
          <p>Address:Poblacion, Muntinlupa</p>
          <div class="container">
        <div class="border-box">
          <p>"Kung ang pansit ay pampahaba ng buhay, ba't d to nirereseta ng doktor"</p>
        </div>
          </div>
        </div>
     </div>

     <footer>
        <div class="container"></div>
          <div class="footer-content">
            <h3>Contact us</h3>
            <p>Email:info@example.com</p>
            <p>Phone: 63+ 9153296171</p>
            <p>Address: your adress 124 </p>
          </div>
          <div class="footer-content">
            <h3>Quick links</h3>
             <ul class="list">
                <li><a href="">Home</li>
                <li><a href="">About</li>
                <li><a href="">Contact</li>
             </ul>
          </div>
          <div class="footer-content">
            <h3>Follow us</h3>
             <li><a href=""><i class='bx bxl-facebook-circle' ></i></a></li>
             <li><a href=""><i class='bx bxl-instagram-alt' ></i></a></li>
             <li><a href=""><i class='bx bxl-linkedin' ></i></a></li>
          </div>
          <div class="bottom-bar">
            <p>&copy; 2024 our team</p>
          </div>
     </footer>
</body>
</html>