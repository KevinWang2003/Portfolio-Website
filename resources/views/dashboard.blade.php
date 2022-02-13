<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <script src="js/sidenav.js"></script>
    <script src="https://kit.fontawesome.com/5f690037a3.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>

<body>
    <!--Menu aan de zijkant-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
        <img src="resources/HZ logo.png" alt="HZ logo" width="300px" height="300px">
        <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">Examenregeling</a></li>
        <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf" target="_blank">Uitvoeringeregeling</a></li>
        <li><a href="https://learn.hz.nl" target="_blank">HZ Learn</a></li>
        <li><a href="https://teams.microsoft.com/l/channel/19%3a827654897ab746089c081f24aff1c984%40thread.skype/General?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">Teams</a></li>
        <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Studievoortgang</a></li>
        <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">Github</a></li>
    </div>
    <div id="main">
        <!--Navigatie Menu-->
        <nav>
            <ul>
                <li><span style="font-size:30px;cursor:pointer;" onclick="toggleNav()">&#9776;</span></li>
                <li><a href="/"><i class="fas fa-home"></i></a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a class="active" href="dashboard">Dashboard</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="faqs">FAQ</a></li>
            </ul>
        </nav>
        <h1>Dashboard</h1>
        <section>
            <!--Tabel van waar ik mijn studiepunten kan behalen-->
            <div class="monitor">
                <h2>Study Monitor</h2>
                <table>
                    <thead>
                        <tr>
                            <td>Quartile</td>
                            <td>Course</td>
                            <td>EC</td>
                            <td>Exam</td>
                            <td>Grade</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3">1</td>
                            <td>Programme and Case Orientation</td>
                            <td>2,5</td>
                            <td>Assessment</td>
                            <td>9,1</td>
                        </tr>
                        <tr>
                            <td>Computer Science & Basics</td>
                            <td>7,5</td>
                            <td>Written</td>
                            <td>8,2</td>
                        </tr>
                        <tr>
                            <td>Programming Basics</td>
                            <td>5</td>
                            <td>Case Study Exam</td>
                            <td>10,0</td>
                        </tr>
                        <tr>
                            <td rowspan="2">2</td>
                            <td rowspan="2">Object Oriented Programming</td>
                            <td rowspan="2">10</td>
                            <td>Case study</td>
                            <td>7,0</td>
                        </tr>
                        <tr>
                            <td>Project</td>
                            <td>7,8</td>
                        </tr>
                        <tr>
                            <td rowspan="4">3</td>
                            <td>Framework Development 1</td>
                            <td>5</td>
                            <td>Case Study</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td rowspan="3">Framework Project 1</td>
                            <td rowspan="3">7,5</td>
                            <td>Project</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Assessment</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Report</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td rowspan="3">4</td>
                            <td rowspan="3">Framework Project 2</td>
                            <td rowspan="3">10</td>
                            <td>Portfolio</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Project</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Assessment</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td rowspan="3">The Entire Year</td>
                            <td>Portfolio</td>
                            <td>12,5</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Personality 1</td>
                            <td>1,25</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Personality 2</td>
                            <td>1,25</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <article>
            <div class="nbsa">
                <h2>NBSA</h2>
                <p>Voordat je naar het volgende schooljaar kunt gaan moet je 45 of meer studiepunten behalen om door te gaan.</p>
                <p>Als het jou niet lukt dan kan je niet meer aan het studieprogramma meedoen.</p>
                <p>Als je de maximale 60 punten hebt behaald dan heb je je propedeuse gehaald en krijg je een speciale propedeuse diploma.</p>
                <p>Hieronder onder kan je zien hoe ver ik moet zijn om het jaar te halen:</p>
                <progress class="nodig" max="60" value="45">45 SC</progress>
                <p>En dit is waar ik nu ben:</p>
                <progress class="nodig" max="60" value="25">25 SC</progress>
            </div>
        </article>
        <footer><img class="logo" src="resources/HZ logo.png" width="75px" height="75px" alt="HZ Logo"></footer>
    </div>
</body>

</html>
