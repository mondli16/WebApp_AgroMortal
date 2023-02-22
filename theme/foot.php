<!--This page contains the footer of the program-->
<p class="text-center" style="margin-top: 5%">
	Developed by <a style="color: white" href="https://chat.whatsapp.com/HkpLL6LupkqFfPYPJ50adZ">The Immortals</a>
</p>

<script>

var mySidebar = document.getElementById("mySidebar");

var overlayBg = document.getElementById("myOverlay");


function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>