<div class="container-fluid p-0">
   <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-family: billabong; font-style:italic">InstaApp</a>
         <input type="search" class="input-cari ml-auto" placeholder="Cari" name="" id="">
         
         <ul class="navbar-nav ml-auto">

            <!-- Pengguna -->
            <li class="nav-item dropdown" >

               <a class="nav-link" data-toggle="dropdown" href="#" >
                  @if (\Auth::user()->avatar == 'NO IMAGE')
                     <img class="img-circle" src="{{ asset('img/avatar.png') }}" width="30px" height="30px" alt="User Avatar">
                     
                  @else
                     <img class="img-circle" src="{{ asset('storage/' . \Auth::user()->avatar) }}" width="50px" height="50px" alt="User Avatar">                  
                  @endif
                  {{-- <img class="img-circle" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" width="30px" height="30px" alt="User Avatar"> --}}
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <div class="card card-widget widget-user" style="margin-bottom: 0px">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-secondary">
                     <h5>{{ \Auth::user()->username }}</h5>
                  </div>
                  <div class="widget-user-image">
                     @if (\Auth::user()->avatar == 'NO IMAGE')
                        <img class="img-circle" src="{{ asset('img/avatar.png') }}" width="100px" height="100px" alt="User Avatar">
                        
                     @else
                        <img class="img-circle elevation-2" src="{{ asset('storage/' . \Auth::user()->avatar) }}" style="height: 100px; width: 100px" alt="User Avatar">
                        
                     @endif
                     {{-- <img class="img-circle elevation-2" src="https://www.shareicon.net/data/512x512/2017/01/06/868320_people_512x512.png" style="height: 100px; width: 100px" alt="User Avatar"> --}}
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col-md-12 mt-2">
                           
                           <a href="{{ route('user.profile',['username' => \Auth::user()->username, 'profile' => 'profile'])}}" class="btn btn-default btn-block border-0 text-left">Profile</a>
                           <a href="{{ route('pengaturan') }}" class="btn btn-sm btn-default btn-block border-0 text-left">Pengaturan</a>
                           <hr>
                           <form action="{{ route('logout') }}" method="post">
                              @csrf
                              <input type="submit" class="btn btn-default btn-block border-0 text-left" value="Logout">
                           </form>
                        </div>
                        
                     </div>
                        <!-- /.col -->
                        
                  </div>
                     <!-- /.row -->
                  </div>
               </div>
            </li>
         </ul>
         {{-- <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Home</a>
         </div> --}}
      </div>
   </nav>
</div>