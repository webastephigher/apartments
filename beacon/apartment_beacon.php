
<!-- Button HTML (to Trigger Modal) -->
<a href="#beacon" data-toggle="modal">
  <img src="beacon/1_apartment.jpg" width="300px">
</a><br />
<a href="http://www.beaconofgroveton.com/beacon-of-groveton">Beacon of Groveton</a>

<!-- Modal HTML -->
<div id="beacon" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="font-family:'Monotype Corsiva'">
          <a href="http://www.beaconofgroveton.com/beacon-of-groveton">Beacon of Groveton</a> - $1365/month - 
          <a href="#afford" data-toggle="modal">Can you Afford this?</a></h4>
      </div>
      <div class="modal-body">
        <div id="beaconCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#beaconCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#beaconCarousel" data-slide-to="1"></li>
            <li data-target="#beaconCarousel" data-slide-to="2"></li>
            <li data-target="#beaconCarousel" data-slide-to="3"></li>
            <li data-target="#beaconCarousel" data-slide-to="4"></li>
            <li data-target="#beaconCarousel" data-slide-to="5"></li>
            <li data-target="#beaconCarousel" data-slide-to="6"></li>
            <li data-target="#beaconCarousel" data-slide-to="7"></li>
          </ol>
          
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img src="beacon/1_apartment.jpg"></div>
            <div class="item"><img src="beacon/2_living_room.jpg"></div>
            <div class="item"><img src="beacon/3_kitchen.jpg"></div>
            <div class="item"><img src="beacon/3_kitchenb.jpg"></div>
            <div class="item"><img src="beacon/4_bedroom.jpg"></div>
            <div class="item"><img src="beacon/5_bathroomba.jpg"></div>
            <div class="item"><img src="beacon/5_bathroomb.jpg"></div>
          </div>
          
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#beaconCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="carousel-control right" href="#beaconCarousel" data-slide="next">
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