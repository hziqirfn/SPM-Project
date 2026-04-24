<!-- BUTANG TUKAR SAIZ & WARNA -->
<button onClick="zoomIn()">+</button>
<button onClick="zoomOut()">-</button>
<button id= "color">WARNA</button>
<!-- WARNA -->
<script>
document.getElementById('color').onclick = changeColor;
<!-- tukar warna di sini -->
var currentColor = "red";
function changeColor() {
        if(currentColor == "red") {
            document.body.style.color = "blue";
            currentColor = "blue";
        } else {
          document.body.style.color = "red";
          currentColor = "red";
        }
    }
</script>
<!-- CODING SAIZ -->
<script>
var fontSize = 1;
function zoomIn() {
        fontSize += 0.1;
        document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
        fontSize -= 0.1;
        document.body.style.fontSize = fontSize + "em";
}
</script>