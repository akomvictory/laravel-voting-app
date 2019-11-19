

<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">{!! $user->name !!}</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">

          <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-yellow">
                        <div class="widget-user-image">
                          <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{!! $user->name !!}</h3>
                        <h5 class="widget-user-desc">Lead Developer</h5>
                      </div>
                      <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                          <li><a href="#">{!! $user->email !!} <span class="pull-right badge bg-blue">Email</span></a></li>
                          <li><a href="#">Role<span class="pull-right badge bg-aqua">{!! $user->role['id'] !!}</span></a></li>
                          <li><a href="#">Facebook <span class="pull-right badge bg-green">{!! $user->facebook_profile !!}</span></a></li>
                          <li><a href="#">Joined <span class="pull-right badge bg-red">{!! $user->created_at->format('D, M, Y') !!}</span></a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.widget-user -->
                  </div>


           
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
















