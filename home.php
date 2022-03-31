<?php include 'inc/header.php'; ?>
<?php include 'inc/navbar.php'; ?>

<section class="home">
    <a href="./login.php" class="logout-mobile">Logout</a>
    <div class="bg-img">
    </div>

    <!-- Profile -->
    <section class="profile" id="profile">
        <img src="images/profile/Profile Picture.png" alt="Profile Image">
        <div class="profile-data">
            <h1>John Doe</h1>
            <div>
                <p>Age: 22</p>
                <p>Male</p>
                <p>09123456789</p>
            </div>
            <p>Address: Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <button id="edit-profile">Edit Profile</button>
        </div>
        <!-- Edit Profile Modal -->
        <div class="profile-modal" id="profile-modal">
            <div class="profile-modal-content" id="profile-modal-content">
                <span class="close">&times;</span>
                <form action="submit">
                    <label>First Name:</label>
                    <input type="text">
                    <label>Last Name:</label>
                    <input type="text">
                    <label>Email:</label>
                    <input type="email">
                    <label>Age:</label>
                    <input type="number">
                    <div>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" checked>
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female">
                    </div>
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
                    <label>Contact Number:</label>
                    <input type="tel">
                    <label>Address:</label>
                    <input type="text">
                    <label>Marital Status:</label>
                    <select name="status" id="status">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                        <option value="divorced">Divorced</option>
                        <option value="seperated">Seperated</option>
                    </select>
                    <button id="cancel-edit-profile">Cancel</button>
                    <input type="submit">
                </form>
            </div>
        </div>
    </section>

    <!-- Functions -->
    <section class="functions" id="functions">
        <button id="create-account">Create Account</button>
        <!-- Create Account Modal -->
        <div class="create-modal" id="create-modal">
            <div class="create-modal-content" id="create-modal-content">
                <span class="close">&times;</span>
                <div class="bg-img"></div>
                <form action="submit">
                    <h1>Create Account</h1>
                    <input type="email" placeholder="Email">
                    <select name="role" id="role">
                        <option value="" disabled selected>Role</option>
                        <option value="pastor">Pastor</option>
                        <option value="activity">Activity</option>
                        <option value="primary">Primary Leader</option>
                    </select>
                    <label>Ministry</label>
                    <div class="checkbox">
                        <div>
                            <input type="checkbox" id="academy">
                            <label for="academy">Academy</label>
                        </div>

                        <div>
                            <input type="checkbox" id="media">
                            <label for="media">Media</label>
                        </div>

                        <div>
                            <input type="checkbox" id="music">
                            <label for="music">Music</label>
                        </div>

                        <div>
                            <input type="checkbox" id="none">
                            <label for="none">None</label>
                        </div>

                        <div>
                            <input type="checkbox" id="dance">
                            <label for="dance">Dance</label>
                        </div>

                        <div>
                            <input type="checkbox" id="techical">
                            <label for="techical">Technical</label>
                        </div>

                        <div>
                            <input type="checkbox" id="secritariat">
                            <label for="secretariat">Secritariat</label>
                        </div>

                        <div>
                            <input type="checkbox" id="decoration">
                            <label for="decoration">Decoration</label>
                        </div>

                        <div>
                            <input type="checkbox" id="finance">
                            <label for="finance">Finance</label>
                        </div>

                        <div>
                            <input type="checkbox" id="intercessory">
                            <label for="intercessory">Intercessory</label>
                        </div>

                        <div>
                            <input type="checkbox" id="touch-kids">
                            <label for="touch-kids">Touch Kids</label>
                        </div>

                        <div>
                            <input type="checkbox" id="touch-down">
                            <label for="touch-down">Touch Down</label>
                        </div>

                        <div>
                            <input type="checkbox" id="food-services">
                            <label for="food-services">Food Services</label>
                        </div>

                        <div>
                            <input type="checkbox" id="trasportation">
                            <label for="transportation">Transportation</label>
                        </div>

                        <div>
                            <input type="checkbox" id="services&support">
                            <label for="services&support">Services & Support</label>
                        </div>


                    </div>

                    <input type="submit" value="Add Leader">
                </form>
            </div>
        </div>
        <button id="submit-report">Submit Report</button>
        <!-- Submit Report Modal -->
        <div class="submit-modal" id="submit-modal">
            <div class="submit-modal-content" id="submit-modal-content">
                <span class="close">&times;</span>
                <div class="bg-img"></div>
                <form action="submit">
                    <h1>Submit Report</h1>

                    <div class="date">
                        <label for="date">Date:</label>
                        <input type="date" id="date">
                    </div>

                    <input type="text" placeholder="Activity">

                    <select name="activity" id="activity">
                        <option value="" disabled selected>Venue</option>
                        <option value="#">Lorem</option>
                        <option value="#">Lorem</option>
                        <option value="#">Lorem</option>
                    </select>

                    <input type="text" placeholder="Topic">

                    <label for="attendace">Attendace</label>
                    <div class="attendance" id="attendance">
                        <div>
                            <label for="adult">Adults:</label>
                            <input type="number" id="adult">
                        </div>
                        <div>
                            <label for="children">Children:</label>
                            <input type="number" id="children">
                        </div>
                        <div>
                            <label for="youth">Youth:</label>
                            <input type="number" id="youth">
                        </div>
                        <div>
                            <label>Total:</label>
                            <label>Total Number</label>
                        </div>
                    </div>

                    <select name="facilitator" id="facilitator">
                        <option value="" disabled selected>Facilitator</option>
                        <option value="#">Lorem</option>
                        <option value="#">Lorem</option>
                        <option value="#">Lorem</option>
                    </select>

                    <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Notes"></textarea>

                    <input type="submit" value="Submit Report">
                </form>
            </div>
        </div>
        <button id="generate-report">Generate Report</button>
        <!-- Generate Report Modal -->
        <div class="generate-modal" id="generate-modal">
            <div class="generate-modal-content" id="generate-modal-content">
                <span class="close">&times;</span>
                <div class="bg-img"></div>
                <form action="submit">
                    <h1>Generate Report</h1>

                    <div>
                        <div class="date">
                            <label for="date">From:</label>
                            <input type="date" id="date">
                        </div>

                        <div class="date">
                            <label for="date">To:</label>
                            <input type="date" id="date">
                        </div>
                    </div>

                    <input type="text" placeholder="Network">

                    <div class="checkbox">
                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>

                        <div>
                            <input type="checkbox" id="">
                            <label for="">Lorem</label>
                        </div>
                    </div>

                    <input type="submit" value="Generate Report">
                </form>
            </div>
        </div>
    </section>

    <!-- Trainings -->
    <section class="trainings" id="trainings">
        <div class="training-card">
            <div>
                <img src="images/training icon/Training Icon.png" alt="Traning">
                <p>32</p>
            </div>
            <h2>Training</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Basic Icon.png" alt="Basic">
                <p>43</p>
            </div>
            <h2>Basic</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Life Class.png" alt="Life Class">
                <p>12</p>
            </div>
            <h2>Life Class</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Sol 1 Icon.png" alt="Sol 1">
                <p>44</p>
            </div>
            <h2>Sol 1</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Sol 2 Icon.png" alt="Sol 2">
                <p>12</p>
            </div>
            <h2>Sol 2</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Sol 3 Icon.png" alt="Sol 3">
                <p>32</p>
            </div>
            <h2>Sol 3</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Cell Group Icon.png" alt="Cell Group">
                <p>32</p>
            </div>
            <h2>Cell Group</h2>

        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Baptism Icon.png" alt="Baptism">
                <p>12</p>
            </div>
            <h2>Baptism</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Wedding Icon.png" alt="Weddings">
                <p>17</p>
            </div>
            <h2>Weddings</h2>

        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/C.D.png" alt="C.D">
                <p>17</p>
            </div>
            <h2>C.D</h2>
        </div>
        <div class="training-card">
            <div>
                <img src="images/training icon/Gone.png" alt="Gone">
                <p>12</p>
            </div>
            <h2>Gone</h2>

        </div>
    </section>
    <script src="js/home.js"></script>
</section>