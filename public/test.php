                <!-- LOGIN CONNEXION -->                         
                                    <div class="card card-container">


                                        <form action="<?= $this->url('login') ?>" class="form-signin" method="POST">
                                            <span id="reauth-email" class="reauth-email"></span>

                                            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" name="login[email]" required autofocus>
                                            <input type="password" id="inputPassword" class="form-control" name="login[password]" placeholder="Mot de passe" required>

                                            <div class="wrapper">
                                                <span class="group-btn  col-lg-12">     
                                                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="create">Connexion</button>
                                                </span>
                                            </div>

                                            <div id="remember" class="checkbox">

                                                <center><a href="<?php echo $this->url('recoverLogin') ; ?>" class="forgot-password">
                                                    Mot de passe oublié ?
                                                    </a></center> 

                                                <center><a href="<?php echo $this->url('inscription') ; ?>" class="forgot-password">
                                                    S'inscrire ?
                                                    </a></center> 

                                            </div>

                                        </form><!-- /form -->

                                    </div><!-- /.END LOGIN CONNEXION -->