<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register Form / Sports</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="sports.png" type="image/png">
</head>

<body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                        <div class="box-root"
                            style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                        </div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;">
                        </div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                        <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;">
                        </div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                        <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;">
                        </div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                        <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;">
                        </div>
                    </div>

                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a rel="dofollow">Sports</a></h1>
                </div>

                <div class="box-root padding-bottom--24 flex-flex flex-justifyContent--center">
                    <p style="text-align: center; max-width: 600px;">Please complete the form below to sign up for our
                        sports classes. After submitting the form, you will be redirected to a GoCardless page to pay
                        your first month’s subscription of £41.25. Once the payment is processed, you will receive a
                        confirmation email with all the details about your class.</p>
                </div>

                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <span class="padding-bottom--15">Register a child for a Sports class</span>
                            <form id="stripe-login" action="send_email.php" method="POST">
                                <div class="field padding-bottom--24">
                                    <label for="fname">Parent First Name</label>
                                    <input type="text" name="fname" required>
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="sname">Parent Surname</label>
                                    <input type="text" name="sname" required>
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="address">Email Address</label>
                                    <input type="email" name="email" required>
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="number">Phone Number</label>
                                    <input type="text" name="number" required>
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="c_fname">Child First Name</label>
                                    <input type="text" name="c_fname" required>
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="c_sname">Child Surname</label>
                                    <input type="text" name="c_sname" required>
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="dob">Child DOB</label>
                                    <input type="date" name="dob" id="dob" required min="" onchange="setMinDate()">
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="venue">Choose Venues</label>
                                    <div class="custom-select-wrapper">
                                        <select name="venue" id="venue" class="styled-select" onchange="updateFields()">
                                            <option value="">Select a venue</option>
                                            <option value="farnham">Farnham</option>
                                            <option value="farnborough">Farnborough</option>
                                            <option value="basingstoke">Basingstoke</option>
                                        </select>
                                        <span class="custom-arrow">▼</span>
                                    </div>
                                </div>

                                <div id="class-field" class="hidden">
                                    <label for="class">Select Class</label>
                                    <div class="custom-select-wrapper">
                                        <select name="class" id="class" class="styled-select">
                                        </select>
                                        <span class="custom-arrow">▼</span>
                                    </div>
                                </div>
                                <br>

                                <div id="date-field" class="hidden">
                                    <label for="start-date">Start Date</label>
                                    <div class="custom-select-wrapper">
                                        <select name="start-date" id="start-date" class="styled-select"></select>
                                        <span class="custom-arrow">▼</span>
                                    </div>
                                </div>
                                <br>

                                <div class="field padding-bottom--24">
                                    <label for="action">What Would You Like To Do</label>
                                    <div class="custom-select-wrapper">
                                        <select name="action" id="action" class="styled-select">
                                            <option value="">Select an option</option>
                                            <option value="trial">Trial: £2</option>
                                            <option value="subscribe">Subscribe: £41.25 per month + £25 membership fee</option>
                                        </select>
                                        <span class="custom-arrow">▼</span>
                                    </div>
                                </div>

                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="app.js"></script>

</html>