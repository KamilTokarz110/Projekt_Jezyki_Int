<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume/CV</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <div class="resume">
        <div class="resume_left">
            <div class="resume_profile">
                <img src="profile1.png" alt="profile_pic" class="profile">
            </div>
            <div class="resume_content">
                <div class="resume_item resume_info">
                    <div class="title">
                        <p class="bold"><?php $about['name'];?></p>
                        <p class="regular"><?php $about['natitleme'];?></p>
                    </div>
                    <ul>
                        <li>
                            <div class="icon"><i class="fas fa-map-signs"></i>
                            </div>
                            <div class="data">
                                <?php $about['address'];?><br /> <?php $about['country'];?>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-mobile"></i>
                            </div>
                            <div class="data">
                                <?php $about['phone'];?>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-envelope"></i>
                            </div>
                            <div class="data">
                                <?php $about['email'];?>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fab fa-weebly"></i>
                            </div>
                            <div class="data">
                                <?php $about['www'];?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="resume_item resume_skills">
                    <div class="title">
                        <p class="bold">skill's</p>

                    </div>
                    <ul>
                        <?php
                        foreach ($skills as $skill) {
                        ?>
                        <li>
                            <div class="skill_name">
                                <?php echo $skill['NAME'];?>
                            </div>
                            <div class="skill_progress">
                                <span style="width: 70%;"></span>
                            </div>
                            <div class="skill_per"><?php echo $skill['PERCENT'];?>%</div>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="resume_item resume_social">
                    <div class="title">
                        <p class="bold">Social</p>


                    </div>
                    <ul>
                        <li>
                            <div class="icon"><i class="fab fa-facebook"></i>

                            </div>
                            <div class="data">
                                <p class="semi_bold">
                                    Facebook
                                </p>
                                <p>KamilTokarz@facebook</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fab fa-twitter-square"></i>

                            </div>
                            <div class="data">
                                <p class="semi_bold">
                                    Twitter
                                </p>
                                <p>tokarzkamil8@twitter</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fab fa-youtube"></i>

                            </div>
                            <div class="data">
                                <p class="semi_bold">
                                    YouTube
                                </p>
                                <p>tokarzkamil8@youtube</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fab fa-linkedin"></i>

                            </div>
                            <div class="data">
                                <p class="semi_bold">
                                    Linkedin
                                </p>
                                <p>tokarzkamil8@linkedin</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="resume_right">
            <div class="resume_item resume_about">
                <div class="title">
                    <p class="bold">O Mnie</p>
                </div>
                <p><?php echo $about['about'];?></p>
            </div>
            <div class="resume_item resume_work">
                <div class="title">
                    <p class="bold">Praca</p>
                </div>
                <ul>
                    <?php
                    foreach ($work as $val) {
                    ?>
                    <li>
                        <div class="date"><?php echo $val['YEARS'];?></div>
                        <div class="info">
                            <p class="semi-bold"><?php echo $val['TITLE'];?></p>
                            <p><?php echo $val['TEXT'];?></p>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="resume_item resume_education">
                <div class="title">
                    <p class="bold">Wykształcenie</p>
                </div>
                <ul>
                    <?php
                    foreach ($education as $val) {
                    ?>
                    <li>
                        <div class="date"><?php echo $val['YEARS'];?></div>
                        <div class="info">
                            <p class="semi-bold"><?php echo $val['TITLE'];?></p>
                            <p><?php echo $val['TEXT'];?></p>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="resume_item resume_hobby">
                <div class="title">
                    <p class="bold">Hobby</p>
                </div>
                <ul>
                    <li><i class="fas fa-book"></i></li>
                    <li><i class="fas fa-gamepad"></i></li>
                    <li><i class="fas fa-music"></i></li>
                    <li><i class="fas fa-biking"></i></li>
                </ul>
            </div>
        </div>
        resume_

    </div>



</body>

</html>