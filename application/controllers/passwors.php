<?php if($this->session->userdata('nama')) { ?>
                          
                          <li><a href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>

                          <li><a class="text-warning">Halo, <?php echo $this->session->userdata('nama') ?></a></li>

                          <li><a href="<?php echo base_url('auth/logout') ?>">| LOGOUT</a></li>
                      <?php }else{ ?>
                          <?php if($this->session->userdata('nama')) { ?>
                
                <li><a href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>

                <li><a class="text-warning">Halo, <?php echo $this->session->use
                          <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                          <li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
                      <?php } ?>
                  </ul><?php 