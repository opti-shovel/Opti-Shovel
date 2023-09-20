<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        /* Reset default styles */
        body, h1, p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f1f1f1;
            color: #333;
        }

        /* Header styles */
        header {
            background-color: #f67272;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        /* Main content styles */
        .containur {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .containur p {
            line-height: 1.6;
        }

        /* Team members section styles */
        .team-members {
            display: flex;
            flex-wrap: wrap;
            margin-top: 30px;
            justify-content: space-between;
        }

        .team-member {
            width: 30%;
            margin-bottom: 30px;
            background-color: #f7f7f7;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            height:200px;
            width:200px;
        }

        .team-member h3 {
            margin-left:40px;
            font-size: 20px;
            margin-top: 10px;
        }

        .team-member p {
            font-size: 14px;
            color: #666;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f67272;
            color: #fff;
        }
        
        h3{
            align-content: center;
            align-items: center;
            max-width:250px;
        }
    </style>
</head>
<body>
<div>
      <header>
        <h1>Code-Elixir</h1>
        <p>Building the Future of Mining Industries</p>
    </header>

    <div class="containur">
        <h2>About Us</h2>
        <p>
            Welcome to Team CodeElixir! We are a dedicated group of technology enthusiasts working on problem statement SIH-1314.
        </p>
        <p>
            At Team CodeElixir, we believe that we can make a system that can integrate easily with the existing infrastructure.
        </p>
        <p>
            Our team consists of six driven friends from computer science backgrounds.
            Together, we bring a unique set of skills and experiences to tackle
            the challenges faced in the real life in the sector of mining industries (Coal).
        </p>

        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="./image/team/agnisha.jpg" alt="Team Member 1" style="margin-left:30px;"/>
                <h3>Agnisha Bhatta</h3>
                <p>Leader</p>
            </div>
            <div class="team-member">
                <img src="./image/team/sohom.jpg" alt="Team Member 2" style="margin-left:30px;"/>
                <h3>Sohom Das</h3>
                <p>IOT Development</p>
            </div>
            <div class="team-member">
                <figure><img src="./image/team/pushpak.jpg" alt="Team Member 3" style="margin-left:-10px; margin-top:-10px;"/></figure>
                <h3>Pushpak Pallob</h3>
                <p>Web Development</p>
            </div>
        </div>
        <div class="team-members">
            <div class="team-member">
                <img src="./image/team/mitul.jpg" alt="Team Member 1" style="margin-left:30px;"/>
                <h3>Mitul Pramanik</h3>
                <p>Backend Development</p>
            </div>
            <div class="team-member">
                <img src="./image/team/hritam.jpg" alt="Team Member 2" style="margin-left:30px;"/>
                <h3>Hritam Kar</h3>
                <p>Backend Development</p>
            </div>
            <div class="team-member">
                <figure><img src="./image/team/subhojit.jpg" alt="Team Member 3" style="margin-top:5px"/></figure>
                <h3>Subhajit Dutta</h3>
                <p>App Development</p>
            </div>
        </div>
    </div>

    <footer>
        <p>Contact us: contact@teamnavigates.com | Follow us on Twitter: @TeamNaviGates</p>
    </footer>
    </div>
</body>
</html>