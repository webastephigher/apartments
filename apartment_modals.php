      <!-- Opening Modal -->
      
        <div id="moving" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <span class="modal-title" style="font-family:Verdana, Geneva, sans-seriftext-align:center;"><?php include 'countdown.php'; ?></span>
              </div>
              <div class="modal-body">
                <img src="movingpic.jpg" />
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    
      <!-- Calculating Modal -->
      
        <div id="afford" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="font-family:'Monotype Corsiva'">What Apartment Can You Afford?</h4>
              </div>
              <div class="modal-body">
                <?php include 'afford.html'; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    
      <!-- Calculating Modal -->
      
        <div id="affordMark" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="font-family:'Monotype Corsiva'">What Apartment Can You Afford?</h4>
              </div>
              <div class="modal-body">
                <?php include 'affordMark.html'; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
