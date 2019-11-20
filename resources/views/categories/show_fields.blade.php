<div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
             

              <h5 class="profile-username text-center">{!! $category->name !!}</h5>

              <p class="text-muted text-center">Last Updated at {!! $category->updated_at->format("Y, M, D") !!}</p>

             <!--  <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
 -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
       <!--   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
         
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
      
          </div>
          -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#nomination" aria-expanded="true" data-toggle="tab">Nomination</a></li>
              <li><a href="#vote" data-toggle="tab">Vote</a></li>

                @if(Auth::user()->role_ids<3)

              <li><a href="#nominees" data-toggle="tab">Nominees</a></li>  

                @endif
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="nomination">
               <h3>Nominate A Candidate</h3>
                 <div class="row">

                
                    {!! Form::open(['route' => 'nominations.store']) !!} 

                        @include('nominations.fields')

                    {!! Form::close() !!}  

                  

                </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="vote">
                Add vote content here
              
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="nominees">
               <!-- CONTENT GOES HERE  -->
              </div>


              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>










