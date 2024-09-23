.container-fluid {
  padding: 0px;
}
a:hover {
  color: #fff !important;
}



<style>
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

/* Modal Content */
.modal-content {
  /* background-color: #fefefe; */
  margin: auto;
  padding: 20px;
  /* border: 1px solid #888; */
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.notifymewatchbtn{
  margin-top:-4%;
}
.notifymebtn{
  color:#fff !important;
  background:#000;
  padding:10px;
  border-radius:5px;
}
</style>


<!-- Trigger/Open The Modal -->
<div class="row" id="myBtn">
  <img src="https://cdn.shopify.com/s/files/1/0810/9182/1861/files/Honor-200-Series_18th_July_12PM.jpg?v=1721215435" style="width:100%">
</div>
<div class="row">
  <div class="col-md-10"></div>
  <div class="col-md-2 notifymewatchbtn">
      <a href="https://explorehonor.com/pages/honor-200-pro-5g-series" class="notifymebtn">Notify Me</a>
  </div>
</div>
<!-- <button id="myBtn"></button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <p>
      <iframe width="100%" height="600" src="https://www.youtube.com/embed/feKuAfqD2Vo?si=pLTQVg5BzxKveVUa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
    </p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>