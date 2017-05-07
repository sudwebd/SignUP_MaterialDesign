<?php
$max=18;
$min=6;
$err=0;
?>
<div class="row " style="opacity:1;">
    <div class="col m6 offset-m3 s12">
        <div class="card z-depth-3">
            <div class="card-image" style="overflow:hidden; opacity:0.8;">
                <img src="images/U79ncgH.jpg" />

            </div>
            <div class="row card-content light-blue lighten-4">
                <form class="col s12" action="index.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="first_name" type="text" class="validate" name="first_name" value="<?php if(isset($_POST['submit'])){if(is_present($first_name)) echo $first_name; }?>">
                            <label for="first_name">First Name</label>
                            <?php
                            if(isset($_POST['submit'])){
                              if(!is_present($first_name)){
                                echo "<font face=\"Cursive\" color=\"red\">first name can't be empty</font>";
                                $err++;
                              }
                            }
                            ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="last_name" type="text" class="validate" name="last_name" value="<?php if(isset($_POST['submit'])){if(is_present($last_name)) echo $last_name; }?>">
                            <label for="last_name">Last Name</label>
                            <?php
                            if(isset($_POST['submit'])){
                              if(!is_present($last_name)){
                                echo "<font face=\"Cursive\" color=\"red\">last name can't be empty</font>";
                                $err++;
                              }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">phone</i>
                            <input id="telephone" type="number" class="validate" length="10" name="telephone" value="<?php if(isset($_POST['submit'])){if(is_present($telephone)) echo $telephone; }?>"/>
                            <label for="telephone">Phone</label>
                            <?php
                            if(isset($_POST['submit'])){
                              if(is_present($_POST['telephone'])){
                                $nolen=strlen($_POST['telephone']);
                                if(($nolen>10)||($nolen<10)){
                                  echo "<font face=\"Cursive\" color=\"red\">Incorrect length of phone no.</font>";
                                  $err++;
                                }
                            }
                          }
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">perm_contact_calendar</i>
                            <input id="date" type="date" class="datepicker" name="calendar" value="<?php if(isset($_POST['submit'])){if(is_present($calendar)) echo $calendar; }?>">
                            <label for="date">DOB</label>
                            <?php
                            if(isset($_POST['submit'])){
                              if(!is_present($calendar)){
                                echo "<font face=\"Cursive\" color=\"red\">Specify a DOB</font>";
                                $err++;
                              }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="selects" name="selects" value="<?php if(isset($_POST['submit'])){if(is_present($selects)) echo $selects; }?>">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">C++</option>
                                <option value="2">C</option>
                                <option value="3">Java</option>
                                <option value="4">Ruby</option>
                                <option value="5">Python</option>
                            </select>
                            <label>Preffered language</label>
                            <?php
                            if((isset($_POST['submit']))&&(isset($_POST['selects']))){
                              if(!is_present($selects)){
                                echo "<font face=\"Cursive\" color=\"red\">Select a preference</font>";
                                $err++;
                              }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate" name="email" value="<?php if(isset($_POST['submit'])){if(is_present($email)) echo $email; }?>">
                            <label for="email">Email</label>
                            <?php
                            if(isset($_POST['submit'])){
                              if(!is_present($email)){
                                echo "<font face=\"Cursive\" color=\"red\">Email can't be empty</font>";
                                $err++;
                              }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Password</label>
                            <?php
                            if(isset($_POST['submit'])){
                              if(!is_present($password)){
                                echo "<font face=\"Cursive\" color=\"red\">Password can't be empty</font>";
                                $err++;
                              }
                              if((leng($password,$max,$min)==false)&&(is_present($password)==true)){
                                echo "<font face=\"Cursive\" color=\"red\">Length should be b/w ".$min." and ".$max."</font>";
                                $err++;
                              }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input id="confirm_password" type="password" name="confirm_password">
                            <label for="confirm_password">Confirm_password</label>
                              <?php
                              if(isset($_POST['submit'])){
                                if((is_present($password)==true)&&((is_present($confirm_password)==FALSE))){
                                  echo "<font face=\"Cursive\" color=\"red\">Confirm your password</font>";
                                  $err++;
                                }
                                if((is_present($password)==true)&&((is_present($confirm_password)==true))){
                                  if(comp($password,$confirm_password)!=0){
                                  echo "<font face=\"Cursive\" color=\"red\">Password value not matching</font>";
                                  $err++;
                                  }
                                }
                              }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m2 s12">
                            <input class="btn waves-effect waves-red btn-medium light-blue darken-1 z-depth-2" type="submit" name="submit" value="Submit"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br />
