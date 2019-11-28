<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <div class="card border-secondary ">
                        <div class="card-header ">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form class="reg-form" action="register.php" role="form" autocomplete="off" method="post">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" value="<?php if(isset($user__name)){ echo $user__name;} ?>"  name="username" class="form-control" placeholder="full name">
                    				<lable class="text-danger"><?php echo isset($errors['username'])? $errors['username']:'' ?> </label>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Phone</label>
                                    <input type="text"  value="<?php echo isset($phone)?$phone:'' ?>"  class="form-control" name="phone" placeholder="Ph Number">
                                    <lable class="text-danger"><?php echo isset($errors['phone'])? $errors['phone']:'' ?> </label>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" value=" <?php echo isset($email)?$email:'' ?>"  name="email" class="form-control" placeholder="email@gmail.com" required="">
                                    <lable class="text-danger"><?php echo isset($errors['email'])? $errors['email']:'' ?> </label>

                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" value="<?php echo isset($password)?$password:'' ?>"  class="form-control" name="password" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                    <lable class="text-danger"><?php echo isset($errors['password'])? $errors['password']:'' ?> </label>
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Comfirm Password</label>
                                    <input type="password" value="<?php echo isset($confirm_password)?$confirm_password:'' ?>"  name="con_password" class="form-control" placeholder="comfirm password" required="">
                                    <lable class="text-danger"><?php echo isset($errors['confirm_password'])? $errors['confirm_password']:'' ?> </label>
                                    <lable class="text-danger"><?php echo isset($errors['match_password'])? $errors['match_password']:'' ?> </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea2">Address</label>
                                    <textarea class="form-control rounded-0" name="address" value="<?php echo isset($address)?$address:'' ?>" id="exampleFormControlTextarea2" rows="3" placeholder="Your Address"></textarea>
                                     <lable class="text-danger"><?php echo isset($errors['address'])? $errors['address']:'' ?> </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="register" class="btn-color btn float-right">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->