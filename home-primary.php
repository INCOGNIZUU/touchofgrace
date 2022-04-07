<?php include 'inc/header.php'; ?>
<?php include 'inc/navbar.php'; ?>

<section class="home-primary">
    <!-- <div class="bg-img">
    </div> -->

    <!-- Profile -->
    <!-- <section class="profile" id="profile">
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
        </div> -->
    <!-- Edit Profile Modal -->
    <!-- <div class="profile-modal" id="profile-modal">
        <div class="profile-modal-content" id="profile-modal-content">
            <span class="close">&times;</span>
            <form action="submit">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="number" placeholder="Age">
                <div>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="male" checked>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female">
                </div>
                <div>
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
                </div>
                <input type="tel" placeholder="Contact Number">
                <input type="text" placeholder="Address">
                <label>Marital Status:</label>
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

                </div>
                <button id="cancel-edit-profile">Cancel</button>
                <input type="submit">
            </form>
        </div>
    </div>
</section> -->

    <!-- Functions -->
    <section class="functions" id="functions">
        <button id="cell-report">Cell Report</button>
        <!-- Cell Report Modal -->
        <div class="cell-modal" id="cell-modal">
            <div class="cell-modal-content" id="cell-modal-content">
                <span class="close">&times;</span>
                <div class="bg-img"></div>
                <form action="submit">
                    <h1>Cell Report</h1>

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

                    <input type="submit" value="Cell Report">
                </form>
            </div>
        </div>
        <button id="ministry-report">Ministry Report</button>
        <!-- Submit Report Modal -->
        <div class="ministry-modal" id="ministry-modal">
            <div class="ministry-modal-content" id="ministry-modal-content">
                <span class="close">&times;</span>
                <div class="bg-img"></div>
                <form action="submit">
                    <h1>Ministry Report</h1>

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

                    <input type="submit" value="Ministry Report">
                </form>
            </div>
        </div>
        <button id="add-disc">Add</button>
        <!-- Add Disc Modal -->
        <div class="add-modal" id="add-modal">
            <div class="add-modal-content" id="add-modal-content">
                <span class="close">&times;</span>
                <div class="bg-img"></div>
                <form action="submit">
                    <h1>Add Disciple</h1>

                    <input type="text" placeholder="First Name">

                    <input type="text" placeholder="Last Name">

                    <div class="bday">
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>

                    <input type="number" placeholder="Age">

                    <div class="date">
                        <label for="date">Date Started:</label>
                        <input type="date" id="date">
                    </div>

                    <input type="tel" placeholder="Contact">


                    <div class="filter-gender">
                        <div class="active">Male</div>
                        <div>Female</div>
                    </div>

                    <select name="training" id="training">
                        <option value="" disabled selected>Training</option>
                        <option value="basic">Basic</option>
                        <option value="life-class">Life Class</option>
                        <option value="sol1">Sol 1</option>
                        <option value="sol2">Sol 2</option>
                        <option value="sol3">Sol 3</option>
                        <option value="cell-group">Cell Group</option>
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

                    <input type="submit" value="Add Disciple">
                </form>
            </div>
        </div>
    </section>

    <!-- <section class="primary-table-filter">
        <div class="checkbox">
            <div>
                <input type="checkbox" id="personal-info">
                <label for="personal-info">Personal Information</label>
            </div>

            <div>
                <input type="checkbox" id="personal-info">
                <label for="personal-info">Work Information</label>
            </div>

            <div>
                <input type="checkbox" id="ministry-info">
                <label for="ministry-info">Ministry Information</label>
            </div>
        </div>
    </section> -->

    <section class="primary-table">
        <table>
            <tr>
                <th>Name</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>Date Started</th>
                <th>Contact Number</th>
                <th>Ministry</th>
                <th>Training</th>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>4 August 2021</td>
                <td>14</td>
                <td>4 August 2021</td>
                <td>09123456789</td>
                <td>Lorem Impsum</td>
                <td>Training</td>
            </tr>

        </table>
    </section>


    <!-- <script src="js/home.js"></script> -->
    <script src="js/home-primary.js"></script>
</section>