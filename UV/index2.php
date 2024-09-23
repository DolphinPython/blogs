<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="row">
    <div class="col-md-2">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Section 1</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Section 2</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Section 3</button>
    </div>
    <div class="col-md-8">

        <!-- Tab Option 1 Start -->
        <div id="London" class="tabcontent">
            <div style="text-align: center;">
                    <h3>Section 1</h3>
                    <p>Coming Soon</p>
                </div>
        </div>
        <!-- Tab Option 1 End -->

        <!-- Tab Option 2 Start -->
        <div id="Paris" class="tabcontent">
            <div style="text-align: center;">
                <h3>Section 2</h3>
                <p>Coming Soon</p>
            </div>
        </div>
        <!-- Tab Option 2 End -->

        <!-- Tab Option 3 Start -->
        <div id="Tokyo" class="tabcontent">
            <div style="text-align: center;">
                <h3>Section 3</h3>
                <p>Coming Soon</p>
            </div>
        </div>
        <!-- Tab Option 3 End -->

    </div>
</div>










<script>
document.getElementById("defaultOpen").click();
function openCity(evt, cityName) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}
document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";
}
</script>

