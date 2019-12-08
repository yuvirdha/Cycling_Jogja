<div class="container">
        <div class="container">
            <div class="row profile">
            <div class="col-md-3">
              <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                  <img src="https://static.vix.com/es/sites/default/files/styles/1x1/public/b/brad-pitt-10.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">
                  {{ Auth::user()->nama }}
                  </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                  <button type="button" class="btn btn-success btn-sm">Kontribusi</button>
                <a href="/editprofil">  <button type="button" class="btn btn-success btn-sm">Edit Profil</button></a>
                </div>
              </div>
            </div>