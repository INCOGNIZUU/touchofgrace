<?php include 'inc/header.php'; ?>
<?php include 'inc/navbar.php'; ?>

<section class="home">
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
                <div class="bg-img"></div>
                <img src="images/profile/Profile Picture.png" alt="Profile Image">
                <h1>Edit Profile</h1>
                <form action="submit">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <input type="email" placeholder="Email">
                    <input type="number" placeholder="Age">
                    <div class="filter-gender">
                        <div class="active">Male</div>
                        <div>Female</div>
                    </div>
                    <div class="bday">
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <input type="tel" placeholder="Contact Number">
                    <input type="text" placeholder="Address">
                    <!-- <label>Marital Status:</label>
                    <select name="status" id="status">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                        <option value="divorced">Divorced</option>
                        <option value="seperated">Seperated</option>
                    </select>

                    <div class="work-school">
                        <input type="text" placeholder="Work Experience">
                        <label for="start">Start</label>
                        <input type="date">
                        <label for="end">End</label>
                        <input type="date">

                    </div> -->
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

                    <div class="time">
                        <label for="time">Time:</label>
                        <input type="time" id="time">
                    </div>

                    <input type="text" placeholder="Activity">

                    <input type="text" placeholder="Venue">

                    <input type="text" placeholder="Topic">

                    <label for="attendance">Attendance</label>
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

                    <input type="text" placeholder="Facilitator">

                    <input type="text" placeholder="Speaker">

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

                    <div class="filter-gender">
                        <div class="active">All</div>
                        <div>Male</div>
                        <div>Female</div>
                    </div>

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
    </section>
    <script src="js/home.js"></script>
</section>