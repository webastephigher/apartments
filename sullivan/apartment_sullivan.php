<!-- Button HTML (to Trigger Modal) -->
<a href="#sullivan" data-toggle="modal">
  <img src="sullivan/1_apartment.jpg" width="300px">
</a><br />
<a href="http://www.udr.com/washington-dc-apartments/alexandria/sullivan-place/photos-and-tours/#">Sullivan Place</a>
    
<!-- Modal HTML -->
<div id="sullivan" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="font-family:'Monotype Corsiva'">
          <a href="http://www.udr.com/washington-dc-apartments/alexandria/sullivan-place/photos-and-tours/#">Sullivan Place</a> - $1522/month - 
          <a href="#afford" data-toggle="modal">Can you Afford this?</a></h4>
      </div>
      <div class="modal-body">
        <div id="sullivanCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#sullivanCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#sullivanCarousel" data-slide-to="1"></li>
            <li data-target="#sullivanCarousel" data-slide-to="2"></li>
            <li data-target="#sullivanCarousel" data-slide-to="3"></li>
          </ol> 
          
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img src="sullivan/1_apartment.jpg"></div>
            <div class="item"><img src="sullivan/2_living_room.jpg"></div>
            <div class="item"><img src="sullivan/3_kitchen.jpg"></div>
            <div class="item"><img src="sullivan/4_bedroom.jpg"></div>
          </div>
          
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#sullivanCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="carousel-control right" href="#sullivanCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>